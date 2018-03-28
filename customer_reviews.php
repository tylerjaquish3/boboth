<!DOCTYPE HTML>

<!--Tyler Jaquish, Developer
	2015
-->

<html>
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
	<link rel="stylesheet" href="css/styles.css?version=1.0" />
	<!-- Font Awesome -->
	<link href="font/css/font-awesome.min.css" rel="stylesheet">

	<style type="text/css">
		img {
			border-style: solid;
			border-color: #fff;
			border-width: 0px;
			border-radius: 10px;
			box-shadow: 5px 5px 5px #888888;
			width: 100px;
		}
	</style>
		
	</head>
	<body class="homepage" bgcolor="white">
	
	<!-- Main -->
		<div id="main">
			<div class="container">
				<div class="row">
					<div id="sidebar" class="3u">
						<section>
							
							<?php
							//MySQL Database Connect 
							include 'datalogin.php';
							
							//this function is used to print the corresponding stars image
							function get_stars($input_int)
							{
								echo '<img src="images/star' . $input_int . '.jpg">';
							}
							
							//calculations for summary table - all reviews
							$total = $sum_5 = $sum_4 = $sum_3 = $sum_2 = $sum_1 = $index = 0;
							
							$result = mysqli_query($conn,"SELECT * FROM reviews WHERE approved = 1");
							while($row = mysqli_fetch_array($result)) 
							{
								switch($row['likelihood']){
									case 1:
										$sum_1++;
										break;
									case 2:
										$sum_2++;
										break;
									case 3:
										$sum_3++;
										break;
									case 4:
										$sum_4++;
										break;
									case 5:
										$sum_5++;
										break;
								}
								$total++;  
							}
							if($total > 0)
							{
								//while there are approved reviews in the db, display them
								$result = mysqli_query($conn,"SELECT * FROM reviews ORDER BY review_id DESC");
								while($row = mysqli_fetch_array($result)) 
								{	
									if($row['user_name'] == NULL)
									{
										$user_name = "Anonymous";
									}
									else
									{
										$user_name = $row['user_name'];
									}
									$date = date("F d, Y", strtotime($row['entry_datetime']));
								
									if($index & 1)
									{
										echo "<div class='testimonialR'>\"" . $row['comments'] . "\"<br />";
										echo "<span class='detail'>". $user_name;
										echo "<br />" . $date . "</span></div>";
									}
									else
									{
										echo "<div class='testimonialL'>\"" . $row['comments'] . "\"<br />";
										echo "<span class='detail'>". $user_name;
										echo "<br />" . $date . "</span></div>";
									}
									
									$index++;
								}
							}
							else
							{
								echo "No testimonials yet. Click the link above to get us started.";
							}
							
							?>	
						</section>
					</div>
				</div>
			</div>
		</div>
	<!-- Main -->

	</body>
</html>