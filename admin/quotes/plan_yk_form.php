<div class="down40" id="plan-yk-form" style="display:none;"> 
    <div class="row">
        <div class="col-xs-12 text-center">
            <h2>NBN Group Plan YK Only</h2>
        </div>
    </div>
    <div class="row down40">
        <div class="col-xs-12 col-md-3">
            Type:
        </div>
        <div class="col-xs-12 col-md-4">
            <select name="pyk[type]" id="type-select" class="full-width">
                <option>Select</option>
                <option value="Single Vision (SV)">Single Vision (SV)</option>
                <option value="Progressive (No-Line)">Progressive (No-Line)</option>
                <option value="Lined Bifocal 28">Lined Bifocal 28</option>
                <option value="Lined Bifocal 35">Lined Bifocal 35</option>
                <option value="Trifocal">Trifocal</option>
                <option value="Shamir First PAL">Shamir First PAL</option>
                <option value="Blended Bifocal">Blended Bifocal</option>
            </select>
        </div>
        <div class="col-xs-12 col-md-2">
            <div class="input-group">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-number" data-type="minus" data-field="pyk[type-amount]">
                    <span class="fa fa-minus-circle"></span>
                    </button>
                </span>
                <input type="text" name="pyk[type-amount]" class="input-number" value="0" min="0" max="100">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-number" data-type="plus" data-field="pyk[type-amount]">
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
            <select name="pyk[material]" id="material-select" class="full-width">
                <option>Select</option>
                <option value="Plastic">Plastic</option>
                <option value="Regular PAL Glass">Regular PAL Glass</option>
                <option value="Regular SV Glass">Regular SV Glass</option>
                <option value="Polycarb">Polycarb</option>
                <option value="Trivex SV">Trivex SV</option>
                <option value="Trivex MF">Trivex MF</option>
                <option value="1.67 HI Index Plastic (SV)">1.67 HI Index Plastic (SV)</option>
                <option value="1.67 HI Index Plastic (MF)">1.67 HI Index Plastic (MF)</option>
                <option value="HI Index 1.60-1.69 Glass (SV)">HI Index 1.60-1.69 Glass (SV)</option>
                <option value="HI Index 1.60-1.69 Glass (MF)">HI Index 1.60-1.69 Glass (MF)</option>
            </select>
        </div>
        <div class="col-xs-12 col-md-2">
            <div class="input-group">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-number" data-type="minus" data-field="pyk[material-amount]">
                    <span class="fa fa-minus-circle"></span>
                    </button>
                </span>
                <input type="text" name="pyk[material-amount]" class="input-number" value="0" min="0" max="100">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-number" data-type="plus" data-field="pyk[material-amount]">
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
            Tints:
        </div>
        <div class="col-xs-12 col-md-4">
            <select name="pyk[tint]" id="tint-select" class="full-width">
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
                    <button type="button" class="btn btn-number" data-type="minus" data-field="pyk[tint-amount]">
                    <span class="fa fa-minus-circle"></span>
                    </button>
                </span>
                <input type="text" name="pyk[tint-amount]" class="input-number" value="0" min="0" max="100">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-number" data-type="plus" data-field="pyk[tint-amount]">
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
            Coatings:
        </div>
        <div class="col-xs-12 col-md-4">
            <select name="pyk[coating]" id="coating-select" class="full-width">
                <option>Select</option>
                <option value="No Coatings">No Coatings</option>
                <option value="Standard AR coat">Standard AR coat</option>
                <option value="Premium AR coat">Premium AR coat</option>
                <option value="Scratch coat">Scratch coat</option>
                <option value="UV Protection">UV Protection</option>
            </select>
        </div>
        <div class="col-xs-12 col-md-2">
            <div class="input-group">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-number" data-type="minus" data-field="pyk[coating-amount]">
                    <span class="fa fa-minus-circle"></span>
                    </button>
                </span>
                <input type="text" name="pyk[coating-amount]" class="input-number" value="0" min="0" max="100">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-number" data-type="plus" data-field="pyk[coating-amount]">
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
            Edge Treatments:
        </div>
        <div class="col-xs-12 col-md-4">
            <select name="pyk[edge-treatment]" id="edge-treatment-select" class="full-width">
                <option>Select</option>
                <option value="Roll & Polished">Roll & Polished</option>
                <option value="Rimless Frame">Rimless Frame</option>
                <option value="Edge Tint">Edge Tint</option>
                <option value="Shelf Bevel">Shelf Bevel</option>
                <option value="None">None</option>
            </select>
        </div>
        <div class="col-xs-12 col-md-2">
            <div class="input-group">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-number" data-type="minus" data-field="pyk[edge-treatment-amount]">
                    <span class="fa fa-minus-circle"></span>
                    </button>
                </span>
                <input type="text" name="pyk[edge-treatment-amount]" class="input-number" value="0" min="0" max="100">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-number" data-type="plus" data-field="pyk[edge-treatment-amount]">
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
            If buying new frames, retail cost:
        </div>
        <div class="col-xs-12 col-md-3">
            <input type="text" name="pyk[frames-cost]" id="frames-cost" class="form-control">
            <span class="alert alert-danger" id="frames-cost-error" style="display:none;">Please enter a valid amount.</span>
        </div>
        <div class="col-xs-12 col-md-3">
            <span class="subtotal" id="frames-cost-subtotal"></span>
        </div>
    </div>
</div>

<!--[if lte IE 8]><script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script><![endif]--> 
<script src="/js/jquery-1.8.2.min.js" type="text/javascript"></script> 
<script src="/js/bootstrap.min.js" type="text/javascript"></script> 

<div id="script"></div>