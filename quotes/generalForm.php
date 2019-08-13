<div class="down40" id="general-form"> <!--style="display:none;"> -->
    <div class="row">
        <div class="col-xs-12 col-md-3">
            Type:
        </div>
        <div class="col-xs-12 col-md-4">
            <select id="type-select" class="full-width">
                <option>Select</option>
                <option value="single-vision">Single Vision (SV)</option>
                <option value="progressive">Progressive (No-Line)</option>
                <option value="lined-bifocal-28">Lined Bifocal 28/Round 24</option>
                <option value="lined-bifocal-35">Lined Bifocal 35</option>
                <option value="trifocal">Trifocal</option>
                <option value="shamir-duo-pal">Shamir Duo PAL</option>
                <option value="blended-bifocal">Blended Bifocal</option>
            </select>
        </div>
        <div class="col-xs-12 col-md-2">
            <div class="input-group">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-number" data-type="minus" data-field="type">
                    <span class="fa fa-minus-circle"></span>
                    </button>
                </span>
                <input type="text" name="type" class="input-number" value="0" min="0" max="100">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-number" data-type="plus" data-field="type">
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
            <select id="material-select" class="full-width">
                <option>Select</option>
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
            <div class="input-group">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-number" data-type="minus" data-field="material">
                    <span class="fa fa-minus-circle"></span>
                    </button>
                </span>
                <input type="text" name="material" class="input-number" value="0" min="0" max="100">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-number" data-type="plus" data-field="material">
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
            <select id="tint-select" class="full-width">
                <option>Select</option>
                <option value="clear">Clear</option>
                <option value="transitions">Transitions</option>
                <option value="photogrey-thindark">PhotoGrey Thin&Dark</option>
                <option value="photogrey-extra">PhotoGrey Extra</option>
                <option value="polarized-tint">Polarized Tint</option>
                <option value="solid-mirror-glass">SOLID MIRROR TINT (GLASS)</option>
                <option value="gradient-mirror-glass">GRADIENT MIRROR TINT (GLASS)</option>
                <option value="solid-mirror-plastic">SOLID MIRROR TINT (PLASTIC)</option>
                <option value="gradient-mirror-plastic">GRADIENT MIRROR TINT (PLASTIC)</option>
                <option value="regular-tint-plastic">Regular TINT (PLASTIC)</option>
            </select>
        </div>
        <div class="col-xs-12 col-md-2">
            <div class="input-group">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-number" data-type="minus" data-field="tint">
                    <span class="fa fa-minus-circle"></span>
                    </button>
                </span>
                <input type="text" name="tint" class="input-number" value="0" min="0" max="100">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-number" data-type="plus" data-field="tint">
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
            <select id="coating-select" class="full-width">
                <option>Select</option>
                <option value="no-coating">No Coatings</option>
                <option value="standard-ar">Standard AR coat</option>
                <option value="level-b-ar">Level B AR coat</option>
                <option value="level-c-ar">Level C AR coat</option>
                <option value="level-d-ar">Level D AR coat</option>
                <option value="scratch-coat">Scratch coat</option>
                <option value="uv-protection">UV Protection</option>
            </select>
        </div>
        <div class="col-xs-12 col-md-2">
            <div class="input-group">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-number" data-type="minus" data-field="coating">
                    <span class="fa fa-minus-circle"></span>
                    </button>
                </span>
                <input type="text" name="coating" class="input-number" value="0" min="0" max="100">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-number" data-type="plus" data-field="coating">
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
            <select id="edge-treatment-select" class="full-width">
                <option>Select</option>
                <option value="roll-polished">Roll & Polished</option>
                <option value="edge-tint">Edge Tint</option>
                <option value="shelf-bevel">Shelf Bevel</option>
                <option value="no-edge">None</option>
            </select>
        </div>
        <div class="col-xs-12 col-md-2">
            <div class="input-group">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-number" data-type="minus" data-field="edge-treatment">
                    <span class="fa fa-minus-circle"></span>
                    </button>
                </span>
                <input type="text" name="edge-treatment" class="input-number" value="0" min="0" max="100">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-number" data-type="plus" data-field="edge-treatment">
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
            <input type="text" id="frames-cost" class="form-control">
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
            <input type="text" id="copayments" class="form-control">
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
            <input type="text" id="insurance-coverage" class="form-control">
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
            <input type="text" id="discount" class="form-control">
            <span class="alert alert-danger" id="discount-error" style="display:none;">Please enter a valid amount.</span>
        </div>
        <div class="col-xs-12 col-md-3">
            <span class="subtotal-negative" id="discount-subtotal"></span>
        </div>
    </div>
</div>

<!--[if lte IE 8]><script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script><![endif]--> 
<script src="../js/jquery-1.8.2.min.js" type="text/javascript"></script> 
<script src="../js/bootstrap.min.js" type="text/javascript"></script> 

