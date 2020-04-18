<!DOCTYPE html>
<html>
<head>
    
    @include("layout.client.partial.favicon")
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ $dataLayout->title }} </title>
    <meta name="keywords" content="{{ $dataLayout->keywords }}"/>
    <meta name="description" content="{{ $dataLayout->description }}"/>
    <meta name="author" content="Trương Thanh Hùng - 0797581480 - thanhhung.tud@gmail.com" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

    <meta property="og:locale" content="vi_VI" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $dataLayout->title }}" />
    <meta property="og:description" content="{{ $dataLayout->description }}" />
    <meta property="og:url" content="{{ Route('CLIENT_GET_POST', [ 'slug' => $dataLayout->slug ]) }}" />
    <meta property="og:site_name" content="{{ $dataLayout->site_name }}" />
    <meta property="og:image" content="{{ $dataLayout->image_seo }}" />

    <link rel="stylesheet" href="{{ asset('css/modal.jquery.min.css' ) }}">
    <link rel="stylesheet" href="{{ asset('css/prism.min.css' )}}">

    @include("genneral.css.animate")
    @include("genneral.css.main")
    @include("genneral.css.progress")
    @include("genneral.css.alert")
    @include("genneral.css.client.header")
    @include("genneral.css.client.client")
    @include("genneral.css.client.developer")
    @include("genneral.css.client.sidebar")
    @include("genneral.css.client.main_content")
    

    <script type="text/javascript" src="{{ asset('jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/modal.jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/prism.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/detect.js' )}}"></script>
    <script>
        const SYSTEM_BASE_URL = "{{ asset('') }}";
    </script>
</head>
<body>
    <div class="wrapper-page position-relative">
        <div class="wrapper-header-page">
            @include ("layout.client.partial.header")
        </div>
        <div class="wrapper-main-page">
            <div class="container">
                <div class="row position-relative">
                    @include ("layout.client.partial.sidebar")
                    @yield('content')
                </div>
            </div>
        </div>
        <div class="wrapper-footer-page">
            @include ('layout.client.partial.footer')
        </div>
    </div>

    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
</body>
</html>