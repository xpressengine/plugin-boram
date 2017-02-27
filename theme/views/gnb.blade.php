<ul class="nav navbar-nav">
    @foreach(menu_list($config->get('gnb')) as $menu)
    <li @if($menu['selected']) class="active" @endif><a href="{{ url($menu['url']) }}">{{ $menu['link'] }}</a></li>
    @endforeach
</ul>


<p class="skip"><a href="#content">menu skip</a></p>
<button class="btn-slide xe-hidden-md xe-hidden-lg" type="button">
    <span class="xe-sr-only">Toggle nav-listigation</span>
    <i class="xi-bars"></i>
</button>
<!-- 2depth가 열려 있는 페이지의 경우 header.depth-fixed li.sub-menu.open-fixed-->
<header>
    <button type="button" class="btn-close-header transition"><i class="xi-close-thin"></i><span class="xe-sr-only">header layer 닫기</span></button>
    <div>
        <div class="brand-area">
            <h1><a href="00_index.html" class="link-brand"><img src="../assets/img/brand.png" alt="logo"></a></h1>
        </div>
        <nav class="transition">
            <strong class="xe-sr-only">GNB list</strong>
            <ul class="nav-list">
                <li class="sub-menu">
                    <a href="#">ABOUT</a>
                    <div class="sub-wrap">
                        <div>
                            <ul class="sub-menu-list">
                                <li><a href="#">2depth</a></li>
                                <li class="sub-menu">
                                    <a href="#">2depth(sub)</a>
                                    <div class="sub-wrap">
                                        <div>
                                            <ul class="sub-menu-list">
                                                <li><a href="#">3depth</a></li>
                                                <li><a href="#">3depth</a></li>
                                                <li><a href="#">3depth</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#">2depth</a></li>
                                <li><a href="#">2depth</a></li>
                                <li class="sub-menu">
                                    <a href="#">2depth(sub)</a>
                                    <div class="sub-wrap">
                                        <div>
                                            <ul class="sub-menu-list">
                                                <li><a href="#">3depth</a></li>
                                                <li><a href="#">3depth</a></li>
                                                <li><a href="#">3depth</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="01_sub.html">사업분야</a>
                </li>
                <li class="sub-menu">
                    <a href="#">홍보센터</a>
                    <div class="sub-wrap">
                        <div>
                            <ul class="sub-menu-list">
                                <li class="on"><a href="#">1-3-2depth</a></li>
                                <li class="sub-menu">
                                    <a href="#">1-3-2depth(sub)</a>
                                    <div class="sub-wrap">
                                        <div>
                                            <ul class="sub-menu-list">
                                                <li><a href="#">3depth</a></li>
                                                <li><a href="#">3depth</a></li>
                                                <li><a href="#">3depth</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#">2depth</a></li>
                                <li><a href="#">2depth</a></li>
                                <li><a href="#">2depth</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="on">
                    <a href="02_contact.html">CONTACT</a>
                </li>
            </ul>
            <div class="auth-group">
                <!-- 로그인 상태 -->
                <ul>
                    <li class="member-name"><a href="#" title="프로필 바로가기">marob</a></li>
                    <li><a href="#"><i class="xi-cog"></i><span class="xe-sr-only">config</span></a></li>
                    <li class="li-block"><a href="#">로그아웃</a></li>
                </ul>

                <!-- 로그아웃 상태
                <ul>
                    <li class="li-block"><a href="#">로그인</a></li>
                </ul> -->
            </div>
        </nav>
    </div>
</header>