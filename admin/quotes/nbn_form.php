<div class="row" id="nbn-form" style="display:none;">
	
    <div class="col-xs-12 col-md-6">
        Coverage Plan:
    </div>
    <div class="col-xs-12 col-md-6">
        <select id="nbn-coverage-plan-select" name="nbn-coverage-plan" class="full-width">
            <option>Select</option>
            <option value="plan-12">NBN Group Plan 12 Only</option>
            <option value="plan-yk">NBN Group Plan YK Only</option>
        </select>
    </div>
</div>

<?php include 'plan_12_form.php'; ?>
<?php include 'plan_yk_form.php'; ?>

<script type="text/javascript">

	var script = document.createElement("script");
	script.type = "text/javascript";
	
	$('#nbn-coverage-plan-select').change(function () {
		$("#script").html('');

		value = $('#nbn-coverage-plan-select').val();
		if (value == 'plan-12') {
			$('#plan-yk-form').hide("fold");
			$('#plan-12-form').show("fold");
			script.src = "js/plan-12.js";
		} else if (value == 'plan-yk') {
            $('#plan-12-form').hide("fold");
			$('#plan-yk-form').show("fold");
			script.src = "js/plan-yk.js";
		} 

		$("#script").append(script);

		$('#patient-signature').show("fold");
	});
</script>