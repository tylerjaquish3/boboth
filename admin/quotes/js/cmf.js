var $form = $('#choice-multifocal-form');

// This handles the inc/dec of all the number inputs
$('.btn-number', $form).click(function(e){
    e.preventDefault();
    
    var fieldName   = $(this).attr('data-field');
    var type        = $(this).attr('data-type');
    var input       = $("input[name='"+fieldName+"']");
    var currentVal  = parseInt(input.val());
    // Need to remove the array to lookup the proper input
    fieldName = fieldName.replace("cmf[", "");
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

var cmfPrices = {
    "Trivex PAL (No-Line)": 165,
    "Plastic PAL (No-Line)": 105,
    "1.67 PAL (No-Line)": 181,
    "1.70 PAL (No-Line)": 189,
    "POLYPAL (No-Line)": 140,
    "Hi Index Glass PAL (No-Line)": 110,
    "Lined Bifocal/Trifocal Plastic": 0,
    "Lined Bifocal/Trifocal Trivex": 60,
    "Lined Bifocal/Trifocal 1.67 Plastic": 76,
    "Lined Bifocal/Trifocal Polycarb": 35,
    "Lined Bifocal/Trifocal Hi Index Glass": 144,
    "Polarized": 60,
    "Transitions (Plastic)": 82,
    "Transitions (Glass)": 41,
    "Solid Tint (Plastic)": 15,
    "Gradient Tint (Plastic)": 17,
    "Solid Tint (Glass)": 44,
    "Gradient Tint (Glass)": 96,
    "MF AR Glass": 41,
    "MF Anti-Reflection": 58,
    "MF Mirror": 40,
    "MF Ski Type Coating": 40,
    "MF Scratch Coat": 17,
    ">61mm eye size (Plastic)": 14,
    ">61mm eye size (Glass)": 18,
    "Edge Coating MF": 24,
    "MF Roll & Polish": 24,
    "MF UV protection (backside)": 10
};

function updateSubtotal(quantity, select, subtotalField) 
{
    // console.log(quantity);
    // console.log(select);
    // console.log(subtotalField);
    lookup = select.val();
    var cost = cmfPrices[lookup];
    if (!isNaN(cost)) {
        var subtotal = '$ '+(cost * quantity).toFixed(2);
        $("#"+subtotalField+"-subtotal", $form).text(subtotal).show();

        updateTotal();
    }
}

function updateTotal()
{
    var typeTotal = parseFloat($("#type-subtotal", $form).text().replace("$ ", ""));
    var polarizedTotal = parseFloat($("#polarized-subtotal", $form).text().replace("$ ", ""));
    var tintTotal = parseFloat($("#tint-subtotal", $form).text().replace("$ ", ""));
    var coatingTotal = parseFloat($("#coating-subtotal", $form).text().replace("$ ", ""));
    var edgeTotal = parseFloat($("#edge-treatment-subtotal", $form).text().replace("$ ", ""));
    if (isNaN(typeTotal)) {
        typeTotal = 0;
    }
    if (isNaN(polarizedTotal)) {
        polarizedTotal = 0;
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

    var costs = typeTotal+polarizedTotal+tintTotal+coatingTotal+edgeTotal+examCopayment+materialCopayment+framesTotal;
    var subtotal = costs;
    var total = subtotal;
    var grandTotal = (total).toFixed(2);
    $('#grand-total').text('$ '+grandTotal).show();
}

// Notes for specific selections
$('#type-select', $form).change(function () {
    var value = $('#type-select', $form).val();
    if (value == 'Trivex PAL (No-Line)' || 
    value == 'Plastic PAL (No-Line)' ||
    value == '1.67 PAL (No-Line)' ||
    value == '1.70 PAL (No-Line)' ||
    value == 'POLYPAL (No-Line)' ||
    value == 'Hi Index Glass PAL (No-Line)'
    ) {
        $('#type-note', $form).text('Example: Unity PLx').show();
    } else {
        $('#type-note', $form).text('').hide();
    }

    var input       = $("input[name='cmf[type-amount]']");
    var currentVal  = parseInt(input.val());
    updateSubtotal(currentVal, $(this), "type");
});

$('#tint-select', $form).change(function () {
    var value = $('#tint-select', $form).val();
    if (value == 'Polarized') {
        $('#tint-note', $form).text('This is for NON-GLASS').show();
    } else if (value == 'Transitions (Plastic)' || value == 'Solid Tint (Plastic)' || value == 'Gradient Tint (Plastic)') {
        $('#tint-note', $form).text('PLASTIC ONLY').show();
    } else if (value == 'Transitions (Glass)' || value == 'Solid Tint (Glass)' || value == 'Gradient Tint (Glass)') {
        $('#tint-note', $form).text('GLASS ONLY').show();
    } else {
        $('#tint-note', $form).text('').hide();
    }

    var input       = $("input[name='cmf[tint-amount]']");
    var currentVal  = parseInt(input.val());
    updateSubtotal(currentVal, $(this), "tint");
});

$('#coating-select', $form).change(function () {
    var value = $('#coating-select', $form).val();
    if (value == 'MF AR Glass') {
        $('#coating-note', $form).text('This AR is for GLASS ONLY.').show();
    } else if (value == 'MF Anti-Reflection') {
        $('#coating-note', $form).text('Ex: Unity Classic AR. For Poly/Plastic').show();
    } else if (value == 'MF Mirror') {
        $('#coating-note', $form).text('This is for a Solid or Single Gradient.').show();
    } else if (value == 'MF Ski Type Coating') {
        $('#coating-note', $form).text('Includes Base Tint and Backside Color.').show();
    } else {
        $('#coating-note', $form).text('').hide();
    }

    var input       = $("input[name='cmf[coating-amount]']");
    var currentVal  = parseInt(input.val());
    updateSubtotal(currentVal, $(this), "coating");
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
    var input       = $("input[name='cmf[edge-treatment-amount]']");
    var currentVal  = parseInt(input.val());
    updateSubtotal(currentVal, $(this), "edge-treatment");
});