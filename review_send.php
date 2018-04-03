<!--
Author: Tyler Jaquish, 2015
-->
<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en-gb" class="no-js">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!--[if lt IE 9]> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
<title>Boboth Vision Clinic</title>
<meta name="description" content="">
<meta name="author" content="WebThemez">
<!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<!--[if lte IE 8]>
		<script type="text/javascript" src="http://explorercanvas.googlecode.com/svn/trunk/excanvas.js"></script>
	<![endif]-->
<link rel="shortcut icon" href="images/logo.ico" type="image/png">
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
<link href="css/animate.css" rel="stylesheet" media="screen">
<!-- Owl Carousel Assets -->
<link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
<link rel="stylesheet" href="css/styles.css" />
<!-- Font Awesome -->
<link href="font/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
<header class="header">
  <div class="container">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a href="#" class="navbar-brand scroll-top logo  animated bounceInLeft"><b><i></i>Boboth Vision Clinic</b></a> </div>
    </nav>
    <!--/.navbar--> 
  </div>
  <!--/.container--> 
</header>
<!--/.header-->
<div id="#top"></div>

<?php
	//MySQL Database Connect 
	include 'datalogin.php';
								
	//set_error_handler('myHandlerForMinorErrors', E_NOTICE | E_STRICT);
	date_default_timezone_set('America/Los_Angeles');

	function escape($str)
	{
			$search=array("\\","\0","\n","\r","\x1a","'",'"');
			$replace=array("\\\\","\\0","\\n","\\r","\Z","\'",'\"');
			return str_replace($search,$replace,$str);
	}

	if(isset($_POST["submit"]))
	{
		$reviewername = isset($_POST["username"]) ? $_POST['username'] : '';
		$appointments = isset($_POST["appointments"]) ? $_POST['appointments'] : '';
		$environment = isset($_POST["environment"]) ? $_POST['environment'] : '';
		$staff = isset($_POST["staff"]) ? $_POST['staff'] : '';
		$trust = isset($_POST["trust"]) ? $_POST['trust'] : '';
		$explains = isset($_POST["explains"]) ? $_POST['explains'] : '';
		$listens = isset($_POST["listens"]) ? $_POST['listens'] : '';
		$likelihood = isset($_POST["likelihood"]) ? $_POST['likelihood'] : '';
		$comments = escape($_POST["comments"]) ? escape($_POST['comments']) : '';
	}

	$entry_datetime = date("Y-m-d H:i:s");
	$reviewername = ucwords(strtolower($reviewername));
	
	//print out test 
	/*echo "<br />name: " . $reviewername;
	echo "<br />appointments: " . $appointments;
	echo "<br />environment: " . $environment;
	echo "<br />staff: " . $staff;
	echo "<br />trust: " . $trust;
	echo "<br />explains: " . $explains;
	echo "<br />listens: " . $listens;
	echo "<br />likelihood: " . $likelihood;
	echo "<br />comments: " . $comments;*/

	//insert into db
	if($_SERVER['REQUEST_METHOD'] == 'POST') 
	{
		$sql = "INSERT INTO reviews(user_name, entry_datetime, appointments, environment, staff, trust, explains, listens, likelihood, comments) VALUES ('$reviewername', '$entry_datetime', '$appointments', '$environment', '$staff', '$trust', '$explains', '$listens', '$likelihood', '$comments')";
		mysqli_query($conn, $sql);
		
		$message = "You have received a new customer review through the company website. Click the link below to view. \n\n Note: the testimonial will not be made public until it is approved by admin.";
		$message .= "\n\nhttp://bobothvision.com/admin";
	
		//email notification
		$to      = 'doctors@bobothvision.com';
		$subject = 'New Review Submitted';
		$headers = 'From: BVC Website' . "\r\n" .
		'X-Mailer: PHP/' . phpversion();

		mail($to, $subject, $message, $headers);
	}
	$conn->close();

?>

<section id="services" class="page-section colord">
  <div class="container">
    <div class="heading text-center"> 
      <!-- Heading -->
	  <br /><br /><br />
      <h2>Customer Review Submitted</h2>
      <p>Thank you for taking the time to review and rate your experience at Boboth Vision Clinic. We appreciate your patronage. </p>
	  <p><a href="index.html" style="color:white">Return Home</a></p>
    </div>
  </div>
  <!--/.container--> 
</section>

</section>
<a href="#top" class="topHome"><i class="fa fa-chevron-up fa-2x"></i></a> 

<!--[if lte IE 8]><script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script><![endif]--> 
<script src="js/modernizr-latest.js"></script> 
<script src="js/jquery-1.8.2.min.js" type="text/javascript"></script> 
<script src="js/bootstrap.min.js" type="text/javascript"></script> 
<script src="js/jquery.isotope.min.js" type="text/javascript"></script> 
<!-- <script src="js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>  -->
<!-- <script src="js/jquery.nav.js" type="text/javascript"></script>  -->
<!-- <script src="js/jquery.fittext.js"></script>  -->
<!-- <script src="js/waypoints.js"></script>  -->
<!-- <script src="js/custom.js" type="text/javascript"></script>  -->
<!-- <script src="js/owl-carousel/owl.carousel.js"></script> -->
</body>
</html>