<script type="text/javascript">

    var $form = $('');

    // This handles the inc/dec of all the number inputs
    $('.btn-number').click(function(e){
        e.preventDefault();
        
        var fieldName   = $(this).attr('data-field');
        var type        = $(this).attr('data-type');
        var input       = $("input[name='"+fieldName+"']");
        var currentVal  = parseInt(input.val());
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
        "single-vision": 45,
        "progressive":  130,
        "lined-bifocal-28": 62.5,
        "lined-bifocal-35": 75,
        "trifocal": 80,
        "shamir-duo-pal": 87.5,
        "blended-bifocal": 80,
        "plastic": 0,
        "regular-sv": 7.5,
        "polycarb": 27.5,
        "trivex": 37.5,
        "hi-index-glass": 37.5,
        "1.67-hi-index": 45,
        "1.70-hi-index": 55,
        "clear": 0,
        "transitions": 52.5,
        "photogrey-thindark": 35,
        "photogrey-extra": 30,
        "polarized-tint": 37.5,
        "solid-mirror-glass": 50,
        "gradient-mirror-glass": 60,
        "solid-mirror-plastic": 30,
        "gradient-mirror-plastic": 30,
        "regular-tint-plastic": 15,
        "no-coating": 0,
        "standard-ar": 32.5,
        "level-b-ar": 37.5,
        "level-c-ar": 47.5,
        "level-d-ar": 52.5,
        "scratch-coat": 0,
        "uv-protection": 52.5,
        "roll-polished": 15,
        "edge-tint": 20,
        "shelf-bevel": 37.5,
        "no-edge": 0
    };

    function updateSubtotal(quantity, select, subtotalField) 
    {
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
        if (value == 'lined-bifocal-28') {
            $('#type-note').text('Primary Lined Bifocal is 28, Primary Round Top is 24.').show();
        } else if (value == 'shamir-duo-pal') {
            $('#type-note').text('This lens is good for new presbyopes.').show();
        } else {
            $('#type-note').text('').hide();
        }

        var input       = $("input[name='type']");
        var currentVal  = parseInt(input.val());
        updateSubtotal(currentVal, $(this), "type");
    });

    $('#material-select').change(function () {
        var value = $('#material-select').val();
        if (value == 'regular-sv') {
            $('#material-note').text('This is for Single Vision Glass only.').show();
        }  else {
            $('#material-note').text('').hide();
        }

        var input       = $("input[name='material']");
        var currentVal  = parseInt(input.val());
        updateSubtotal(currentVal, $(this), "material");
    });

    $('#tint-select').change(function () {
        var value = $('#tint-select').val();
        if (value == 'transitions') {
            $('#tint-note').text('This is NOT for any glass materials.').show();
        } else if (value == 'photogrey-thindark') {
            $('#tint-note').text('This is for GLASS ONLY').show();
        } else if (value == 'photogrey-extra') {
            $('#tint-note').text('This is for GLASS ONLY').show();
        } else if (value == 'polarized-tint') {
            $('#tint-note').text('This is for NON-GLASS ONLY').show();
        } else if (value == 'solid-mirror-glass') {
            $('#tint-note').text('This is for GLASS ONLY').show();
        } else if (value == 'gradient-mirror-glass') {
            $('#tint-note').text('This is for GLASS ONLY').show();
        } else if (value == 'solid-mirror-plastic') {
            $('#tint-note').text('This is for PLASTIC ONLY').show();
        } else if (value == 'gradient-mirror-plastic') {
            $('#tint-note').text('This is for PLASTIC ONLY').show();
        } else if (value == 'regular-tint-plastic') {
            $('#tint-note').text('This is for PLASTIC ONLY').show();
        } else {
            $('#tint-note').text('').hide();
        }

        var input       = $("input[name='tint']");
        var currentVal  = parseInt(input.val());
        updateSubtotal(currentVal, $(this), "tint");
    });

    $('#coating-select').change(function () {
        var value = $('#coating-select').val();
        if (value == 'standard-ar') {
            $('#coating-note').text('This is the only AR for all materials (including glass).').show();
        } else if (value == 'level-b-ar') {
            $('#coating-note').text('Example: Pentax ECP. NOT for glass.').show();
        } else if (value == 'level-c-ar') {
            $('#coating-note').text('Example: Alize. NOT for glass.').show();
        } else if (value == 'level-d-ar') {
            $('#coating-note').text('Example: Avance. NOT for glass.').show();
        } else if (value == 'scratch-coat') {
            $('#coating-note').text('This is included.').show();
        } else {
            $('#coating-note').text('').hide();
        }

        var input       = $("input[name='coating']");
        var currentVal  = parseInt(input.val());
        updateSubtotal(currentVal, $(this), "coating");
    });

    $('#edge-treatment-select').change(function () {
        var input       = $("input[name='edge-treatment']");
        var currentVal  = parseInt(input.val());
        updateSubtotal(currentVal, $(this), "edge-treatment");
    });

</script>