<style>
    .page-login {
        width: 100%;
        min-height: 100vh;
        padding: 45px 0;
        text-align: center;
    }
    
    .login-form-control {
        padding: 36px 56px 48px;
        font-family: "Roboto", Helvetica, Arial, sans-serif;
    }
    
    .login-form {
        background: #fff;
        box-shadow: 0 4px 32px 0 rgba(10, 14, 29, .02), 0 8px 64px 0 rgba(10, 14, 29, .08);
        border-radius: 0;
        background-color: white;
        margin: 0 auto;
        max-width: 480px;
        min-height: 356px;
        padding: 30px;
        position: relative;
    }
    
    .login-form .title {
        font-size: 32px;
        font-weight: 700;
        line-height: 40px;
        color: #142149;
        text-align: center;
        margin-bottom: 24px;
    }
    
    .login-form .input-group {
        display: block;
        margin-bottom: 24px;
        position: relative;
        height: 54px;
    }
    
    .login-form .input-group .input-control {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        color: #525666;
        background-color: #fff;
        padding-left: 45px;
        border-radius: 0;
        font-size: 15px;
        transition: border .3s linear;
        border: 1px solid #ccc;
    }
    
    .login-form .svg-icon {
        position: absolute;
        top: 50%;
        left: 15px;
        display: block;
        width: 22px;
        height: 22px;
        z-index: 3;
        -webkit-transform: translateY(-50%);
        -moz-transform: translateY(-50%);
        -o-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
    }
    
    .login-form .btn-login {
        margin-top: 30px;
        color: #fff;
        background: #007bfc;
        display: block;
        width: 100%;
        font-size: 14px;
        text-align: center;
        margin-left: auto;
        margin-right: auto;
        padding: 18px 0;
    }
    @media screen and (max-width: 575.98px) {
        .login-form-control {
            padding: 25px 15px;
        }
        .login-form {
            padding: 30px 15px 15px;
        }
    }
</style>