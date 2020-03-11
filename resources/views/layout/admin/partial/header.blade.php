<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="clear position-relative">
                <ul class="btn-admin-setting float-right">
                    <li>
                        <a>
                            <img class="avatar" alt="" src="#" />
                            <span class="icon-angle-down">
                                <svg aria-hidden="true" focusable="false"
                                    data-prefix="fal" data-icon="angle-down" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                    class="svg-inline--fa fa-w-8 fa-2x">
                                    <path
                                        d="M119.5 326.9L3.5 209.1c-4.7-4.7-4.7-12.3 0-17l7.1-7.1c4.7-4.7 12.3-4.7 17 0L128 287.3l100.4-102.2c4.7-4.7 12.3-4.7 17 0l7.1 7.1c4.7 4.7 4.7 12.3 0 17L136.5 327c-4.7 4.6-12.3 4.6-17-.1z"
                                        stroke="none" stroke-width="1px" class="fa-secondary"></path>
                                </svg>
                            </span>
                        </a>
                        <ul class="submenu">
                            @if(Auth::user())
                            <li><a href="#">{{ Auth::user()->email }}</a></li>
                            @endif
                            <li><a href="{{ Route('ADMIN_LOGOUT') }}">logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>