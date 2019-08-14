<div class="down40" id="choice-multifocal-form" style="display:none;"> 
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

</div>