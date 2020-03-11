<div class="list-wrapper float-right">
    <div class="social-wrapper clear mobile">
        <a class="soccial-link" href="https://www.facebook.com/HungSmurf">
            {% include "genneral/svg/facebook-square.svg" %}
        </a>
        <a class="soccial-link" href="https://www.facebook.com/HungSmurf" >
            {% include "genneral/svg/youtube.svg" %}
        </a>
        <a class="soccial-link" href="https://www.facebook.com/HungSmurf" >
            {% include "genneral/svg/instagram.svg" %}
        </a>
        <label for="toggle-menu" class="btn-toggle-close">
            {% include "genneral/svg/windows-close.svg" %}
        </label>
    </div>
    <ul class="menu clear">
        <li class="{{ is_routers(
                        full_url_for('GET_TOPIC' , {slug : ''}), 
                        ['javascript', 'jquery', 'react', 'nodejs']
                    ) }}">
            <a >
                Javascript <span class="icon-menu-angle-down">{% include "genneral/svg/angle-down.svg" %} </span>
            </a>
            <ul class="submenu">
                <li><a href="{{ full_url_for('GET_TOPIC', {slug : 'javascript'}) }}">Javascript core</a></li>
                <li><a href="{{ full_url_for('GET_TOPIC', {slug : 'jquery'}) }}">Jquery</a></li>
                <li><a href="{{ full_url_for('GET_TOPIC', {slug : 'react'}) }}">React</a></li>
                <li><a href="{{ full_url_for('GET_TOPIC', {slug : 'nodejs'}) }}">Nodejs</a></li>
            </ul>
        </li>
        <li class="{{ is_routers(
                        full_url_for('GET_TOPIC' , {slug : ''}), 
                        ['php-core', 'php-slim', 'php-laravel', 'php-high-level']
                    ) }}">
            <a>
                PHP <span class="icon-menu-angle-down">{% include "genneral/svg/angle-down.svg" %} </span>
            </a>
            <ul class="submenu">
                <li><a href="{{ full_url_for('GET_TOPIC', {slug : 'php-core'}) }}">PHP CORE</a></li>
                <li><a href="{{ full_url_for('GET_TOPIC', {slug : 'php-slim'}) }}"> Slim Framework</a></li>
                <li><a href="{{ full_url_for('GET_TOPIC', {slug : 'php-laravel'}) }}"> Laravel </a></li>
                <li><a href="{{ full_url_for('GET_TOPIC', {slug : 'php-high-level'}) }}"> Kĩ Thuật </a></li>
            </ul>
        </li>
        <li class="{{ is_routers(
                        full_url_for('GET_TOPIC' , {slug : ''}), 
                        ['java-core', 'java-spring']
                    ) }}">
            <a>
                JAVA <span class="icon-menu-angle-down">{% include "genneral/svg/angle-down.svg" %} </span>
            </a>
            <ul class="submenu">
                <li><a href="{{ full_url_for('GET_TOPIC', {slug : 'java-core'}) }}">JAVA CORE</a></li>
                <li><a href="{{ full_url_for('GET_TOPIC', {slug : 'java-spring'}) }}">JAVA Spring</a></li>
            </ul>
        </li>
        <li class="js-user-login-data-menu position-relative d-none">
            <a class="js-user-infor">
                <img class="js-user-avatar menu-avatar" src="" alt="">
                <span class="icon-menu-angle-down">{% include "genneral/svg/angle-down.svg" %} </span>
            </a>
            <ul class="submenu">
                <li class="text-infor-user-login">
                    bạn đang đăng nhập với tài khoản <span class="js-name-user">trương thanh hùng</span>
                </li>
                <li>
                    <a href="/notification">
                        <span class="icon-menu-angle-down">
                            {% include "genneral/svg/bell-notification.svg" %} 
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