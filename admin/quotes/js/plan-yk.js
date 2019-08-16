var $form = $('#plan-yk-form');

// This handles the inc/dec of all the number inputs
$('.btn-number', $form).click(function(e){
    e.preventDefault();
    
    var fieldName   = $(this).attr('data-field');
    var type        = $(this).attr('data-type');
    var input       = $("input[name='"+fieldName+"']");
    var currentVal  = parseInt(input.val());
    // Need to remove the array to lookup the proper input
    fieldName = fieldName.replace("pyk[", "");
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

$('#frames-cost', $form).focusout(function () {
    var value = $('#frames-cost', $form).val();
    if (value != "" && !isNaN(value)) {
        $('#frames-cost-error', $form).hide();
        $('#frames-cost-subtotal', $form).text('$ '+parseFloat(value).toFixed(2)).show();
    } else if (value != "") {
        $('#frames-cost-error', $form).show();
        $('#frames-cost-subtotal', $form).text('').hide();
    }
    updateTotal();
});

var pykPrices = {
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
    var cost = pykPrices[lookup];
    if (!isNaN(cost)) {
        var subtotal = '$ '+(cost * quantity).toFixed(2);
        $("#"+subtotalField+"-subtotal", $form).text(subtotal).show();

        updateTotal();
    }
}

function updateTotal()
{
    var typeTotal = parseFloat($("#type-subtotal", $form).text().replace("$ ", ""));
    var materialTotal = parseFloat($("#material-subtotal", $form).text().replace("$ ", ""));
    var tintTotal = parseFloat($("#tint-subtotal", $form).text().replace("$ ", ""));
    var coatingTotal = parseFloat($("#coating-subtotal", $form).text().replace("$ ", ""));
    var edgeTotal = parseFloat($("#edge-treatment-subtotal", $form).text().replace("$ ", ""));
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

    var framesCost = parseFloat($("#frames-cost", $form).val().replace("$ ", ""));
    if (isNaN(framesCost)) {
        framesCost = 0;
    }

    var costs = typeTotal+materialTotal+tintTotal+coatingTotal+edgeTotal+framesCost;
    var grandTotal = (costs).toFixed(2);
    $('#grand-total').text('$ '+grandTotal).show();
}

$('#type-select', $form).change(function () {
    var value = $('#type-select', $form).val();
    if (value == 'Lined Bifocal 28/Round 24') {
        $('#type-note', $form).text('Primary Lined Bifocal is 28, Primary Round Top is 24.').show();
    } else if (value == 'Shamir Duo PAL') {
        $('#type-note', $form).text('This lens is good for new presbyopes.').show();
    } else {
        $('#type-note', $form).text('').hide();
    }

    var input       = $("input[name='pyk[type-amount]']");
    var currentVal  = parseInt(input.val());
    updateSubtotal(currentVal, $(this), "type");
});

$('#material-select', $form).change(function () {
    var value = $('#material-select', $form).val();
    if (value == 'Regular SV Glass') {
        $('#material-note', $form).text('This is for Single Vision Glass only.').show();
    }  else {
        $('#material-note', $form).text('').hide();
    }

    var input       = $("input[name='pyk[material-amount]']");
    var currentVal  = parseInt(input.val());
    updateSubtotal(currentVal, $(this), "material");
});

$('#tint-select', $form).change(function () {
    var value = $('#tint-select', $form).val();
    if (value == 'Transitions') {
        $('#tint-note', $form).text('This is NOT for any glass materials.').show();
    } else if (value == 'PhotoGrey Thin&Dark') {
        $('#tint-note', $form).text('This is for GLASS ONLY').show();
    } else if (value == 'PhotoGrey Extra') {
        $('#tint-note', $form).text('This is for GLASS ONLY').show();
    } else if (value == 'Polarized Tint') {
        $('#tint-note', $form).text('This is for NON-GLASS ONLY').show();
    } else if (value == 'Solid Mirror Tint (Glass)') {
        $('#tint-note', $form).text('This is for GLASS ONLY').show();
    } else if (value == 'Gradient Mirror Tint (Glass)') {
        $('#tint-note', $form).text('This is for GLASS ONLY').show();
    } else if (value == 'Solid Mirror Tint (Plastic)') {
        $('#tint-note', $form).text('This is for PLASTIC ONLY').show();
    } else if (value == 'Gradient Mirror Tint (Plastic)') {
        $('#tint-note', $form).text('This is for PLASTIC ONLY').show();
    } else if (value == 'Regular Tint (Plastic)') {
        $('#tint-note', $form).text('This is for PLASTIC ONLY').show();
    } else {
        $('#tint-note', $form).text('').hide();
    }

    var input       = $("input[name='pyk[tint-amount]']");
    var currentVal  = parseInt(input.val());
    updateSubtotal(currentVal, $(this), "tint");
});

$('#coating-select', $form).change(function () {
    var value = $('#coating-select', $form).val();
    if (value == 'Standard AR coat') {
        $('#coating-note', $form).text('This is the only AR for all materials (including glass).').show();
    } else if (value == 'Level B AR coat') {
        $('#coating-note', $form).text('Example: Pentax ECP. NOT for glass.').show();
    } else if (value == 'Level C AR coat') {
        $('#coating-note', $form).text('Example: Alize. NOT for glass.').show();
    } else if (value == 'Level D AR coat') {
        $('#coating-note', $form).text('Example: Avance. NOT for glass.').show();
    } else if (value == 'Scratch coat') {
        $('#coating-note', $form).text('This is included.').show();
    } else {
        $('#coating-note', $form).text('').hide();
    }

    var input       = $("input[name='pyk[coating-amount]']");
    var currentVal  = parseInt(input.val());
    updateSubtotal(currentVal, $(this), "coating");
});

$('#edge-treatment-select', $form).change(function () {
    var input       = $("input[name='pyk[edge-treatment-amount]']");
    var currentVal  = parseInt(input.val());
    updateSubtotal(currentVal, $(this), "edge-treatment");
});