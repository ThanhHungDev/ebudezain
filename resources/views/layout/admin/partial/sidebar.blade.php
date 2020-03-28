<div class="admin-sidebar bg-unique-color-dark">
    <a class="logo-sidebar line-height-0" href="/admin/">
        <img src="/images/logo.png" alt="Hospital">
    </a>
    <ul>
        <li>
            <a class="{{ Route::is("ADMIN_DASHBOARD") ? 'active' : null}}" 
            href="{{ route('ADMIN_DASHBOARD') }}">
                dashboard
            </a>
        </li>
        <li>
            <a class="block-session">Post</a>
            <ul class="submenu">
                <li>
                    <a class="{{ Route::is("ADMIN_INSERT_POST") ? 'active' : null}}"
                        href="{{ route('ADMIN_INSERT_POST') }}">
                        Thêm bài viết
                    </a>
                </li>
                <li>
                    <a class="{{ Route::is("ADMIN_GET_LIST_POST") ? 'active' : null}}"
                    href="{{ route('ADMIN_GET_LIST_POST') }}">
                        Xem danh sách post
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a class="block-session">Thể loại</a>
            <ul class="submenu">
                <li>
                    <a class="{{ Route::is("ADMIN_INSERT_CATEGORY") ? 'active' : null}}"
                        href="{{ route('ADMIN_INSERT_CATEGORY') }}">
                        Thêm thể loại
                    </a>
                </li>
                <li>
                    <a class="{{ Route::is("ADMIN_GET_LIST_CATEGORY") ? 'active' : null}}"
                    href="{{ route('ADMIN_GET_LIST_CATEGORY') }}">
                        Xem danh sách thể loại
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a class="block-session"> Phân Loại </a>
            <ul class="submenu">
                <li>
                    <a class="{{ Route::is("ADMIN_INSERT_TYPE") ? 'activec' : null}}"
                        href="{{ route('ADMIN_INSERT_TYPE') }}">
                        Thêm phân loại
                    </a>
                </li>
                <li>
                    <a class="{{ Route::is("ADMIN_GET_LIST_TYPE") ? 'active' : null}}"
                    href="{{ route('ADMIN_GET_LIST_TYPE') }}">
                        Xem danh sách phân loại
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a class="block-session"> Kiểu dáng </a>
            <ul class="submenu">
                <li>
                    <a class="{{ Route::is("ADMIN_INSERT_STYLE") ? 'active' : null}}"
                        href="{{ route('ADMIN_INSERT_STYLE') }}">
                        Thêm kiểu dáng
                    </a>
                </li>
                <li>
                    <a class="{{ Route::is("ADMIN_GET_LIST_STYLE") ? 'active' : null}}"
                    href="{{ route('ADMIN_GET_LIST_STYLE') }}">
                        Xem danh sách kiểu dáng
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a class="block-session">User</a>
            <ul class="submenu">
                <li><a href="/admin/user">thống kê user</a></li>
                <li>
                    <a class="{{ Route::is("ADMIN_INSERT_POST") ? 'activec' : null}}"
                        href="{{ route('ADMIN_INSERT_POST') }}">
                        Thêm kiểu dáng
                    </a>
                </li>
                <li>
                    <a href="#">
                        Xem danh sách kiểu dáng
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</div>