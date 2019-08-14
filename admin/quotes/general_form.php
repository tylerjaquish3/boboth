<div class="down40" id="general-form" style="display:none;"> 
    <div class="row">
        <div class="col-xs-12 col-md-3">
            Type:
        </div>
        <div class="col-xs-12 col-md-4">
            <select name="general[type]" id="type-select" class="full-width">
                <option>Select</option>
                <option value="Single Vision (SV)">Single Vision (SV)</option>
                <option value="Progressive (No-Line)">Progressive (No-Line)</option>
                <option value="Lined Bifocal 28/Round 24">Lined Bifocal 28/Round 24</option>
                <option value="Lined Bifocal 35">Lined Bifocal 35</option>
                <option value="Trifocal">Trifocal</option>
                <option value="Shamir Duo PAL">Shamir Duo PAL</option>
                <option value="Blended Bifocal">Blended Bifocal</option>
            </select>
        </div>
        <div class="col-xs-12 col-md-2">
            <div class="input-group">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-number" data-type="minus" data-field="general[type-amount]">
                    <span class="fa fa-minus-circle"></span>
                    </button>
                </span>
                <input type="text" name="general[type-amount]" class="input-number" value="0" min="0" max="100">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-number" data-type="plus" data-field="general[type-amount]">
                        <span class="fa fa-plus-circle"></span>
                    </button>
                </span>
            </div>
        </div>
        <div class="col-xs-12 col-md-3">
            <span class="subtotal" id="type-subtotal"></span>
        </div>
    </div>
    <span class="alert alert-warning" role="alert" id="type-note" style="display:none"></span>
    <div class="row">
        <div class="col-xs-12 col-md-3">
            Material:
        </div>
        <div class="col-xs-12 col-md-4">
            <select name="general[material]" id="material-select" class="full-width">
                <option>Select</option>
                <option value="Plastic">Plastic</option>
                <option value="Regular SV Glass">Regular SV Glass</option>
                <option value="Polycarb">Polycarb</option>
                <option value="Trivex">Trivex</option>
                <option value="Hi Index Glass/Glass PAL">Hi Index Glass/Glass PAL</option>
                <option value="1.67 HI Index Plastic">1.67 HI Index Plastic</option>
                <option value="1.70 HI Index Plastic">1.70 HI Index Plastic</option>
            </select>
        </div>
        <div class="col-xs-12 col-md-2">
            <div class="input-group">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-number" data-type="minus" data-field="general[material-amount]">
                    <span class="fa fa-minus-circle"></span>
                    </button>
                </span>
                <input type="text" name="general[material-amount]" class="input-number" value="0" min="0" max="100">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-number" data-type="plus" data-field="general[material-amount]">
                        <span class="fa fa-plus-circle"></span>
                    </button>
                </span>
            </div>
        </div>
        <div class="col-xs-12 col-md-3">
            <span class="subtotal" id="material-subtotal"></span>
        </div>
    </div>
    <span class="alert alert-warning" role="alert" id="material-note" style="display:none"></span>
    <div class="row">
        <div class="col-xs-12 col-md-3 pull-left">
            Tint:
        </div>
        <div class="col-xs-12 col-md-4">
            <select name="general[tint]" id="tint-select" class="full-width">
                <option>Select</option>
                <option value="Clear">Clear</option>
                <option value="Transitions">Transitions</option>
                <option value="PhotoGrey Thin&Dark">PhotoGrey Thin&Dark</option>
                <option value="PhotoGrey Extra">PhotoGrey Extra</option>
                <option value="Polarized Tint">Polarized Tint</option>
                <option value="Solid Mirror Tint (Glass)">Solid Mirror Tint (Glass)</option>
                <option value="Gradient Mirror Tint (Glass)">Gradient Mirror Tint (Glass)</option>
                <option value="Solid Mirror Tint (Plastic)">Solid Mirror Tint (Plastic)</option>
                <option value="Gradient Mirror Tint (Plastic)">Gradient Mirror Tint (Plastic)</option>
                <option value="Regular Tint (Plastic)">Regular Tint (Plastic)</option>
            </select>
        </div>
        <div class="col-xs-12 col-md-2">
            <div class="input-group">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-number" data-type="minus" data-field="general[tint-amount]">
                    <span class="fa fa-minus-circle"></span>
                    </button>
                </span>
                <input type="text" name="general[tint-amount]" class="input-number" value="0" min="0" max="100">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-number" data-type="plus" data-field="general[tint-amount]">
                        <span class="fa fa-plus-circle"></span>
                    </button>
                </span>
            </div>
        </div>
        <div class="col-xs-12 col-md-3">
            <span class="subtotal" id="tint-subtotal"></span>
        </div>
    </div>
    <span class="alert alert-warning" role="alert" id="tint-note" style="display:none"></span>
    <div class="row">
        <div class="col-xs-12 col-md-3 pull-left">
            Coating:
        </div>
        <div class="col-xs-12 col-md-4">
            <select name="general[coating]" id="coating-select" class="full-width">
                <option>Select</option>
                <option value="No Coatings">No Coatings</option>
                <option value="Standard AR coat">Standard AR coat</option>
                <option value="Level B AR coat">Level B AR coat</option>
                <option value="Level C AR coat">Level C AR coat</option>
                <option value="Level D AR coat">Level D AR coat</option>
                <option value="Scratch coat">Scratch coat</option>
                <option value="UV Protection">UV Protection</option>
            </select>
        </div>
        <div class="col-xs-12 col-md-2">
            <div class="input-group">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-number" data-type="minus" data-field="general[coating-amount]">
                    <span class="fa fa-minus-circle"></span>
                    </button>
                </span>
                <input type="text" name="general[coating-amount]" class="input-number" value="0" min="0" max="100">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-number" data-type="plus" data-field="general[coating-amount]">
                        <span class="fa fa-plus-circle"></span>
                    </button>
                </span>
            </div>
        </div>
        <div class="col-xs-12 col-md-3">
            <span class="subtotal" id="coating-subtotal"></span>
        </div>
    </div>
    <span class="alert alert-warning" role="alert" id="coating-note" style="display:none"></span>
    <div class="row">
        <div class="col-xs-12 col-md-3">
            Edge Treatment:
        </div>
        <div class="col-xs-12 col-md-4">
            <select name="general[edge-treatment]" id="edge-treatment-select" class="full-width">
                <option>Select</option>
                <option value="Roll & Polished">Roll & Polished</option>
                <option value="Edge Tint">Edge Tint</option>
                <option value="Shelf Bevel">Shelf Bevel</option>
                <option value="None">None</option>
            </select>
        </div>
        <div class="col-xs-12 col-md-2">
            <div class="input-group">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-number" data-type="minus" data-field="general[edge-treatment-amount]">
                    <span class="fa fa-minus-circle"></span>
                    </button>
                </span>
                <input type="text" name="general[edge-treatment-amount]" class="input-number" value="0" min="0" max="100">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-number" data-type="plus" data-field="general[edge-treatment-amount]">
                        <span class="fa fa-plus-circle"></span>
                    </button>
                </span>
            </div>
        </div>
        <div class="col-xs-12 col-md-3">
            <span class="subtotal" id="edge-treatment-subtotal"></span>
        </div>
    </div>
    <span class="alert alert-warning" role="alert" id="edge-note" style="display:none"></span>
    <div class="row down40">
        <div class="col-xs-12 col-md-6">
            If buying new frames, retail cost:
        </div>
        <div class="col-xs-12 col-md-3">
            <input type="text" name="general[frames-cost]" id="frames-cost" class="form-control">
            <span class="alert alert-danger" id="frames-cost-error" style="display:none;">Please enter a valid amount.</span>
        </div>
        <div class="col-xs-12 col-md-3">
            <span class="subtotal" id="frames-cost-subtotal"></span>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-md-6">
            If any copayments, amount:
        </div>
        <div class="col-xs-12 col-md-3">
            <input type="text" name="general[copayments]" id="copayments" class="form-control">
            <span class="alert alert-danger" id="copayments-error" style="display:none;">Please enter a valid amount.</span>
        </div>
        <div class="col-xs-12 col-md-3">
            <span class="subtotal" id="copayments-subtotal"></span>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-md-6">
            If patient has insurance, coverage amount:
        </div>
        <div class="col-xs-12 col-md-3">
            <input type="text" name="general[insurance-coverage]" id="insurance-coverage" class="form-control">
            <span class="alert alert-danger" id="insurance-coverage-error" style="display:none;">Please enter a valid amount.</span>
        </div>
        <div class="col-xs-12 col-md-3">
            <span class="subtotal-negative" id="insurance-coverage-subtotal"></span>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-md-6">
            Discount:
        </div>
        <div class="col-xs-12 col-md-3">
            <input type="text" name="general[discount]" id="discount" class="form-control">
            <span class="alert alert-danger" id="discount-error" style="display:none;">Please enter a valid amount.</span>
        </div>
        <div class="col-xs-12 col-md-3">
            <span class="subtotal-negative" id="discount-subtotal"></span>
        </div>
    </div>
