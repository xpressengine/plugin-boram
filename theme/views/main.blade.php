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

<div class="main-content">

    <div class="xe-container-fluid xe-grid-no-padding boram-widget-group">
        {!! $content !!}
    </div>

    <div class="owl-bottom owl-slider">
        <div class="item">
            <div class="item-slide">
                <div class="item-slide-text" style="background-image:url({{$config->get('slideBottom1Image.path')}})">
                    <strong>{{ $config->get('slideBottom1Title') }}</strong>
                    <p>{{ $config->get('slideBottom1Subtitle') }}</p>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="item-slide">
                <div class="item-slide-text" style="background-image:url({{$config->get('slideBottom2Image.path')}})">
                    <strong>{{ $config->get('slideBottom2Title') }}</strong>
                    <p>{{ $config->get('slideBottom2Subtitle') }}</p>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="item-slide">
                <div class="item-slide-text" style="background-image:url({{$config->get('slideBottom3Image.path')}})">
                    <strong>{{ $config->get('slideBottom3Title') }}</strong>
                    <p>{{ $config->get('slideBottom3Subtitle') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>