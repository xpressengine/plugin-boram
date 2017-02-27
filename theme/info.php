<?php
return [
    'view' => 'theme',
    'setting' => [
        
        // 컬러셋
        'colorset' => [
            '_type' => 'select',
            '_section' => '컬러셋 및 레이아웃 설정',
            'label' => '컬러셋',
            'options' => [
                '' => 'Default',
                'yellow-theme' => 'Yellow',
                'red-theme' => 'Red',
            ]
            /* for body class*/
        ],

        /* snb 설정 */
        'logoText' => [
            '_type' => 'langText',
            '_section' => '헤더 설정',
            'label' => '로고 제목',
            'placeholder' => '상단에 표시될 로고 대체 텍스트를 입력하세요',
        ],
        'logoImage' => [
            '_type' => 'image',
            '_section' => '헤더 설정',
            'label' => '로고 이미지',
            'description' => '로고 이미지를 등록하세요'
        ],


        /* 메인페이지 설정 */
        //top slider
        'slide1Image' => [
            '_type' => 'image',
            '_section' => '메인페이지 설정',
            'label' => '상단 슬라이드1 이미지',
        ],
        'slide1Title' => [
            '_type' => 'langTextarea',
            '_section' => '메인페이지 설정',
            'label' => '상단 슬라이드1 제목',
        ],
        'slide1Subtitle' => [
            '_type' => 'langTextarea',
            '_section' => '메인페이지 설정',
            'label' => '상단 슬라이드1 내용',
        ],
        'slide2Image' => [
            '_type' => 'image',
            '_section' => '메인페이지 설정',
            'label' => '상단 슬라이드2 이미지',
        ],
        'slide2Title' => [
            '_type' => 'langTextarea',
            '_section' => '메인페이지 설정',
            'label' => '상단 슬라이드2 제목',
        ],
        'slide2Subtitle' => [
            '_type' => 'langTextarea',
            '_section' => '메인페이지 설정',
            'label' => '상단 슬라이드2 내용',
        ],
        'slide3Image' => [
            '_type' => 'image',
            '_section' => '메인페이지 설정',
            'label' => '상단 슬라이드3 이미지',
        ],
        'slide3Title' => [
            '_type' => 'langTextarea',
            '_section' => '메인페이지 설정',
            'label' => '상단 슬라이드3 제목',
        ],
        'slide3Subtitle' => [
            '_type' => 'langTextarea',
            '_section' => '메인페이지 설정',
            'label' => '상단 슬라이드3 내용',
        ],

        //bottom slider
        'slideBottom1Image' => [
            '_type' => 'image',
            '_section' => '메인페이지 설정',
            'label' => '하단 슬라이드1 이미지',
        ],
        'slideBottom1Title' => [
            '_type' => 'langTextarea',
            '_section' => '메인페이지 설정',
            'label' => '하단 슬라이드1 제목',
        ],
        'slideBottom1Subtitle' => [
            '_type' => 'langTextarea',
            '_section' => '메인페이지 설정',
            'label' => '하단 슬라이드1 내용',
        ],
        'slideBottom2Image' => [
            '_type' => 'image',
            '_section' => '메인페이지 설정',
            'label' => '하단 슬라이드2 이미지',
        ],
        'slideBottom2Title' => [
            '_type' => 'langTextarea',
            '_section' => '메인페이지 설정',
            'label' => '하단 슬라이드2 제목',
        ],
        'slideBottom2Subtitle' => [
            '_type' => 'langTextarea',
            '_section' => '메인페이지 설정',
            'label' => '하단 슬라이드2 내용',
        ],
        'slideBottom3Image' => [
            '_type' => 'image',
            '_section' => '메인페이지 설정',
            'label' => '하단 슬라이드3 이미지',
        ],
        'slideBottom3Title' => [
            '_type' => 'langTextarea',
            '_section' => '메인페이지 설정',
            'label' => '하단 슬라이드3 제목',
        ],
        'slideBottom3Subtitle' => [
            '_type' => 'langTextarea',
            '_section' => '메인페이지 설정',
            'label' => '하단 슬라이드3 내용',
        ],

        
        
    ],
    'gnb' => [
        
    ],
    'support' => [
        'mobile' => true,
        'desktop' => true
    ],
    'editable' => [
        'theme.blade.php',
        'gnb.blade.php'
    ]
];
