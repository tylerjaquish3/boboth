<div class="down40" id="signature-single-vision-form" style="display:none;"> 
    <div class="row">
        <div class="col-xs-12 col-md-3">
            SV Material:
        </div>
        <div class="col-xs-12 col-md-4">
            <select id="material-select" class="full-width">
                <option>Select</option>
                <option value="sv-plastic">SV Plastic</option>
                <option value="sv-plastic">SV Trivex</option>
                <option value="sv-hi-index-1.67">SV Hi Index 1.67 Plastic</option>
                <option value="sv-hi-index-1.70">SV Hi Index 1.70 Plastic</option>
                <option value="sv-polycarbonate">SV Polycarbonate</option>
                <option value="sv-hi-index-glass">SV Hi Index Glass</option>
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
            <span class="subtotal" id="type-subtotal"></span>
        </div>
    </div>
    <span class="alert alert-warning" role="alert" id="type-note" style="display:none"></span>
    <div class="row">
        <div class="col-xs-12 col-md-3">
            SV Polarized:
        </div>
        <div class="col-xs-12 col-md-4">
            <select id="material-select" class="full-width">
                <option>Select</option>
                <option value="sv-polarized-plastic">SV Polarized Plastic</option>
                <option value="sv-polarized-trivex">SV Polarized Trivex</option>
                <option value="sv-polarized-1.67">SV Polarized 1.67 Plastic</option>
                <option value="sv-polarized-polycarb">SV Polarized Polycarb</option>
            </select>
        </div>
        <div class="col-xs-12 col-md-2">
            <div class="input-group">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-number" data-type="minus" data-field="polarized">
                    <span class="fa fa-minus-circle"></span>
                    </button>
                </span>
                <input type="text" name="polarized" class="input-number" value="0" min="0" max="100">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-number" data-type="plus" data-field="polarized">
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
            SV Tints:
        </div>
        <div class="col-xs-12 col-md-4">
            <select id="material-select" class="full-width">
                <option>Select</option>
                <option value="transitions-plastic">Transitions (Plastic)</option>
                <option value="transitions-glass">Transitions (Glass)</option>
                <option value="solid-tint-plastic">Solid Tint (Plastic)</option>
                <option value="gradient-tint-plastic">Gradient Tint (Plastic)</option>
                <option value="solid-tint-glass">Solid Tint (Glass)</option>
                <option value="gradient-tint-glass">Gradient Tint (Glass)</option>
            </select>
        </div>
        <div class="col-xs-12 col-md-2">
            <div class="input-group">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-number" data-type="minus" data-field="tints">
                    <span class="fa fa-minus-circle"></span>
                    </button>
                </span>
                <input type="text" name="tints" class="input-number" value="0" min="0" max="100">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-number" data-type="plus" data-field="tints">
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
            SV Coatings:
        </div>
        <div class="col-xs-12 col-md-4">
            <select id="material-select" class="full-width">
                <option>Select</option>
                <option value="anti-reflection-glass">Anti-Reflection Glass SV</option>
                <option value="sv-anti-reflection">SV Anti-Reflection</option>
                <option value="sv-mirror">SV Mirror</option>
                <option value="sv-ski-type-coating">SV Ski Type Coating</option>
                <option value="sv-scratch-coat">SV Scratch Coat</option>
            </select>
        </div>
        <div class="col-xs-12 col-md-2">
            <div class="input-group">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-number" data-type="minus" data-field="coatings">
                    <span class="fa fa-minus-circle"></span>
                    </button>
                </span>
                <input type="text" name="coatings" class="input-number" value="0" min="0" max="100">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-number" data-type="plus" data-field="coatings">
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
            <select id="material-select" class="full-width">
                <option>Select</option>
                <option value="61mm-eye-size-plastic">>61mm eye size (Plastic)</option>
                <option value="61mm-eye-size-glass">>61mm eye size (Glass)</option>
                <option value="edge-coating-sv">Edge Coating SV</option>
                <option value="sv-roll-polish">SV Roll & Polish</option>
                <option value="sv-uv-protection">SV UV protection (backside)</option>
            </select>
        </div>
        <div class="col-xs-12 col-md-2">
            <div class="input-group">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-number" data-type="minus" data-field="coatings">
                    <span class="fa fa-minus-circle"></span>
                    </button>
                </span>
                <input type="text" name="coatings" class="input-number" value="0" min="0" max="100">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-number" data-type="plus" data-field="coatings">
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

</div>