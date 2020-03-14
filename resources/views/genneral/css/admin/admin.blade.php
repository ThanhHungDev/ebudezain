<style>
    .wrapper-header-page {
        background-image: -webkit-gradient(linear, left top, right top, from(#f78ca0), color-stop(19%, #f9748f), color-stop(60%, #fd868c), to(#fe9a8b)) !important;
        background-image: -webkit-linear-gradient(left, #f78ca0 0%, #f9748f 19%, #fd868c 60%, #fe9a8b 100%) !important;
        background-image: -o-linear-gradient(left, #f78ca0 0%, #f9748f 19%, #fd868c 60%, #fe9a8b 100%) !important;
        background-image: linear-gradient(to right, #f78ca0 0%, #f9748f 19%, #fd868c 60%, #fe9a8b 100%) !important;
    }
    .btn-admin-setting {
        padding: 15px;
        text-align: right;
        position: relative;
    }
    .btn-admin-setting .avatar{
        width: 35px;
        height: auto;
        border-radius: 50%;
    }
    .btn-admin-setting>li>a{
        color: black;
        cursor: pointer;
        text-transform: capitalize;
    }
    .icon-angle-down{
        max-width: 20px;
        max-height: 20px;
    }
    .icon-angle-down svg {
        width: 20px;
        height: 20px;
        vertical-align: -6px;
    }
    .btn-admin-setting>li .submenu {
        height: 0;
        opacity: 0;
        overflow: hidden;
    }
    .btn-admin-setting:hover>li .submenu {
        height: initial;
        opacity: 1;
        position: absolute;
        top: 100%;
        right: 0;
        background-color: rgb(255, 255, 255);
        z-index: 1;
        width: 220px;
        border-radius: 4px;
        padding: 5px 10px;
        text-align: left;
        border: 1px solid #ddd;
    }
    .btn-admin-setting>li .submenu>li>a {
        padding: 10px;
        display: block;
        cursor: pointer;
    }
    .btn-admin-setting>li .submenu>li:hover>a{
        background-color: #f5f5f5;
        border-radius: 2px;
        color: black;
    }
    .admin-main-content{
        margin-left: 280px;
        color: #495057;
        background: #f1f4f6;
        min-height: 100vh;
    }
    .admin-sidebar{
        padding: 0 15px;
        background-color: beige;
        position: fixed;
        left: 0;
        top: 0;
        bottom: 0;
        z-index: 3;
        width: 280px;
        background-image: -webkit-gradient(linear, left top, right top, from(#141e30), to(#243b55)) !important;
        background-image: -webkit-linear-gradient(left, #141e30, #243b55) !important;
        background-image: -o-linear-gradient(left, #141e30, #243b55) !important;
        background-image: linear-gradient(to right, #141e30, #243b55) !important;
    }
    .admin-sidebar:after {
        display: block;
        content: ' ';
        opacity: 0;
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        right: 0;
        background-image: url(/images/sidebar.jpg);
        opacity: 0.05;
        z-index: -1;
    }
    .logo-sidebar {
        display: block;
        text-align: center;
        border-bottom: 1px solid #7d73a7;
    }
    .logo-sidebar img {
        height: 70px;
        width: auto;
        max-width: initial;
    }
    .admin-sidebar>ul {
        padding-top: 10px;
    }
    .admin-sidebar ul li a.active, .admin-sidebar ul li ul li a:hover {
        background: rgba(255, 255, 255, 0.1);
        border-radius: 4px;
        color: rgba(255, 255, 255);
    }
    .admin-sidebar ul li a {
        color: white;
        display: block;
        padding: 0 1.5rem 0 30px;
        line-height: 2.5;
        color: rgba(255, 255, 255, 0.7);
        text-transform: capitalize;
    }
    .admin-sidebar .block-session {
        color: rgba(255, 255, 255, 0.7);
        padding: 0 12px;
        font-size: 13px;
        color: rgba(255, 255, 255, 0.6);
        text-transform: uppercase;
    }
    .admin-sidebar ul li a {
        color: white;
        display: block;
        padding: 0 1.5rem 0 30px;
        line-height: 2.5;
        color: rgba(255, 255, 255, 0.7);
        text-transform: capitalize;
    }
    .admin-main-content .page-title {
        background: rgba(255, 255, 255, 0.55);
        padding: 40px;
        text-align: left;
    }
    .admin-main-content .page-title .headding {
        font-size: 1.25rem;
        font-weight: 400;
        text-transform: capitalize;
        padding-bottom: 15px;
    }
    .admin-main-content .admin-wrapper-content-field {
        padding: 15px;
    }
    .admin-main-content .admin-wrapper-content-field .block-content {
        padding: 8px 15px;
    }
    .admin-main-content .admin-wrapper-content-field .block-content .title {
        padding-bottom: 10px;
        text-transform: uppercase;
        color: black;
        font-size: 18px;
        border-bottom: 1px solid #eee;
        margin-bottom: 15px;
    }
    .admin-main-content .admin-wrapper-content-field .block-content textarea.h-100{
        height: 100%!important;
    }
    .admin-main-content .admin-wrapper-content-field .block-content textarea{
        display: block;
        width: 100%!important;
        height: 150px!important;
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #f2f2f2;
        border-radius: 0;
        -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        -o-transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    }
    .admin-main-content .admin-wrapper-content-field .block-content input {
        display: block;
        width: 100%!important;
        height: calc(2.25rem + 2px);
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #f2f2f2;
        border-radius: 0;
        -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        -o-transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    }
    .admin-main-content .admin-wrapper-content-field .block-content textarea:focus {
        color: #495057;
        background-color: #fff;
        border-color: #067def;
        outline: 0;
        -webkit-box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }
    .admin-main-content .admin-wrapper-content-field .block-content input:focus {
        color: #495057;
        background-color: #fff;
        border-color: #067def;
        outline: 0;
        -webkit-box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }
    .btn-remove-row{
        border: 0;
        outline: transparent;
        color: #770710;
        fill: #770710;
        cursor: pointer;
    }
    .output-image-finder{
        padding-top: 15px;
    }
    .hminpx-200{
        min-height: 200px;
    }
    @media screen and (max-width: 1199.98px){
        .PageTitle {
            text-align: center;
        }
    }
</style>