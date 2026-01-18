<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Senior Care | Stanford People, AI & Robots Group (PAIR)</title>

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
      $.post('secure.php', {gre: response, page: 'seniorcare'}, function (data, status) {document.getElementById("recaptcha-protected").innerHTML = data;});
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
      <h1 class="page-header">Intelligent Senior Well-Being</h1>
      <ol class="breadcrumb">
        <li><a href="../../index.php">Stanford PAIR Group</a></li>
        <li><a href="../index.php">Projects</a></li>
        <li class="active">Intelligent Senior Well-Being</li>
      </ol>
    </div>
  </div>

  <div class="row mar-bot-30">
    <div class="col-lg-12">
      <h2 class="section-header-first">Overview</h2>
    </div>
    <div class="col-lg-5">
      <img src="overview.png" class="img-responsive">
    </div>
    <div class="col-lg-7">
      <p><strong>We are designing an integrated solution for the remote monitoring, assessment
        and support of seniors living independently at home. We aim at improving the speed and reliability of
        health risk detection and support timely, personalized intervention.</strong></p>
      <p>We are investigating the use of multiple sensors for the detection and recording of daily
        activities, lifestyle patterns, emotions, and vital signs, as well as the development of
        intelligent mechanisms for translating multi-sensor inputs into accurate situational assessment and rapid
        response. Our goal is to allow seniors to extend their capacity to live at home, improve their quality of life
        and avoid unnecessary and costly relocation into institutional care. </p>
      <p>We are monitoring 17 activities of clinical relevance: eating, sleeping, falls, slowed movements, unstable
        transfers, front door loitering, day and night reversals, fluid intake, chair and bed immobility, urinary
        frequency, restlessness, fever, alcohol consumption, pill consumption, high salt diets, substance abuse, and
        food consumption.</p>
        <a href="http://stanfordhealth.weebly.com/" class="btn btn-default">
          Extended Summary
          <i class="fa fa-external-link" aria-hidden="true"></i>
        </a></p>
    </div>
  </div>
</div>

<div class="container-fluid container-colored">
  <div class="container">
    <div class="row mar-bot-20">
      <div class="col-lg-12">
        <h2 class="section-header-dark">Activities</h2>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="panel panel-default text-center">
          <img src="350x200/fall_thermal.png" width="100%">
          <div class="panel-body">
            <h3>Detecting Falls</h3>
            <p>Automatic fall detection at night with thermal sensors and imaging.
              <br/><br/>
              <a href="http://stanfordhealth.weebly.com/falls.html" class="btn btn-default">
                Learn More
                <i class="fa fa-external-link" aria-hidden="true"></i>
              </a></p>

          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="panel panel-default text-center">
          <img src="350x200/sleep.png" width="100%">
          <div class="panel-body">
            <h3>Sleep Monitoring</h3>
            <p>Sleep posture reconstruction and respiratory rate analysis.
              <br/><br/>
              <a href="http://stanfordhealth.weebly.com/sleep.html" class="btn btn-default">
                Learn More
                <i class="fa fa-external-link" aria-hidden="true"></i>
              </a></p>

          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="panel panel-default text-center">
          <img src="350x200/age.png" width="100%">
          <div class="panel-body">
            <h3>Age Prediction</h3>
            <p>Detecting faces and predicting age helps identify patients.
              <br/><br/>
              <a href="http://stanfordhealth.weebly.com/age.html" class="btn btn-default">
                Learn More
                <i class="fa fa-external-link" aria-hidden="true"></i>
              </a></p>

          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="panel panel-default text-center">
          <img src="350x200/emotion.png" width="100%">
          <div class="panel-body">
            <h3>Human Emotions</h3>
            <p>Automatic fall detection at night with thermal sensors and imaging.
              <br/><br/>
              <a href="http://stanfordhealth.weebly.com/falls.html" class="btn btn-default">
                Learn More
                <i class="fa fa-external-link" aria-hidden="true"></i>
              </a></p>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row mar-bot-30">
    <div class="col-lg-12 mar-bot-20">
      <h2 class="page-header">Pilot Partnerships</h2>
    </div>
    <div class="col-lg-6">
      <a href="https://www.onlok.org/">
        <img class="img-responsive center-block" src="../../img/logos/on_lok.png" style="max-height: 100px;">
      </a><br/>
      <p>We have a pilot at <a href="https://www.onlok.org/">Onlok</a> home-care facilities. We will install non
        intrusive sensors to detect
        the target activities automatically of volunteers and design algorithms to automatically analyze long term low
        level
        sensorial information.</p>
    </div>
  </div>
</div>

