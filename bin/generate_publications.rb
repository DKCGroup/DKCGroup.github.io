require 'yaml'
require 'date'
require 'erb'
require 'uri'

module PublicationList
  module_function

  def encode_segment(seg)
    URI::DEFAULT_PARSER.escape(seg.to_s, /[^A-Za-z0-9\-_.~]/)
  end

  def build_url(*segments)
    '/' + segments.map { |seg| encode_segment(seg) }.join('/')
  end

  def front_matter(path)
    content = File.read(path)
    if content =~ /\A---\s*\n(.*?)\n---\s*(?:\n|\z)/m
      YAML.safe_load(Regexp.last_match(1), permitted_classes: [Date, Time], aliases: true) || {}
    else
      {}
    end
  end

  def truthy?(value)
    value == true || value.to_s.strip.casecmp('true').zero?
  end

  def parse_date(value)
    return nil if value.nil?

    case value
    when Date then value
    when Time then value.to_date
    else
      begin
        Date.parse(value.to_s)
      rescue StandardError
        nil
      end
    end
  end

  def format_publication(value)
    text = value.to_s.strip
    return '' if text.empty?

    escaped = ERB::Util.html_escape(text)
    escaped.gsub(/\*(.*?)\*/, '<em>\\1</em>')
  end

  def normalize_url(value)
    url = value.to_s.strip
    return nil if url.empty?

    url
  end

  def format_author(author)
    name = author.to_s.strip
    return '' if name.empty?

    normalized = name.gsub(/\s*\*+$/, '').strip
    if normalized.casecmp('admin').zero?
      name = 'Kaichen Dong'
      normalized = name
    end

    highlight = normalized == 'Kaichen Dong' || normalized == 'K. Dong'
    escaped = ERB::Util.html_escape(name)
    highlight ? "<strong>#{escaped}</strong>" : escaped
  end

  def format_authors(authors)
    authors.map { |author| format_author(author) }.reject(&:empty?).join(', ')
  end

  def publication_type_class(types)
    type = Array(types).map(&:to_s).map(&:strip).reject(&:empty?).first
    return nil if type.nil? || type.empty?

    "pubtype-#{type}"
  end

  def submitted_title?(title)
    title.to_s.match?(/submitted/i)
  end

  def sort_date_value(value)
    case value
    when Date then value
    when Time then value.to_date
    else
      begin
        Date.parse(value.to_s)
      rescue StandardError
        Date.new(0, 1, 1)
      end
    end
  end

  def featured_image_url(root, dir, full_dir)
    %w[.jpg .jpeg .png .webp].each do |ext|
      filename = "featured#{ext}"
      return build_url(root, dir, filename) if File.exist?(File.join(full_dir, filename))
    end

    nil
  end

  def attachments_for(entry)
    links = []

    if entry[:pdf_url]
      links << { label: 'PDF', url: entry[:pdf_url], icon: 'fa-book' }
    end

    %w[project code dataset poster slides source video].each do |key|
      url = entry["url_#{key}".to_sym]
      next unless url

      label = key.capitalize
      label = 'Project' if key == 'project'
      label = 'Code' if key == 'code'
      label = 'Dataset' if key == 'dataset'
      label = 'Poster' if key == 'poster'
      label = 'Slides' if key == 'slides'
      label = 'Source' if key == 'source'
      label = 'Video' if key == 'video'

      icon = case key
             when 'project' then 'fa-link'
             when 'code' then 'fa-code'
             when 'dataset' then 'fa-database'
             when 'poster' then 'fa-image'
             when 'slides' then 'fa-desktop'
             when 'source' then 'fa-code-branch'
             when 'video' then 'fa-video'
             else 'fa-link'
             end

      links << { label: label, url: url, icon: icon }
    end

    if entry[:bib_url]
      links << { label: 'Cite', url: entry[:bib_url], icon: 'fa-quote-right' }
    end

    links
  end

  def build_entries(root)
    entries = []

    Dir.children(root).sort.each do |dir|
      full_dir = File.join(root, dir)
      next unless File.directory?(full_dir)

      md_path = File.join(full_dir, 'index.md')
      next unless File.exist?(md_path)

      data = front_matter(md_path)

      title = data['title'].to_s.strip
      authors = [data['authors']].flatten.compact.map(&:to_s)
      publication = format_publication(data['publication'])
      date_value = parse_date(data['date'])
      year = date_value ? date_value.year : nil
      pub_type = publication_type_class(data['publication_types'])
      image_url = featured_image_url(root, dir, full_dir)

      hide_pdf = truthy?(data['hide_pdf'])
      hide_cite = truthy?(data['hide_cite'])

      url_pdf = normalize_url(data['url_pdf'])
      pdf_basename = Dir.children(full_dir).find { |name| name.downcase.end_with?('.pdf') }
      pdf_file = pdf_basename ? File.join(full_dir, pdf_basename) : nil
      pdf_url = if hide_pdf
                  nil
                elsif pdf_file
                  build_url(root, dir, File.basename(pdf_file))
                elsif url_pdf && url_pdf.start_with?('http://', 'https://')
                  url_pdf
                elsif url_pdf
                  normalized_path = url_pdf.tr('\\', '/').sub(%r{\A/+}, '')
                  local_candidate = File.join(full_dir, normalized_path)
                  if File.exist?(local_candidate)
                    build_url(root, dir, normalized_path)
                  else
                    '/' + normalized_path
                  end
                end

      bib_file = File.join(full_dir, 'cite.bib')
      bib_url = if hide_cite
                  nil
                elsif File.exist?(bib_file)
                  build_url(root, dir, 'cite.bib')
                end

      entry = {
        title: title,
        authors: authors,
        publication: publication,
        pdf_url: pdf_url,
        bib_url: bib_url,
        year: year,
        pub_type: pub_type,
        image_url: image_url,
        hide_pdf: hide_pdf,
        hide_cite: hide_cite
      }

      %w[project code dataset poster slides source video].each do |key|
        entry["url_#{key}".to_sym] = normalize_url(data["url_#{key}"])
      end

      entry[:sort_date] = date_value || data['date']
      entry[:sort_date_value] = sort_date_value(entry[:sort_date])
      entry[:submitted] = submitted_title?(title)
      entries << entry
    end

    entries.sort! do |a, b|
      a_group = a[:submitted] ? 0 : 1
      b_group = b[:submitted] ? 0 : 1
      group_compare = a_group <=> b_group
      next group_compare unless group_compare.zero?

      b[:sort_date_value] <=> a[:sort_date_value]
    end
    entries
  end

  def render_list(entries)
    lines = []

    lines << '<div class="pub-list">'
    entries.each do |entry|
      title = ERB::Util.html_escape(entry[:title])
      authors = format_authors(entry[:authors])

      classes = ['pub-item', 'col-lg-12', 'isotope-item']
      classes << entry[:pub_type] if entry[:pub_type]
      classes << "year-#{entry[:year]}" if entry[:year]

      lines << "  <div class=\"#{classes.join(' ')}\">"
      lines << '    <div class="pub-media">'
      lines << '      <div class="pub-body">'
      lines << "        <div class=\"pub-title\"><strong>#{title}</strong></div>" unless title.empty?

      if entry[:publication] && !entry[:publication].empty?
        lines << "        <div class=\"pub-publication\">#{entry[:publication]}</div>"
      end

      unless authors.empty?
        lines << "        <div class=\"pub-authors\">#{authors}</div>"
      end

      links = attachments_for(entry)
      unless links.empty?
        lines << '        <div class="btn-links">'
        links.each do |link|
          url = ERB::Util.html_escape(link[:url])
          label = ERB::Util.html_escape(link[:label])
          icon = ERB::Util.html_escape(link[:icon])
          lines << "          <a class=\"btn btn-default btn-xs\" href=\"#{url}\" target=\"_blank\" rel=\"noopener\" role=\"button\"><i class=\"fa #{icon}\" aria-hidden=\"true\"></i> #{label}</a>"
        end
        lines << '        </div>'
      end

      lines << '      </div>'

      if entry[:image_url]
        img_url = ERB::Util.html_escape(entry[:image_url])
        lines << '      <div class="pub-image">'
        lines << "        <img src=\"#{img_url}\" alt=\"#{title}\" loading=\"lazy\">"
        lines << '      </div>'
      end

      lines << '    </div>'
      lines << '  </div>'
    end
    lines << '</div>'

    lines.join("\n")
  end

  def write_index_md(list_html, path)
    content = <<~MD
    ---
    layout: base
    title: Publications | Dong Lab
    about: "Dong Lab Publications"
    permalink: /publications
    ---
    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">Publications</h1>
          <ol class="breadcrumb">
            <li><a href="/">Dong Lab</a></li>
            <li class="active">Publications</li>
          </ol>
        </div>
      </div>

      <!-- Publications List Start -->
    #{list_html}
      <!-- Publications List End -->

      <hr>

      <!-- Footer -->
      <footer>
        <div class="row">
          <div class="col-lg-12">
          </div>
        </div>
      </footer>

    </div>
    <!-- /.container -->
    MD

    File.write(path, content, encoding: 'UTF-8')
  end

  def update_site_html(list_html, path)
    return unless File.exist?(path)

    html = File.read(path)
    replacement = "  <!-- Publications List Start -->\n#{list_html}\n  <!-- Publications List End -->"
    html = html.sub(/\s*<!-- Publications List Start -->.*?<!-- Publications List End -->/m, replacement)
    File.write(path, html, encoding: 'UTF-8')
  end
end

entries = PublicationList.build_entries('new_publication')
list_html = PublicationList.render_list(entries)
PublicationList.write_index_md(list_html, File.join('_pages', 'publications.md'))
PublicationList.write_index_md(list_html, File.join('publications', 'index.md'))
PublicationList.update_site_html(list_html, File.join('_site', 'publications.html'))
PublicationList.update_site_html(list_html, File.join('_site', 'publications', 'index.html'))
