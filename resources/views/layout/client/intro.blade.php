<!DOCTYPE html>
<html>
<head>
    @include("layout.client.partial.favicon")
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> HÙNG DEVELOPER </title>
    <link rel="stylesheet" href="{{ asset('css/modal.jquery.min.css') }}">
    @include("genneral.css.animate")
    @include("genneral.css.main")
    @include("genneral.css.progress")
    @include("genneral.css.alert")
    @include("genneral.css.client.header")
    @include("genneral.css.client.client")
    @include("genneral.css.client.developer")
    
    <script type="text/javascript" src="{{ asset('/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/modal.jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/detect.js') }}"></script>
    <script>
        const SYSTEM_BASE_URL = "{{ asset('') }}";
        const SYSTEM_API_URL = "{{ asset('') . ':3000' }}";
    </script>
</head>
<body>
    <div class="wrapper-page position-relative">
        <div class="wrapper-header-page">
            @include ("layout.client.partial.header")
        </div>
        <div class="wrapper-intro-page">
            @yield('content')
        </div>
        <div class="wrapper-footer-page">
            @include ('layout.client.partial.footer')
        </div> 
    </div>
    @include ("layout.client.partial.modal-login")
    @include ("layout.client.partial.modal-register")
    @include ("layout.client.partial.modal-error-connect") 
    <input type="text" class="d-none" id="js-channel-name" value="" />
    <input type="text" class="d-none" id="js-id-user" value="" />
    <input type="text" class="d-none" id="js-access-token" value=""/> 
    <input type="text" class="d-none" id="js-refesh-token" value=""/> 
    <input type="text" class="d-none" id="js-user-infor" value=""/> 
    <input type="text" class="d-none" id="js-is-refeshed-token" value=""/> 
    <input type="text" class="d-none" id="js-post_id" value="{{ 1 }}"/> 
    <input type="checkbox" class="d-none" id="js-is-change-data-user" checked onclick="listenConnectChannel()"/>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
</body>
</html>