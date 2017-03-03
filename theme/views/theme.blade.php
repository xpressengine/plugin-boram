@extends($theme::view('frame'))

{{-- meta(viewport) --}}
{{ app('xe.frontend')->meta()->name('viewport')->content(
    'width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no'
)->load() }}

{{-- stylesheet --}}
{{ app('xe.frontend')->css([
    $theme::asset('css/owl.carousel.css'),
    $theme::asset('css/layout.css'),
])->load() }}

{{-- script --}}
{{ app('xe.frontend')->js([
    $theme::asset('js/owl.carousel.min.js'),
    $theme::asset('js/theme.boram.js'),
])->load() }}

@if($config->get('layout') == 'main')
    {{ app('xe.frontend')->js([
        $theme::asset('js/main.js'),
    ])->load() }}
@endif

{{-- body class --}}
@if($config->get('layout') == 'main')
    {{ app('xe.frontend')->bodyClass('main-skin') }}
@else
    {{ app('xe.frontend')->bodyClass('sub-skin') }}
@endif

{{ app('xe.frontend')->bodyClass('desktop') }}
{{ app('xe.frontend')->bodyClass($config->get('colorset', '')) }}