<strong class="xe-sr-only">GNB list</strong>
<ul class="nav-list">
    @foreach(menu_list($config->get('mainMenu')) as $menu)
        <li class=" @if(count($menu['children'])) sub-menu @endif @if($menu['selected']) on @endif">
            <a href="{{ url($menu['url']) }}">
                {{ $menu['link'] }}
            </a>

            @if(count($menu['children']))
            <div class="sub-wrap">
                <div>
                    <ul class="sub-menu-list">
                        @foreach($menu['children'] as $menu1)
                        <li class=" @if(count($menu1['children'])) sub-menu @endif @if($menu1['selected']) on @endif">
                            <a href="{{ url($menu1['url']) }}">{{ $menu1['link'] }}</a>

                            @if(count($menu1['children']))
                            <div class="sub-wrap">
                                <div>
                                    <ul class="sub-menu-list">
                                        @foreach($menu1['children'] as $menu2)
                                        <li class="@if(count($menu2['children'])) sub-menu @endif @if($menu2['selected']) on @endif">
                                            <a href="{{ url($menu2['url']) }}">{{ $menu2['link'] }}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            @endif
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endif
        </li>
    @endforeach

    @if($contactConfig->get('useContact') == 'y')
    <li>
        <a href="{{ route('boram::contact') }}">
            Contact
        </a>
    </li>
    @endif
</ul>
<div class="auth-group">
    <!-- 로그인 상태 -->
    <ul>
        @if(Auth::check())
            <li class="member-name"><a href="{{ route('user.profile', ['user' => auth()->id()]) }}">{{ auth()->user()->getDisplayName() }}</a></li>

            @if(auth()->user()->isAdmin())
            <li><a href="{{ route('user.settings') }}"><i class="xi-cog"></i><span class="xe-sr-only">config</span></a></li>
            @endif

            <li class="li-block"><a href="{{ route('logout') }}">{{ xe_trans('xe::logout') }}</a></li>
        @else
            <li class="li-block"><a href="{{ route('login') }}">{{ xe_trans('xe::login') }}</a></li>
        @endif
    </ul>
</div>