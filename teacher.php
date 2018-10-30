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
						<div id="fh5co-logo"><a href="index.php"><i class="icon-study"></i>Scholarly<span>.</span></a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="courses.php">Courses</a></li>
							<li class="active"><a href="teacher.php">Teacher</a></li>
							<li><a href="about.php">About</a></li>
							<li><a href="pricing.php">Pricing</a></li>
							<li><a href="contact.php">Contact</a></li>
							<li class="btn-cta"><a href="#"><span>Login</span></a></li>
							<li class="btn-cta"><a href="#"><span>Create a Course</span></a></li>
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
			   					<h1 class="heading-section">Our Faculty</h1>
									
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>
	
	<div id="fh5co-staff">
		<div class="container">
			<div class="row">
				<div class="col-md-3 text-center">
<<<<<<< HEAD
=======
					<div class="staff">
						<div class="staff-img" style="background-image: url(images/staff-1.jpg);">
							<ul class="fh5co-social">
							<p><strong>Jane Mutheu</strong> <br><a href=mailto:fionachristina6@gmail.com>mutheujane@gmail.com</a></p>
							</ul>
						</div>
						<span>English Teacher</span>
						<h3><a href=mailto:fionachristina6@gmail.com>Jane Mutheu</a></h3>
						<p>An English teacher based in Nairobi</p>
					</div>
				</div>
				<div class="col-md-3 animate-box text-center">
					<div class="staff">
						<div class="staff-img" style="background-image: url(images/staff-2.jpg);">
							<ul class="fh5co-social">
							<p><strong>Mike Njoroge</strong> <br><a href=mailto:fionachristina6@gmail.com>mike2njoroge@gmail.com</a></p>
							</ul>
						</div>
						<span>Mathematics Teacher</span>
						<h3><a href=mailto:fionachristina6@gmail.com>Mike Njoroge</a></h3>
						<p>A Mathematics teacher based in Mombasa</p>
					</div>
				</div>
				<div class="col-md-3 animate-box text-center">
					<div class="staff">
						<div class="staff-img" style="background-image: url(images/staff-3.jpg);">
							<ul class="fh5co-social">
							<p><strong>John Makama</strong> <br><a href=mailto:fionachristina6@gmail.com>makamajohn@gmail.com</a></p>
							</ul>
						</div>
						<span>Swahili Teacher</span>
						<h3><a href=mailto:fionachristina6@gmail.com>John Makama</a></h3>
						<p>A swahili teacher based in Kisii</p>
					</div>
				</div>
				<div class="col-md-3 animate-box text-center">
					<div class="staff">
						<div class="staff-img" style="background-image: url(images/staff-4.jpg);">
							<ul class="fh5co-social">
							<p><strong>William Otieno</strong> <br><a href=mailto:fionachristina6@gmail.com>otienowilliam@gmail.com</a></p>
							</ul>
						</div>
						<span>Biology Teacher</span>
						<h3><a href=mailto:fionachristina6@gmail.com>William Otieno</a></h3>
						<p>A Biology teacher based in Kabarak</p>
					</div>
				</div>
				</div>
				<div class="col-md-3 animate-box text-center">
					<div class="staff">
						<div class="staff-img" style="background-image: url(images/staff-5.jpg);">
							<ul class="fh5co-social">
							<p><strong>Sharon Andeka</strong> <br><a href=mailto:fionachristina6@gmail.com>andekasharon@gmail.com</a></p>
							</ul>
						</div>
						<span>Chemistry Teacher</span>
						<h3><a href=mailto:fionachristina6@gmail.com>Sharon Andeka</a></h3>
						<p>A Chemistry teacher based in Kakamega</p>
					</div>
				</div>
				<div class="col-md-3 animate-box text-center">
					<div class="staff">
						<div class="staff-img" style="background-image: url(images/staff-6.jpg);">
							<ul class="fh5co-social">
							<p><strong>Lagertha Ross</strong> <br><a href=mailto:fionachristina6@gmail.com>lagerthaross@gmail.com</a></p>
							</ul>
						</div>
						<span>Physics Teacher</span>
						<h3><a href=mailto:fionachristina6@gmail.com>Lagertha Ross</a></h3>
						<p>A Physics teacher based in Nairobi</p>
					</div>
				</div>
				<div class="col-md-3 animate-box text-center">
					<div class="staff">
						<div class="staff-img" style="background-image: url(images/staff-7.jpg);">
							<ul class="fh5co-social">
							<p><strong>Halima Mwashigadi</strong> <br><a href=mailto:fionachristina6@gmail.com>halimamwashigadi@gmail.com</a></p>
							</ul>
						</div>
						<span>Geography Teacher</span>
						<h3><a href=mailto:fionachristina6@gmail.com>Mike Smith</a></h3>
						<p>A Geography teacher based in Malindi</p>
					</div>
				</div>
				<div class="col-md-3 animate-box text-center">
					<div class="staff">
						<div class="staff-img" style="background-image: url(images/staff-8.jpg);">
							<ul class="fh5co-social">
							<p><strong>Jermaine Lusala</strong> <br><a href=mailto:fionachristina6@gmail.com>jlusala@gmail.com</a></p>
							</ul>
						</div>
						<span>Music Teacher</span>
						<h3><a href=mailto:fionachristina6@gmail.com>Jermaine Lusala</a></h3>
						<p>A Music Teacher based in Kitale</p>
					</div>
				</div>
			</div>
		</div>
	</div>
>>>>>>> 6e1b6dcdbd08e0ef9998934ff7b09d0b067c588e

				<div id="fh5co-staff">
		<div class="container">
		<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Faculty</h2>
					
				</div>
				</div>
				<div class="container-fluid bg-3 text-center">    
  <div class="row">
      <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scholarly";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM faculty";
$result = $conn->query($sql);

?>
<div class="table-responsive">
<table class="table">
        <tr class="header">
		    <td>id</td>
            <td>name</td>
            <td>email</td>
            <td>subject</td>
            <td>location</td>
            <td>image</td>
            <td><i class="fas fa-trash-alt"></i></td>
        </tr>
        <?php
           while ($row =$result->fetch_assoc()) {
			$id=$row['id'];
            $n=$row['name'];
            $um=$row['email'];
            $em=$row['subject'];
            $cn=$row['location'];
            $bl=$row['image'];
			   echo "<tr class= info>";
			   echo "<td>".$id."</td>";
               echo "<td>".$n."</td>";
               echo "<td>".$um."</td>";
               echo "<td>".$em."</td>";
               echo "<td>".$cn."</td>";
               echo "<td>".$bl."</td>";
			   echo "<td><a class=\"btn btn-danger\" href=mailto:fionachristina6@gmail.com>Email</a></td>";
               echo "</tr>";
           }

$conn->close();
        ?>
    </table>
    </div>             
              <hr/>         
  </div>
</div>
		</div>
	</div>
	<footer id="fh5co-footer" role="contentinfo" style="background-image: url(images/img_bg_4.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-3 fh5co-widget">
					<h3>About Education</h3>
					<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
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
						<small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a> &amp; <a href="https://www.pexels.com/" target="_blank">Pexels</a></small>
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

