<?php
session_start();
include('../datalogin.php');
if (!isset($_SESSION["user_id"])) {
    header('location:'.URL);
}
?>
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
	<link rel="shortcut icon" href="/images/logo.ico" type="image/png">
	<link rel="stylesheet" href="/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="/css/isotope.css" media="screen" />
	<link rel="stylesheet" href="/js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
	<link href="../css/animate.css" rel="stylesheet" media="screen">
	<!-- Owl Carousel Assets -->
	<link href="/js/owl-carousel/owl.carousel.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="/font/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="/css/styles.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">
	<link rel="stylesheet" href="/css/responsive.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">

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
						<li class="active" id="firstLink"><a href="/admin/admin_home.php" class="scroll-link">Dashboard</a></li>
						<li class="active" id="firstLink"><a href="new_quote.php" class="scroll-link">New Quote</a></li>
						<li class="active" id="firstLink"><a href="/admin/logout.php" class="scroll-link">Log Out</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</header>
	
	<div id="#top"></div>

	<!-- Show All Quotes -->
	<section id="appointment" class="page-section down60">
		<div class="container">
		    <div class="heading text-center"> 
		        <h2>All Quotes</h2>
		    </div>
			
		    <div class="section group">
				<table class="table table-striped table-responsive" id="datatable-allquotes">
					<thead>
						<th>Patient</th>
						<th>Date</th>
						<th></th>
					</thead>
					<tbody>
					<?php
						$result = mysqli_query($conn, "SELECT * FROM quotes");
						while ($row = mysqli_fetch_array($result)) { ?>
							<tr>
								<td><?php echo $row['patient_name']; ?></td>
								<td><?php echo $row['updated_at']; ?></td>
								<td><a href="viewQuote.php?id=<?php echo $row['id']; ?>">View</a></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
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
	<script src="/js/jquery-1.8.2.min.js" type="text/javascript"></script> 
	<script src="/js/bootstrap.min.js" type="text/javascript"></script> 
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

</body>

<script type="text/javascript">
	$(document).ready(function() {

		$('#datatable-allquotes').DataTable({
			"order": [
				[1, "desc"]
			]
		});

	});
	
</script>
</html>
