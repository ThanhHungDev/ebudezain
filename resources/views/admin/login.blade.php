<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Admin login </title>
    @include('genneral/css/admin/login') 
    @include('genneral/css/animate') 
    @include('genneral/css/main') 
    @include('genneral/css/progress')
    @include('genneral/css/alert') 
</head>
<body>
    <div class="page-login blue-gradient-rgba animated fast fadeIn">
        <div class="login-form-control animated fast fadeIn">
            <form class="login-form" action="{{ Route('ADMIN_POST_LOGIN') }}" method="POST" >
                {!! csrf_field() !!}
                @if(session()->has('errors'))
                <div class="alert alert-warning">
                    {{ session()->get('errors') }}
                </div>
                @endif
                <h1 class="title"> Welcome Admin </h1>
                <div class="input-group">
                    <span class="svg-icon"> @include ("genneral/svg/email") </span>
                    <input name="email" ref="email" type="text" autoCorrect="off" autoCapitalize="none" class="input-control" placeholder="Email Address" />
                </div>
                <div class="input-group">
                    <span class="svg-icon"> @include ("genneral/svg/password") </span>
                    <input name="password" ref="password" type="password" autoCorrect="off" autoCapitalize="none" class="input-control" placeholder="Password" />
                </div>
                <button type="submit" class="btn btn-login blue-gradient-rgba">
                    Log In Admin
                </button>
            </form>
        </div>
    </div>
</body>
</html>