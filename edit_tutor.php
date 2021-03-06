<?php 

$db_host = 'localhost'; // Server Name
$db_user = 'root'; // name
$db_pass = ''; // Password
$db_name = 'scholarly'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
    die ('Failed to connect to MySQL: ' . mysqli_connect_error());  
}

$sql = 'SELECT * FROM faculty';
$query = mysqli_query($conn, $sql);

if (!$query) {
    die ('SQL Error: ' . mysqli_error($conn));
}

 ?>

   <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js">
</script>
<script src="//code.jquery.com/jquery-1.11.1.min.js">
</script>

<!------ Include the above in your HEAD tag ---------->


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
	email: 			info@freehtml5.co
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
    <script language="javascript" src="users.js" type="text/javascript"></script>
    <script type="text/javascript">
$(document).ready(function()
{
$("#blockname").change(function()
{
var blockname=$(this).val();
var post_id = 'id='+ blockname;
 
$.ajax
({
type: "POST",
url: "ajax.php",
data: post_id,
cache: false,
success: function(houses)
{
$("#house").html(houses);
} 
});
 
});
});
</script>
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
							<li><a href="about.php">About</a></li>
							<li><a href="pricing.php">Pricing</a></li>
							<li><a href="subject.php">subject</a></li>
							
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
			   					<h1 class="heading-section">ADMIN ONLY!!</h1>
									<h1>Edit Tutor</h1>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>

<?php
$conn = mysqli_connect("localhost","root","", "scholarly");

if(isset($_POST["submit"]) && $_POST["submit"]!="") {
$usersCount = count($_POST["name"]);
for($i=0;$i<$usersCount;$i++) {
mysqli_query($conn, "UPDATE faculty SET id='" . $_POST["id"][$i] . "', name='" . $_POST["name"][$i] . "', email='" . $_POST["email"][$i] . "', subject='" . $_POST["subject"][$i] . "', location='" . $_POST["location"][$i] . "', image='" . $_POST["image"][$i] . "',  blockname='" . $_POST["blockname"][$i] . "' WHERE id='" . $_POST["id"][$i] . "'");
//header("Location: edittutor.php");
echo("Changed successfully");
}
}
?>
<form name="frmUser" method="post" action="" class="form-style-9" >
<div style="width:500px;">
<table  cellpadding="10" cellspacing="0" width="500"  class="data-table">
<tr class="tableheader">
<td>Edit Tutor Details</td>
</tr>
<?php
$conn = mysqli_connect("localhost","root","", "scholarly");

$rowCount = count($_POST["id"]);
for($i=0;$i<$rowCount;$i++) {
$result = mysqli_query($conn, "SELECT * FROM faculty WHERE id='" . $_POST["id"][$i] . "'");
$row[$i]= mysqli_fetch_array($result);
?>
<tr>
<td>
<table cellpadding="10" cellspacing="0" width="500" class="tblSaveForm">
<tr>
<tr>
<td><label>ID</label></td>
<td><input type="text" name="id[]" class="txtField" value="<?php echo $row[$i]['id']; ?>"></td>
</tr>
<td><label>Name</label></td>
<td><input type="text" name="name[]" class="txtField" value="<?php echo $row[$i]['name']; ?>"></td>
</tr>
<td><label>email</label></td>
<td><input type="email" name="email[]" class="txtField" value="<?php echo $row[$i]['email']; ?>"></td>
</tr>
</tr>
<td><label>subject</label></td>
<td><input type="text" name="subject[]" class="txtField" value="<?php echo $row[$i]['subject']; ?>"></td>
</tr>
</tr>
<td><label>location</label></td>
<td><input type="text" name="location[]" class="txtField" value="<?php echo $row[$i]['location']; ?>"></td>
</tr>
<td><label>image</label></td>
<td><input type="text" name="house[]" class="txtField" value="<?php echo $row[$i]['image']; ?>"></td>
</tr>
</tr>
<td><label>Block</label></td>
<td><input type="text" name="blockname[]" class="txtField" value="<?php echo $row[$i]['blockname']; ?>"></td>
</tr>
</tr>
</table>
</td>
</tr>
<?php
}
?>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Save" class="btnSubmit"></td>
</tr>
</table>
</div>
</form>

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
