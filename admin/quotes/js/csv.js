var $form = $('#choice-single-vision-form');

    // This handles the inc/dec of all the number inputs
    $('.btn-number', $form).click(function(e){
        e.preventDefault();
        
        var fieldName   = $(this).attr('data-field');
        var type        = $(this).attr('data-type');
        var input       = $("input[name='"+fieldName+"']");
        var currentVal  = parseInt(input.val());
        // Need to remove the array to lookup the proper input
        fieldName = fieldName.replace("csv[", "");
        fieldName = fieldName.replace("-amount]", "");
        var inputSelect = fieldName+'-select';
        var select      = $("#"+inputSelect, $form);

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

    // if patient is ordering new frames, show additional questions
    $('#new-frames', $form).change(function () {
        if ($('#new-frames', $form).is(":checked")) {
            $('#new-frames-questions-div', $form).show("fold");
        } else {
            $('#new-frames-questions-div', $form).hide("fold");
        }
    });

    $('#eligible-frames', $form).focusout(function () {
        updateTotal();
    });
    $('#frames-cost', $form).focusout(function () {
        var value = $('#frames-cost', $form).val();
        if (value != "" && !isNaN(value)) {
            $('#frames-cost-error', $form).hide();
        } else if (value != "") {
            $('#frames-cost-error', $form).show();
            $('#frames-cost-subtotal', $form).text('').hide();
        }
        updateTotal();
    });
    $('#frames-allowance', $form).focusout(function () {
        var value = $('#frames-allowance', $form).val();
        if (value != "" && !isNaN(value)) {
            $('#frames-allowance-error', $form).hide();
        } else if (value != "") {
            $('#frames-allowance-error', $form).show();
            $('#frames-allowance-subtotal', $form).text('').hide();
        }
        updateTotal();
    });

    $('#exam-copayment', $form).focusout(function () {
        var value = $('#exam-copayment', $form).val();
        if (value != "" && !isNaN(value)) {
            $('#exam-copayment-error', $form).hide();
            $('#exam-copayment-subtotal', $form).text('$ '+parseFloat(value).toFixed(2)).show();
        } else if (value != "") {
            $('#exam-copayment-error', $form).show();
            $('#exam-copayment-subtotal', $form).text('').hide();
        }
        updateTotal();
    });
    $('#material-copayment', $form).focusout(function () {
        var value = $('#material-copayment', $form).val();
        if (value != "" && !isNaN(value)) {
            $('#material-copayment-error', $form).hide();
            $('#material-copayment-subtotal', $form).text('$ '+parseFloat(value).toFixed(2)).show();
        } else if (value != "") {
            $('#material-copayment-error', $form).show();
            $('#material-copayment-subtotal', $form).text('').hide();
        }
        updateTotal();
    });
    
    var csvPrices = {
        "SV Plastic": 0,
        "SV Trivex": 60,
        "SV Hi Index 1.67 Plastic": 76,
        "SV Hi Index 1.70 Plastic": 84,
        "SV Polycarbonate": 39,
        "SV Hi Index Glass": 60,
        "SV Polarized": 60,
        "Transitions (Plastic)": 70,
        "Transitions (Glass)": 33,
        "Solid Tint (Plastic)": 15,
        "Gradient Tint (Plastic)": 17,
        "Solid Tint (Glass)": 80,
        "Gradient Tint (Glass)": 96,
        "Anti-Reflection Glass SV": 41,
        "SV Anti-Reflection": 58,
        "SV Mirror": 96,
        "SV Scratch Coat": 17,
        ">61mm eye size (Plastic)": 11,
        ">61mm eye size (Glass)": 13,
        "Edge Coating SV": 32,
        "SV Roll & Polish": 24,
        "SV UV protection (backside)": 10
    };

    function updateSubtotal(quantity, select, subtotalField) 
    {
        // console.log(quantity);
        // console.log(select);
        // console.log(subtotalField);
        lookup = select.val();
        var cost = csvPrices[lookup];
        if (!isNaN(cost)) {
            var subtotal = '$ '+(cost * quantity).toFixed(2);
            $("#"+subtotalField+"-subtotal", $form).text(subtotal).show();

            updateTotal();
        }
    }

    function updateTotal()
    {
        var materialTotal = parseFloat($("#material-subtotal", $form).text().replace("$ ", ""));
        var tintTotal = parseFloat($("#tint-subtotal", $form).text().replace("$ ", ""));
        var coatingTotal = parseFloat($("#coatings-subtotal", $form).text().replace("$ ", ""));
        var edgeTotal = parseFloat($("#edge-treatment-subtotal", $form).text().replace("$ ", ""));
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

        var examCopayment = parseFloat($("#exam-copayment", $form).val().replace("$ ", ""));
        var materialCopayment = parseFloat($("#material-copayment", $form).val().replace("$ ", ""));
        if (isNaN(examCopayment)) {
            examCopayment = 0;
        }
        if (isNaN(materialCopayment)) {
            materialCopayment = 0;
        }

        var framesTotal = 0;
        var eligibleFrames = $("#eligible-frames", $form).val();
        var framesCost = parseFloat($("#frames-cost", $form).val().replace("$ ", ""));
        var framesAllowance = parseFloat($("#frames-allowance", $form).val().replace("$ ", ""));
        if (isNaN(eligibleFrames)) {
            eligibleFrames = 0;
        }
        if (isNaN(framesCost)) {
            framesCost = 0;
        }
        if (isNaN(framesAllowance)) {
            framesAllowance = 0;
        }

        if (eligibleFrames == 0) {
            framesTotal = framesCost * .8;
        } else {
            if (framesCost > 0) {
                framesTotal = (framesCost - framesAllowance) * .8;
            } else {
                framesTotal = 0;
            }
        }
        $('#frames-allowance-subtotal', $form).text('$ '+parseFloat(framesTotal).toFixed(2)).show();

        var costs = materialTotal+tintTotal+coatingTotal+edgeTotal+examCopayment+materialCopayment+framesTotal;
        var subtotal = costs;
        var total = subtotal;
        var grandTotal = (total).toFixed(2);
        $('#grand-total').text('$ '+grandTotal).show();
    }

    // Notes for specific selections
    $('#material-select', $form).change(function () {
        var value = $('#material-select', $form).val();
        if (value == 'SV Polycarbonate') {
            $('#material-note', $form).text('This is a Digital Aspheric Lens.').show();
        } else {
            $('#material-note', $form).text('').hide();
        }

        var input       = $("input[name='csv[material-amount]']");
        var currentVal  = parseInt(input.val());
        updateSubtotal(currentVal, $(this), "material");
    });

    $('#tint-select', $form).change(function () {
        var value = $('#tint-select', $form).val();
        if (value == 'SV Polarized') {
            $('#tint-note', $form).text('this is NOT for glass.').show();
        } else if (value == 'Transitions (Plastic)') {
            $('#tint-note', $form).text('PLASTIC ONLY').show();
        } else if (value == 'Transitions (Glass)') {
            $('#tint-note', $form).text('GLASS ONLY').show();
        } else if (value == 'Solid Tint (Plastic)') {
            $('#tint-note', $form).text('PLASTIC ONLY').show();
        } else if (value == 'Gradient Tint (Plastic)') {
            $('#tint-note', $form).text('PLASTIC ONLY').show();
        } else if (value == 'Solid Tint (Glass)') {
            $('#tint-note', $form).text('GLASS ONLY').show();
        } else if (value == 'Gradient Tint (Glass)') {
            $('#tint-note', $form).text('GLASS ONLY').show();
        } else {
            $('#tint-note', $form).text('').hide();
        }

        var input       = $("input[name='csv[tint-amount]']");
        var currentVal  = parseInt(input.val());
        updateSubtotal(currentVal, $(this), "tint");
    });

    $('#coatings-select', $form).change(function () {
        var value = $('#coatings-select', $form).val();
        if (value == 'Anti-Reflection Glass SV') {
            $('#coatings-note', $form).text('This AR is for GLASS ONLY.').show();
        } else if (value == 'SV Anti-Reflection') {
            $('#coatings-note', $form).text('Ex: Unity Classic AR. For Poly/Plastic').show();
        } else if (value == 'SV Mirror') {
            $('#coatings-note', $form).text('This is for a Solid or Single Gradient.').show();
        } else {
            $('#coatings-note', $form).text('').hide();
        }

        var input       = $("input[name='csv[coatings-amount]']");
        var currentVal  = parseInt(input.val());
        updateSubtotal(currentVal, $(this), "coatings");
    });

    $('#edge-treatment-select', $form).change(function () {
        var value = $('#edge-treatment-select', $form).val();
        if (value == '>61mm eye size (Plastic)') {
            $('#edge-treatment-note', $form).text('PLASTIC ONLY').show();
        } else if (value == '>61mm eye size (Glass)') {
            $('#edge-treatment-note', $form).text('GLASS ONLY').show();
        } else {
            $('#edge-treatment-note', $form).text('').hide();
        }
        var input       = $("input[name='csv[edge-treatment-amount]']");
        var currentVal  = parseInt(input.val());
        updateSubtotal(currentVal, $(this), "edge-treatment");
    });