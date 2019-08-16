<div class="down40" id="signature-multifocal-form" style="display:none;"> 
    <div class="row">
        <div class="col-xs-12 text-center">
            <h2>Signature Multifocal Only</h2>
        </div>
    </div>
    <div class="row down40">
        <div class="col-xs-12 col-md-3">
            Type:
        </div>
        <div class="col-xs-12 col-md-4">
            <select name="smf[type]" id="type-select" class="full-width">
                <option>Select</option>
                <option value="Trivex PAL (No-Line)">Trivex PAL (No-Line)</option>
                <option value="Plastic PAL (No-Line)">Plastic PAL (No-Line)</option>
                <option value="1.67 PAL (No-Line)">1.67 PAL (No-Line)</option>
                <option value="1.70 PAL (No-Line)">1.70 PAL (No-Line)</option>
                <option value="POLYPAL (No-Line)">POLYPAL (No-Line)</option>
                <option value="Hi Index Glass PAL (No-Line)">Hi Index Glass PAL (No-Line)</option>
                <option value="Lined Bifocal/Trifocal Plastic">Lined Bifocal/Trifocal Plastic</option>
                <option value="Lined Bifocal/Trifocal Trivex">Lined Bifocal/Trifocal Trivex</option>
                <option value="Lined Bifocal/Trifocal 1.67 Plastic">Lined Bifocal/Trifocal 1.67 Plastic</option>
                <option value="Lined Bifocal/Trifocal Polycarb">Lined Bifocal/Trifocal Polycarb</option>
                <option value="Lined Bifocal/Trifocal Hi Index Glass">Lined Bifocal/Trifocal Hi Index Glass</option>
            </select>
        </div>
        <div class="col-xs-12 col-md-2">
            <div class="input-group">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-number" data-type="minus" data-field="smf[type-amount]">
                    <span class="fa fa-minus-circle"></span>
                    </button>
                </span>
                <input type="text" name="smf[type-amount]" class="input-number" value="0" min="0" max="100">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-number" data-type="plus" data-field="smf[type-amount]">
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
            MF Polarized Lenses:
        </div>
        <div class="col-xs-12 col-md-4">
            <select name="smf[polarized-lenses]" id="polarized-lenses-select" class="full-width">
                <option>Select</option>
                <option value="BF/TF Polarized Plastic">BF/TF Polarized Plastic</option>
                <option value="BF/TF Polarized Trivex">BF/TF Polarized Trivex</option>
                <option value="BF/TF Polarized 1.67 Plastic">BF/TF Polarized 1.67 Plastic</option>
                <option value="BF/TF Polarized Poly">BF/TF Polarized Poly</option>
                <option value="PAL Polarized">PAL Polarized</option>
            </select>
        </div>
        <div class="col-xs-12 col-md-2">
            <div class="input-group">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-number" data-type="minus" data-field="smf[polarized-lenses-amount]">
                    <span class="fa fa-minus-circle"></span>
                    </button>
                </span>
                <input type="text" name="smf[polarized-lenses-amount]" class="input-number" value="0" min="0" max="100">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-number" data-type="plus" data-field="smf[polarized-lenses-amount]">
                        <span class="fa fa-plus-circle"></span>
                    </button>
                </span>
            </div>
        </div>
        <div class="col-xs-12 col-md-3">
            <span class="subtotal" id="polarized-lenses-subtotal"></span>
        </div>
    </div>
    <span class="alert alert-warning" role="alert" id="polarized-lenses-note" style="display:none"></span>
    <div class="row">
        <div class="col-xs-12 col-md-3">
            MF Tints:
        </div>
        <div class="col-xs-12 col-md-4">
            <select name="smf[tint]" id="tint-select" class="full-width">
                <option>Select</option>
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
                    <button type="button" class="btn btn-number" data-type="minus" data-field="smf[tint-amount]">
                    <span class="fa fa-minus-circle"></span>
                    </button>
                </span>
                <input type="text" name="smf[tint-amount]" class="input-number" value="0" min="0" max="100">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-number" data-type="plus" data-field="smf[tint-amount]">
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
            MF Coatings:
        </div>
        <div class="col-xs-12 col-md-4">
            <select name="smf[coating]" id="coating-select" class="full-width">
                <option>Select</option>
                <option value="MF AR Glass">MF AR Glass</option>
                <option value="MF Anti-Reflection">MF Anti-Reflection</option>
                <option value="MF Mirror">MF Mirror</option>
                <option value="MF Ski Type Coating">MF Ski Type Coating</option>
                <option value="MF Scratch Coat">MF Scratch Coat</option>
            </select>
        </div>
        <div class="col-xs-12 col-md-2">
            <div class="input-group">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-number" data-type="minus" data-field="smf[coating-amount]">
                    <span class="fa fa-minus-circle"></span>
                    </button>
                </span>
                <input type="text" name="smf[coating-amount]" class="input-number" value="0" min="0" max="100">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-number" data-type="plus" data-field="smf[coating-amount]">
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
            MF Misc. and Edge Treatments:
        </div>
        <div class="col-xs-12 col-md-4">
            <select name="smf[edge-treatment]" id="edge-treatment-select" class="full-width">
                <option>Select</option>
                <option value=">61mm eye size (Plastic)">>61mm eye size (Plastic)</option>
                <option value=">61mm eye size (Glass)">>61mm eye size (Glass)</option>
                <option value="Edge Coating MF">Edge Coating MF</option>
                <option value="MF Roll & Polish">MF Roll & Polish</option>
                <option value="MF UV protection (backside)">MF UV protection (backside)</option>
            </select>
        </div>
        <div class="col-xs-12 col-md-2">
            <div class="input-group">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-number" data-type="minus" data-field="smf[edge-treatment-amount]">
                    <span class="fa fa-minus-circle"></span>
                    </button>
                </span>
                <input type="text" name="smf[edge-treatment-amount]" class="input-number" value="0" min="0" max="100">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-number" data-type="plus" data-field="smf[edge-treatment-amount]">
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
                <input type="checkbox" name="smf[new-frames]" id="new-frames">
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
                <input type="number" name="smf[eligible-frames]" id="eligible-frames" class="form-control">
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
                <input type="text" name="smf[frames-cost]" id="frames-cost" class="form-control">
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
                <input type="text" name="smf[frames-allowance]" id="frames-allowance" class="form-control">
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
            <input type="text" name="smf[exam-copayment]" id="exam-copayment" class="form-control">
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
            <input type="text" name="smf[material-copayment]" id="material-copayment" class="form-control">
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