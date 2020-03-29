<div class="list-wrapper float-right">
    <div class="social-wrapper clear mobile">
        <a class="soccial-link" href="https://www.facebook.com/HungSmurf">
            @include ("genneral.svg.facebook-square")
        </a>
        <a class="soccial-link" href="https://www.facebook.com/HungSmurf" >
            @include ("genneral.svg.youtube")
        </a>
        <a class="soccial-link" href="https://www.facebook.com/HungSmurf" >
            @include ("genneral.svg.instagram")
        </a>
        <label for="toggle-menu" class="btn-toggle-close">
            @include ("genneral.svg.windows-close")
        </label>
    </div>
    <ul class="menu clear">
        <li class=" {{ Route::is('CLIENT_GET_CATE' , ['slug' => 'javascript']) ? 'active' : null }}
                    {{ Route::is('CLIENT_GET_CATE' , ['slug' => 'jquery']) ? 'active' : null }}
                    {{ Route::is('CLIENT_GET_CATE' , ['slug' => 'react']) ? 'active' : null }}
                    {{ Route::is('CLIENT_GET_CATE' , ['slug' => 'nodejs']) ? 'active' : null }}">
            <a >
                Javascript <span class="icon-menu-angle-down">@include ("genneral.svg.angle-down") </span>
            </a>
            <ul class="submenu">
                <li><a href="{{ Route('CLIENT_GET_CATE', ['slug' => 'javascript']) }}">Javascript core</a></li>
                <li><a href="{{ Route('CLIENT_GET_CATE', ['slug' => 'jquery']) }}">Jquery</a></li>
                <li><a href="{{ Route('CLIENT_GET_CATE', ['slug' => 'react']) }}">React</a></li>
                <li><a href="{{ Route('CLIENT_GET_CATE', ['slug' => 'nodejs']) }}">Nodejs</a></li>
            </ul>
        </li>
        <li class="{{ Route::is('CLIENT_GET_CATE' , ['slug' => 'php-core']) ? 'active' : null }}
                    {{ Route::is('CLIENT_GET_CATE' , ['slug' => 'php-slim']) ? 'active' : null }}
                    {{ Route::is('CLIENT_GET_CATE' , ['slug' => 'php-laravel']) ? 'active' : null }}
                    {{ Route::is('CLIENT_GET_CATE' , ['slug' => 'php-high-level']) ? 'active' : null }}">
            <a>
                PHP <span class="icon-menu-angle-down">@include ("genneral.svg.angle-down") </span>
            </a>
            <ul class="submenu">
                <li><a href="{{ Route('CLIENT_GET_CATE', ['slug' => 'php-core']) }}">PHP CORE</a></li>
                <li><a href="{{ Route('CLIENT_GET_CATE', ['slug' => 'php-slim']) }}"> Slim Framework</a></li>
                <li><a href="{{ Route('CLIENT_GET_CATE', ['slug' => 'php-laravel']) }}"> Laravel </a></li>
                <li><a href="{{ Route('CLIENT_GET_CATE', ['slug' => 'php-high-level']) }}"> Kĩ Thuật </a></li>
            </ul>
        </li>
        <li class="{{ Route::is('CLIENT_GET_CATE' , ['slug' => 'java-core']) ? 'active' : null }}
            {{ Route::is('CLIENT_GET_CATE' , ['slug' => 'java-spring']) ? 'active' : null }}">
            <a>
                JAVA <span class="icon-menu-angle-down">@include ("genneral.svg.angle-down") </span>
            </a>
            <ul class="submenu">
                <li><a href="{{ Route('CLIENT_GET_CATE', ['slug' => 'java-core']) }}">JAVA CORE</a></li>
                <li><a href="{{ Route('CLIENT_GET_CATE', ['slug' => 'java-spring']) }}">JAVA Spring</a></li>
            </ul>
        </li>
        <li class="js-user-login-data-menu position-relative d-none">
            <a class="js-user-infor">
                <img class="js-user-avatar menu-avatar" src="" alt="">
                <span class="icon-menu-angle-down">@include ("genneral.svg.angle-down") </span>
            </a>
            <ul class="submenu">
                <li class="text-infor-user-login">
                    bạn đang đăng nhập với tài khoản <span class="js-name-user">trương thanh hùng</span>
                </li>
                <li>
                    <a href="/notification">
                        <span class="icon-menu-angle-down">
                            @include ("genneral.svg.bell-notification")
                        </span> 
                        thông báo 
                        <span id="js-total-notification" class="total-notification"> 0 </span>
                    </a>
                </li>
                <li onclick="logout()">
                    <a href="javascript:void(0)">đăng xuất</a>
                </li>
            </ul>
        </li>
        <li class="js-user-login-modal-menu">
            <a href="#js-modal-login">Login</a>
        </li>
    </ul>
</div>