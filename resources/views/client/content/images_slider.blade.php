@if(!empty($section_0['images']))
<div id="back-section-2">
    <div class="smoke-slider smoke-slider-left">
    </div>
    <div class="smoke-slider smoke-slider-right">
    </div>
    <div class="btn-slider btn-slider-left">
    </div>
    <div class="btn-slider btn-slider-right">
    </div>
    <div class="wrap-section-2">
    </div>
    <div class="wrap-section-2-slider">
    <div class="section-2-slider" style="width: {{ sizeof($section_0['images']) * 606}}px !important;grid-template-columns: repeat({{ sizeof($section_0['images']) }}, 1fr);" value="1">
        @foreach($section_0['images'] as $key => $value)
        <div class="section-2-slider-item">
            <div class="section-2-slider-image" style="overflow: hidden;">
                <div class="wrap-image">
                <img src="{{ $value }}" width="100%" height="auto"/>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    </div>
</div>
@endif