<div class="container-fluid container-colored">
  <div class="container">
    <div class="row mar-top-10">
      <div class="col-lg-12">
        <h2 class="section-header-dark">People</h2>
      </div>
      <div class="col-lg-12 mar-bot-20 text-center">
        <div class="author">
          <a href="http://activityrecognition.com/"><img class="img-thumbnail img-hover" src="../../img/people/125x125/guido.png"></a><br/>
          <a href="http://activityrecognition.com/">Guido Pusiol</a><br/>
          Activity Recognition Inc. 
        </div>
        <div class="author">
          <a href="https://profiles.stanford.edu/norman-downing"><img class="img-thumbnail img-hover" src="../../img/people/125x125/lance.png"></a><br/>
          <a href="https://profiles.stanford.edu/norman-downing">Lance Downing</a><br/>
          CERC  
        </div>
        <div class="author">
          <a href="http://ww12.zelunluo.com/"><img class="img-thumbnail img-hover" src="../../img/people/125x125/alan.png"></a><br/>
          <a href="http://ww12.zelunluo.com/">Alan Luo</a><br/>
          Stanford AI Lab  
        </div>
        <div class="author">
          <a href="https://www.linkedin.com/in/juntinghsieh/"><img class="img-thumbnail img-hover" src="../../img/people/125x125/tim.png"></a><br/>
          <a href="https://www.linkedin.com/in/juntinghsieh/">Tim Hsieh</a><br/>
          Stanford AI Lab  
        </div>
        <div class="author">
          <a href="https://www.onlok.org/management-team/"><img class="img-thumbnail img-hover" src="../../img/people/125x125/jay.png"></a><br/>
          <a href="https://www.onlok.org/management-team/">Jay Luxenberg</a><br/>
          On Lok, Inc.
        </div>
        <div class="author">
          <a href="https://www.onlok.org/management-team/"><img class="img-thumbnail img-hover" src="../../img/people/125x125/grace.png"></a><br/>
          <a href="https://www.onlok.org/management-team/">Grace Li</a><br/>
          On Lok, Inc.
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
      <img class="img-responsive" src="../../img/pub_thumbs/pusiol2016miccai.png">
    </div>
    <div class="col-md-9">
      <p class="pub-title">Classification of Developmental Disorders Using Eye-Movements</p>
      <p class="pub-authors">Guido Pusiol, Andre Esteva, Scott S. Hall, Michael Frank, Arnold Milstein, Li Fei-Fei</p>
      <p class="pub-info">
        International Conference on Medical Image Computing and
          Computer-Assisted Intervention (MICCAI)<br/>
        October 2016
      </p>
      <p class="pub-description">
        <a class="btn btn-danger btn-xs" href="http://vision.stanford.edu/pdf/pusiol2016miccai.pdf" target="_blank" role="button">
          <i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF
        </a>
        <a class="btn btn-default btn-xs" href="http://www.miccai2016.org/en/" target="_blank" role="button">
          <i class="fa fa-users" aria-hidden="true"></i> Conference
        </a>
      </p>
    </div>
  </div>

  <hr>

  <div class="row mar-bot-30">
    <div class="col-md-3">
      <img class="img-responsive" src="../../img/pub_thumbs/elloumi2014unsupervised.png">
    </div>
    <div class="col-md-9">
      <p class="pub-title">​Unsupervised Discovery of Human Activities from Long-Videos</p>
      <p class="pub-authors">Salma Elloumi, Serhan Cosar, Guido Pusiol, Francois Bremond, Monique Thonnat</p>
      <p class="pub-info">
        The Institution of Engineering and Technology, IET Computer Vision<br/>
        July 2015
      </p>
      <p class="pub-description">
        <a class="btn btn-danger btn-xs" href="http://www-sop.inria.fr/members/Francois.Bremond/Postscript/actdis_cv.pdf" target="_blank" role="button">
          <i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF
        </a>
        <a class="btn btn-default btn-xs" href="http://ieeexplore.ieee.org/document/7172630/" target="_blank" role="button">
          <i class="fa fa-book" aria-hidden="true"></i> Publisher
        </a>
      </p>
    </div>
  </div>

  <hr>

  <div class="row mar-bot-30">
    <div class="col-md-3">
      <img class="img-responsive" src="../../img/pub_thumbs/hall2015quantifying.png">
    </div>
    <div class="col-md-9">
      <p class="pub-title" style="font-size: 19px;">​Quantifying Naturalistic Social Gaze in Fragile X Syndrome Using a Novel Eye-Tracking Paradigm</a>
      </p>
      <p class="pub-authors">Scott S. Hall, Michael C. Frank, Guido Pusiol, Faraz Farzin, Amy A. Lightbody, Allan L. Reiss</p>
      <p class="pub-info">
        American Journal of Medical Genetics, Part 1: Neuropsychiatric Genetics<br/>
        June 2015
      </p>
      <p class="pub-description">
        <a class="btn btn-danger btn-xs" href="http://langcog.stanford.edu/papers/AJMG_B_Hall.pdf" target="_blank" role="button">
          <i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF
        </a>
        <a class="btn btn-default btn-xs" href="http://dx.doi.org/10.1002/ajmg.b.32331" target="_blank" role="button">
          <i class="fa fa-book" aria-hidden="true"></i> Publisher
        </a>
      </p>
    </div>
  </div>

  <hr>

  <div class="row mar-bot-30">
    <div class="col-md-3">
      <img class="img-responsive" src="../../img/pub_thumbs/pusiol2014discovering.png">
    </div>
    <div class="col-md-9">
      <p class="pub-title">​Discovering the Signatures of Joint Attention in Child-Caregiver Interaction</p>
      <p class="pub-authors">Guido Pusiol, Laura Soriano, Li Fei-Fei, Michael C. Frank</p>
      <p class="pub-info">
        The Annual Meeting of the Cognitive Science Society (CogSci)<br/>
        July 2014
      </p>
      <p class="pub-description">
        <a class="btn btn-danger btn-xs" href="http://vision.stanford.edu/pdf/guido14.pdf" target="_blank" role="button">
          <i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF
        </a>
        <a class="btn btn-default btn-xs" href="http://cognitivesciencesociety.org/wp-content/uploads/archival/cognitivesciencesociety.org/conference2014/index.html" target="_blank" role="button">
          <i class="fa fa-users" aria-hidden="true"></i> Conference
        </a>
      </p>
    </div>
  </div>

  <hr>

  <div class="row mar-bot-30">
    <div class="col-md-3">
      <img class="img-responsive" src="../../img/pub_thumbs/frank2013developmental.png">
    </div>
    <div class="col-md-9">
      <p class="pub-title">​Developmental and Postural Changes in Children Visual Access to Faces</p>
      <p class="pub-authors">Michael C. Frank, Kaia Simmons, Daniel Yurovsky, Guido Pusiol</p>
      <p class="pub-info">
        The Annual Meeting of the Cognitive Science Society (CogSci)<br/>
        August 2013
      </p>
      <p class="pub-description">
        <a class="btn btn-danger btn-xs" href="http://mindmodeling.org/cogsci2013/papers/0106/paper0106.pdf" target="_blank" role="button">
          <i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF
        </a>
        <a class="btn btn-default btn-xs" href="http://cognitivesciencesociety.org/wp-content/uploads/archival/cognitivesciencesociety.org/conference2013/index.html" target="_blank"
           role="button">
          <i class="fa fa-users" aria-hidden="true"></i> Conference
        </a>
      </p>
    </div>
  </div>

  <hr>

  <div class="row mar-bot-30">
    <div class="col-md-3">
      <img class="img-responsive" src="../../img/pub_thumbs/pusiol2011unsupervised.png">
    </div>
    <div class="col-md-9">
      <p class="pub-title">​Unsupervised Discovery, Modeling, and Analysis of Long Term Activities</p>
      <p class="pub-authors">Guido Pusiol, Francois Bremond, Monique Thonnat</p>
      <p class="pub-info">
        International Conference on Computer Vision Systems (ICVS)<br/>
        Septmber 2011
      </p>
      <p class="pub-description">
        <a class="btn btn-danger btn-xs" href="https://hal.inria.fr/file/index/docid/621201/filename/ICVS_Paper.pdf" target="_blank" role="button">
          <i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF
        </a>
        <a class="btn btn-default btn-xs" href="http://link.springer.com/chapter/10.1007%2F978-3-642-23968-7_11" target="_blank" role="button">
          <i class="fa fa-book" aria-hidden="true"></i> Publisher
        </a>
        <a class="btn btn-default btn-xs" href="http://www-sop.inria.fr/manifestations/icvs2011/" target="_blank"
           role="button">
          <i class="fa fa-users" aria-hidden="true"></i> Conference
        </a>
      </p>
    </div>
  </div>

  <hr>

  <div class="row mar-bot-30">
    <div class="col-md-3">
      <img class="img-responsive" src="../../img/pub_thumbs/pusiol2010trajectory.png">
    </div>
    <div class="col-md-9">
      <p class="pub-title">​Trajectory Based Activity Discovery</p>
      <p class="pub-authors">Guido Pusiol, Francois Bremond, Monique Thonnat</p>
      <p class="pub-info">
        IEEE International Conference on Advanced Video and Signal-Based Surveillance (AVSS)<br/>
        August 2010
      </p>
      <p class="pub-description">
        <a class="btn btn-danger btn-xs" href="http://www-sop.inria.fr/members/Francois.Bremond/Postscript/avss2010Guido.pdf" target="_blank" role="button">
          <i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF
        </a>
        <a class="btn btn-default btn-xs" href="http://ieeexplore.ieee.org/document/5597122/" target="_blank" role="button">
          <i class="fa fa-book" aria-hidden="true"></i> Publisher
        </a>
        <a class="btn btn-default btn-xs" href="http://www.avss2010.org/" target="_blank"
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
