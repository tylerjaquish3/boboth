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
	<link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">

	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
	<!-- <link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" /> -->
	<link href="css/animate.css" rel="stylesheet" media="screen">
	<!-- Owl Carousel Assets -->
	<!-- <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet"> -->
	<!-- Font Awesome -->
	<link href="font/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/styles.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">
	<link rel="stylesheet" href="css/responsive.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">

</head>

<body>
	<?php	

	$showMessage = false;
	if (isset($_GET['success']) && $_GET['success']) {
		$showMessage = true;
	}
	?>
	<header class="header">
		<nav class="navbar navbar-inverse" role="navigation">
			<div class="navbar-header">
				<button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> 
					<span class="sr-only">Toggle navigation</span> 
					<span class="icon-bar"></span> 
					<span class="icon-bar"></span> 
					<span class="icon-bar"></span> 
				</button>
				<a href="#" class="navbar-brand scroll-top logo animated bounceInLeft" style="margin-left: 2rem">
					<img class="desktop-only" src="images/logo.png" width="50">
					<b>Boboth Vision Clinic</b>
				</a> 
			</div>
			<div id="main-nav" class="collapse navbar-collapse">
				<ul class="nav navbar-nav" id="mainNav">
					<li class="active" id="firstLink"><a href="#services" class="scroll-link">Services</a></li>
					<li><a href="#glasses" class="scroll-link">Glasses</a></li>
					<li><a href="#aboutUs" class="scroll-link">Doctors</a></li>
					<li><a href="#work" class="scroll-link">Testimonials</a></li>
					<li><a href="#contactUs" class="scroll-link">Contact Us</a></li>
				</ul>
			</div>
		</nav>
	</header>
	
	<div id="#top"></div>

	<!-- Services -->
	<section id="services" class="services-parlex">
		<div class="parlex-back">
			<div class="container">
				<div class="heading text-center"> 
					<h2>Our Services</h2>
					<p>In our mission to provide the best eye care possible, we are committed to educating our patients and providing personalized eye care to the people 
					of the Lower Yakima Valley. At Boboth Vision Clinic, you will find eye care professionals who genuinely care about your health and vision. 
					We are dedicated to providing exceptional personal service to everyone who walks through our door.</p>
				</div>
				<div class="row"> 
					<div class="col-md-1"></div>
					<div class="col-md-2 text-center c1" onclick="requestAppointment(0);" style="cursor: pointer;"> 
						<i class="fa fa-life-ring fa-2x circle"></i>
						<h3><span class="id-color">Eye Health Exams</span></h3>
						<p style="color: #fff">Regularly scheduled exams are an important part of preventive health care and maintaining good vision.</p>
					</div>
					<div class="col-md-2 text-center c2" onclick="requestAppointment(1);" style="cursor: pointer;"> 
						<i class="fa fa-plus-square fa-2x circle"></i>
						<h3><span class="id-color">Pre-Surgical Evals</span></h3>
						<p style="color: #fff">Before undergoing cataract or LASIK surgery, we evaluate & prepare patients with thorough tests & explanation. </p>
					</div>
					<div class="col-md-2 text-center c1" onclick="requestAppointment(2);" style="cursor: pointer;"> 
						<i class="fa fa-eye fa-2x circle"></i>
						<h3><span class="id-color">Contact Lens Fittings</span></h3>
						<p style="color: #fff">A fitting appointment involves both a consultation and measurement to ensure the right fit for your lenses.</p>
					</div>
					<div class="col-md-2 text-center c2" onclick="requestAppointment(3);" style="cursor: pointer;"> 
						<i class="fa fa-child fa-2x circle"></i>
						<h3><span class="id-color">Family Eye Care</span></h3>
						<p style="color: #fff">Our clinic provides eye exams for the whole family - from your children to your grandparents.</p><br />
					</div>
					<div class="col-md-2 text-center c1" onclick="requestAppointment(4);" style="cursor: pointer;"> 
						<i class="fa fa-stethoscope fa-2x circle"></i>
						<h3><span class="id-color">Diabetic Eye Exam</span></h3>
						<p style="color: #fff">Annual dilated eye exams are critical to fighting the harmful effects that diabetes can have on your eyes.</p>
					</div>
				</div>
			</div>
			<br /><br /><br />
		</div>
	</section>

	<section id="glasses" class="page-section page">
		<div class="container">
			<div class="row text-center">
				<div class="col-xs-12 col-md-3 col-md-push-3">
					<img src="/images/2B674052.jpg">
				</div>
				<div class="col-xs-12 col-md-3 col-md-push-3">
					<div class="hidden-xs" style="margin-top: 40px;"></div>
					<button class="myButton" onclick="window.location = 'https://www.framesdata.com/mfg/BOBOTH-VISION-CLINIC';">Try on our glasses here, VIRTUALLY!</button><br />
				</div>
			</div>
			<div class="row" style="margin-top: 20px;">
				<div class="col-xs-12 text-center">
					(These are all the frames we have access to order. We are happy to order frames so you can try them on at our clinic. Have any questions or want to order some glasses? You can call us at <a href="tel:5098822650">509.882.2650</a>, or email us at <a href="mailto:doctors@bobothvision.com">doctors@bobothvision.com</a>, or send us a message on <a href="https://facebook.com/bobothvision">Facebook</a>.)
				</div>
				<div class="visible-xs" style="margin-top: 60px;"></div>
			</div>
		</div>
	</section>

	<!--About us -->
	<section id="aboutUs">
		<div class="container">
			<div class="heading text-center"> 
				<h2>Our Doctors</h2>
				<p>Boboth Vision Clinic is a family owned and operated practice. We have been proudly serving the community for over 35 years, and have grown from a small, single-doctor practice into one of the leading providers in the Lower Valley. We are pleased to be able to offer innovative diagnostic and treatment options, as well as top-of-the-line retail eyewear. Our doctors and staff pride themselves on taking the necessary time with each patient to provide exceptional service in a comfortable, caring, and professional environment.
			</div>
			<div class="team-content text-center">
				<img class="img-responsive" src="images/boboth-min.jpg" alt="BVC Doctors">
			</div>
			<div class="row" style="margin-top: 4rem">
				<div class="col-xs-12 col-md-4 text-center">
					<img src="images/everett.jpg">
					<h2>Dr. Everett Boboth</h2>
					After graduating from Pacific University College of Optometry in Forest Grove, Oregon, in 2012, Dr. Everett moved to Grandview to join his father in practicing optometry. He has enjoyed researching and implementing innovative technology in the clinic to better serve the patients. He lives in Sunnyside and enjoys serving in his local church, playing and watching sports, having adventures, and spending time with his wife and four kids.
				</div>
				<div class="col-xs-12 col-md-4 text-center">
					<img src="images/cole.jpg">
					<h2>Dr. Cole Boboth</h2>
					Dr. Cole joined the team of physicians in 2014 following his graduation from Pacific University College of Optometry in Forest Grove, Oregon. He has enjoyed developing Boboth Vision Clinic’s in-house lens edging service, enabling patients to get their glasses on the same day. Dr. Cole lives in Grandview with his wife, Laura, and their two kids, and he enjoys golfing, serving in his local church, family bike rides, and wrestling with his kids.
				</div>
				<div class="col-xs-12 col-md-4 text-center">
					<img src="images/cameron.jpg">
					<h2>Dr. Cameron Boboth</h2>
					After Dr. Cameron graduated from Midwestern University in Phoenix, Arizona, in 2017, he then embarked on a Pediatric and Vision Therapy residency in Arkansas where he’d stay until 2019. He joined the Boboth Vision Clinic team in June 2020 and has brought his expertise to the valley! Dr. Cameron has implemented new screening techniques and vision therapy at the clinic. He lives in West Richland and enjoys golfing, spending time with family, and mining cryptocurrency.
				</div>
			</div>
	  	</div>
	</section>

	<!--Reviews -->
	<section id="work" class="page-section page">
		<div class="container text-center">
			<div class="heading">
				<h2>Testimonials</h2>
				<p>Customer satisfaction is our number one priority. We take pride in providing the best eye care. 
				That is why we appreciate when our patients take the time to tell us what makes us extraordinary and what needs improvement.</p>

				<div id="text-carousel" class="carousel slide" data-ride="carousel">
				    <!-- Wrapper for slides -->
				    <div class="row">
				        <div class="col-md-offset-2 col-md-8 col-xs-12" id="testimonial-div">
				            <div class="carousel-inner">
				                <div class="item active">
				                    <div class="carousel-content">
			                            <p><i class="fa fa-quote-left"></i> Dr. Everett was very caring and explained in great detail also went back to charts to last year visit to compare this exam. Great doctor! <i class="fa fa-quote-right"></i></p>
				                    </div>
				                </div>
				                <div class="item">
				                    <div class="carousel-content">
			                            <p><i class="fa fa-quote-left"></i> I enjoyed the staff friendless & willingness to help. Dr. Cole is genuine. <i class="fa fa-quote-right"></i></p>
				                    </div>
				                </div>	
				                <div class="item">
				                    <div class="carousel-content">
			                            <p><i class="fa fa-quote-left"></i> Appreciated the thoroughness of my exam and and the time taken to answer questions. <i class="fa fa-quote-right"></i></p>
				                    </div>
				                </div>	
				                <div class="item">
				                    <div class="carousel-content">
			                            <p><i class="fa fa-quote-left"></i> Dr. Fred Boboth has been my optometrist for probably twenty years. The eye care is excellent; he and his staff are always courteous, friendly and helpful. <i class="fa fa-quote-right"></i></p>
				                    </div>
				                </div>	
				                <div class="item">
				                    <div class="carousel-content">
			                            <p><i class="fa fa-quote-left"></i> Had a nice visit & the reception was the best. The woman went out of her way to help me with my selection & an easier way to get prescriotion easier :-D Thank you. <i class="fa fa-quote-right"></i></p>
				                    </div>
				                </div>
				                <div class="item">
				                    <div class="carousel-content">
			                            <p><i class="fa fa-quote-left"></i> Loved the environment and the friendly staff. Definitely coming back and recommending this palace to my friends and family! <i class="fa fa-quote-right"></i></p>
				                    </div>
								</div>	

								<!-- ==========================NEW ONES============================= -->
								<div class="item">
									<div class="carousel-content">
										<p><i class="fa fa-quote-left"></i> 
											I love going here to have my eyes checked. They are very nice and you are in and out. If you have questions, they will sit and talk to you.<i class="fa fa-quote-right"></i></p>
									</div>
								</div>
								<div class="item">
									<div class="carousel-content">
										<p><i class="fa fa-quote-left"></i> 
											Staff was very friendly, the waiting area was set up according to our guidelines and the rooms were clean. The doctor was very nice and answered all my questions and concerns.<i class="fa fa-quote-right"></i></p>
									</div>
								</div>
								<div class="item">
									<div class="carousel-content">
										<p><i class="fa fa-quote-left"></i> 
											Great location, friendly staff, state of the art equipment, new building, and top line Doctors!<i class="fa fa-quote-right"></i></p>
									</div>
								</div>
								<div class="item">
									<div class="carousel-content">
										<p><i class="fa fa-quote-left"></i> 
											The dr. Was very good and nice.<i class="fa fa-quote-right"></i></p>
									</div>
								</div>
								<div class="item">
									<div class="carousel-content">
										<p><i class="fa fa-quote-left"></i> 
											I enjoy Maria M. She is always so helpful and informative. I have been very pleased and like going to Boboth. Thank you<i class="fa fa-quote-right"></i></p>
									</div>
								</div>
								<div class="item">
									<div class="carousel-content">
										<p><i class="fa fa-quote-left"></i> 
											Nice, new facility. Very clean. Staff is so friendly and helpful. Dr. Everett was knowledgeable and up on the latest updates for contact lenses.<i class="fa fa-quote-right"></i></p>
									</div>
								</div>
								<div class="item">
									<div class="carousel-content">
										<p><i class="fa fa-quote-left"></i> 
											It was nice to walk into a friendly atmosphere. The Eye Doctor listened to my concerns and answered all my questions.<i class="fa fa-quote-right"></i></p>
									</div>
								</div>
								<div class="item">
									<div class="carousel-content">
										<p><i class="fa fa-quote-left"></i> 
											Was great to be in a new building a lot bigger not feeling so crowded. And of course the help was excellent as always. And Maria is a fantastic worker. Thank You All<i class="fa fa-quote-right"></i></p>
									</div>
								</div>
								<div class="item">
									<div class="carousel-content">
										<p><i class="fa fa-quote-left"></i> 
											The Doctor and staff are always so personable and kind, making visits very comfortable. The new office is incredible and is very accommodating for the current state of social distancing.<i class="fa fa-quote-right"></i></p>
									</div>
								</div>
								<div class="item">
									<div class="carousel-content">
										<p><i class="fa fa-quote-left"></i> 
											Dr. Everett is about the friendliest person you will meet. He greets all his patients as though he's been looking forward to seeing them all day. In fact, the entire staff is patient and friendly. This is a very professional family-run practice.<i class="fa fa-quote-right"></i></p>
									</div>
								</div>
								<div class="item">
									<div class="carousel-content">
										<p><i class="fa fa-quote-left"></i> 
											Excellent doctors and I've been going to the clinic since I was a kid and I have never had no issues with the doctor's office all the doctors who work here are very cool and work with you pretty well cool cool.😃and the staff treats you really well with respect and helps you out if you need it.<i class="fa fa-quote-right"></i></p>
									</div>
								</div>
								<div class="item">
									<div class="carousel-content">
										<p><i class="fa fa-quote-left"></i> 
											Great communication. Detailed explanations of what we were doing and why. Super friendly and helpful!<i class="fa fa-quote-right"></i></p>
									</div>
								</div>
								<div class="item">
									<div class="carousel-content">
										<p><i class="fa fa-quote-left"></i> 
											Friendly knowledgeable staff<i class="fa fa-quote-right"></i></p>
									</div>
								</div>
				                
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
	<!--<section id="appointment" class="page-section">
		<div class="container">
		    <div class="heading text-center"> 
				<h2>To request contact lenses, click the button below and complete the form.</h2> <p>(Note: A current prescription is required.)</p>
				<a href="http://boboth.myclstore.com" class="myButton">Order Contact Lenses</a>
		    </div>
		</div>
	</section>-->

	<!-- Contact Us -->
	<section id="contactUs" class="contact-parlex">
	  	<div class="parlex-back">
	    	<div class="container">
				<div class="heading text-center"> 
					<h2>Contact Us</h2>
				</div>
				
				<div class="row">

					<div class="col-md-6">
						<table class="table">
							<tbody>
							<tr>
								<th scope="row">Address</th>
								<td>1023 W. Wine Country Rd<br />
									Grandview, WA 98930</td>
							</tr>
							<tr>
								<th scope="row">Phone</th>
								<td><a href="tel:509-882-2650">509.882.2650</a></td>
							</tr>
							<tr>
								<th scope="row">Fax</th>
								<td>509.882.4225</td>
							</tr>
							<tr>
								<th scope="row">Email</th>
								<td><a href="mailto:doctors@bobothvision.com">doctors@bobothvision.com</a></td>
							</tr>
							<tr>
								<td colspan="2">
									<h3><a href="https://facebook.com/bobothvision"><i class="fa fa-facebook-square"></i> Like Us On Facebook</a></h3>
								</th>
							</tbody>
						</table>
					</div>

					<div class="col-md-6 col-xs-12">
						<form id="contact_form" class="contact-form" method="post" action="send_email.php">
							<fieldset>
								<div class="coll-1">							  
									<input name="name" type="text" value="" required placeholder="Name:"><br>
								</div>
								<div class="coll-2">
									<input name="email" type="email" value="" required placeholder="E-mail:"><br>
								</div>
								<div class="coll-3">
									<input name="phone" type="tel" value="" placeholder="Phone:"><br>
								</div>
								<div class="coll-4">
									<input type="checkbox" name="request-appt" id="request_appt_check">Request Appointment
								</div>
								<div id="appt_fields" style="display: none;">
									<div class="">
										Appointment Type:
										<select name="appointment-type" id="appt_type">
											<option value="Eye Health Exam">Eye Health Exam</option>
											<option value="Pre-Surgical Evaluation">Pre-Surgical Evaluation</option>
											<option value="Contact Lens Fitting">Contact Lens Fitting</option>
											<option value="Family Eye Care">Family Eye Care</option>
											<option value="Diabetic Eye Exam">Diabetic Eye Exam</option>
											<option value="Other">Other</option>
										</select><br>
									</div>
									<div>
										<input name="requested-date" type="text" placeholder="Requested Date:"><br>
									</div>
									<div>
										<input name="requested-time" type="text" placeholder="Requested Time:"><br>
									</div>
								</div>
								<div class="clear"></div>
								<div>
									<textarea name="message" required placeholder="Comments:"></textarea><br>
								</div>
								
								<input type="hidden" name="msg-type" value="generic">
								
							</fieldset>
							<div class="buttons-wrapper clearfix">
								<!-- <input type="submit" id="send-msg"> -->
								<input type="submit" class="g-recaptcha" 
									data-sitekey="6LfLzVEaAAAAAOxKPWKkOMZE99xTDLrFTi5RuZm7" 
									data-callback='onSubmit' 
									data-action='submit'
									data-size="invisible">
							</div>
						</form>
					</div>
				</div>

				<div class="row move-down30">
					<div class="col-xs-12 text-center">
						<h4>Office Hours</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-xs-12 text-center">
						<b>Monday - Wednesday</b> <br />
						8:30 am - 5:30 pm
					</div>
					<div class="col-md-4 col-xs-12 text-center">
						<b>Thursday</b><br />
						8:00 am - 5:00 pm
					</div>
					<div class="col-md-4 col-xs-12 text-center">
						<b>Friday</b><br />
						7:00 am - 12:00 pm
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="no-margin">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2758.3106441077634!2d-119.91960998441557!3d46.26393047911856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54981867a8322fb5%3A0xc6e2ae04fbe6d6d5!2s1023%20Wine%20Country%20Rd%2C%20Grandview%2C%20WA%2098930!5e0!3m2!1sen!2sus!4v1568907156710!5m2!1sen!2sus" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
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

	<div class="modal" tabindex="-1" role="dialog" id="success">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body text-center">
					<p>Your message was successfully sent.</p>
				
					<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<!--[if lte IE 8]><script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script><![endif]--> 
	<script src="js/jquery-1.8.2.min.js" type="text/javascript"></script> 
	<script src="js/bootstrap.min.js" type="text/javascript"></script> 

	<script src="https://www.google.com/recaptcha/api.js"></script>

</body>

<script type="text/javascript">
	if ("<?php echo $showMessage; ?>") {
		$('#success').modal('show');
	}

	function requestAppointment(apptType)
	{
		location.href = '#contactUs';
		$('#request_appt_check').prop('checked', true);
		$('#appt_type option:eq('+apptType+')').prop('selected', true);
		$('#appt_fields').show();
	}

	$('#request_appt_check').change(function () {
		$('#appt_fields').toggle();
	});

	function onSubmit(token) {
		document.getElementById("contact_form").submit();
	}

</script>
</html>
