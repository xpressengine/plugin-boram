<div class="panel">
    <div class="panel-heading"><div class="pull-left"><h3>Contact 페이지</h3></div></div>
    <div class="panel-body">
        {{--
            action을 쓰지 않으면 form으로 감싸지 않는다
            CSRF token값을 사용하기 위함
        --}}
        <form action="{{ route('boram::settings.contact.store') }}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            {!! uio('themeSelect', ['selectedTheme' => ['desktop'=>$config->get('theme_desktop'), 'mobile'=>$config->get('theme_mobile')]]) !!}

            {{ uio('form', [
                'fields' => [
                    'useContact' => [
                        '_type' => 'select',
                        'label' => 'Contact 페이지 사용유무',
                        'options' => [
                            'y' => '사용',
                            'n' => '사용 안함'
                        ]
                    ],
                    'contactBackgroundImage' => [
                        '_type' => 'image',
                        'label' => '백그라운드 이미지',
                    ],
                    'contactTitle' => [
                        '_type' => 'langText',
                        'label' => '상단 타이틀',
                    ],
                    'contactSubTitle' => [
                        '_type' => 'langTextarea',
                        'label' => '상단 내용',
                    ],
                    'contactName' => [
                        '_type' => 'langText',
                        'label' => '상호명',
                    ],
                    'contactAddress' => [
                        '_type' => 'langText',
                        'label' => '주소',
                    ],
                    'contactTel' => [
                        '_type' => 'text',
                        'label' => 'Tel',
                    ],
                    'contactEmail' => [
                        '_type' => 'text',
                        'label' => 'E-mail',
                    ],
                    'contactFax' => [
                        '_type' => 'text',
                        'label' => 'Fax',
                    ],
                    'contactBusinessHours' => [
                        '_type' => 'langText',
                        'label' => 'Business Hours',
                    ],
                    'contactSocial' => [
                        '_type' => 'text',
                        'label' => 'Facebook URL',
                    ],
                    'successMessage' => [
                        '_type' => 'langText',
                        'label' => '메일전송 성공 메시지',
                    ],
                    'emailFormHeader' => [
                        '_type' => 'langTextarea',
                        'label' => 'email 전송 양식 헤더',
                    ],
                    'emailFormFooter' => [
                        '_type' => 'langTextarea',
                        'label' => 'email 전송 양식 푸터',
                    ]
                ],
                'value' => [
                    'useContact' => $config->get('useContact'),
                    'contactBackgroundImage' => $config->get('contactBackgroundImage'),
                    'contactTitle' => $config->get('contactTitle'),
                    'contactSubTitle' => $config->get('contactSubTitle'),
                    'contactName' => $config->get('contactName'),
                    'contactAddress' => $config->get('contactAddress'),
                    'contactTel' => $config->get('contactTel'),
                    'contactEmail' => $config->get('contactEmail'),
                    'contactFax' => $config->get('contactFax'),
                    'contactBusinessHours' => $config->get('contactBusinessHours'),
                    'contactSocial' => $config->get('contactSocial'),
                    'successMessage' => $config->get('successMessage'),
                    'emailFormHeader' => $config->get('emailFormHeader'),
                    'emailFormFooter' => $config->get('emailFormFooter'),
                ]
            ]) }}
            <div class="clearfix">
                <button type="submit" class="btn btn-primary pull-right">등록</button>
            </div>
        </form>
    </div>
</div>