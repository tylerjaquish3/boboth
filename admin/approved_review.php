<?php
session_start();

if(!isset($_SESSION["username"]) )
{
    header('location:index.html');
}
else
{
	echo "You are logged in as: " . $_SESSION["username"];// . ": " . $_SESSION["user_id"];
}
	echo "<br /><a href='logout.php'>Logout</a>";
?>

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
<link rel="shortcut icon" href="../images/logo.ico" type="image/png">
<link rel="stylesheet" href="../css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="../css/isotope.css" media="screen" />
<link rel="stylesheet" href="../js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
<link href="../css/animate.css" rel="stylesheet" media="screen">
<!-- Owl Carousel Assets -->
<link href="../js/owl-carousel/owl.carousel.css" rel="stylesheet">
<link rel="stylesheet" href="../css/styles.css" />
<!-- Font Awesome -->
<link href="../font/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>

<div id="#top"></div>

<?php
	//MySQL Database Connect 
	include '../datalogin.php';

	if(isset($_POST["submit"]))
	{	
		$review_array = $_POST['review_id'];
		if(empty($review_array)) 
		{
			//echo("You didn't select any reviews. Setting all 'approved' to 0.");
			$sql = "UPDATE reviews SET approved=0";
			mysqli_query($conn, $sql);
		} 
		else
		{
			$N = count($review_array);
			//echo("You selected $N reviews(s): ");
		 
			$result = mysqli_query($conn,"SELECT * FROM reviews");
			while($row = mysqli_fetch_array($result)) 
			{	
				//go through db, grab the review_id to compare
				$db_review = $row['review_id'];

				if(in_array($db_review, $review_array))
				{
					//echo "<br />the review you approved: " . $db_review;
					$sql = "UPDATE reviews SET approved=1 WHERE review_id=".$db_review."";
					mysqli_query($conn, $sql);
				}
				else
				{
					//echo "<br />the review you set back to 0: " . $db_review;
					$sql = "UPDATE reviews SET approved=0 WHERE review_id=".$db_review."";
					mysqli_query($conn, $sql);
				}
			}
		}
	}
	$conn->close();
?>

<section id="services" class="page-section colord">
  <div class="container">
    <div class="heading text-center"> 
      <!-- Heading -->
	  <br /><br /><br />
      <h2>Changes Saved</h2>
      
	  <p><a href="admin_home.php" style="color:white">View Changes</a></p>
	  <p><a href="../index.html" style="color:white">Return Home</a></p>
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
<script src="js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script> 
<script src="js/jquery.nav.js" type="text/javascript"></script> 
<script src="js/jquery.fittext.js"></script> 
<script src="js/waypoints.js"></script> 
<script src="js/custom.js" type="text/javascript"></script> 
<script src="js/owl-carousel/owl.carousel.js"></script>
</body>
</html>