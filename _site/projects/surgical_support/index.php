<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Surgical Support | Stanford People, AI & Robots Group (PAIR)</title>

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
      <h1 class="page-header">Surgical Support</h1>
      <ol class="breadcrumb">
        <li><a href="../../index.php">Stanford PAIR Group</a></li>
        <li><a href="#">Projects</a></li>
        <li class="active">Surgical Support</li>
      </ol>
    </div>
  </div>

  <div class="row mar-bot-30">
    <div class="col-lg-12">
      <h2 class="section-header-first">Overview</h2>
    </div>
    <div class="col-lg-5 mar-bot-30">
      <center>
      <img src="overview.jpg" class="img-responsive" style="max-height: 400px;"></center>
    </div>
    <div class="col-lg-7">
      <p>
        Early excision of burns improves patient outcomes and reduces healthcare costs. Unfortunately, accuracy of burn depth assessment by experts is only 40-70%, with non-specialists being much less accurate. In this work, we aim to create an automated visual system that is able to predict both the burn severity and spatial outline (which allows for even more accurate treatment decisions). Given the low-cost, ubiquitous nature of smartphones, It's easy to imagine this system, and others similar to it, to be deployed and accessed by people all over the world.
      </p>
      <p><strong>
        With minimal training, we're able to achieve an impressive 85% pixel accuracy in discriminating between burnt skin and the rest of the image, with clear pathways towards performing even better. Currently, we're experimenting with extending this to predicting multiple burn depths as well as tweaking the dataset to allow for accurately calculating TBSA. Data collaborations are more than welcome.
      </strong></p>
    </div>
  </div>
</div>

<div class="container-fluid container-colored">
  <div class="container">
    <div class="row mar-bot-30">
      <div class="col-lg-12 mar-bot-20">
        <h2 class="page-header">BURNED Dataset</h2>
      </div>
      <div class="col-lg-5">
         We have collected a novel dataset named BURNED. It is the largest dataset to date of segmented and annotated burns. It consists of over 1,000 burn images, constituting more than 1,600 individual burns. Each image's burns were outlined by an experienced plastic surgeon. Each burn was then labeled by 3 randomly assigned plastic surgeons (out of 6). The available burn depth choices were: superficial, superficial partial thickness, deep partial thickness, full thickness, and undebrided.
      </div>
      <div class="col-lg-7">
        <img src="dataset.jpg" class="img-responsive" style="max-height: 400px;"></center>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="container">
    <div class="row mar-top-10 mar-bot-30">
      <div class="col-lg-12">
        <h2 class="section-header-dark">People</h2>
      </div>
      <div class="col-lg-12 mar-bot-20 text-center">
        <div class="author">
          <a href="https://www.linkedin.com/in/orion-despo-b745b393" target="_blank"><img class="img-thumbnail img-hover" src="../../img/people/125x125/orry.png"></a><br/>
          <a href="https://www.linkedin.com/in/orion-despo-b745b393" target="_blank">Orion Despo</a><br/>
          Stanford AI Lab
        </div>
        <div class="author">
          <a href="http://ai.stanford.edu/~syyeung/"><img class="img-thumbnail img-hover" src="../../img/people/125x125/serena.png"></a><br/>
          <a href="http://ai.stanford.edu/~syyeung/">Serena Yeung</a><br/>
          Stanford AI Lab
        </div>
        <div class="author">
          <a href="https://profiles.stanford.edu/174040"><img class="img-thumbnail img-hover" src="../../img/people/125x125/julia.png"></a><br/>
          <a href="https://profiles.stanford.edu/174040">Julia Lee</a><br/>
          CERC
        </div>
      </div>
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

<div class="container ">
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
