<?php
session_start();
  include 'front-back.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>INNOVA</title>
<meta name="description" content="rp sohag a full stuck web developer">
<meta name="author" content="rp_sohag">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="frontend/img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="frontend/img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="frontend/img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="frontend/img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="frontend/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="frontend/fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css" href="frontend/css/style.css">
<link rel="stylesheet" type="text/css" href="frontend/css/nivo-lightbox/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="frontend/css/nivo-lightbox/default.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">


</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="#"><img style="width: 70px;margin-top: -24px;" src="admin/upload/logo/<?php echo $asc['image'] ?>"></a>
      <div class="phone"><span>Call Today</span><?php echo $asc_cinfo['h_phone']?></div>
    </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about" class="page-scroll">About</a></li>
        <li><a href="#services" class="page-scroll">Services</a></li>
        <li><a href="#portfolio" class="page-scroll">Projects</a></li>
        <li><a href="#testimonials" class="page-scroll">Testimonials</a></li>
        <li><a href="#contact" class="page-scroll">Contact</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
</nav>
<!-- Header -->
<header id="header">
  <div class="intro" style="background: url(admin/upload/banner/<?php echo $asc_banner['image']?>); 
background-repeat: no-repeat;
background-size: cover; ">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 intro-text">
            <h1><?php echo $asc_banner['heading']?></h1>
            <p><?php echo $asc_banner['summary']?></p>
            <a href="#about" class="btn btn-custom btn-lg page-scroll">Learn More</a> </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- Get Touch Section -->
<div id="get-touch">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6 col-md-offset-1">
        <h3>Cost for your home renovation project</h3>
        <p>Get started today and complete our form to request your free estimate</p>
      </div>
      <div class="col-xs-12 col-md-4 text-center"><a href="#contact" class="btn btn-custom btn-lg page-scroll">Free Estimate</a></div>
    </div>
  </div>
</div>
<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6"> <img src="admin/upload/banner/<?php echo $asc_about['image']?>" class="img-responsive" alt=""> </div>
      <div class="col-xs-12 col-md-6">
        <div class="about-text">
          <h2><?php echo $asc_about['title']?></h2>
          <p><?php echo $asc_about['summary']?></p>
          <h3>Why Choose Us?</h3>
          <div class="list-style">
            <div class="col-lg-6 col-sm-6 col-xs-12">
            <?php
foreach ($aboutch_query as $key => $aboutch) {
  

      ?>
              <ul>
                <li><?php echo $aboutch['heading']?></li>
              </ul>
              <?php
}
      ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Services Section -->
<div id="services">
  <div class="container">
    <div class="section-title">
      <h2>Our Services</h2>
    </div>
    <div class="row">
    <?php
foreach ($service_query as $key => $service) {
  

      ?>
      <div class="col-md-4">
        <div class="service-media"> <img src="admin/upload/service/<?php echo $service['image']?>" style="height: 260px;" alt=" "> </div>
        <div class="service-desc">
          <h3><?php echo $asc_service['title']?></h3>
          <p><?php echo mb_strimwidth($asc_service["description"], 0, 100, "...");?></p>
        </div>
      </div>
      <?php
}
      ?>
    </div>
  </div>
</div>
<!-- Gallery Section -->
<div id="portfolio">
  <div class="container">
    <div class="section-title">
      <h2>Our Works</h2>
    </div>
    <div class="row">
              <?php
foreach ($works_query as $key => $works) {
  

      ?>
      <div class="portfolio-items">
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="portfolio-item">

            <div class="hover-bg" style=""> <a href="admin/upload/works/<?php echo $works['image']?>" title="<?php echo $works['title']?>" data-lightbox-gallery="gallery1" >
              <div class="hover-text">
                <h4><?php echo $works['title']?></h4>
              </div>
              <img src="admin/upload/works/<?php echo $works['image']?>" alt=" " style="width: 100%;" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>

      </div>
        <?php
}
      ?>

    </div>
  </div>
