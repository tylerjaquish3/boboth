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
	<!-- Font Awesome -->
	<link href="../font/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/styles.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">
	<link rel="stylesheet" href="../css/responsive.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">

</head>

<body>
	<?php	

	$showMessage = false;
	if (isset($_GET['success']) && $_GET['success']) {
		$showMessage = true;
	}
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
						<!-- <li class="active" id="firstLink"><a href="#services" class="scroll-link">Services</a></li>
						<li><a href="#aboutUs" class="scroll-link">Doctors</a></li>
						<li><a href="#work" class="scroll-link">Testimonials</a></li>
						<li><a href="#appointment" class="scroll-link">Requests</a></li>
						<li><a href="#contactUs" class="scroll-link">Contact Us</a></li> -->
					</ul>
				</div>
			</nav>
		</div>
	</header>
	
	<div id="#top"></div>

	<!--Reviews -->
	<section id="work" class="page-section page">
		<div class="container text-center">
			<div class="heading">
				<h2>New Quote</h2>

				<div class="row">
					<div class="col-xs-12 col-md-6" class="pull-left">
						Patient Name:
					</div>
					<div class="col-xs-12 col-md-6">
						<input type="text" id="patient-name">
					</div>

					<div class="col-xs-12 col-md-6" class="pull-left">
						Insurance:
					</div>
					<div class="col-xs-12 col-md-6">
						<select id="insurance-select" class="full-width">
							<option value="general">General</option>
							<option value="vsp">VSP Only</option>
							<option value="nbn">NBN Only</option>
						</select>
					</div>
				</div>

				<div class="row" id="general-form" style="display:none;">
					<div class="col-xs-12 col-md-4">
						Type:
					</div>
					<div class="col-xs-12 col-md-6">
						<select id="insurance-select" class="full-width">
							<option value="single-vision">Single Vision (SV)</option>
							<option value="progressive">Progressive (No-Line)</option>
							<option value="lined-bifocal">Lined Bifocal 28/Round 24</option>
							<option value="trifocal">Trifocal</option>
							<option value="shamir-duo-pal">Shamir Duo PAL</option>
							<option value="blended-bifocal">Blended Bifocal</option>
						</select>
					</div>
					<div class="col-xs-12 col-md-2">
						<input type="number" id="type-number">
					</div>

					<div class="col-xs-12 col-md-4">
						Material:
					</div>
					<div class="col-xs-12 col-md-6">
						<select id="insurance-select" class="full-width">
							<option value="plastic">PLASTIC</option>
							<option value="regular-sv">Regular SV GLASS</option>
							<option value="polycarb">POLYCARB</option>
							<option value="trivex">TRIVEX</option>
							<option value="hi-index-glass">HI INDEX GLASS/GLASS PAL</option>
							<option value="1.67-hi-index">1.67 HI Index Plastic</option>
							<option value="1.70-hi-index">1.70 HI Index Plastic</option>
						</select>
					</div>
					<div class="col-xs-12 col-md-2">
						<input type="number" id="material-number">
					</div>

					<div class="col-xs-12 col-md-4 pull-left">
						Tint:
					</div>
					<div class="col-xs-12 col-md-6">
						<select id="tint-select" class="full-width">
							<option value="clear">Clear</option>
							<option value="transitions">Transitions</option>
							<option value="photogrey-thindark">PhotoGrey Thin&Dark</option>
							<option value="photogrey-extra">PhotoGrey Extra</option>
							<option value="photogrey-tint">PhotoGrey Tint</option>
							<option value="solid-mirror-glass">SOLID MIRROR TINT (GLASS)</option>
							<option value="gradient-mirror-glass">GRADIENT MIRROR TINT (GLASS)</option>
							<option value="solid-mirror-plastic">SOLID MIRROR TINT (PLASTIC)</option>
							<option value="gradient-mirror-plastic">GRADIENT MIRROR TINT (PLASTIC)</option>
							<option value="regular-plastic">Regular TINT (PLASTIC)</option>
						</select>
					</div>
					<div class="col-xs-12 col-md-2">
						<input type="number" id="tint-number">
					</div>

					<div class="col-xs-12 col-md-4 pull-left">
						Coating:
					</div>
					<div class="col-xs-12 col-md-6">
						<select id="coating-select" class="full-width">
							<option value="none">No Coatings</option>
							<option value="standard-ar">Standard AR coat</option>
							<option value="level-b-ar">Level B AR coat</option>
							<option value="level-c-ar">Level C AR coat</option>
							<option value="level-d-ar">Level D AR coat</option>
							<option value="scratch-coat">Scratch coat</option>
							<option value="uv-protection">UV Protection</option>
						</select>
					</div>
					<div class="col-xs-12 col-md-2">
						<input type="number" id="coating-number">
					</div>

					<div class="col-xs-12 col-md-4">
						Edge Treatment:
					</div>
					<div class="col-xs-12 col-md-6">
						<select id="edge-treatment-select" class="full-width">
							<option value="roll-polished">Roll & Polished</option>
							<option value="edge-tint">Edge Tint</option>
							<option value="shelf-bevel">Shelf Bevel</option>
							<option value="none">None</option>
						</select>
					</div>
					<div class="col-xs-12 col-md-2">
						<input type="number" id="edge-treatment-number">
					</div>

					<div class="col-xs-12 col-md-6">
						If buying new frames, retail cost:
					</div>
					<div class="col-xs-12 col-md-6">
						<input type="text" id="frames-cost">
					</div>

					<div class="col-xs-12 col-md-6">
						If any copayments, amount:
					</div>
					<div class="col-xs-12 col-md-6">
						<input type="text" id="copayments">
					</div>

					<div class="col-xs-12 col-md-6">
						If patient has insurance, coverage amount:
					</div>
					<div class="col-xs-12 col-md-6">
						<input type="text" id="insurance-coverage">
					</div>

					<div class="col-xs-12 col-md-6">
						Discount:
					</div>
					<div class="col-xs-12 col-md-6">
						<input type="text" id="discount">
					</div>
				</div>

				<div class="row" id="vsp-form" style="display:none;">
vsp form
				</div>

				<div class="row" id="nbn-form" style="display:none;">
nbn form
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

	<div class="modal" tabindex="-1" role="dialog" id="success">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body text-center">
					<p>Your quote was saved.</p>
				
					<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<!--[if lte IE 8]><script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script><![endif]--> 
	<script src="../js/jquery-1.8.2.min.js" type="text/javascript"></script> 
	<script src="../js/bootstrap.min.js" type="text/javascript"></script> 

</body>

<script type="text/javascript">

	$('#insurance-select').click(function () {
		value = $('#insurance-select').val();
		if (value == 'vsp') {
			$('#nbn-form').hide();
			$('#general-form').hide();
			$('#vsp-form').show();
		} else if (value == 'nbn') {
			$('#vsp-form').hide();
			$('#general-form').hide();
			$('#nbn-form').show();
		} else if (value == 'general') {
			$('#nbn-form').hide();
			$('#vsp-form').hide();
			$('#general-form').show();
		}
	});

	if ("<?php echo $showMessage; ?>") {
		$('#success').modal('show');
	}
</script>
</html>
