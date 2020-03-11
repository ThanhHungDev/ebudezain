<style>
    .wrapper-client-sidebar{
        width: 275px;
        display: block;
        float: left;
        padding: 0 15px 15px 0;
    }
    .block-sidebar{
        margin-bottom: 15px;
    }
    .title-sidebar{
        color: #fff!important;
        cursor: pointer;
        font-weight: bold;
        width: 100%;
        margin: 0 0 2px;
        padding: 5px 8px;
        overflow: hidden;
        line-height: 1.6rem;
        font-family: Poppins,sans-serif;
        font-weight: 700;
        font-size: 15px;
        text-align: left;
        border-radius: 4px;
        transition: opacity .2s ease;
        /*box-shadow: 0 5px 15px -5px rgba(0,0,0,0.25);*/
    }
    .title-sidebar .angle-right-icon{
        display: none;
    }
    .checkbox-sidebar:checked ~ .title-sidebar .angle-right-icon{
        display: block;
    }
    .title-sidebar .angle-down-icon{
        display: block;
    }
    .checkbox-sidebar:checked ~ .title-sidebar .angle-down-icon{
        display: none;
    }
    .checkbox-sidebar:checked ~ .list-sidebar{
        display: none;
    }
    .list-sidebar{
        margin: 15px;
        border-left: 1px solid #ccc;
        padding-left: 2px;
    }
    .list-sidebar li{
        margin: 5px 0;
    }
    .list-sidebar a{
        color: #48525c;
        font-size: 15px;
        padding: 5px 10px 5px 10px;
        display: block;
    }
    .list-sidebar li.active a{
        color: #0440a2;
        font-weight: bold;
        /*background: rgba(51,61,71,0.1);*/
        border-radius: 4px;
    }




    .fill-ballot{
        fill: #0440a2;
    }
    .ballot-icon svg{
        width: 20px;
        display: inline-block;
        margin-right: 10px;   
    }
    .angle-right-icon svg{
        width: 28px;
        height: 28px;
        vertical-align: -6px;
        display: inline-block;
    }
    .angle-down-icon svg{
        width: 28px;
        height: 28px;
        vertical-align: -6px;
        display: inline-block;
    }
    .angle-right-icon svg path{
        fill: #fff;
    }
    .angle-down-icon svg path{
        fill: #fff;
    }
    .btn-toggle-sidebar{
        position: absolute;
        left: 270px;
        top: -10px;
        cursor: pointer;
        white-space: nowrap;
        padding: 5px 10px 5px 5px;
        opacity: 1;
        margin-left: -5px;
        border-radius: 4px;
        text-transform: capitalize;
        font-weight: bold;
        background: #005af0;
        vertical-align: middle;
        color: #fff;
        height: 35px;
        display: inline-block;
        align-items: center;
    }
    .btn-toggle-sidebar svg{
        width: 30px;
        height: 25px;
        padding: 0 5px;
    }
    .btn-toggle-sidebar svg path{
        fill: #fff;
    }

    .btn-toggle-sidebar span svg:first-child{
        display: block;
    }
    .btn-toggle-sidebar span svg:last-child{
        display: none;
    }
    #sidebar-toggle:checked ~ .btn-toggle-sidebar{
        left: 15px;
    }
    #sidebar-toggle:checked ~ .btn-toggle-sidebar span svg:first-child{
        display: none;
    }
    #sidebar-toggle:checked ~ .btn-toggle-sidebar span svg:last-child{
        display: block;
    }
    #sidebar-toggle:checked ~ .wrapper-client-sidebar{
        width: 0;
        overflow: hidden!important;
        padding: 0;
        height: 0;
    }
    #sidebar-toggle:checked ~ .wrapper-client-content{
        margin-left: 0;
    }


    /*Medium devices (Small devices, 576px to 768px)*/
    @media screen and (max-width: 767.98px) {
        .btn-toggle-sidebar{
            left: 15px;
        }
        .btn-toggle-sidebar span svg:first-child {
            display: none!important;
        }
        .btn-toggle-sidebar span svg:last-child {
            display: block!important;
        }
        .text-btn-toggle-sidebar{
            display: none!important;
        }

        .wrapper-client-sidebar{
            display: none;
        }
        #sidebar-toggle:checked ~ .wrapper-client-sidebar.active{
            width: 100%;
            height: auto;
            overflow: auto!important;
            padding: 15px;
            display: block
        }
        #sidebar-toggle:checked ~.wrapper-client-sidebar.active{
            float: none!important;
            width: 100%;
            position: fixed;
            background: #333145;
            background: -moz-linear-gradient(top, #333145 0%, #b8333e 100%);
            background: -webkit-gradient(left top, left bottom, color-stop(0%, #333145), color-stop(100%, #b8333e));
            background: -webkit-linear-gradient(top, #333145 0%, #b8333e 100%);
            background: -o-linear-gradient(top, #333145 0%, #b8333e 100%);
            background: -ms-linear-gradient(top, #333145 0%, #b8333e 100%);
            background: linear-gradient(to bottom, #333145 0%, #b8333e 100%);
            z-index: 11;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            overflow-y: scroll;
            padding: 15px;
            -webkit-transition: 0.2s 0s;
            -o-transition: 0.2s 0s;
            transition: 0.2s 0s;
        }
        .title-sidebar {
            background: transparent!important;
            color: #a6c1ee!important;
            font-size: 21px;
            padding: 12px 30px 12px 12px;
            font-weight: bold;
            text-align: left;
        }
        .list-sidebar a {
            color: #fff;
            font-size: 15px;
            padding: 5px 10px 5px 10px;
            display: block;
        }
        .list-sidebar li.active a{
            color: #a7f9ea;
        }
    }
</style>