<style>
    .header-wrapper-menu{
        width: 100%;
        padding: 10px 15px;
        margin: 0 auto;
        background-color: #fff;
        box-shadow: 0 2px 10px 0 rgba(0,0,0,.07);
        color: #0440a2!important;
        position: fixed;
        top: 0;
        z-index: 10;
        left: 0;
        right: 0;
    }
    .wrapper-brand{
        cursor: pointer;
        width: 120px;
        padding: 5px 8px;
    }
    .link-home-page{
        display: block
    }
    .link-home-page svg{
        width: 40px;
        height: 40px;
        max-width: unset;
        max-height: unset;
    }
    .wrapper-brand .brand .link-home-page .brand-name{
        font-family: Poppins,sans-serif;
        font-weight: 700;
        font-size: 28px;
        color: #0440a2;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        padding: 6px 0 0 45px;
    }
    .logoFill{
        fill: #0440a2!important
    }
    .list-wrapper .menu{
        padding-right: 50px;
        list-style: none;
    }
    .list-wrapper .menu>li{
        float: left;
    }
    .list-wrapper .menu>li>a{
        font-weight: 700;
        font-size: 17px;
        cursor: pointer;
        display: inline-block;
        padding: 15px 20px 10px;
        text-transform: uppercase;
        text-decoration: none;
        text-align: center;
        position: relative;
    }
    .list-wrapper .menu>li.active>a, .list-wrapper .menu>li:hover>a{
        color: #0440a2!important;
    }
    .list-wrapper .menu>li>ul.submenu{
        text-align: left;
        -webkit-box-shadow: 0 0px 4px 0px rgba(0, 0, 0, 0.05);
        box-shadow: 0 0px 4px 0px rgba(0, 0, 0, 0.05);
        border-left: 1px solid #edf0f5;
        border-right: 1px solid #edf0f5;
        border-bottom: 1px solid #edf0f5;
        padding: 4px 0 8px 0;
        margin-left: 0px;
        background: #fff;
        position: absolute;
        z-index: -1;
        opacity: 0;
        height: 0;
        overflow: hidden;
        -webkit-transition: opacity .2s;
        -o-transition: opacity .2s;
        transition: opacity .2s;
    }
    .list-wrapper .menu>li:hover>ul.submenu {
        z-index: 1;
        opacity: 1;
        height: unset;
    }
    .list-wrapper .menu>li>ul.submenu>li {
        min-width: 175px;
    }
    .list-wrapper .menu>li>ul.submenu>li>a {
        color: #222;
        font-size: 14px;
        padding: 8px 20px 6px 35px;
        display: block;
        text-transform: none;
        letter-spacing: normal;
        text-transform: capitalize
    }
    .list-wrapper .menu>li>ul.submenu>li:hover>a{
        font-weight: bold;
        color: #0440a2;
        background-color: #f7f7f7;
    }
    .icon-menu-angle-down svg.svg-inline--fa{
        width: 20px;
        height: 20px;
        vertical-align: -6px;
    }
    .icon-menu-angle-down {
        max-width: 20px;
        max-height: 20px;
    }
    .header-authenticate {
        min-width: 28px;
        min-height: 28px;
        position: relative;
        cursor: pointer;
        color: #0440a2;
        padding: 15px;
    }
    .header-search-box{
        min-width: 28px;
        min-height: 28px;
        margin-top: 15px;
        position: relative;
        cursor: pointer;
        color: #0440a2;
    }
    .fill-search-icon{
        fill: #0440a2;
    }
    .fill-close{
        fill: #0440a2;
    }
    .icon-search-open{
        cursor: pointer;
        display: block
    }
    .search-show{
        position: absolute;
        z-index: 1;
        top: -8px;
        left: 0;
        display: none;
        -webkit-transform: translateX(-100%);
        -moz-transform: translateX(-100%);
        -o-transform: translateX(-100%);
        -ms-transform: translateX(-100%);
        transform: translateX(-100%);
        padding-right: 15px;
    }
    .search-show .group-control{
        border: 1px solid #f2f2f2;
        padding-right: 40px;
        border-radius: 0;
        background-color: #fff;
        background-clip: padding-box;
        -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        -o-transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    }
    .search-show input{
        min-width: 300px;
        font-size: 15px;
        transition: border .3s linear;
        display: block;
        width: 100%!important;
        height: calc(2.25rem + 2px);
        padding: 10px 8px;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        border: none;
        outline: none!important;
    }
    .search-show input:focus {
        color: #495057;
        background-color: #fff;
        border-color: #067def;
        outline: 0;
    }
    .search-show button{
        position: absolute;
        top: 0;
        right: 0;
        width: 38px;
        height: 38px;
        padding: 5px;
        background-color: transparent;
        border: transparent;
        cursor: pointer;
    }
    #open-search:checked ~ .search-show{
        display: block;
    }
    #open-search ~ .icon-search-open svg:first-child{
        display: block;
        width: 28px;
        height: 28px;
    }
    #open-search ~ .icon-search-open svg:last-child{
        display: none;
        width: 28px;
        height: 28px;
    }
    #open-search:checked ~ .icon-search-open svg:first-child{
        display: none
    }
    #open-search:checked ~ .icon-search-open svg:last-child{
        display: block
    }
    .btn-toggle-menu{
        float: right;
        width: 32px;
        height: 32px;
        cursor: pointer;
        position: absolute;
        right: 15px;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -moz-transform: translateY(-50%);
        -o-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
    }
    .btn-toggle-menu path:nth-child(1) {
        fill: #0542a2;
        opacity: 0.4;
    }
    .btn-toggle-menu path:nth-child(2) {
        fill: #0542a2;
        opacity: 1;
    }
    .menu-avatar{
        width: 35px;
        height: 35px;
        border-radius: 50%;
        vertical-align: middle;
    }
    .text-infor-user-login{
        padding: 15px;
        text-align: center;
        text-transform: capitalize;
        color: #999;
    }
    .text-infor-user-login .js-name-user{
        color: #0440a2!important;
    }
    .list-wrapper .menu>li.js-user-login-data-menu>ul.submenu{
        right: 0;
    }
    .list-wrapper .menu>li.js-user-login-data-menu>ul.submenu>li{
        min-width: 250px;
    }
    .total-notification{
        display: inline-block;
        margin-left: 15px;
        color: #b8333e;
    }
    .total-notification:before{
        display: inline-block;
        content: "(";
        color: #b8333e;
    }
    .total-notification:after{
        display: inline-block;
        content: ")";
        color: #b8333e;
    }
    /*Tablet devices (768px to 992px and down)*/
    @media screen and (max-width: 991.98px) {
        .list-wrapper .menu{
            padding: 0 10px;
        }
        .list-wrapper .menu>li>a {
            padding: 15px 10px 10px;
            font-size: 14px;
        }
    }
    /*Medium devices (Small devices, 576px to 768px)*/
    @media screen and (max-width: 767.98px) {
        .header-wrapper-menu .wrapper-brand{
            float: none!important;
            margin: 0 auto;
        }
    }
    /*Medium devices (Small devices, 576px to 768px)*/
    @media screen and (max-width: 767.98px) {
        #toggle-menu:checked ~ .list-wrapper{
            left: 0;
            right: 0;
            bottom: 0;
        }
        #toggle-menu ~ .list-wrapper{
            float: none!important;
            position: fixed;
            background: #333145;
            background: -moz-linear-gradient(top, #333145 0%, #b8333e 100%);
            background: -webkit-gradient(left top, left bottom, color-stop(0%, #333145), color-stop(100%, #b8333e));
            background: -webkit-linear-gradient(top, #333145 0%, #b8333e 100%);
            background: -o-linear-gradient(top, #333145 0%, #b8333e 100%);
            background: -ms-linear-gradient(top, #333145 0%, #b8333e 100%);
            background: linear-gradient(to bottom, #333145 0%, #b8333e 100%);
            z-index: 2;
            top: 0;
            left: -767px;
            right: 767px;
            bottom: 0;
            
            overflow-y: scroll;
            padding: 15px;
            -webkit-transition: 0.2s 0s;
            -o-transition: 0.2s 0s;
            transition: 0.2s 0s;
        }
        .list-wrapper .menu>li.active>a {
            color: #86c8dc!important;
        }
        .list-wrapper .menu {
            width : 100%;
            padding: 30px 0 0 0;
        }
        .list-wrapper .menu>li{
            float: none;
        }
        .list-wrapper ul.menu>li>a, .list-wrapper ul.menu>li:hover>a{
            display: block;
            line-height: 21px;
            font-size: 21px;
            color: #fff;
            margin-left: 0;
            padding: 12px 30px 12px 12px;
            font-weight: bold;
            text-align: left
        }
        .list-wrapper ul.menu>li.active>a{
            color: #a6c1ee;
            fill: #a6c1ee;
            opacity: 1;
        }
        .list-wrapper .menu>li>ul.submenu, .list-wrapper .menu>li:hover>ul.submenu{
            text-align: left;
            border-top: none;
            -webkit-box-shadow: none;
            box-shadow: none;
            border: none;
            padding: 0 0 0 20px;
            margin-left: 0px;
            background: transparent;
            position: initial;
            opacity: 0;
            z-index: 1;
            height: 0;
            margin-top: 0;
            -webkit-transition: 0.2s 0s;
            -o-transition: 0.2s 0s;
            transition: 0.2s 0s;
        }
        .list-wrapper .menu>li.active>ul.submenu {
            opacity: 1;
            height: auto;
        }
        .list-wrapper .menu>li.active>ul.submenu>li:hover>a{
            color: #86c8dc;
        }
        .list-wrapper .menu>li>ul.submenu>li>a, .list-wrapper .menu>li>ul.submenu>li:hover>a{
            color: #fff;
            background-color: transparent;
            font-size: 14px;
            padding: 8px 20px 6px 35px;
            display: block;
            text-transform: none;
            letter-spacing: normal;
            text-transform: capitalize;
        }
        /**
        * child
        */
        .social-wrapper{
            display: block;
            padding: 10px 0;
            border-bottom: 1px solid #f2f2f2;
        }
        .social-wrapper a{
            color : white;
            padding-left : 20px
        }
        .btn-toggle-close{
            float: right;
            cursor: pointer;
        }
        .icon-menu-angle-down svg.svg-inline--fa {
            fill: #fff;
        }
        .btn-toggle-close svg{
            display: block;
            width: 36px;
            max-width: 36px;
            max-height: 36px;
        }
        .btn-toggle-close path{
            fill : #fff!important;
            color : #fff!important;
            background-color: #fff!important;
        }
        .text-infor-user-login{
            max-width: 280px;
        }
        .total-notification{
            color: #ddf77f;
        }
        .total-notification:before{
            color: #ddf77f;
        }
        .total-notification:after{
            color: #ddf77f;
        }
    }
    
</style>