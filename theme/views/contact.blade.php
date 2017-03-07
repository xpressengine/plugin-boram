<!-- TODO 삭제되어야 함. 지금 없어지면 화면 깨짐 -> 퍼블리싱수정 -->
<div class="sub-banner">
    <div class="xe-container">
        <div>
            <h2>온라인 홍보 게시판</h2>
            <ul class="breadcrumb">
                <li><a href="#">홈</a></li>
                <li><a href="#">depth2</a></li>
                <li class="on">depth3</li>
            </ul>
        </div>
    </div>
</div>

<div class="sub-content xe-container">
    <!-- contact -->
    <div class="boram-contact-form">
        <div class="contact-title">
            @if($config->get('contactTitle'))
            <h2>{{ xe_trans($config->get('contactTitle')) }}</h2>
            @endif
            @if($config->get('contactSubTitle'))
            <p>{{ xe_trans($config->get('contactSubTitle')) }}</p>
            @endif
        </div>
        <div class="xe-row">
            <div class="xe-col-sm-6">
                <div class="contact-info">
                    @if($config->get('contactCompanyName'))
                    <h3>{{ xe_trans($config->get('contactCompanyName')) }}</h3>
                    @endif
                    <dl>
                        @if($config->get('contactCompanyAddress') && $config->get('contactTel'))
                        <dt class="xe-sr-only">주소 및 연락처</dt>
                        <dd>{{ xe_trans($config->get('contactCompanyAddress')) }}<br>{{ $config->get('contactTel') }}</dd>
                        @endif
                        @if($config->get('contactCompanyEmail'))
                        <dt>Email</dt>
                        <dd>{{ $config->get('contactCompanyEmail') }}</dd>
                        @endif
                        @if($config->get('contactCompanyFax'))
                        <dt>Fax</dt>
                        <dd>{{ $config->get('contactCompanyFax') }}</dd>
                        @endif
                        @if($config->get('contactCompanyBusinessHours'))
                        <dt>Business Hours</dt>
                        <dd>{{ xe_trans($config->get('contactCompanyBusinessHours')) }}</dd>
                        @endif
                        @if($config->get('contactSocial'))
                        <dt>Social</dt>
                        <dd>
                            <a href="{{ $config->get('contactSocial') }}"><i class="xi-facebook"><span class="xe-sr-only">페이스북 바로가기</span></i></a>
                        </dd>
                        @endif
                    </dl>
                </div>
            </div>
            <div class="xe-col-sm-6">
                <h3>CONTACT US</h3>
                <form name="frmContact" id="__frmBoramContact" action="{{ route('boarm::sendEmail') }}" method="post" data-toggle="xe-form">
                    <div class="xe-form-group">
                        <input type="text" class="xe-form-control xe-input-lg" placeholder="이름" name="name">
                    </div>
                    <div class="xe-form-group">
                        <input type="text" class="xe-form-control xe-input-lg" placeholder="Email" name="email">
                    </div>
                    <div class="xe-form-group">
                        <input type="text" class="xe-form-control xe-input-lg" placeholder="제목" name="title">
                    </div>
                    <div class="xe-form-group">
                        <textarea name="name" rows="10" cols="40" class="xe-form-control" placeholder="내용" name="content"></textarea>
                    </div>
                    <button type="submit" class="btn-contact __btnBoramContactSubmit">등록</button>
                </form>
            </div>
        </div>
    </div>
    <!-- /contact -->
</div>
