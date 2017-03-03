<p class="skip"><a href="#content">menu skip</a></p>
<button class="btn-slide xe-hidden-md xe-hidden-lg" type="button">
    <span class="xe-sr-only">Toggle nav-listigation</span>
    <i class="xi-bars"></i>
</button>

<!-- 2depth가 열려 있는 페이지의 경우 header.depth-fixed li.sub-menu.open-fixed-->
<!-- 공통 header -->
<header>
    <button type="button" class="btn-close-header transition"><i class="xi-close-thin"></i><span class="xe-sr-only">header layer 닫기</span></button>
    <div>
        @if($config->get('logoSetting'))
        <div class="brand-area">
            <h1>
                <a href="{{ url('/') }}" class="link-brand">
                    @if($config->get('logoSetting') == 'image' && $config->get('logoImage.path'))
                        <img src="{{ $config->get('logoImage.path') }}" alt="{{ xe_trans($config->get('logoText', '')) }}" />
                    @else
                        {{ $config->get('logoText') }}
                    @endif
                </a>
            </h1>
        </div>
        @endif
        <nav class="transition">
            @include($theme::view('gnb'))
        </nav>
    </div>
</header>

<div class="main-wrap transition">
    <!-- main, sub, contact -->
    @include($theme::view($config->get('layout')))

    <!-- footer -->
    @include($theme::view('footer'))
</div>

<div class="dim"></div>