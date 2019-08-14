<div class="row" id="vsp-form" style="display:none;">
	
    <div class="col-xs-12 col-md-6">
        Coverage Plan:
    </div>
    <div class="col-xs-12 col-md-6">
        <select id="coverage-plan-select" class="full-width">
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
	$('#coverage-plan-select').click(function () {
		value = $('#coverage-plan-select').val();
		if (value == 'signature-single-vision') {
			$('#signature-multifocal-form').hide();
			$('#choice-single-vision-form').hide();
			$('#choice-multifocal-form').hide();
			$('#signature-single-vision-form').show();
		} else if (value == 'signature-multifocal') {
			$('#signature-multifocal-form').show();
			$('#choice-single-vision-form').hide();
			$('#choice-multifocal-form').hide();
			$('#signature-single-vision-form').hide();
		} else if (value == 'choice-single-vision') {
			$('#signature-multifocal-form').hide();
			$('#choice-single-vision-form').show();
			$('#choice-multifocal-form').hide();
			$('#signature-single-vision-form').hide();
		} else if (value == 'choice-multifocal') {
			$('#signature-multifocal-form').hide();
			$('#choice-single-vision-form').hide();
			$('#choice-multifocal-form').show();
			$('#signature-single-vision-form').hide();
		}

		$('#patient-signature').show();
	});
</script>