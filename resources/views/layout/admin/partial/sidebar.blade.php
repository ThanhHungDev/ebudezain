<div class="admin-sidebar bg-unique-color-dark">
    <a class="logo-sidebar line-height-0" href="/admin/">
        <img src="/images/logo.png" alt="Hospital">
    </a>
    <ul>
        <li><a aria-current="page" class="{{ Route::is("ADMIN_DASHBOARD") ? 'active' : null}}" href="{{ route('ADMIN_DASHBOARD') }}">dashboard</a></li>
        <li><a aria-current="page" class="{{ Route::is("ADMIN_LOGIN") ? 'active' : null}}" href="{{ route('ADMIN_LOGIN') }}">#dashboard</a></li>
        <li><a class="block-session">Post</a>
            <ul class="submenu">
                <li>
                    <a class="active" 
                        href="#">
                        Thêm post
                    </a>
                </li>
                <li>
                    <a href="#">
                        Xem danh sách post
                    </a>
                </li>
            </ul>
        </li>
        <li><a class="block-session">User</a>
            <ul class="submenu">
                <li><a href="/admin/user">thống kê user</a></li>
            </ul>
        </li>
    </ul>
</div>