</div>

<!--[if lte IE 8]><script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script><![endif]--> 
<script src="/js/jquery-1.8.2.min.js" type="text/javascript"></script> 
<script src="/js/bootstrap.min.js" type="text/javascript"></script> 

<script type="text/javascript">

    // This handles the inc/dec of all the number inputs
    $('.btn-number').click(function(e){
        e.preventDefault();
        
        var fieldName   = $(this).attr('data-field');
        var type        = $(this).attr('data-type');
        var input       = $("input[name='"+fieldName+"']");
        var currentVal  = parseInt(input.val());
        // Need to remove the array to lookup the proper input
        fieldName = fieldName.replace("general[", "");
        fieldName = fieldName.replace("-amount]", "");
        var inputSelect = fieldName+'-select';
        var select      = $("#"+inputSelect);

        if (!isNaN(currentVal)) {
            if(type == 'minus') {
                if(currentVal > input.attr('min')) {
                    input.val(currentVal - 1).change();
                } 
            } else if(type == 'plus') {
                if(currentVal < input.attr('max')) {
                    input.val(currentVal + 1).change();
                }
            }
            
            updateSubtotal(input.val(), select, fieldName);
        } else {
            input.val(0);
        }
    });

    $('#frames-cost').focusout(function () {
        var value = $('#frames-cost').val();
        if (value != "" && !isNaN(value)) {
            $('#frames-cost-error').hide();
            $('#frames-cost-subtotal').text('$ '+parseFloat(value).toFixed(2)).show();
        } else if (value != "") {
            $('#frames-cost-error').show();
            $('#frames-cost-subtotal').text('').hide();
        }
        updateTotal();
    });
    $('#copayments').focusout(function () {
        var value = $('#copayments').val();
        if (value != "" && !isNaN(value)) {
            $('#copayments-error').hide();
            $('#copayments-subtotal').text('$ '+parseFloat(value).toFixed(2)).show();
        } else if (value != "") {
            $('#copayments-error').show();
            $('#copayments-subtotal').text('').hide();
        }
        updateTotal();
    });
    $('#insurance-coverage').focusout(function () {
        var value = $('#insurance-coverage').val();
        if (value != "" && !isNaN(value)) {
            $('#insurance-coverage-error').hide();
            $('#insurance-coverage-subtotal').text('-$ '+parseFloat(value).toFixed(2)).show();
        } else if (value != "") {
            $('#insurance-coverage-error').show();
            $('#insurance-coverage-subtotal').text('').hide();
        }
        updateTotal();
    });
    $('#discount').focusout(function () {
        var value = $('#discount').val();
        if (value != "" && !isNaN(value)) {

            var discount = parseFloat(value.replace("$ ", ""));
            if (discount > 1) {
                discount = 1 - (discount/100); 
            } else if (discount < 1) {
                discount = 1 - discount;
            }
            $('#discount-error').hide();
            $('#discount-subtotal').text('- '+parseFloat(value).toFixed(2)+' %').show();
        } else if (value != "") {
            $('#discount-error').show();
            $('#discount-subtotal').text('').hide();
        }
        updateTotal();
    });

    var generalPrices = {
        "Single Vision (SV)": 45,
        "Progressive (No-Line)":  130,
        "Lined Bifocal 28/Round 24": 62.5,
        "Lined Bifocal 35": 75,
        "Trifocal": 80,
        "Shamir Duo PAL": 87.5,
        "Blended Bifocal": 80,
        "Plastic": 0,
        "Regular SV Glass": 7.5,
        "Polycarb": 27.5,
        "Trivex": 37.5,
        "Hi Index Glass/Glass PAL": 37.5,
        "1.67 HI Index Plastic": 45,
        "1.70 HI Index Plastic": 55,
        "Clear": 0,
        "Transitions": 52.5,
        "PhotoGrey Thin&Dark": 35,
        "PhotoGrey Thin&Dark": 30,
        "Polarized Tint": 37.5,
        "Solid Mirror Tint (Glass)": 50,
        "Gradient Mirror Tint (Glass)": 60,
        "Solid Mirror Tint (Plastic)": 30,
        "Gradient Mirror Tint (Plastic)": 30,
        "Regular Tint (Plastic)": 15,
        "No Coatings": 0,
        "Standard AR coat": 32.5,
        "Level B AR coat": 37.5,
        "Level C AR coat": 47.5,
        "Level D AR coat": 52.5,
        "Scratch coat": 0,
        "UV Protection": 52.5,
        "Roll & Polished": 15,
        "Edge Tint": 20,
        "Shelf Bevel": 37.5,
        "None": 0
    };

    function updateSubtotal(quantity, select, subtotalField) 
    {
        console.log(quantity);
        console.log(select);
        console.log(subtotalField);
        lookup = select.val();
        var cost = generalPrices[lookup];
        if (!isNaN(cost)) {
            var subtotal = '$ '+(cost * quantity).toFixed(2);
            $("#"+subtotalField+"-subtotal").text(subtotal).show();

            updateTotal();
        }
    }

    function updateTotal()
    {
        var typeTotal = parseFloat($("#type-subtotal").text().replace("$ ", ""));
        var materialTotal = parseFloat($("#material-subtotal").text().replace("$ ", ""));
        var tintTotal = parseFloat($("#tint-subtotal").text().replace("$ ", ""));
        var coatingTotal = parseFloat($("#coating-subtotal").text().replace("$ ", ""));
        var edgeTotal = parseFloat($("#edge-treatment-subtotal").text().replace("$ ", ""));
        if (isNaN(typeTotal)) {
            typeTotal = 0;
        }
        if (isNaN(materialTotal)) {
            materialTotal = 0;
        }
        if (isNaN(tintTotal)) {
            tintTotal = 0;
        }
        if (isNaN(coatingTotal)) {
            coatingTotal = 0;
        }
        if (isNaN(edgeTotal)) {
            edgeTotal = 0;
        }

        var framesCost = parseFloat($("#frames-cost").val().replace("$ ", ""));
        var copayments = parseFloat($("#copayments").val().replace("$ ", ""));
        var coverageAmount = parseFloat($("#insurance-coverage").val().replace("$ ", ""));
        var discount = parseFloat($("#discount").val().replace("$ ", ""));
        if (isNaN(framesCost)) {
            framesCost = 0;
        }
        if (isNaN(copayments)) {
            copayments = 0;
        }
        if (isNaN(coverageAmount)) {
            coverageAmount = 0;
        }
        if (isNaN(discount)) {
            discount = 1;
        }

        if (discount > 1) {
            discount = 1 - (discount/100); 
        } else if (discount < 1) {
            discount = 1 - discount;
        }

        var costs = typeTotal+materialTotal+tintTotal+coatingTotal+edgeTotal+framesCost+copayments;
        var subtotal = costs - coverageAmount;
        var total = subtotal * discount;
        var grandTotal = (total).toFixed(2);
        $('#grand-total').text('$ '+grandTotal).show();
    }

    $('#type-select').change(function () {
        var value = $('#type-select').val();
        if (value == 'Lined Bifocal 28/Round 24') {
            $('#type-note').text('Primary Lined Bifocal is 28, Primary Round Top is 24.').show();
        } else if (value == 'Shamir Duo PAL') {
            $('#type-note').text('This lens is good for new presbyopes.').show();
        } else {
            $('#type-note').text('').hide();
        }

        var input       = $("input[name='general[type-amount]']");
        var currentVal  = parseInt(input.val());
        updateSubtotal(currentVal, $(this), "type");
    });

    $('#material-select').change(function () {
        var value = $('#material-select').val();
        if (value == 'Regular SV Glass') {
            $('#material-note').text('This is for Single Vision Glass only.').show();
        }  else {
            $('#material-note').text('').hide();
        }

        var input       = $("input[name='general[material-amount]']");
        var currentVal  = parseInt(input.val());
        updateSubtotal(currentVal, $(this), "material");
    });

    $('#tint-select').change(function () {
        var value = $('#tint-select').val();
        if (value == 'Transitions') {
            $('#tint-note').text('This is NOT for any glass materials.').show();
        } else if (value == 'PhotoGrey Thin&Dark') {
            $('#tint-note').text('This is for GLASS ONLY').show();
        } else if (value == 'PhotoGrey Extra') {
            $('#tint-note').text('This is for GLASS ONLY').show();
        } else if (value == 'Polarized Tint') {
            $('#tint-note').text('This is for NON-GLASS ONLY').show();
        } else if (value == 'Solid Mirror Tint (Glass)') {
            $('#tint-note').text('This is for GLASS ONLY').show();
        } else if (value == 'Gradient Mirror Tint (Glass)') {
            $('#tint-note').text('This is for GLASS ONLY').show();
        } else if (value == 'Solid Mirror Tint (Plastic)') {
            $('#tint-note').text('This is for PLASTIC ONLY').show();
        } else if (value == 'Gradient Mirror Tint (Plastic)') {
            $('#tint-note').text('This is for PLASTIC ONLY').show();
        } else if (value == 'Regular Tint (Plastic)') {
            $('#tint-note').text('This is for PLASTIC ONLY').show();
        } else {
            $('#tint-note').text('').hide();
        }

        var input       = $("input[name='general[tint-amount]']");
        var currentVal  = parseInt(input.val());
        updateSubtotal(currentVal, $(this), "tint");
    });

    $('#coating-select').change(function () {
        var value = $('#coating-select').val();
        if (value == 'Standard AR coat') {
            $('#coating-note').text('This is the only AR for all materials (including glass).').show();
        } else if (value == 'Level B AR coat') {
            $('#coating-note').text('Example: Pentax ECP. NOT for glass.').show();
        } else if (value == 'Level C AR coat') {
            $('#coating-note').text('Example: Alize. NOT for glass.').show();
        } else if (value == 'Level D AR coat') {
            $('#coating-note').text('Example: Avance. NOT for glass.').show();
        } else if (value == 'Scratch coat') {
            $('#coating-note').text('This is included.').show();
        } else {
            $('#coating-note').text('').hide();
        }

        var input       = $("input[name='general[coating-amount]']");
        var currentVal  = parseInt(input.val());
        updateSubtotal(currentVal, $(this), "coating");
    });

    $('#edge-treatment-select').change(function () {
        var input       = $("input[name='general[edge-treatment-amount]']");
        var currentVal  = parseInt(input.val());
        updateSubtotal(currentVal, $(this), "edge-treatment");
    });

</script>