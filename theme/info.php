<?php
return [
    'view' => 'theme',
    'setting' => [
        //레이아웃 선택
        [
            'section' => [
                'class' => 'setting-section',
                'title' => '설정'
            ],
            'fields' => [
                'layout' => [
                    '_type' => 'select',
                    'label' => '레이아웃',
                    'options' => [
                        'main' => 'Main 페이지용',
                        'sub' => 'Sub 페이지용',
                    ]
                ],

                'mainMenu' => [
                    '_type' => 'menu',
                    'label' => '메인 메뉴 선택',
                ],

                // 컬러셋
                'colorset' => [
                    '_type' => 'select',
                    'label' => '컬러셋',
                    'options' => [
                        '' => 'Default',
                        'yellow-theme' => 'Yellow',
                        'red-theme' => 'Red',
                    ]
                    /* for body class*/
                ],

                /* 로고 설정 */
                'logoSetting' => [
                    '_type' => 'select',
                    'label' => 'LOGO 설정',
                    'options' => [
                        '' => '사용안함',
                        'image' => 'LOGO 이미지 사용',
                        'text' => 'LOGO 텍스트 사용',
                    ]
                ],
                'logoText' => [
                    '_type' => 'langText',
                    'label' => 'LOGO 텍스트',
                    'placeholder' => '상단에 표시될 로고 대체 텍스트를 입력하세요',
                ],
                'logoImage' => [
                    '_type' => 'image',
                    'label' => 'LOGO 이미지',
                    'description' => '로고 이미지를 등록하세요'
                ],

                //footer 설정
                'useFooter' => [
                    '_type' => 'select',
                    'label' => '푸터 영역 사용 여부',
                    'options' => [
                        'y' => '사용',
                        'n' => '사용 안함'
                    ]
                ],
                'footerCopyright' => [
                    '_type' => 'textarea',
                    'label' => '카피라이트',
                    'description' => 'HTML사용 가능'
                ],
            ]
        ],
        

        /* Main 페이지 */
        [
            'section' => [
                'class' => 'main-section',
                'title' => 'Main 페이지'
            ],
            'fields' => [
                'useTopSlide' => [
                    '_type' => 'select',
                    'label' => '상단 슬라이드 사용 유무',
                    'options' => [
                        'y' => '사용',
                        'n' => '사용 안함'
                    ]
                ],
                'slide1Image' => [
                    '_type' => 'image',
                    'label' => '상단 슬라이드1 이미지',
                ],
                'slide1Title' => [
                    '_type' => 'langTextarea',
                    'label' => '상단 슬라이드1 제목',
                ],
                'slide1Subtitle' => [
                    '_type' => 'langTextarea',
                    'label' => '상단 슬라이드1 내용',
                ],
                'slide2Image' => [
                    '_type' => 'image',
                    'label' => '상단 슬라이드2 이미지',
                ],
                'slide2Title' => [
                    '_type' => 'langTextarea',
                    'label' => '상단 슬라이드2 제목',
                ],
                'slide2Subtitle' => [
                    '_type' => 'langTextarea',
                    'label' => '상단 슬라이드2 내용',
                ],
                'slide3Image' => [
                    '_type' => 'image',
                    'label' => '상단 슬라이드3 이미지',
                ],
                'slide3Title' => [
                    '_type' => 'langTextarea',
                    'label' => '상단 슬라이드3 제목',
                ],
                'slide3Subtitle' => [
                    '_type' => 'langTextarea',
                    'label' => '상단 슬라이드3 내용',
                ],

                //bottom slider
                'useBottomSlide' => [
                    '_type' => 'select',
                    'label' => '하단 슬라이드 사용 유무',
                    'options' => [
                        'y' => '사용',
                        'n' => '사용 안함'
                    ]
                ],
                'slideBottom1Image' => [
                    '_type' => 'image',
                    'label' => '하단 슬라이드1 이미지',
                ],
                'slideBottom1Title' => [
                    '_type' => 'langTextarea',
                    'label' => '하단 슬라이드1 제목',
                ],
                'slideBottom1Subtitle' => [
                    '_type' => 'langTextarea',
                    'label' => '하단 슬라이드1 내용',
                ],
                'slideBottom2Image' => [
                    '_type' => 'image',
                    'label' => '하단 슬라이드2 이미지',
                ],
                'slideBottom2Title' => [
                    '_type' => 'langTextarea',
                    'label' => '하단 슬라이드2 제목',
                ],
                'slideBottom2Subtitle' => [
                    '_type' => 'langTextarea',
                    'label' => '하단 슬라이드2 내용',
                ],
                'slideBottom3Image' => [
                    '_type' => 'image',
                    'label' => '하단 슬라이드3 이미지',
                ],
                'slideBottom3Title' => [
                    '_type' => 'langTextarea',
                    'label' => '하단 슬라이드3 제목',
                ],
                'slideBottom3Subtitle' => [
                    '_type' => 'langTextarea',
                    'label' => '하단 슬라이드3 내용',
                ],
            ]
        ],
        
        /* Sub 페이지 설정 */
        [
            'section' => [
                'class' => 'sub-section',
                'title' => 'Sub 페이지'
            ],
            'fields' => [
                'bannerSetting' => [
                    '_type' => 'select',
                    'label' => '배너 설정',
                    'options' => [
                        'y' => '사용',
                        'n' => '사용 안함'
                    ]
                ],
                'subHeaderImage' => [
                    '_type' => 'image',
                    'label' => '상단 이미지',
                ],
                'subHeaderTitle' => [
                    '_type' => 'langText',
                    'label' => '상단 타이틀',
                ],
            ]
        ],
    ],
    'setting.assets' => [
        'js' => ['js/settings.js']
    ],
    'gnb' => [
        
    ],
    'editable' => [
        'theme.blade.php',
        'main.blade.php',
        'sub.blade.php',
        'gnb.blade.php',
        'footer.blade.php',
        'frame.blade.php',
    ]
];
