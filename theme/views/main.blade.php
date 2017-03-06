@if($config->get('useTopSlide') == 'y')
<div class="spot-area">
    <div class="owl-spot owl-slider">
        @if ($config->get('slide1Image.path'))
            <div class="item">
                <div class="item-slide" style="background-image:url({{$config->get('slide1Image.path')}})">
                    <div class="item-slide-text">
                        @if ($config->get('slide1Title'))<p>{!! nl2br(xe_trans($config->get('slide1Title', ''))) !!}</p>@endif
                        @if ($config->get('slide1Subtitle'))<strong>{!! nl2br(xe_trans($config->get('slide1Subtitle', ''))) !!}</strong>@endif
                    </div>
                </div>
            </div>
        @endif
        @if ($config->get('slide2Image.path'))
            <div class="item">
                <div class="item-slide" style="background-image:url({{$config->get('slide2Image.path')}})">
                    <div class="item-slide-text">
                        @if ($config->get('slide2Title'))<p>{!! nl2br(xe_trans($config->get('slide2Title', ''))) !!}</p>@endif
                        @if ($config->get('slide2Subtitle'))<strong>{!! nl2br(xe_trans($config->get('slide2Subtitle', ''))) !!}</strong>@endif
                    </div>
                </div>
            </div>
        @endif
        @if ($config->get('slide3Image.path'))
            <div class="item">
                <div class="item-slide" style="background-image:url({{$config->get('slide3Image.path')}})">
                    <div class="item-slide-text">
                        @if ($config->get('slide3Title'))<p>{!! nl2br(xe_trans($config->get('slide3Title', ''))) !!}</p>@endif
                        @if ($config->get('slide3Subtitle'))<strong>{!! nl2br(xe_trans($config->get('slide3Subtitle', ''))) !!}</strong>@endif
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
@endif

<div class="main-content">

    <div class="xe-container-fluid xe-grid-no-padding boram-widget-group">
        {!! $content !!}
    </div>

    @if($config->get('useBottomSlide') == 'y')
    <div class="owl-bottom owl-slider">
        @if($config->get('slideBottom1Image.path'))
        <div class="item">
            <div class="item-slide">
                <div class="item-slide-text" style="background-image:url({{$config->get('slideBottom1Image.path')}})">
                    <strong>{{ xe_trans($config->get('slideBottom1Title')) }}</strong>
                    <p>{{ xe_trans($config->get('slideBottom1Subtitle')) }}</p>
                </div>
            </div>
        </div>
        @endif
        @if($config->get('slideBottom2Image.path'))
        <div class="item">
            <div class="item-slide">
                <div class="item-slide-text" style="background-image:url({{$config->get('slideBottom2Image.path')}})">
                    <strong>{{ xe_trans($config->get('slideBottom2Title')) }}</strong>
                    <p>{{ xe_trans($config->get('slideBottom2Subtitle')) }}</p>
                </div>
            </div>
        </div>
        @endif
        @if($config->get('slideBottom3Image.path'))
        <div class="item">
            <div class="item-slide">
                <div class="item-slide-text" style="background-image:url({{$config->get('slideBottom3Image.path')}})">
                    <strong>{{ xe_trans($config->get('slideBottom3Title')) }}</strong>
                    <p>{{ xe_trans($config->get('slideBottom3Subtitle')) }}</p>
                </div>
            </div>
        </div>
        @endif
    </div>
    @endif
</div>