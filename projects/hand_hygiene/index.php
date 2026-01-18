<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Hand Hygiene | Stanford People, AI & Robots Group (PAIR)</title>

  <link href="../../favicon.ico" rel="icon" type="image/x-icon">
  <link href="../../css/bootstrap.min.css" rel="stylesheet">
  <link href="../../css/modern-business.css" rel="stylesheet">
  <link href="../../font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

  <!--[if lt IE 9]>
  <script src="../../js/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

  <link href="https://www.stanford.edu/su-identity/css/su-identity.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700" rel="stylesheet" type="text/css">
  <!--[if lt IE 9]>
  <script src="../../js/html5shiv.js"></script>
  <![endif]-->
  <!--[if IE 8]>
  <link rel="stylesheet" type="text/css" href="https://www.stanford.edu/su-identity/css/ie/ie8.css"/>
  <![endif]-->
  <!--[if IE 7]>
  <link rel="stylesheet" type="text/css" href="https://www.stanford.edu/su-identity/css/ie/ie7.css"/>
  <![endif]-->
  <script src='https://www.google.com/recaptcha/api.js'></script>

  <script type="text/javascript">
    var onReturnCallback = function (response) {
      $.post('secure.php', {gre: response, page: 'hand'}, function (data, status) {document.getElementById("recaptcha-protected").innerHTML = data;});
    };
  </script>

</head>

<body>
<div id="brandbar">
  <div class="container">
    <a href="https://www.tsinghua.edu.cn/">Tsinghua University</a>
  </div>
</div>



<!-- Navigation -->
<nav class="navbar navbar-default" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <span class="navbar-brand">Dong Lab</span>
      </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../../index.php">Home</a></li>
        <li><a href="../../people.php">People</a></li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Projects <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li class="dropdown-item"><a href="../../projects/hand_hygiene/">Hand Hygiene</a></li>
                <li class="dropdown-item"><a href="../../projects/senior_care/">Senior Well-Being</a></li>
                <li class="dropdown-item"><a href="../../projects/icu/">ICU Clinical Pathway Support</a></li>
                <li class="dropdown-item"><a href="../../projects/surgical_support">Surgical Support</a></li>
            </ul>
        </li>

        <li><a href="../../publications.php">Publications</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container -->
</nav>



<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Intelligent Hand Hygiene</h1>
      <ol class="breadcrumb">
        <li><a href="../../index.php">Stanford PAIR Group</a></li>
        <li><a href="#">Projects</a></li>
        <li class="active">Intelligent Hand Hygiene</li>
      </ol>
    </div>
  </div>

  <div class="row mar-bot-30">
    <div class="col-lg-12">
      <h2 class="section-header-first">Overview</h2>
    </div>
    <div class="col-lg-5">
      <!-- <img src="overview.jpg" class="img-responsive"> -->
      <video width="100%" autoplay loop>
          <source src="video/rgb.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
        </video>
    </div>
    <div class="col-lg-7">
      <p>
        <strong>
          We are designing an intelligent computer vision system for remote monitoring, assessment, and support
          of hand hygiene in hospital environments. By improving hand-wishing quality and compliance, we
          hope to reduce the rate of hospital-acquired infections due to contaminated equipment, bed linens, or
          improper patient handling.
        </strong>
      </p>
      <p>
        We are investigating the use of multiple sensors for the detection, measurement, and evaluation of hand hygiene
        in controlled laboratory environments, hospital corridors, and patient bedroom units. Our goal is to
        automatically detect missed hand hygiene events and intervene in real-time to prevent potentially contaminating
        events. This can include physical contact with patients, handling of biologically hazardous materials, or
        insufficient hand washing quality.
      </p>
      <p>
        Our sensors are deployed at two major healthcare partners:
        <a href="https://intermountainhealthcare.org/" target="_blank">Intermountain Healthcare</a> and
        <a href="http://www.stanfordchildrens.org/" target="_blank">Lucile Packard Children's Hospital (LPCH)</a> at Stanford.
        There is continuous active research exploring computer vision technologies and clinical outcome improvement. Our
        findings have been published in both medical and machine learning venues.
      </p>
      <p>
        <strong>
          If your hospital organization would like to join this groundbreaking collaboration, we welcome any questions and are happy to facilitate discussion. Contact information is below.
        </strong>
      </p>
    </div>
  </div>