</div>
<!-- Testimonials Section -->
<div id="testimonials">
  <div class="container">
    <div class="section-title">
      <h2>Testimonials</h2>
    </div>
    <div class="row">
    <?php
foreach ($testimonials_query as $key => $testimonials) {
  

      ?>
      <div class="col-md-4">
        <div class="testimonial">
          <div class="testimonial-image"> <img src="admin/upload/testimonials/<?php echo $testimonials['image']?>" alt=""></div>
          <div class="testimonial-content">
            <p><?php echo $testimonials['summary']?></p>
            <div class="testimonial-meta"> - <?php echo $testimonials['author_name']?></div>
          </div>
        </div>
      </div>
      <?php
}
      ?>
    </div>
  </div>
</div>
<!-- Contact Section -->
<div id="contact">
  <div class="container">
    <div class="col-md-8">
      <div class="row">
        <div class="section-title">
          <h2>Get In Touch</h2>
          <p>Please fill out the form below to send us an email and we will get back to you as soon as possible.</p>
        </div>

        <p class="help-block  alert-success text-strong">
<?php
            if(isset($_SESSION['success'])){
                echo $_SESSION['success'];
                unset ($_SESSION['success']);
            }
          ?>
                </p>
        <form action="admin/contact-message.php" method="post">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" id="name" class="form-control" name="name" placeholder="Name">
                <p class="help-block text-danger">
<?php
            if(isset($_SESSION['name'])){
                echo $_SESSION['name'];
                unset ($_SESSION['name']);
            }
          ?>
                </p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="email" id="email" class="form-control" name="email" placeholder="Email">
                <p class="help-block text-danger">
<?php
            if(isset($_SESSION['email'])){
                echo $_SESSION['email'];
                unset ($_SESSION['email']);
            }
          ?>
                </p>
              </div>
            </div>
          </div>
          <div class="form-group">
            <textarea name="message" id="message" class="form-control" rows="4" name="message" placeholder="Message"></textarea>
            <p class="help-block text-danger">
<?php
            if(isset($_SESSION['message'])){
                echo $_SESSION['message'];
                unset ($_SESSION['message']);
            }
          ?>
                </p>
          </div>
          <div id="success"></div>
          <button type="submit" class="btn btn-custom btn-lg">Send Message</button>
        </form>
      </div>
    </div>
    <div class="col-md-3 col-md-offset-1 contact-info">
      <div class="contact-item">
        <h4>Contact Info</h4>
        <p><span>Address</span><?php echo $asc_cinfo['address']?></p>
      </div>
      <div class="contact-item">
        <p><span>Phone</span><?php echo $asc_cinfo['f_phone']?></p>
      </div>
      <div class="contact-item">
        <p><span>Email</span><?php echo $asc_cinfo['email']?></p>
      </div>
    </div>
    <div class="col-md-12">
      <div class="row">
        <div class="social">
          <ul>
            <li>
            <?php
foreach ($social_query as $key => $social) {
  

      ?>
            <a href="<?php echo $social['link']?>"><i class="<?php echo $social['icon']?>"></i></a>
            <?php
}
      ?>
          </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Footer Section -->
<div id="footer">
  <div class="container text-center">
    <p>&copy; 2020 INNOVA. Design by <a href="http://facebook.com/ovimanii.sohag" rel="nofollow">RP SOHAG</a></p>
  </div>
</div>
<script type="text/javascript" src="frontend/js/jquery.1.11.1.js"></script> 
<script type="text/javascript" src="frontend/js/bootstrap.js"></script> 
<script type="text/javascript" src="frontend/js/SmoothScroll.js"></script> 
<script type="text/javascript" src="frontend/js/nivo-lightbox.js"></script> 

<script type="text/javascript" src="frontend/js/contact_me.js"></script> 
<script type="text/javascript" src="frontend/js/main.js"></script>
</body>
</html>