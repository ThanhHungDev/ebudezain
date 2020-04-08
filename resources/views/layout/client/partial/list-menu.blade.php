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
        <li class="@if(in_array(@$slug, ['javascript-core', 'jquery', 'react', 'nodejs'])) active @endif">
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
        <li class="@if(in_array(@$slug, ['php-core', 'php-slim', 'laravel', 'php-high-level'])) active @endif">
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
        <li class="@if(in_array(@$slug, ['java-core', 'spring'])) active @endif">
            <a>
                JAVA <span class="icon-menu-angle-down">@include ("genneral.svg.angle-down") </span>
            </a>
            <ul class="submenu">
                <li><a href="{{ Route('CLIENT_GET_CATE', ['slug' => 'java-core']) }}">JAVA CORE</a></li>
                <li><a href="{{ Route('CLIENT_GET_CATE', ['slug' => 'java-spring']) }}">JAVA Spring</a></li>
            </ul>
        </li>
        <li class="@if(in_array(@$slug, ['design-pattern'])) active @endif">
            <a href="{{ Route('CLIENT_GET_CATE', ['slug' => 'design-pattern']) }}"> DESIGN PATTERN </a>
        </li>
        <li>
            <form class="search-form-mobile" action="{{ Route('SEARCH') }}" autocomplete="off">
                <div class="group-control position-relative">
                    <input type="text" placeholder="tìm kiếm..." name="q" autocomplete="off">
                    <button type="submit">@include ("genneral.svg.search-plus" )</button>
                </div>
            </form>
        </li>
    </ul>
</div>