</div>

<div class="container-fluid container-colored">
  <div class="container">
    <div class="row mar-bot-30">
      <div class="col-lg-12 mar-bot-20">
        <h2 class="page-header">Pilot Partnerships</h2>
      </div>
      <div class="col-lg-6">
        <a href="https://intermountainhealthcare.org/" target="_blank">
          <img class="img-responsive center-block" src="../../img/logos/intermountain.png" style="max-height: 100px;">
        </a><br/>
        <p>We have partnered with <a href="https://intermountainhealthcare.org/" target="_blank">Intermountain's</a>
          <a href="https://intermountainhealthcare.org/about/transforming-healthcare/innovation/transformation-lab/" target="_blank">Healthcare Transformation Lab</a>
          where we have deployed 3D depth sensors in several patient rooms. With the help of Intermountain, we are
          using live data streams to teach our computer vision algorithms to discern events of clinical relevance such as
          hand hygiene events and patient interaction.
        </p>
      </div>
      <div class="col-lg-6">
        <a href="http://www.stanfordchildrens.org">
          <img class="img-responsive center-block" src="../../img/logos/lpch2.png" style="max-height: 100px;">
        </a><br/>
        <p>In collaboration with <a href="http://www.stanfordchildrens.org/" target="_blank">Lucile Packard Children's Hospital</a>,
        we have installed state-of-the-art sensors in over 10 patient rooms and multiple corridors for hand hygiene activities.
        Our machine learning algorithms learn routine movement patterns by staff and individual hand hygiene behaviors by guests.</p>
      </div>
    </div>
  </div>
</div>


<div class="container-fluid">
  <div class="container">
    <div class="row mar-bot-30">
      <div class="col-lg-12">
        <h2 class="page-header">Our Computer Vision Approach</h2>
      </div>
      <div class="col-lg-4">
        <h3>Dispenser Usage Detection</h3>
        <video width="100%" autoplay loop>
          <source src="video/dispenser.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
        </video>
        With the help of artificial neural networks, our method uses deep learning to automatically detect usage of an alcohol-based sanitizer dispenser from challenging ceiling-mounted top views.
      </div>
      <div class="col-lg-4">
        <h3>Physical Space Analytics</h3>
        <video width="100%" autoplay loop>
          <source src="video/traffic.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
        </video>
        Intuitive, qualitative results analyze human movement patterns and conduct spatial analytics which convey our method's interpretability. Red regions denote high traffic areas while blue denotes low traffic regions.
      </div>
      <div class="col-lg-4">
        <h3>Privacy Safe Assessment</h3>
        <video width="100%" autoplay loop>
          <source src="video/hallway.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
        </video>
        To comply with privacy regulations, we use de-identified depth images instead of color photos to track and analyze hand hygiene compliance. Our method can track multiple clinicians throughout a hospital ward.
      </div>
    </div>
  </div>
</div>

