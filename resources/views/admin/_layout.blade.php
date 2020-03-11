<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') </title>
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet" />
    @include ("genneral/css/admin/admin")
    @include ("genneral/css/animate")
    @include ("genneral/css/main")
    @include ("genneral/css/progress")
    @include ("genneral/css/alert")
    @yield('css_custom_page')
</head>
<body>
    <div class="wrapper-page">
        <div class="wrapper-header-page">
            {{-- @include ('layout/admin/partial/header') --}}
        </div>
        <div class="wrapper-main-page">
            lỗi
            @yield('content_admin')
        </div>
        <div class="wrapper-footer-page">
            lỗi
            {{-- @include ('layout/admin/partial/footer') --}}
        </div>
    </div>
<script src="{{ asset('jquery.min.js') }}"></script>
<script src="{{ asset('js/select2.min.js') }}"></script>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('ckfinder/ckfinder.js') }}"></script>
<script src="{{ asset('jquery.min.js')}}"></script>

</body>
</html>