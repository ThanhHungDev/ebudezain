<!DOCTYPE html>
<html>
<head>
    
    @include("layout.client.partial.favicon")
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ $post->title }} </title>
    <meta name="keywords" content="{{ $post->keywords }}"/>
    <meta name="description" content="{{ $post->description }}"/>
    <meta name="author" content="Trương Thanh Hùng - 0797581480 - thanhhung.tud@gmail.com" />

    <meta property="og:locale" content="vi_VI" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $post->title }}" />
    <meta property="og:description" content="{{ $post->description }}" />
    <meta property="og:url" content="{{ Route('CLIENT_GET_POST', [ 'slug' => $post->slug ]) }}" />
    <meta property="og:site_name" content="{{ $post->site_name }}" />
    <meta property="og:image" content="{{ $post->image_seo }}" />

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

    <input type="text" class="d-none" id="js-post_id" value="{{ $post->id }}"/> 
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
</body>
</html>