<div class="container-fluid container-colored">
  <div class="container">
    <div class="row mar-top-10 mar-bot-30">
      <div class="col-lg-12">
        <h2 class="section-header-dark">People</h2>
      </div>
      <div class="col-lg-12 mar-bot-20 text-center">
        <div class="author">
          <a href="https://med.stanford.edu/profiles/terry-platchek" target="_blank"><img class="img-thumbnail img-hover" src="../../img/people/125x125/terry.png"></a><br/>
          <a href="https://med.stanford.edu/profiles/terry-platchek" target="_blank">Terrry Platchek</a><br/>
          Lucile Packard
        </div>
        <div class="author">
          <a href="http://www.stanfordchildrens.org/en/doctor/default?id=amit-t-singh" target="_blank"><img class="img-thumbnail img-hover" src="../../img/people/125x125/amit.png"></a><br/>
          <a href="http://www.stanfordchildrens.org/en/doctor/default?id=amit-t-singh" target="_blank">Amit Singh</a><br/>
          Lucile Packard
        </div>
        <div class="author">
          <a href="https://intermountainhealthcare.org/find-a-doctor/b/beninati-william/" target="_blank"><img class="img-thumbnail img-hover" src="../../img/people/125x125/bill.jpg"></a><br/>
          <a href="https://intermountainhealthcare.org/find-a-doctor/b/beninati-william/" target="_blank">William Beninati</a><br/>
          Intermountain
        </div>
        <div class="author">
          <a href="https://med.stanford.edu/profiles/jeffrey-jopling"><img class="img-thumbnail img-hover" src="../../img/people/125x125/jeff.png"></a><br/>
          <a href="https://med.stanford.edu/profiles/jeffrey-jopling">Jeff Jopling</a><br/>
          CERC
        </div>
        <div class="author">
          <a href="https://profiles.stanford.edu/norman-downing"><img class="img-thumbnail img-hover" src="../../img/people/125x125/lance.png"></a><br/>
          <a href="https://profiles.stanford.edu/norman-downing">Lance Downing</a><br/>
          CERC
        </div>
        <div class="author">
          <a href="https://profiles.stanford.edu/174040"><img class="img-thumbnail img-hover" src="../../img/people/125x125/julia.png"></a><br/>
          <a href="https://profiles.stanford.edu/174040">Julia Lee</a><br/>
          CERC
        </div>
      </div>
      <div class="col-lg-12 mar-bot-20 text-center">
        <div class="author">
          <a href="http://http://www.ivpe.com/" target="_blank"><img class="img-thumbnail img-hover" src="../../img/people/125x125/alex.png"></a><br/>
          <a href="http://http://www.ivpe.com/" target="_blank">Alexandre Alahi</a><br/>
          Visiosafe 
        </div>
        <div class="author">
          <a href="http://ai.stanford.edu/~syyeung/"><img class="img-thumbnail img-hover" src="../../img/people/125x125/serena.png"></a><br/>
          <a href="http://ai.stanford.edu/~syyeung/">Serena Yeung</a><br/>
          Stanford AI Lab
        </div>
        <div class="author">
          <a href="https://www.albert.cm"><img class="img-thumbnail img-hover" src="../../img/people/125x125/albert.png"></a><br/>
          <a href="https://www.albert.cm" target="_blank">Albert Haque</a><br/>
          Stanford AI Lab
        </div>
        <div class="author">
          <a href="https://www.linkedin.com/in/shellguo95/" target="_blank"><img class="img-thumbnail img-hover" src="../../img/people/125x125/michelle.png"></a><br/>
          <a href="https://www.linkedin.com/in/shellguo95/" target="_blank">Michelle Guo</a><br/>
          Stanford AI Lab
        </div>
        <div class="author">
          <a href="https://www.linkedin.com/in/jrbeal/" target="_blank"><img class="img-thumbnail img-hover" src="../../img/people/125x125/josh.png"></a><br/>
          <a href="https://www.linkedin.com/in/jrbeal/" target="_blank">Josh Beal</a><br/>
          Stanford AI Lab
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row mar-top-20">
    <div class="col-lg-12">
      <h2 class="section-header">Publications</h2>
    </div>
  </div>

  <div class="row mar-bot-30">
    <div class="col-md-3">
      <img class="img-responsive" src="../../img/pub_thumbs/haque2017mlhc.png">
    </div>
    <div class="col-md-9">
      <p class="pub-title">Towards Vision-Based Smart Hospitals: A System for Tracking and Monitoring Hand Hygiene Compliance</p>
      <p class="pub-authors">Albert Haque, Michelle Guo, Alexandre Alahi, Serena Yeung, Zelun Luo, Alisha Rege, Amit Singh, Jeffrey Jopling,<br> Lance Downing, William Beninati, Terry Platchek, Arnold Milstein, Li Fei-Fei</p>
      <p class="pub-info">Machine Learning in Healthcare Conference (MLHC), Proceedings of Machine Learning Research<br/>
        August 2017
      </p>
      <p class="pub-description">
        <a class="btn btn-danger btn-xs" href="https://arxiv.org/pdf/1708.00163.pdf" target="_blank" role="button">
          <i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF
        </a>
        <a class="btn btn-default btn-xs" href="https://arxiv.org/abs/1708.00163" target="_blank" role="button">
          <i class="fa fa-mouse-pointer" aria-hidden="true"></i> arXiv
        </a>
        <a class="btn btn-default btn-xs" href="http://mucmd.org" target="_blank" role="button">
          <i class="fa fa-users" aria-hidden="true"></i> Conference
        </a>
      </p>
    </div>
  </div>

  <hr>

  <div class="row mar-bot-30">
    <div class="col-md-3">
      <img class="img-responsive" src="../../img/pub_thumbs/yeung2016amia.png">
    </div>
    <div class="col-md-9">
      <p class="pub-title">Vision-Based Hand Hygiene Monitoring in Hospitals </p>
      <p class="pub-authors">Serena Yeung, Alexandre Alahi, Zelun Luo, Boya Peng, Albert Haque, Amit Singh, Terry Platchek,<br> Arnold Milstein, Li Fei-Fei</p>
      <p class="pub-info">American Medical Informatics Association (AMIA) Annual Symposium<br/>
        November 2016
      </p>
      <p class="pub-description">
        <a class="btn btn-default btn-xs" href="https://www.amia.org/amia2016" target="_blank" role="button">
          <i class="fa fa-users" aria-hidden="true"></i> Conference
        </a>
      </p>
    </div>
  </div>

  <hr>

  <div class="row mar-bot-30">
    <div class="col-md-3">
      <img class="img-responsive" src="../../img/pub_thumbs/haque2016viewpoint.png">
    </div>
    <div class="col-md-9">
      <p class="pub-title">Towards Viewpoint Invariant 3D Human Pose Estimation</p>
      <p class="pub-authors">Albert Haque, Boya Peng, Zelun Luo, Alexandre Alahi, Serena Yeung, Li Fei-Fei</p>
      <p class="pub-info">European Conference on Computer Vision (ECCV)<br/>
        October 2016
      </p>
      <p class="pub-description">
        <a class="btn btn-danger btn-xs" href="http://vision.stanford.edu/pdf/haque2016eccv.pdf" target="_blank" role="button">
          <i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF
        </a>
        <a class="btn btn-default btn-xs" href="https://www.albert.cm/projects/viewpoint_3d_pose/" target="_blank" role="button">
          <i class="fa fa-mouse-pointer" aria-hidden="true"></i> Website
        </a>
        <a class="btn btn-default btn-xs" href="http://arxiv.org/abs/1603.07076" target="_blank" role="button">
          <i class="fa fa-mouse-pointer" aria-hidden="true"></i> arXiv
        </a>
        <a class="btn btn-default btn-xs" href="http://www.eccv2016.org/" target="_blank" role="button">
          <i class="fa fa-users" aria-hidden="true"></i> Conference
        </a>
      </p>
    </div>
  </div>

  <hr>

  <div class="row mar-bot-30">
    <div class="col-md-3">
      <img class="img-responsive" src="../../img/pub_thumbs/haque2016recurrent.png">
    </div>
    <div class="col-md-9">
      <p class="pub-title">Recurrent Attention Models for Person Identification</p>
      <p class="pub-authors">Albert Haque, Alexandre Alahi, Li Fei-Fei</p>
      <p class="pub-info">
        Conference on Computer Vision and Pattern Recognition (CVPR)<br/>
        June 2016
      </p>
      <p class="pub-description">
        <a class="btn btn-danger btn-xs" href="http://www.cv-foundation.org/openaccess/content_cvpr_2016/papers/Haque_Recurrent_Attention_Models_CVPR_2016_paper.pdf" target="_blank" role="button">
          <i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF
        </a>
        <a class="btn btn-default btn-xs" href="https://www.albert.cm/projects/ram_person_id/" target="_blank" role="button">
          <i class="fa fa-mouse-pointer" aria-hidden="true"></i> Website
        </a>
        <a class="btn btn-default btn-xs" href="http://cvpr2016.thecvf.com/" target="_blank" role="button">
          <i class="fa fa-users" aria-hidden="true"></i> Conference
        </a>
      </p>
    </div>
  </div>

  <hr>

  <div class="row mar-bot-30">
    <div class="col-md-3">
      <img class="img-responsive" src="../../img/project_thumbs/750x400/yeung2015nips.png">
    </div>
    <div class="col-md-9">
      <p class="pub-title">
        Vision-Based Hand Hygiene Monitoring in Hospitals
      </p>
      <p class="pub-authors">
        Serena Yeung, Alexandre Alahi, Zelun Luo, Boya Peng, Albert Haque, Amit Singh, Terry Platchek, <br> Arnold Milstein, Li Fei-Fei
      </p>
      <p class="pub-info">
        Workshop on Machine Learning in Healthcare, Neural Information Processing Systems (NIPS)<br/>
        December 2015
      </p>
      <p class="pub-description">
        <a class="btn btn-danger btn-xs" href="http://ai.stanford.edu/~syyeung/resources/vision_hand_hh_nipsmlhc.pdf" role="button">
          <i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF
        </a>
        <a class="btn btn-default btn-xs" href="https://sites.google.com/site/nipsmlhc15/" target="_blank"
           role="button">
          <i class="fa fa-users" aria-hidden="true"></i> Conference
        </a>
      </p>
    </div>
  </div>

