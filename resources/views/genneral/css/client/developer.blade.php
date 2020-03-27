<style>
    .BlackImage {
        position: relative;
    }

    .BlackImage img {
        width: 100%;
        height: 100%;
        opacity: .3;
        -webkit-filter: grayscale(1);
        -moz-filter: grayscale(1);
        filter: grayscale(1);
    }

    .BlackImage svg.hero-triangles {
        position: absolute;
        z-index: -1;
        left: 0;
        bottom: 0;
        width: 15%;
    }

    .BlackImage .primary-triangle {
        fill: #d67456;
        opacity: .7;
    }

    .BlackImage .gray-triangle {
        fill: #000;
        opacity: .5;
    }

    .BlackImage h1 {
        font-family: RCB;
        font-size: 4.5em;
        text-transform: capitalize;
        letter-spacing: 6px;
        font-weight: 300;
        color: rgb(138, 136, 136);
        position: absolute;
        z-index: 1;
        top: 70%;
        left: 5%;
        -webkit-transform: translateY(-50%);
        /* WebKit */
        -moz-transform: translateY(-50%);
        /* Mozilla */
        -o-transform: translateY(-50%);
        /* Opera */
        -ms-transform: translateY(-50%);
        /* Internet Explorer */
        transform: translateY(-50%);
        /* CSS3 */
    }

    .BlackImage h1 span {
        display: block;
        font-family: "Times New Roman", Times, serif;
        font-size: 1.5rem;
        color: #444
    }

    .base-information {
        display: table;
    }

    .base-information .wrapper-item-infor p {
        display: table-cell;
        padding: 8px 0
    }

    .base-information .wrapper-item-infor p.title {
        text-transform: capitalize;
        font-weight: bold;
        min-width: 100px;
    }

    .title-section {
        letter-spacing: 2px;
        padding: 20px 0 30px 0;
        position: relative;
        text-transform: uppercase;
        font-size: 24px;
        font-weight: 700;
        color: #142149;
    }

    .AvatarDeveloper {
        text-align: right;
        padding-right: 30px;
        line-height: 0;
    }

    .title-topic {
        background: rgba(0, 0, 0, 0) url("/images/background/bg_title.png") no-repeat scroll center bottom;
        color: #142149;
        display: block;
        font-family: RCB;
        font-size: 25px;
        margin: 25px 0;
        padding-bottom: 20px;
        text-align: center;
        text-transform: uppercase;
    }

    .block-language {
        width: 30%;
        margin: 1px auto;
        background-color: #f1f1f1;
        padding: 15px;
        float: left;
    }

    .block-language.middle {
        width: 40%;
        background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);
        margin-top: -15px;
    }

    .icon-title-block {
        text-align: center
    }

    .icon-title-block .js-component,
    .icon-title-block .php-component,
    .icon-title-block .java-component {
        width: 50px;
    }

    .icon-title-block .svg-inline--fa {
        width: 100%;
        max-width: initial;
        max-height: initial;
    }

    .title-block-language {
        text-align: center;
        font-size: 24px;
        color: #253811;
        text-transform: uppercase;
        font-weight: bold;
        padding: 15px 0
    }

    .content-language {
        text-align: center;
        color: #142149;
    }

    .BackgroundDeveloper {
        width: 100%;
        opacity: 0.4;
        -webkit-filter: grayscale(1);
        -moz-filter: grayscale(1);
        filter: grayscale(1);
    }

    .wrapper-content-education {
        position: relative;
        padding: 20px
    }

    .wrapper-content-education:before {
        background-image: url("/images/background/graduation.jpg");
        background-size: cover;
        content: "";
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -2;
        opacity: 0.4;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .avatar_dh_saigon {
        border-radius: 50%;
        position: absolute;
        top: 50%;
        -webkit-transform: translateY(-50%);
        /* WebKit */
        -moz-transform: translateY(-50%);
        /* Mozilla */
        -o-transform: translateY(-50%);
        /* Opera */
        -ms-transform: translateY(-50%);
        /* Internet Explorer */
        transform: translateY(-50%);
        /* CSS3 */
    }

    .description-content-education {
        width: 50%;
        padding: 50px 0 50px 180px;
    }

    .description-content-education .title {
        font-size: 24px;
        line-height: 1.33;
        font-weight: bold;
        color: #142149;
        padding-bottom: 20px
    }

    .description-content-education .description {
        font-size: 15px;
        line-height: 1.7;
        font-weight: normal;
        color: #142149;
    }

    /* Medium devices (desktops, 992px to 1199px and down) 
        = @media (min-width: 992px) col-xl-*/
    @media screen and (max-width: 1320px) {}

    /* Medium devices (desktops, 992px to 1199px and down) 
        = @media (min-width: 992px) col-lg-*/
    @media screen and (max-width: 1199.98px) {
        .BlackImage h1 {
            font-size: 3em;
        }

        .BlackImage h1 span {
            font-size: 1.5rem;
        }

        .description-content-education {
            width: 60%;
        }
    }

    /*Tablet devices (768px to 992px and down) col-md-*/
    @media screen and (max-width: 991.98px) {
        .BlackImage h1 {
            font-size: 2rem;
        }

        .description-content-education {
            width: 75%;
        }
    }

    /*Medium devices (Small devices, 576px to 768px) col-sm-*/
    @media screen and (max-width: 767.98px) {
        .BlackImage h1 {
            letter-spacing: 5px;
            font-size: 2rem;
        }

        .AvatarDeveloper {
            text-align: center;
            margin-top: -80px
        }

        .AvatarDeveloper img {
            border-radius: 50%;
            width: 180px;
        }

        .title-section {
            text-align: center
        }

        .base-information {
            margin: 0 auto;
        }

        .block-language {
            display: block;
            float: none;
            width: 80%;
        }

        .block-language.middle {
            width: 80%;
            margin-top: 0px;
        }

        .BackgroundDeveloper {
            opacity: 0.2;
        }

        .avatar_dh_saigon {
            width: 120px;
        }

        .wrapper-content-education:before {
            background-image: url("/images/background/graduation-mobile.jpg");
            opacity: 0.18;
        }

        .description-content-education {
            width: 100%;
            padding: 20px 0 20px 135px;
        }
    }

    /* Small devices (landscape phones, 576px and up) col-xs-*/
    @media screen and (max-width: 575.98px) {
        .BlackImage h1 {
            top: 40%;
            letter-spacing: initial;
            font-size: 1.7rem;
        }

        .BlackImage h1 span {
            font-size: 18px;
        }

        .AvatarDeveloper img {
            width: 120px;
        }

        .block-language {
            width: 100%;
            margin: 1px auto;
            background-color: #f1f1f1;
            padding: 15px
        }

        .block-language.middle {
            width: 100%;
            margin-top: 0px;
        }

        .avatar_dh_saigon {
            width: 90px;
        }

        .description-content-education {
            width: 100%;
            padding: 10px 0 10px 105px;
        }
    }
</style>