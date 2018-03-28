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

<script type="text/javascript">
	function say_bye(){
		window.close();
	}
</script>

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
	//include 'datalogin.php';
								
	date_default_timezone_set('America/Los_Angeles');

	//escapes all foreign characters from user's input
	function escape($str)
	{
			$search=array("\\","\0","\n","\r","\x1a","'",'"');
			$replace=array("\\\\","\\0","\\n","\\r","\Z","\'",'\"');
			return str_replace($search,$replace,$str);
	}

	//start appt request logic
	if(isset($_POST['submit_appt_request']))
	{
		$requestername = isset($_POST["requestername"]) ? $_POST['requestername'] : '';
		$mail = isset($_POST["email"]) ? $_POST['email'] : '';
		$phone = isset($_POST["phone"]) ? $_POST['phone'] : '';
		$date1 = isset($_POST["date1"]) ? $_POST['date1'] : '';
		$date2 = isset($_POST["date2"]) ? $_POST['date2'] : '';
		$date3 = isset($_POST["date3"]) ? $_POST['date3'] : '';
		$time = isset($_POST["time"]) ? $_POST['time'] : '';
		$service = isset($_POST["service"]) ? $_POST['service'] : '';
		$comments = escape($_POST["comment"]) ? $_POST['comment'] : '';

		$entry_datetime = date("F d, Y g:i A");
		
		$date1 = date("F d, Y", strtotime($date1));
		if($date2 != NULL)
		{
			$date2 = date("F d, Y", strtotime($date2));
		}
		if($date3 != NULL)
		{
			$date3 = date("F d, Y", strtotime($date3));
		}
		
		//print out test 
		/*echo "Patient: " . $requestername;
		echo "\nEmail: " . $mail;
		echo "\nPhone: " . $phone;
		echo "\nDate Priority 1: " . $date1;
		echo "\nDate Priority 2: " . $date2;
		echo "\nDate Priority 3: " . $date3;
		echo "\nTime: " . $time;
		echo "\nService: " . $service;
		echo "\nComments: " . $comments;*/
		
		//format email text
		$message = "Request Date/Time: \n" . $entry_datetime;
		$message .= "\n\nPatient: \n" . $requestername;
		$message .= "\n\nEmail: \n" . $mail;
		$message .= "\n\nPhone: \n" . $phone;
		$message .= "\n\nDate Priority 1: \n" . $date1;
		$message .= "\n\nDate Priority 2: \n" . $date2;
		$message .= "\n\nDate Priority 3: \n" . $date3;
		$message .= "\n\nTime: \n" . $time;
		$message .= "\n\nService: \n" . $service;
		$message .= "\n\nComments: \n" . $comments;
		
		//if the form was really posted, send the email
		if($_SERVER['REQUEST_METHOD'] == 'POST') { 
			$to      = 'doctors@bobothvision.com';
			$subject = 'Web Appointment Request';
			$headers = 'From: BVC Website' . "\r\n" .
			'X-Mailer: PHP/' . phpversion();

			mail($to, $subject, $message, $headers);
		}
		
		echo '<section id="services" class="page-section colord">
		  <div class="container">
			<div class="heading text-center"> 
			  <!-- Heading -->
			  <br /><br />
			  <h2>Appointment Request Submitted</h2>
			  <p>Thank you for requesting an appointment with Boboth Vision Clinic. Please understand that your request HAS NOT yet been confirmed, but our staff has received it and will contact you in a timely manner to confirm your appointment date and time.</p>
			  <p><a href="index.html" style="color:white">Return Home</a></p>
			</div>
		  </div>
		  <!--/.container--> 
		</section>';
	}
	//end appt request logic
	
	//start cl_form logic
	if(isset($_POST['submit_cl_form']))
	{
		$requestername = isset($_POST["requestername"]) ? $_POST['requestername'] : '';
		$email = isset($_POST["email"]) ? $_POST['email'] : '';
		$phone = isset($_POST["phone"]) ? $_POST['phone'] : '';
		$address = isset($_POST["address"]) ? $_POST['address'] : '';
		$city = isset($_POST["city"]) ? $_POST['city'] : '';
		$state = isset($_POST["state"]) ? $_POST['state'] : '';
		$zip = isset($_POST["zip"]) ? $_POST['zip'] : '';
		$quantity = isset($_POST["quantity"]) ? $_POST['quantity'] : '';
		$comments = escape($_POST["comment"]) ? $_POST['comment'] : '';

		$entry_datetime = date("F d, Y g:i A");
		
		//print out test 
		/*echo "Patient: " . $requestername;
		echo "\nEmail: " . $email;
		echo "\nPhone: " . $phone;
		echo "\nAddress: " . $address;
		echo "\nCity: " . $city;
		echo "\nState: " . $state;
		echo "\nZip: " . $zip;
		echo "\nQuantity: " . $quantity;
		echo "\nComments: " . $comments;*/
		
		//format email text
		$message = "Request Date/Time: \n" . $entry_datetime;
		$message .= "\n\nPatient: \n" . $requestername;
		$message .= "\n\nEmail: \n" . $email;
		$message .= "\n\nPhone: \n" . $phone;
		$message .= "\n\nAddress: \n" . $address;
		$message .= "\n\nCity: \n" . $city;
		$message .= "\n\nState: \n" . $state;
		$message .= "\n\nZip: \n" . $zip;
		$message .= "\n\nQuantity: \n" . $quantity;
		$message .= "\n\nComments: \n" . $comments;
		
		//if the form was really posted, send the email
		if($_SERVER['REQUEST_METHOD'] == 'POST') { 
			$to      = 'doctors@bobothvision.com';
			$subject = 'Web Appointment Request';
			$headers = 'From: BVC Website' . "\r\n" .
			'X-Mailer: PHP/' . phpversion();

			mail($to, $subject, $message, $headers);
		}
		
		echo '<section id="services" class="page-section colord">
		  <div class="container">
			<div class="heading text-center"> 
			  <!-- Heading -->
			  <br /><br />
			  <h2>Contact Lens Request Submitted</h2>
			  <p>Thank you for requesting contact lenses with Boboth Vision Clinic. Our staff has received it and will review your prescription to process your order.</p>
			  <p><a href="index.html" style="color:white">Return Home</a></p>
			</div>
		  </div>
		  <!--/.container--> 
		</section>';
	}
	//end cl_form logic
?>



</section>
<a href="#top" class="topHome"><i class="fa fa-chevron-up fa-2x"></i></a> 

<!--[if lte IE 8]><script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script><![endif]--> 
<script src="js/modernizr-latest.js"></script> 
<script src="js/jquery-1.8.2.min.js" type="text/javascript"></script> 
<script src="js/bootstrap.min.js" type="text/javascript"></script> 
<script src="js/jquery.isotope.min.js" type="text/javascript"></script> 
<script src="js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script> 
<script src="js/jquery.nav.js" type="text/javascript"></script> 
<script src="js/jquery.fittext.js"></script> 
<script src="js/waypoints.js"></script> 
<script src="js/custom.js" type="text/javascript"></script> 
<script src="js/owl-carousel/owl.carousel.js"></script>
</body>
</html>
