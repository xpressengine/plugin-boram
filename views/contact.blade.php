<div class="sub-content xe-container">
    <!-- contact -->
    <div class="boram-contact-form">
        <div class="contact-title">
            @if($contactConfig->get('contactTitle'))
                <h2>{{ xe_trans($contactConfig->get('contactTitle')) }}</h2>
            @endif
            @if($contactConfig->get('contactSubTitle'))
                <p>{{ xe_trans($contactConfig->get('contactSubTitle')) }}</p>
            @endif
        </div>
        <div class="xe-row">
            <div class="xe-col-sm-6">
                <div class="contact-info">
                    @if($contactConfig->get('contactName'))
                        <h3>{{ xe_trans($contactConfig->get('contactName')) }}</h3>
                    @endif
                    <dl>
                        @if($contactConfig->get('contactAddress') && $contactConfig->get('contactTel'))
                            <dt class="xe-sr-only">주소 및 연락처</dt>
                            <dd>{{ xe_trans($contactConfig->get('contactAddress')) }}<br>{{ $contactConfig->get('contactTel') }}</dd>
                        @endif
                        @if($contactConfig->get('contactEmail'))
                            <dt>Email</dt>
                            <dd>{{ $contactConfig->get('contactEmail') }}</dd>
                        @endif
                        @if($contactConfig->get('contactFax'))
                            <dt>Fax</dt>
                            <dd>{{ $contactConfig->get('contactFax') }}</dd>
                        @endif
                        @if($contactConfig->get('contactBusinessHours'))
                            <dt>Business Hours</dt>
                            <dd>{{ xe_trans($contactConfig->get('contactBusinessHours')) }}</dd>
                        @endif
                        @if($contactConfig->get('contactSocial'))
                            <dt>Social</dt>
                            <dd>
                                <a href="{{ $contactConfig->get('contactSocial') }}"><i class="xi-facebook"><span class="xe-sr-only">페이스북 바로가기</span></i></a>
                            </dd>
                        @endif
                    </dl>
                </div>
            </div>
            <div class="xe-col-sm-6">
                <h3>CONTACT US</h3>
                <form name="frmContact" id="__frmBoramContact" action="{{ route('boarm::sendEmail') }}" method="post" data-submit="xe-ajax" data-callback="contactCallback">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

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
                        <textarea rows="10" cols="40" class="xe-form-control" placeholder="내용" name="content"></textarea>
                    </div>
                    <button type="button" class="btn-contact __btnBoramContactSubmit">등록</button>
                </form>
            </div>
        </div>
    </div>
    <!-- /contact -->
</div>

{{ XeFrontend::js('assets/core/xe-ui-component/js/xe-form.js')->appendTo('body')->load() }}
