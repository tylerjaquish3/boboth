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
	<link href="../css/animate.css" rel="stylesheet" media="screen">
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
	<header class="header quote-header">
		<div class="container">
			<nav class="navbar navbar-inverse" role="navigation">
				<div class="navbar-header">
					<button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
					<a href="#" class="navbar-brand scroll-top logo animated bounceInLeft"><b>Boboth Vision Clinic</b></a> 
				</div>
				<div id="main-nav" class="collapse navbar-collapse">
					<ul class="nav navbar-nav" id="mainNav">
						<section class="quote">
							Total Quote:
							<span class="grand-total" id="grand-total"></span>
						</section>
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

	<div class="row">
		<div class="col-xs-12">
			<!--Form -->
			<section id="work" class="page-section page down60">
				<div class="container">
					<div class="heading">
						<h2 class="text-center">New Quote</h2>

						<div class="row down40">
							<div class="col-xs-12 col-md-6" class="pull-left">
								Patient Name:
							</div>
							<div class="col-xs-12 col-md-6">
								<input type="text" id="patient-name" class="form-control">
							</div>

							<div class="col-xs-12 col-md-6" class="pull-left">
								Insurance:
							</div>
							<div class="col-xs-12 col-md-6">
								<select id="insurance-select" class="full-width">
									<option>Select</option>
									<option value="general">General</option>
									<option value="vsp">VSP Only</option>
									<option value="nbn">NBN Only</option>
								</select>
							</div>
						</div>

						<?php include 'generalForm.php'; ?>

						<div class="row" id="vsp-form" style="display:none;">
							vsp form
						</div>

						<div class="row" id="nbn-form" style="display:none;">
							nbn form
						</div>
					</div>	 
				</div>
			</section>
		</div>
		<!-- <div class="col-xs-12 col-md-3">
			<section class="down60 quote">
				Total Quote: <br />
				<span class="grand-total" id="grand-total"></span>
			</section>
		</div> -->
	</div>

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
