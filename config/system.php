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
    'limit' => 10,
    'size-image' => array(
        'medium'        => array('width' => 600, 'height' => 400, 'type' => 'FILL'),
        'thumbnail'     => array('width' => 300, 'height' => 200, 'type' => 'FILL'),
        'small'         => array('width' => 150, 'height' => 100, 'type' => 'FILL')
    )

];
