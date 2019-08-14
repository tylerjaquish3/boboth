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
	<link href="/css/animate.css" rel="stylesheet" media="screen">
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
							Total Quote: <span class="grand-total" id="grand-total"></span>
						</section>
					</ul>
				</div>
			</nav>
		</div>
	</header>
	
	<div id="#top"></div>

	<div class="row">
		<div class="col-xs-12">
			<!--Form -->
			<form name="quote-form" id="quote-form" action="#" method="POST" enctype="multipart/form-data">
				<section id="work" class="page-section page down60">
					<div class="container">
						<div class="heading">
							<h2 class="text-center">New Quote</h2>

							<div class="row down40">
								<div class="col-xs-12 col-md-6" class="pull-left">
									Patient Name:
								</div>
								<div class="col-xs-12 col-md-6">
									<input type="text" name="patient-name" id="patient-name" class="form-control">
								</div>

								<div class="col-xs-12 col-md-6" class="pull-left">
									Insurance:
								</div>
								<div class="col-xs-12 col-md-6">
									<select name="insurance" id="insurance-select" class="full-width">
										<option>Select</option>
										<option value="general">General</option>
										<option value="vsp">VSP Only</option>
										<option value="nbn">NBN Only</option>
									</select>
								</div>
							</div>

							<?php include 'general_form.php'; ?>
							<?php include 'vsp_form.php'; ?>

							<div class="row" id="nbn-form" style="display:none;">
								nbn form
							</div>
							 
							<div class="row" id="patient-signature" style="display:none;">
						        <div class="col-xs-12 col-md-6">
						            Patient Signature
					            </div>
						        <div class="col-xs-12 col-md-6">
						            <div id="signature-pad" class="signature-pad">
						                <div class="signature-pad--body">
						                    <canvas id="signatureCanvas"></canvas>
						                </div>
						                <div class="signature-pad--footer">
						                    <div class="description">Sign your name using your cursor/finger in the box above</div>

						                    <div class="signature-pad--actions">
						                        <div>
						                            <button type="button" class="button clear" data-action="clear">Clear</button>
						                        </div>
						                    </div>
						                </div>
						            </div>
						        </div>
						    </div>
						</div>
						<div class="text-center">
							<button id="save-button" class="btn btn-save" type="submit" style="display:none;">Save Quote</button>
						</div>
				    </div>
				</section>
			</form>
		</div>
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

<script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>

<script type="text/javascript">

	$('#insurance-select').click(function () {
		value = $('#insurance-select').val();
		if (value == 'vsp') {
			$('#nbn-form').hide();
			$('#general-form').hide();
			$('#vsp-form').show();
			$('#patient-signature').hide();
			$('#save-button').show();
		} else if (value == 'nbn') {
			$('#vsp-form').hide();
			$('#general-form').hide();
			$('#nbn-form').show();
			$('#save-button').show();
		} else if (value == 'general') {
			$('#nbn-form').hide();
			$('#vsp-form').hide();
			$('#general-form').show();
			$('#patient-signature').show();
			$('#signature-multifocal-form').hide();
			$('#choice-single-vision-form').hide();
			$('#choice-multifocal-form').hide();
			$('#signature-single-vision-form').hide();
			$('#save-button').show();
		}
	});

	var wrapper = document.getElementById("signature-pad");
    var clearButton = wrapper.querySelector("[data-action=clear]");
    var savePNGButton = wrapper.querySelector("[data-action=save-png]");
    var canvas = wrapper.querySelector("canvas");
    var signaturePad = new SignaturePad(canvas, {
        // It's Necessary to use an opaque color when saving image as JPEG;
        // this option can be omitted if only saving as PNG or SVG
        backgroundColor: 'rgb(255, 255, 255)'
    });

    // Adjust canvas coordinate space taking into account pixel ratio,
    // to make it look crisp on mobile devices.
    // This also causes canvas to be cleared.
    function resizeCanvas() {
        // When zoomed out to less than 100%, for some very strange reason,
        // some browsers report devicePixelRatio as less than 1
        // and only part of the canvas is cleared then.
        var ratio =  Math.max(window.devicePixelRatio || 1, 1);

        // This part causes the canvas to be cleared
        // canvas.width = canvas.offsetWidth * ratio;
        // canvas.height = canvas.offsetHeight * ratio;
        canvas.width = 400;
        canvas.height = 150;
        // canvas.getContext("2d").scale(ratio, ratio);

        // This library does not listen for canvas changes, so after the canvas is automatically
        // cleared by the browser, SignaturePad#isEmpty might still return false, even though the
        // canvas looks empty, because the internal data of this library wasn't cleared. To make sure
        // that the state of this library is consistent with visual state of the canvas, you
        // have to clear it manually.
        signaturePad.clear();
    }

    // On mobile devices it might make more sense to listen to orientation change,
    // rather than window resize events.
    window.onresize = resizeCanvas;
    resizeCanvas();

    clearButton.addEventListener("click", function (event) {
      signaturePad.clear();
    });

	$('#quote-form').submit(function (e) {
        var formData = new FormData($(this)[0]);
        var base64img = signaturePad.toDataURL();   

        formData.append('img', base64img);

            $.ajax({
                url: 'backend.php',
                type: "POST",
                data: formData,
                async: false,
                dataType: 'json',
                success: function (response) {
                    if (response.type == 'error') {
                        addAlertToPage('error', 'Error', response.message, 10);
                    } else {
                        addAlertToPage('success', 'Success', 'Your quote was saved.', 10);
                        $("#assistance_application :input").each(function(){
                            $(this).val('');
                            signaturePad.clear();
                        });
                    }
                },
                cache: false,
                contentType: false,
                processData: false
            });

        e.preventDefault();
    });
</script>
</html>
