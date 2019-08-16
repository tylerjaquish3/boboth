<div class="down40" id="choice-single-vision-form" style="display:none;">
    <div class="row">
        <div class="col-xs-12 text-center">
            <h2>Choice Single Vision Only</h2>
        </div>
    </div>
    <div class="row down40">
        <div class="col-xs-12 col-md-3">
            SV Material:
        </div>
        <div class="col-xs-12 col-md-4">
            <select name="csv[material]" id="material-select" class="full-width">
                <option>Select</option>
                <option value="SV Plastic">SV Plastic</option>
                <option value="SV Trivex">SV Trivex</option>
                <option value="SV Hi Index 1.67 Plastic">SV Hi Index 1.67 Plastic</option>
                <option value="SV Hi Index 1.70 Plastic">SV Hi Index 1.70 Plastic</option>
                <option value="SV Polycarbonate">SV Polycarbonate</option>
                <option value="SV Hi Index Glass">SV Hi Index Glass</option>
            </select>
        </div>
        <div class="col-xs-12 col-md-2">
            <div class="input-group">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-number" data-type="minus" data-field="csv[material-amount]">
                    <span class="fa fa-minus-circle"></span>
                    </button>
                </span>
                <input type="text" name="csv[material-amount]" class="input-number" value="0" min="0" max="100">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-number" data-type="plus" data-field="csv[material-amount]">
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
        <div class="col-xs-12 col-md-3">
            SV Tints:
        </div>
        <div class="col-xs-12 col-md-4">
            <select name="csv[tint]" id="tint-select" class="full-width">
                <option>Select</option>
                <option value="SV Polarized">SV Polarized</option>
                <option value="Transitions (Plastic)">Transitions (Plastic)</option>
                <option value="Transitions (Glass)">Transitions (Glass)</option>
                <option value="Solid Tint (Plastic)">Solid Tint (Plastic)</option>
                <option value="Gradient Tint (Plastic)">Gradient Tint (Plastic)</option>
                <option value="Solid Tint (Glass)">Solid Tint (Glass)</option>
                <option value="Gradient Tint (Glass)">Gradient Tint (Glass)</option>
            </select>
        </div>
        <div class="col-xs-12 col-md-2">
            <div class="input-group">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-number" data-type="minus" data-field="csv[tint-amount]">
                    <span class="fa fa-minus-circle"></span>
                    </button>
                </span>
                <input type="text" name="csv[tint-amount]" class="input-number" value="0" min="0" max="100">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-number" data-type="plus" data-field="csv[tint-amount]">
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
        <div class="col-xs-12 col-md-3">
            SV Coatings:
        </div>
        <div class="col-xs-12 col-md-4">
            <select name="csv[coatings]" id="coatings-select" class="full-width">
                <option>Select</option>
                <option value="Anti-Reflection Glass SV">Anti-Reflection Glass SV</option>
                <option value="SV Anti-Reflection">SV Anti-Reflection</option>
                <option value="SV Mirror">SV Mirror</option>
                <option value="SV Scratch Coat">SV Scratch Coat</option>
            </select>
        </div>
        <div class="col-xs-12 col-md-2">
            <div class="input-group">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-number" data-type="minus" data-field="csv[coatings-amount]">
                    <span class="fa fa-minus-circle"></span>
                    </button>
                </span>
                <input type="text" name="csv[coatings-amount]" class="input-number" value="0" min="0" max="100">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-number" data-type="plus" data-field="csv[coatings-amount]">
                        <span class="fa fa-plus-circle"></span>
                    </button>
                </span>
            </div>
        </div>
        <div class="col-xs-12 col-md-3">
            <span class="subtotal" id="coatings-subtotal"></span>
        </div>
    </div>
    <span class="alert alert-warning" role="alert" id="coatings-note" style="display:none"></span>
    <div class="row">
        <div class="col-xs-12 col-md-3">
            SV Misc. and Edge Treatments:
        </div>
        <div class="col-xs-12 col-md-4">
            <select name="csv[edge-treatment]" id="edge-treatment-select" class="full-width">
                <option>Select</option>
                <option value=">61mm eye size (Plastic)">>61mm eye size (Plastic)</option>
                <option value=">61mm eye size (Glass)">>61mm eye size (Glass)</option>
                <option value="Edge Coating SV">Edge Coating SV</option>
                <option value="SV Roll & Polish">SV Roll & Polish</option>
                <option value="SV UV protection (backside)">SV UV protection (backside)</option>
            </select>
        </div>
        <div class="col-xs-12 col-md-2">
            <div class="input-group">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-number" data-type="minus" data-field="csv[edge-treatment-amount]">
                    <span class="fa fa-minus-circle"></span>
                    </button>
                </span>
                <input type="text" name="csv[edge-treatment-amount]" class="input-number" value="0" min="0" max="100">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-number" data-type="plus" data-field="csv[edge-treatment-amount]">
                        <span class="fa fa-plus-circle"></span>
                    </button>
                </span>
            </div>
        </div>
        <div class="col-xs-12 col-md-3">
            <span class="subtotal" id="edge-treatment-subtotal"></span>
        </div>
    </div>
    <span class="alert alert-warning" role="alert" id="edge-treatment-note" style="display:none"></span>
    <div class="row down40">
        <div class="col-xs-12 col-md-6">
            Ordering new frame?
        </div>
        <div class="col-xs-12 col-md-3">
            <label class="switch">
                <input type="checkbox" name="csv[new-frames]" id="new-frames">
                <span class="slider"></span>
            </label>
        </div>
        <div class="col-xs-12 col-md-3"></div>
    </div>
    <div id="new-frames-questions-div" style="display:none;">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                Eligible frames:
            </div>
            <div class="col-xs-12 col-md-3">
                <input type="number" name="csv[eligible-frames]" id="eligible-frames" class="form-control">
                <span class="alert alert-danger" id="eligible-frames-error" style="display:none;">Please enter a valid amount.</span>
            </div>
            <div class="col-xs-12 col-md-3">
                <span class="subtotal" id="eligible-frames-subtotal"></span>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-6">
                Retail cost:
            </div>
            <div class="col-xs-12 col-md-3">
                <input type="text" name="csv[frames-cost]" id="frames-cost" class="form-control">
                <span class="alert alert-danger" id="frames-cost-error" style="display:none;">Please enter a valid amount.</span>
            </div>
            <div class="col-xs-12 col-md-3">
                <span class="subtotal" id="frames-cost-subtotal"></span>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-6">
                Allowance towards frame:
            </div>
            <div class="col-xs-12 col-md-3">
                <input type="text" name="csv[frames-allowance]" id="frames-allowance" class="form-control">
                <span class="alert alert-danger" id="frames-allowance-error" style="display:none;">Please enter a valid amount.</span>
            </div>
            <div class="col-xs-12 col-md-3">
                <span class="subtotal" id="frames-allowance-subtotal"></span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-md-6">
            If patient had exam, Exam Copay:
        </div>
        <div class="col-xs-12 col-md-3">
            <input type="text" name="csv[exam-copayment]" id="exam-copayment" class="form-control">
            <span class="alert alert-danger" id="exam-copayment-error" style="display:none;">Please enter a valid amount.</span>
        </div>
        <div class="col-xs-12 col-md-3">
            <span class="subtotal" id="exam-copayment-subtotal"></span>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-md-6">
            Material Copay:
        </div>
        <div class="col-xs-12 col-md-3">
            <input type="text" name="csv[material-copayment]" id="material-copayment" class="form-control">
            <span class="alert alert-danger" id="material-copayment-error" style="display:none;">Please enter a valid amount.</span>
        </div>
        <div class="col-xs-12 col-md-3">
            <span class="subtotal" id="material-copayment-subtotal"></span>
        </div>
    </div>

</div>

<!--[if lte IE 8]><script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script><![endif]--> 
<script src="/js/jquery-1.8.2.min.js" type="text/javascript"></script> 
<script src="/js/bootstrap.min.js" type="text/javascript"></script> 

<div id="script"></div>