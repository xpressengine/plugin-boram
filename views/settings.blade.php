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
                    'contactCompanyName' => [
                        '_type' => 'langText',
                        'label' => '상호명',
                    ],
                    'contactCompanyAddress' => [
                        '_type' => 'langText',
                        'label' => '주소',
                    ],
                    'contactTel' => [
                        '_type' => 'text',
                        'label' => 'Tel',
                    ],
                    'contactCompanyEmail' => [
                        '_type' => 'text',
                        'label' => 'E-mail',
                    ],
                    'contactCompanyFax' => [
                        '_type' => 'text',
                        'label' => 'Fax',
                    ],
                    'contactCompanyBusinessHours' => [
                        '_type' => 'langText',
                        'label' => 'Business Hours',
                    ],
                    'contactSocial' => [
                        '_type' => 'text',
                        'label' => 'Facebook URL',
                    ]
                ],
                'value' => [
                    'useContact' => $config->get('useContact'),
                    'contactBackgroundImage' => $config->get('contactBackgroundImage'),
                    'contactTitle' => $config->get('contactTitle'),
                    'contactSubTitle' => $config->get('contactSubTitle'),
                    'contactCompanyName' => $config->get('contactCompanyName'),
                    'contactCompanyAddress' => $config->get('contactCompanyAddress'),
                    'contactTel' => $config->get('contactTel'),
                    'contactCompanyEmail' => $config->get('contactCompanyEmail'),
                    'contactCompanyFax' => $config->get('contactCompanyFax'),
                    'contactCompanyBusinessHours' => $config->get('contactCompanyBusinessHours'),
                    'contactSocial' => $config->get('contactSocial'),
                ]
            ]) }}
            <div class="clearfix">
                <button type="submit" class="btn btn-primary pull-right">등록</button>
            </div>
        </form>
    </div>
</div>