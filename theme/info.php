<?php
return [
    'view' => 'theme',
    'setting' => [

        //레이아웃 선택
        'layout' => [
            '_type' => 'select',
            '_section' => '설정',
            'label' => '레이아웃',
            'options' => [
                'main' => 'Main 페이지용',
                'sub' => 'Sub 페이지용',
            ]
        ],

        'mainMenu' => [
            '_type' => 'menu',
            '_section' => '설정',
            'label' => '메인 메뉴 선택',
        ],

        // 컬러셋
        'colorset' => [
            '_type' => 'select',
            '_section' => '설정',
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
            '_section' => '설정',
            'label' => 'LOGO 설정',
            'options' => [
                '' => '사용안함',
                'image' => 'LOGO 이미지 사용',
                'text' => 'LOGO 텍스트 사용',
            ]
        ],
        'logoText' => [
            '_type' => 'langText',
            '_section' => '설정',
            'label' => 'LOGO 텍스트',
            'placeholder' => '상단에 표시될 로고 대체 텍스트를 입력하세요',
        ],
        'logoImage' => [
            '_type' => 'image',
            '_section' => '설정',
            'label' => 'LOGO 이미지',
            'description' => '로고 이미지를 등록하세요'
        ],

        //footer 설정
        'useFooter' => [
            '_type' => 'select',
            '_section' => '설정',
            'label' => '푸터 영역 사용 여부',
            'options' => [
                'y' => '사용',
                'n' => '사용 안함'
            ]
        ],
        'footerCopyright' => [
            '_type' => 'textarea',
            '_section' => '설정',
            'label' => '카피라이트',
        ],

        /* Main 페이지 */
        //top slider
        'useTopSlide' => [
            '_type' => 'select',
            '_section' => 'Main 페이지',
            'label' => '상단 슬라이드 사용 유무',
            'options' => [
                'y' => '사용',
                'n' => '사용 안함'
            ]
        ],
        'slide1Image' => [
            '_type' => 'image',
            '_section' => 'Main 페이지',
            'label' => '상단 슬라이드1 이미지',
        ],
        'slide1Title' => [
            '_type' => 'langTextarea',
            '_section' => 'Main 페이지',
            'label' => '상단 슬라이드1 제목',
        ],
        'slide1Subtitle' => [
            '_type' => 'langTextarea',
            '_section' => 'Main 페이지',
            'label' => '상단 슬라이드1 내용',
        ],
        'slide2Image' => [
            '_type' => 'image',
            '_section' => 'Main 페이지',
            'label' => '상단 슬라이드2 이미지',
        ],
        'slide2Title' => [
            '_type' => 'langTextarea',
            '_section' => 'Main 페이지',
            'label' => '상단 슬라이드2 제목',
        ],
        'slide2Subtitle' => [
            '_type' => 'langTextarea',
            '_section' => 'Main 페이지',
            'label' => '상단 슬라이드2 내용',
        ],
        'slide3Image' => [
            '_type' => 'image',
            '_section' => 'Main 페이지',
            'label' => '상단 슬라이드3 이미지',
        ],
        'slide3Title' => [
            '_type' => 'langTextarea',
            '_section' => 'Main 페이지',
            'label' => '상단 슬라이드3 제목',
        ],
        'slide3Subtitle' => [
            '_type' => 'langTextarea',
            '_section' => 'Main 페이지',
            'label' => '상단 슬라이드3 내용',
        ],

        //bottom slider
        'useBottomSlide' => [
            '_type' => 'select',
            '_section' => 'Main 페이지',
            'label' => '하단 슬라이드 사용 유무',
            'options' => [
                'y' => '사용',
                'n' => '사용 안함'
            ]
        ],
        'slideBottom1Image' => [
            '_type' => 'image',
            '_section' => 'Main 페이지',
            'label' => '하단 슬라이드1 이미지',
        ],
        'slideBottom1Title' => [
            '_type' => 'langTextarea',
            '_section' => 'Main 페이지',
            'label' => '하단 슬라이드1 제목',
        ],
        'slideBottom1Subtitle' => [
            '_type' => 'langTextarea',
            '_section' => 'Main 페이지',
            'label' => '하단 슬라이드1 내용',
        ],
        'slideBottom2Image' => [
            '_type' => 'image',
            '_section' => 'Main 페이지',
            'label' => '하단 슬라이드2 이미지',
        ],
        'slideBottom2Title' => [
            '_type' => 'langTextarea',
            '_section' => 'Main 페이지',
            'label' => '하단 슬라이드2 제목',
        ],
        'slideBottom2Subtitle' => [
            '_type' => 'langTextarea',
            '_section' => 'Main 페이지',
            'label' => '하단 슬라이드2 내용',
        ],
        'slideBottom3Image' => [
            '_type' => 'image',
            '_section' => 'Main 페이지',
            'label' => '하단 슬라이드3 이미지',
        ],
        'slideBottom3Title' => [
            '_type' => 'langTextarea',
            '_section' => 'Main 페이지',
            'label' => '하단 슬라이드3 제목',
        ],
        'slideBottom3Subtitle' => [
            '_type' => 'langTextarea',
            '_section' => 'Main 페이지',
            'label' => '하단 슬라이드3 내용',
        ],

        /* Sub 페이지 설정 */
        'bannerSetting' => [
            '_type' => 'select',
            '_section' => 'Sub 페이지',
            'label' => '배너 설정',
            'options' => [
                'y' => '사용',
                'n' => '사용 안함'
            ]
        ],
        'subHeaderImage' => [
            '_type' => 'image',
            '_section' => 'Sub 페이지',
            'label' => '상단 이미지',
        ],
        'subHeaderTitle' => [
            '_type' => 'langText',
            '_section' => 'Sub 페이지',
            'label' => '상단 타이틀',
        ],

        /* Contact 페이지 설정 */
        'useContact' => [
            '_type' => 'select',
            '_section' => 'Contact 페이지',
            'label' => 'Contact 페이지 사용유무',
            'options' => [
                'y' => '사용',
                'n' => '사용 안함'
            ]
        ],
        'contactBackgroundImage' => [
            '_type' => 'image',
            '_section' => 'Contact 페이지',
            'label' => '백그라운드 이미지',
        ],
        'contactTitle' => [
            '_type' => 'langText',
            '_section' => 'Contact 페이지',
            'label' => '상단 타이틀',    
        ],
        'contactSubTitle' => [
            '_type' => 'langTextarea',
            '_section' => 'Contact 페이지',
            'label' => '상단 내용',
        ],
        'contactCompanyName' => [
            '_type' => 'langText',
            '_section' => 'Contact 페이지',
            'label' => '상호명',
        ],
        'contactCompanyAddress' => [
            '_type' => 'langText',
            '_section' => 'Contact 페이지',
            'label' => '주소',
        ],
        'contactTel' => [
            '_type' => 'text',
            '_section' => 'Contact 페이지',
            'label' => 'Tel',
        ],
        'contactCompanyEmail' => [
            '_type' => 'text',
            '_section' => 'Contact 페이지',
            'label' => 'E-mail',
        ],
        'contactCompanyFax' => [
            '_type' => 'text',
            '_section' => 'Contact 페이지',
            'label' => 'Fax',
        ],
        'contactCompanyBusinessHours' => [
            '_type' => 'langText',
            '_section' => 'Contact 페이지',
            'label' => 'Business Hours',
        ],
        'contactSocial' => [
            '_type' => 'text',
            '_section' => 'Contact 페이지',
            'label' => 'Facebook URL',
        ],
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
        'contact.blade.php',
    ]
];
