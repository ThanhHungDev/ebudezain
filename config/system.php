<?php

return [

    'sitename' => 'hdev',
    'mail'     => [
        'admin' => env('MAIL_ADMIN', 'thanhhung.code@gmail.com')
    ],
    'SESSION_LANGUAGE' => 'WEBSITE_LANGUAGE',
    'site'      => [
        'description' => 'Blog lập trình được phát triển nhằm mục đích chia sẽ kiến thức cho cộng đồng lập trình Việt Nam. <br/> 
                            Hy vọng blog sẽ giúp ích cho các bạn có đam mê lập trình',
        'information' => [
            'address' => '0674, Lộc Hoà, Bình Giã',
            'area'    => 'Châu đức, Bà Rịa Vũng Tàu'
        ]
    ],
    'limit' => 10

];
