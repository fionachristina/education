<?php

    // Initialize the session

    session_start();

     

    // If session variable is not set it will redirect to login page

    if(!isset($_SESSION['username']) || empty($_SESSION['username'])){

      header("location: login.php");

      exit;

    }
	?>
	
	<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Education &mdash; Free Website Template, Free HTML5 Template by freehtml5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Pricing -->
	<link rel="stylesheet" href="css/pricing.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-right">
						<p class="site">www.yourdomainname.com</p>
						<p class="num">Call: +254712345678</p>
						<ul class="fh5co-social">
							<li><a href="#"><i class="icon-facebook2"></i></a></li>
							<li><a href="#"><i class="icon-twitter2"></i></a></li>
							<li><a href="#"><i class="icon-dribbble2"></i></a></li>
							<li><a href="#"><i class="icon-github"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-2">
						<div id="fh5co-logo"><a href="logout.php"><i class="icon-study"></i>Scholarly<span>.</span></a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<li><a href="logout.php">Home</a></li>
							<li class="active"><a href="courses.html">Courses</a></li>
							<li><a href="teacher.php">Teacher</a></li>
							<li><a href="about.php">About</a></li>
							<li><a href="pricing.php">Pricing</a></li>
							<li class="has-dropdown">
								<a href="blog.php">Blog</a>
								<ul class="dropdown">
									<li><a href="#">Web Design</a></li>
									<li><a href="#">eCommerce</a></li>
									<li><a href="#">Branding</a></li>
									<li><a href="#">API</a></li>
								</ul>
							</li>
							<li><a href="contact.php">Contact</a></li>
							<li class="btn-cta"><a href="logout.php"><span>Log out</span></a></li>
							<!-- <li class="btn-cta"><a href="#"><span>Create a Course</span></a></li> -->
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>
	
	<aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url(images/img_bg_4.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1 class="heading-section">Hi, <b><?php echo htmlspecialchars($_SESSION['username']); ?></b>.</h1>
									<h2> This Section Contains all the Revision Resources you need</h2>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>

	

<div id="fh5co-course">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Books</h2>
					<p>We offer a variety of Books in the 8-4-4 system as down below</p>
				</div>
                </div>
  <div id="pictures">
    <div class="col-md-3" id="column1">
      <a href="https://www.phy.duke.edu/~rgb/Class/intro_physics_1/intro_physics_1.pdf" target="_blank">
        <img src="https://images-na.ssl-images-amazon.com/images/I/51GJy6M7YwL._SX403_BO1,204,203,200_.jpg" class="img-thumbnail" alt="book1" height="150" width="120">
      </a>
      <p>PHYSICS</p>
      <a href="https://www.gceguide.xyz/files/e-books/a-level/Cambridge%20International%20AS%20and%20A%20Level%20Chemistry%20Coursebook%202nd%20Edition.pdf" target="_blank">
        <img src="https://images-na.ssl-images-amazon.com/images/I/511sgb16xbL._SX368_BO1,204,203,200_.jpg" class="img-thumbnail" alt="book1" height="150" width="120">
      </a>
      <p>CHEMISTRY</p>
    </div>

    <div class="col-md-3">
      <a href="http://filestore.aqa.org.uk/subjects/AQA-MFP2-TEXTBOOK.PDF" target="_blank">
        <img src="https://images-na.ssl-images-amazon.com/images/I/91VlmAhuOVL._AC_UL320_SR238,320_.jpg" class="img-thumbnail" alt="book1" height="150" width="120">
      </a>
      <p>MATHS</p>
      <a href="https://www.ets.org/s/gre/pdf/practice_book_lit.pdf" target="_blank">
        <img src="https://s-media-cache-ak0.pinimg.com/564x/b8/c5/0c/b8c50c3a94cbef2701f603cb5f84e46b.jpg" class="img-thumbnail" alt="book1" height="150" width="120">
      </a>
      <p>ENGLISH</p>
    </div>

    <div class="col-md-3">
      <a href="http://www.ocr.org.uk/Images/170128-specification-accredited-a-level-gce-history-a-h505.pdf" target="_blank">
        <img src="https://images-na.ssl-images-amazon.com/images/I/61Dz2Cj3ImL._SX258_BO1,204,203,200_.jpg" class="img-thumbnail" alt="book1" height="150" width="120">
      </a>
      <p>HISTORY</p>
      <a href="http://www.learndev.org/dl/Science/EarthScience/ThePlanetWeLiveOn.pdf" target="_blank">
        <img src="https://images-na.ssl-images-amazon.com/images/I/51Ubn8ZHDBL._SX392_BO1,204,203,200_.jpg" class="img-thumbnail" alt="book1" height="150" width="120">
      </a>
      <p>GEOLOGY</p>
    </div>

    <div class="col-md-3">
      <a href="http://www.computingbook.org/FullText.pdf" target="_blank">
        <img src="http://maxpapers.com/wp-content/uploads/2012/11/comp-book.jpg" class="img-thumbnail" alt="book1" height="150" width="120">
      </a>
      <p>COMPUTER</p>
      <a href="https://www.gceguide.xyz/files/e-books/a-level/Cambridge%20International%20AS%20and%20A%20Level%20Economics.pdf" target="_blank">
        <img src="https://images-na.ssl-images-amazon.com/images/I/51y%2BMbRfw4L._SX395_BO1,204,203,200_.jpg" class="img-thumbnail" alt="book1" height="150" width="120">
      </a>
      <p>ECONOMICS</p>
    </div>
  </div>
  </div>
  </div>

  <div id="fh5co-course">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Videos</h2>
					<p>Watch videos for futher understanding</p>
				</div>
  <div id="videos">
    
    <div class="col-md-4">
      <iframe width="350" height="200" src="https://www.youtube.com/embed/G8VAmfdfUN4" frameborder="0" allowfullscreen></iframe>
      <p>MATH REVISION</p>
      <iframe width="350" height="200" src="https://www.youtube.com/embed/EBcaw8SA5kw" frameborder="0" allowfullscreen></iframe>
      <p>CHEMISTRY REVISION</p>
    </div>
    <div class="col-md-4">
      <iframe width="350" height="200" src="https://www.youtube.com/embed/eAv2xyVip_Q" frameborder="0" allowfullscreen></iframe>
      <p>BIOLOGY REVISION</p>
      <iframe width="350" height="200" src="https://www.youtube.com/embed/7oOX48NOyTQ" frameborder="0" allowfullscreen></iframe>
      <p>ENGLISH REVISION</p>
    </div>
    <div class="col-md-4">
      <iframe width="350" height="200" src="https://www.youtube.com/embed/C6Y8u1GNysE" frameborder="0" allowfullscreen></iframe>
      <p>ECONOMICS REVISION</p>
      <iframe width="350" height="200" src="https://www.youtube.com/embed/IXwCMK1UG5g" frameborder="0" allowfullscreen></iframe>
      <p>COMPUTER REVISION</p>
    </div>

  </div>
  </div>
  </div>



	<footer id="fh5co-footer" role="contentinfo" style="background-image: url(images/img_bg_4.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-3 fh5co-widget">
					<h3>About Scholarly</h3>
					<p>Kenya's digitized curriculum content.</p>
<p>Affordable. Accessible. Everywhere.</p>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3>Learning</h3>
					<ul class="fh5co-footer-links">
						<li><a href="#">Course</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Meetups</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3>Learn &amp; Grow</h3>
					<ul class="fh5co-footer-links">
						<li><a href="#">Blog</a></li>
						<li><a href="#">Privacy</a></li>
						<li><a href="#">Testimonials</a></li>
						<li><a href="#">Handbook</a></li>
						<li><a href="#">Held Desk</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3>Engage us</h3>
					<ul class="fh5co-footer-links">
						<li><a href="#">Marketing</a></li>
						<li><a href="#">Visual Assistant</a></li>
						<li><a href="#">System Analysis</a></li>
						<li><a href="#">Advertise</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3>Legal</h3>
					<ul class="fh5co-footer-links">
						<li><a href="#">Find Designers</a></li>
						<li><a href="#">Find Developers</a></li>
						<li><a href="#">Teams</a></li>
						<li><a href="#">Advertise</a></li>
						<li><a href="#">API</a></li>
					</ul>
				</div>
			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2018 . All Rights Reserved.</small> 
						<small class="block">Designed by Fiona & Lorna</small>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Count Down -->
	<script src="js/simplyCountdown.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
	<script>
    var d = new Date(new Date().getTime() + 1000 * 120 * 120 * 2000);

    // default example
    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate()
    });

    //jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });
	</script>
	</body>
</html>

