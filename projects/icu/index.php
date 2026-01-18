<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>ICU | Stanford People, AI & Robots Group (PAIR)</title>

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
      <h1 class="page-header">Intensive Care Unit Clinical Pathway Support</h1>
      <ol class="breadcrumb">
        <li><a href="../../index.php">Stanford PAIR Group</a></li>
        <li><a href="../index.php">Projects</a></li>
        <li class="active">Intensive Care Unit Clinical Pathway Support</li>
      </ol>
    </div>
  </div>

  <div class="row mar-bot-30">
    <div class="col-lg-12">
      <h2 class="section-header-first">Overview</h2>
    </div>
    <div class="col-lg-3">
      <center>
      <img src="overview.jpg" class="img-responsive" style="max-height: 400px;"></center>
    </div>
    <div class="col-lg-9">
      <p>
        <strong>
          Activity detection in Intensive Care Units (ICUs) is currently performed manually by trained personnel, primarily nurses, who log the activities as they occur. This process is both expensive and time consuming. Our goal is to design a system which automatically gives an annotated list of all activities that occurred in the ICU over the day. Overall, this system will reduce the monitoring workload of trained personnel, and lead to a quicker and safer recovery of the patient, while providing benefits such as activity-based costing.
        </strong>
      </p>
      <p>
        Activity recognition in hospitals is a task that has not received much attention in the past. Some of the main reasons for this gap in research are the lack of sensors installed in hospitals and the difficulty in obtaining access to the relevant data due to its sensitive nature. Thanks to our partnering hospital, we have access to depth sensors installed in eight intensive care unit (ICU) rooms. 
      </p>
      <p>
        We are developing a computer vision system capable of automatically detecting the following activities:<br/>
        <ul>
        <li><strong>Stage 1:</strong> patient getting out of bed, patient getting out of bed and walking, and a nurse performing oral care.</li>
        <li><strong>Stage 2:</strong> clinician performing ultrasound, x-ray, turning patient over in bed, and patient getting in/out of bed.</li>
        <li><strong>Stage 3:</strong> various patient mobility activities such as patient getting in/out of a bed/chair with or without assistance.</li>
        </ul>
      </p>
      <p>
        Once our system can successfully log the basic activities above, we plan to expand it to detect anomalies such as emergency situations. To do so, we could potentially use a dataset of simulations of different emergencies (e.g., patient falls on the floor).
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
          where we have deployed 3D depth sensors in eight ICU rooms. With the help of Intermountain, we are
          using live data streams to teach our computer vision algorithms to discern events of clinical relevance. Using multiple sensors per room, our artificial intelligence system is capable of full-room activity understanding.
        </p>
      </div>
        <div class="col-lg-6">
        <img class="img-responsive center-block" src="lds.jpg" style="max-height: 400px;">
    </div>
  </div>

  <div class="container">
    <div class="row mar-top-10 mar-bot-30">
      <div class="col-lg-12">
        <h2 class="section-header-dark">People</h2>
      </div>
      <div class="col-lg-12 mar-bot-20 text-center">
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
        <div class="author">
          <a href="http://ai.stanford.edu/~syyeung/"><img class="img-thumbnail img-hover" src="../../img/people/125x125/serena.png"></a><br/>
          <a href="http://ai.stanford.edu/~syyeung/">Serena Yeung</a><br/>
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
      <img class="img-responsive" src="../../img/pub_thumbs/nips17_ml4h_icu.jpg">
    </div>
    <div class="col-md-9">
      <p class="pub-title">Vision-Based Prediction of ICU Mobility Care Activities using Recurrent Neural Networks</p>
      <p class="pub-authors">Gabriel M. Bianconi, Rishab Mehra, Serena Yeung, Francesca Salipur, Jeffrey Jopling, Lance Downing, Albert Haque, Alexandre Alahi, Brandi Campbell, Kayla Deru, William Beninati, Arnold Milstein, Li Fei-Fei</p>
      <p class="pub-info">Machine Learning for Health Workshop, Neural Information Processing Systems (NIPS)<br/>
        December 2017
      </p>
      <p class="pub-description">
        <a class="btn btn-default btn-xs" href="https://ml4health.github.io/2017/pages/accepted-posters.html" target="_blank" role="button">
          <i class="fa fa-users" aria-hidden="true"></i> Workshop
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
</div>

<footer>
  <div class="row">
    <div class="col-lg-12">
      <p></p>
    </div>
  </div>
</footer>

<script src="../../js/jquery.js"></script>
<script src="../../js/bootstrap.min.js"></script>

<div id="global-footer">
  <div class="container">
    <div class="row">
      <div id="bottom-logo" class="span2">
        <a href="http://www.stanford.edu">
          <img src="https://www.stanford.edu/su-identity/images/footer-stanford-logo@2x.png" alt="Stanford University"
               width="105" height="49"/>
        </a>
      </div>
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
