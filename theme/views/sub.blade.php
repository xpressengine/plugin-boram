@if($config->get('bannerSetting') == 'y')
<div class="sub-banner" @if($config->get('subHeaderImage.path')) style="background-image:url({{$config->get('subHeaderImage.path')}})" @endif>
    <div class="xe-container">
        <div>
            <h2>{{ xe_trans($config->get('subHeaderTitle')) }}</h2>

            @if($m = current_menu())
            <ul class="breadcrumb">
                <!-- li.on에 관련된 css없음 -->
                @foreach($m->getBreadcrumbs() as $item)
                    <li><a href="{{ url($item['url']) }}">{{ $item['link'] }}</a></li>
                @endforeach
            </ul>
            @endif
        </div>
    </div>
</div>
@endif

<div class="sub-content xe-container" id="content">
    {!! $content !!}
</div>