</div>



<div class="container">
  <div class="row mar-top-10">
    <div class="col-lg-12">
      <h2 class="section-header-dark">Contact</h2>
    </div>
    <div class="col-lg-12 mar-bot-20 text-center">
      <div id="recaptcha-protected" align="center">
        <form method="post">
          <div class="g-recaptcha" data-sitekey="6Ldggx8UAAAAAFH7cCmM900MhjsY4wcS4xCudEkH" data-callback="onReturnCallback"></div>
        </form>
        Click the box to show contact information
      </div>
    </div>
  </div>
</div>

<hr>

<div class="container">
  <div class="row mar-top-30">
    <p class="text-center">

    </p>
  </div>
</div>

<!-- Footer -->
<footer>
  <div class="row">
    <div class="col-lg-12">
      <p></p>
    </div>
  </div>
</footer>


<!-- jQuery -->
<script src="../../js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../../js/bootstrap.min.js"></script>

<!-- Global footer snippet start -->
<div id="global-footer">
  <div class="container">
    <div class="row">
      <div id="bottom-logo" class="span2">
        <a href="http://www.stanford.edu">
          <img src="https://www.stanford.edu/su-identity/images/footer-stanford-logo@2x.png" alt="Stanford University"
               width="105" height="49"/>
        </a>
      </div>
      <!-- #bottom-logo end -->
      <div id="bottom-text" class="span10">
        <ul>
          <li class="home"><a href="http://www.stanford.edu">SU Home</a></li>
          <li class="maps alt"><a href="http://visit.stanford.edu/plan/maps.html">Maps &amp; Directions</a></li>
          <li class="search-stanford"><a href="http://www.stanford.edu/search/">Search Stanford</a></li>
          <li class="terms alt"><a href="http://www.stanford.edu/site/terms.html">Terms of Use</a></li>
          <li class="emergency-info"><a href="http://emergency.stanford.edu">Emergency Info</a></li>
        </ul>
      </div> <!-- .bottom-text end -->
      <div class="clear"></div>
      <p class="copyright vcard">&copy; <span class="fn org">Stanford University</span>, <span class="adr"> <span
              class="locality">Stanford</span>, <span class="region">California</span> <span
              class="postal-code">94305</span></span>.&nbsp;&nbsp;
        <span id="copyright-complaint"><a href="https://uit.stanford.edu/security/copyright-infringement" class="copyright-complaint">Copyright Complaints.</a></span>&nbsp;&nbsp;
        <span id="copyright-complaint">This page was last updated on <?php echo date("F d, Y", filemtime("index.php")); ?>.</span>
      </p>
    </div> <!-- .row end -->
  </div> <!-- .container end -->
</div> <!-- global-footer end -->
<!-- Global footer snippet end -->
</body>

</html>
