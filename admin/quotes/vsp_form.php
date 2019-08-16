<div class="row" id="vsp-form" style="display:none;">
	
    <div class="col-xs-12 col-md-6">
        Coverage Plan:
    </div>
    <div class="col-xs-12 col-md-6">
        <select id="vsp-coverage-plan-select" name="vsp-coverage-plan" class="full-width">
            <option>Select</option>
            <option value="signature-single-vision">Signature Single Vision Only</option>
            <option value="signature-multifocal">Signature Multifocal Only</option>
            <option value="choice-single-vision">Choice Single Vision Only</option>
            <option value="choice-multifocal">Choice Multifocal Only</option>
        </select>
    </div>
</div>

<?php include 'signature_single_vision_form.php'; ?>
<?php include 'signature_multifocal_form.php'; ?>
<?php include 'choice_single_vision_form.php'; ?>
<?php include 'choice_multifocal_form.php'; ?>

<script type="text/javascript">

	var script = document.createElement("script");
	script.type = "text/javascript";
	
	$('#vsp-coverage-plan-select').change(function () {
		$("#script").html('');

		value = $('#vsp-coverage-plan-select').val();
		if (value == 'signature-single-vision') {
			$('#signature-multifocal-form').hide("fold");
			$('#choice-single-vision-form').hide("fold");
			$('#choice-multifocal-form').hide("fold");
			$('#signature-single-vision-form').show("fold");
			script.src = "js/ssv.js";
		} else if (value == 'signature-multifocal') {
			$('#choice-single-vision-form').hide("fold");
			$('#choice-multifocal-form').hide("fold");
			$('#signature-single-vision-form').hide("fold");
			$('#signature-multifocal-form').show("fold");
			script.src = "js/smf.js";
		} else if (value == 'choice-single-vision') {
			$('#signature-multifocal-form').hide("fold");
			$('#choice-multifocal-form').hide("fold");
			$('#signature-single-vision-form').hide("fold");
			$('#choice-single-vision-form').show("fold");
			script.src = "js/csv.js";
		} else if (value == 'choice-multifocal') {
			$('#signature-multifocal-form').hide("fold");
			$('#choice-single-vision-form').hide("fold");
			$('#signature-single-vision-form').hide("fold");
			$('#choice-multifocal-form').show("fold");
			script.src = "js/cmf.js";
		}

		$("#script").append(script);

		$('#patient-signature').show("fold");
	});
</script>