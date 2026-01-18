---
layout: base
title: People | Dong Lab
about: "PAIR People"
permalink: /people
---
<!-- Page Content -->
<div class="container-fluid people-page">

  <div class="container">
      <!-- Page Heading/Breadcrumbs -->
      <div class="row">
          <div class="col-lg-12">
              <h1 class="page-header">People
                  <small></small>
              </h1>
          </div>
      </div>

      <div class="row">
          <div class="col-lg-12">
              <span class="brand-sitename-title">Current Members</span>
              <h2 class=""><small>Faculty Members</small></h2>
          </div>

          {% assign faculty = site.data.people.faculty %}
          {% for person_kv in faculty %}
              {% assign person = person_kv[1] %}
              {% assign mod = forloop.index0 | modulo: 4 %}

              {% if mod == 0 %}
                <div class="col-lg-12 mar-top-30">
              {% endif %}

              <div class="col-md-3 person-card">
                  <a href="{{ person.link }}" target="_blank">
                      <img class="img-responsive img-hover img-portfolio" src="{{ site.url }}/img/people/{{ person.img }}" alt="">
                  </a>
                  <h3><a href="{{ person.link }}" target="_blank">{{ person.name }}</a></h3>
                  <p class="person-title">{{ person.title }}</p>
                  <p class="person-email">{{ person.email }}</p>
              </div>

              {% if mod == 3 or forloop.last %}
                </div>
              {% endif %}
          {% endfor %}
      </div>

      <div class="row">
          <div class="col-lg-12">
              <h2 class=""><small>Administrative Assistant</small></h2>
          </div>

          {% assign admins = site.data.people.administrative_assistants %}
          {% for person_kv in admins %}
              {% assign person = person_kv[1] %}
              {% assign mod = forloop.index0 | modulo: 4 %}

              {% if mod == 0 %}
                <div class="col-lg-12 mar-top-30">
              {% endif %}

              <div class="col-md-3 person-card">
                  <a href="{{ person.link }}" target="_blank">
                      <img class="img-responsive img-hover img-portfolio" src="{{ site.url }}/img/people/{{ person.img }}" alt="">
                  </a>
                  <h3><a href="{{ person.link }}" target="_blank">{{ person.name }}</a></h3>
                  <p class="person-title">{{ person.title }}</p>
                  <p class="person-email">{{ person.email }}</p>
              </div>

              {% if mod == 3 or forloop.last %}
                </div>
              {% endif %}
          {% endfor %}
      </div>

      <div class="row">
          <div class="col-lg-12">
              <h2 class=""><small>Students</small></h2>
          </div>

          {% assign students = site.data.people.students %}
          {% for person_kv in students %}
              {% assign person = person_kv[1] %}
              {% assign mod = forloop.index0 | modulo: 4 %}

              {% if mod == 0 %}
                <div class="col-lg-12 mar-top-30">
              {% endif %}

              <div class="col-md-3 person-card">
                  <a href="{{ person.link }}" target="_blank">
                      <img class="img-responsive img-hover img-portfolio" src="{{ site.url }}/img/people/{{ person.img }}" alt="">
                  </a>
                  <h3><a href="{{ person.link }}" target="_blank">{{ person.name }}</a></h3>
                  <p class="person-title">{{ person.title }}</p>
                  <p class="person-email">{{ person.email }}</p>
              </div>

              {% if mod == 3 or forloop.last %}
                </div>
              {% endif %}
          {% endfor %}
      </div>

      <div class="row">
          <div class="col-lg-12">
              <h2 class=""><small>Visiting Students</small></h2>
          </div>

          {% assign visiting_students = site.data.people.visiting_students %}
          {% for person_kv in visiting_students %}
              {% assign person = person_kv[1] %}
              {% assign mod = forloop.index0 | modulo: 4 %}

              {% if mod == 0 %}
                <div class="col-lg-12 mar-top-30">
              {% endif %}

              <div class="col-md-3 person-card">
                  <a href="{{ person.link }}" target="_blank">
                      <img class="img-responsive img-hover img-portfolio" src="{{ site.url }}/img/people/{{ person.img }}" alt="">
                  </a>
                  <h3><a href="{{ person.link }}" target="_blank">{{ person.name }}</a></h3>
                  <p class="person-title">{{ person.title }}</p>
                  <p class="person-email">{{ person.email }}</p>
              </div>

              {% if mod == 3 or forloop.last %}
                </div>
              {% endif %}
          {% endfor %}
      </div>

      <br/><br/>
  </div>
</div>


<div class="container-fluid container-colored">
    <br/><br/>
    <div class="container">
      <div class="row" id="alumni">
          <div class="col-lg-12">
              <span class="brand-sitename-title">Alumni</span>
              <div class="page-header-people-dark"></div>

              {% assign alumni = site.data.people.alumni %}
              {% for person_kv in alumni %}
                  {% assign person = person_kv[1] %}
                  {% assign mod = forloop.index0 | modulo: 4 %}

                  {% if mod == 0 %}
                    <div class="col-lg-12 mar-bot-30">
                  {% endif %}

                  <div class="col-md-3">
                      <h3><a href="{{ person.link }}" target="_blank">{{ person.name }}</a></h3>
                      <p class="person-title">{{ person.title }}</p>
                  </div>

                  {% if mod == 3 or forloop.last %}
                    </div>
                  {% endif %}

              {% endfor %}

          </div>
      </div>
    </div>
    <br/>
</div>
