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
	<!-- Font Awesome -->
	<link href="font/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/styles.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">

</head>

<body>
	<?php
	//MySQL Database Connect 
	include 'datalogin.php';	
	?>
	<header class="header">
		<div class="container">
			<nav class="navbar navbar-inverse" role="navigation">
				<div class="navbar-header">
					<button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
					<a href="#" class="navbar-brand scroll-top logo  animated bounceInLeft"><b>Boboth Vision Clinic</b></a> 
				</div>
				<div id="main-nav" class="collapse navbar-collapse">
					<ul class="nav navbar-nav" id="mainNav">
						<li class="active" id="firstLink"><a href="#services" class="scroll-link">Services</a></li>
						<li><a href="#aboutUs" class="scroll-link">Doctors</a></li>
						<li><a href="#work" class="scroll-link">Testimonials</a></li>
						<li><a href="#appointment" class="scroll-link">Requests</a></li>
						<li><a href="#contactUs" class="scroll-link">Contact Us</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</header>
	
	<div id="#top"></div>

	<!-- Services -->
	<section id="services" class="services-parlex">
		<div class="parlex-back">
			<div class="container">
				<div class="heading text-center"> 
					<!-- Heading -->
					<h2>Our Services</h2>
					<p>In our mission to provide the best eye care possible, we are committed to educating our patients and providing personalized eye care to the people 
					of the Lower Yakima Valley. At Boboth Vision Clinic, you will find eye care professionals who genuinely care about your health and vision. 
					We are dedicated to providing exceptional personal service to everyone who walks through our door.</p>
				</div>
				<div class="row"> 
					<div class="col-md-1"></div>
					<!-- item -->
					<div class="col-md-2 text-center c1" onclick="location.href='http://bobothvision.lensferry.com/#/book-appointment/?locationId=5937248bf00c4b00f59debbb';" style="cursor: pointer;"> 
						<i class="fa fa-life-ring fa-2x circle"></i>
						<h3><span class="id-color">Eye Health Exams</span></h3>
						<p style="color: #fff">Regularly scheduled exams are an important part of preventive health care and maintaining good vision.</p>
					</div>
					<!-- end: --> 
					<!-- item -->
					<div class="col-md-2 text-center c2" onclick="location.href='http://bobothvision.lensferry.com/#/book-appointment/?locationId=5937248bf00c4b00f59debbb';" style="cursor: pointer;"> 
						<i class="fa fa-plus-square fa-2x circle"></i>
						<h3><span class="id-color">Pre-Surgical Evals</span></h3>
						<p style="color: #fff">Before undergoing cataract or LASIK surgery, we evaluate & prepare patients with thorough tests & explanation. </p>
					</div>
					<!-- end: --> 
					<!-- item -->
					<div class="col-md-2 text-center c1" onclick="location.href='http://bobothvision.lensferry.com/#/book-appointment/?locationId=5937248bf00c4b00f59debbb';" style="cursor: pointer;"> 
						<i class="fa fa-eye fa-2x circle"></i>
						<h3><span class="id-color">Contact Lens Fittings</span></h3>
						<p style="color: #fff">A fitting appointment involves both a consultation and measurement to ensure the right fit for your lenses.</p>
					</div>
					<!-- end: --> 
					<!-- item -->
					<div class="col-md-2 text-center c2" onclick="location.href='http://bobothvision.lensferry.com/#/book-appointment/?locationId=5937248bf00c4b00f59debbb';" style="cursor: pointer;"> 
						<i class="fa fa-child fa-2x circle"></i>
						<h3><span class="id-color">Family Eye Care</span></h3>
						<p style="color: #fff">Our clinic provides eye exams for the whole family - from your children to your grandparents.</p><br />
					</div>
					<!-- end:--> 
					<!-- item -->
					<div class="col-md-2 text-center c1" onclick="location.href='http://bobothvision.lensferry.com/#/book-appointment/?locationId=5937248bf00c4b00f59debbb';" style="cursor: pointer;"> 
						<i class="fa fa-stethoscope fa-2x circle"></i>
						<h3><span class="id-color">Diabetic Eye Exam</span></h3>
						<p style="color: #fff">Annual dilated eye exams are critical to fighting the harmful effects that diabetes can have on your eyes.</p>
					</div>
					<!-- end:--> 
				</div>
			</div>
			<br /><br /><br />
		</div>
	</section>

	<!--About us -->
	<section id="aboutUs">
		<div class="container">
			<div class="heading text-center"> 
				<h2>Our Doctors</h2>
				<p>Boboth Vision Clinic is a family owned and operated practice. Our optometrists are graduates of Sunnyside High School and Pacific University College of Optometry. 
				Our staff pride themselves on taking the necessary time with each patient to provide exceptional service in a comfortable, caring and professional environment.
				</div>
			<div class="team-content">
				<img class="img-responsive" src="images/doctors.jpg" alt="">
			</div>
	  	</div>
	</section>

	<!--Reviews -->
	<section id="work" class="page-section page">
		<div class="container text-center">
			<div class="heading">
				<h2>Testimonials</h2>
				<p>Customer satisfaction is our number one priority. We take pride in providing the best eye care. 
				That is why we appreciate when our patients take the time to tell us what makes us extraordinary, and what needs improvement.</p>

				<p><a href="review.html" style="color:white"><i class="fa fa-clipboard"></i> Leave Us a Review!</a></p>

				<div id="text-carousel" class="carousel slide" data-ride="carousel">
				    <!-- Wrapper for slides -->
				    <div class="row">
				        <div class="col-xs-offset-3 col-xs-6" id="testimonial-div">
				            <div class="carousel-inner">

				            	<?php
				            	$first = true;
				            	$result = mysqli_query($conn,"SELECT * FROM reviews WHERE approved = 1");
								while($row = mysqli_fetch_array($result)) 
								{
									?>

					                <div class="item <?php if($first) { echo 'active'; } ?>">
					                    <div class="carousel-content">
					                        <div>
					                            <p><?php echo $row['comments']; ?></p>
					                        </div>
					                    </div>
					                </div>

				                <?php 
				                	$first = false;
				            	} ?>
				                
				            </div>
				        </div>
				    </div>

					<!-- Controls --> 
					<a class="left carousel-control" href="#text-carousel" data-slide="prev">
						<i class="fa fa-angle-left"></i>
					</a>
					<a class="right carousel-control" href="#text-carousel" data-slide="next">
						<i class="fa fa-angle-right"></i>
					</a>

				</div>
			</div>	 
		</div>
	</section>

	<!-- Appointment -->
	<section id="appointment" class="page-section">
		<div class="container">
		    <div class="heading text-center"> 
		        <h2>Requests</h2>
		        <p>We strive to interact with our patients efficiently through our online forms. Make a request using the forms provided, and we will contact you soon.
		    </div>
			
		    <div class="section group">
				<div class="col span_1_of_2"> 
					<img src="images/lab-photo-remake.jpg" width="600" alt="Office">
				</div>
		        <div class="col span_2_of_2">
					<!-- Request Appointment -->
					<p>To request an appointment, <br />click the button below and complete the form.</p>
					
					<a href="http://bobothvision.lensferry.com/#/book-appointment/?locationId=5937248bf00c4b00f59debbb" class="myButton">Request Appointment</a><br /><br />
				
					<!-- Request Contact Lenses -->
					<p>To request contact lenses, <br />click the button below and complete the form. <br />(Note: A current prescription is required.)</p>
					<a href="http://boboth.myclstore.com" class="myButton">Order Contact Lenses</a>
			    </div>
			</div>
		</div>
	</section>

	<!-- Contact Us -->
	<section id="contactUs" class="contact-parlex">
	  	<div class="parlex-back">
	    	<div class="container-fluid">
				<div class="row">
					<div class="heading text-center"> 
						<h2>Contact Us</h2>
					</div>
				</div>
				<div class="row mrgn30">
			  
					<!-- Google Map -->
					<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
					<div class="col-md-5">
						<div id="gmap_canvas" style="height:350px; width:90%; margin-left:auto; margin-right: auto;">
						</div>
						<style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
					</div>
					<script type="text/javascript"> 
						function init_map()
							{var myOptions = {zoom:14,center:new google.maps.LatLng(46.261593,-119.91532890000002),mapTypeId: google.maps.MapTypeId.ROADMAP};
							map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
							marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(46.261593, -119.91532890000002)});
							infowindow = new google.maps.InfoWindow({content:"<b>Boboth Vision Clinic</b><br/>403 N. Euclid Rd<br/>Grandview, WA 98930" });
							google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});
							}
							google.maps.event.addDomListener(window, 'load', init_map);
					</script>
			
				<div class="col-md-2 text-center">
				  <h4>Address:</h4>
				  <address>
				  403 N. Euclid Rd<br />
				  Grandview, WA 98930<br />
				  </address>
				  <h4>Phone:</h4>
				  <phone>
				  (509)882-2650<br />
				  </phone>
				  <h4>Fax:</h4>
				  <fax>
				  (509)882-4225<br />
				  </fax>
				  <h4>Email:</h4>
				  <email>
				  doctors@bobothvision.com<br />
				  </email>
				  <h4>Office Hours:</h4>
					<b>Monday - Wednesday</b> <br />
					8:30 am - 5:30 pm<br />
					<b>Thursday</b><br />
					8:00 am - 5:00 pm<br />
					<b>Friday</b><br />
					7:00 am - 12:00 pm
				  
				</div>

				<div class="col-md-5 text-center">
					<img src="images/staff.jpg">
					<br /><br /><h4><a href="https://www.facebook.com/bobothvision" style="color:white"><img src="images/facebook-logo.jpg" width="25">Like Us On Facebook</a></h4>
				</div>
			
	      </div>
	    </div>
	  </div>
	</section>

	<!-- footer -->
	<section class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center"> Copyright <?php echo date('Y'); ?> | All Rights Reserved </a> </div>
			</div>
		</div>
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
