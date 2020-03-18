'use strict'
var db        = require("../models");
var CONFIG    = require("../configs");
var validator = require("validator");
var bcrypt    = require("bcrypt");
var salt      = CONFIG.salt;
var REDIS;


var setTokenAccess = function ( _user, client, refesh) {
    var access = bcrypt.hashSync(refesh, salt);
    var key_redis = renderKeyRedis(_user.id, client);
    return new Promise((resolve, reject) => {
        REDIS.set(key_redis, access, 'EX', (CONFIG.TimeExpireAccessToken * 60), (err, status) => {
            if (err) {
                console.log( err.message )
                resolve(false);
            }
            var success = { id: _user.id, access, refesh, user_infor: _user };
            resolve(success);
        });
    })
}
const renderKeyRedis = function (id, client) {
        id      = parseInt(id);
    var key_obj = { id, ...client };
    return JSON.stringify(key_obj);
}
var userLogin = async (req, res) => {
    var error = validateUserLogin(req);
    if (error) {
        return res.end(JSON.stringify(error));
    }
    
    var { email, password, client } = req.body;
    console.log( email, password, client );
    var error, _user; 
    error = _user = null;
    var user_agent = req.headers['user-agent'] ? req.headers['user-agent'] : '';
    var error = validateUserLogin(email, password, client);
    if (!error) {
        _user = await db.USER.auth(email, password);
        if (!_user) {
            error = {
                user_message: "email hoặc password sai",
                internal_message: "email or password fail",
                code: 401
            };
        }
    }
    if (!error) {
        client = { ...client, user_agent };
        var refesh = await db.TOKEN_REFESH.getOrCreateTokenRefesh(_user, client).catch(error => {console.log(error.message); return false});
        if (!refesh) {
            error = {
                user_message: "hệ thống có lỗi, vui lòng thử lại sau",
                internal_message: "create refesh token fail",
                code: 500
            };
        }
    }
    if (error) {
        return res.end(JSON.stringify(error));
    }
    var accessToken = await setTokenAccess( _user, client, refesh);
    if(!accessToken){
        error = {
            user_message: "hệ thống có lỗi, vui lòng thử lại sau",
            internal_message: "create access token fail",
            code: 500
        };
        return res.end(JSON.stringify(error));
    }
    var data = {
        user_message: "login success",
        internal_message: "login true",
        code: 200,
        data: accessToken
    };
    return res.end(JSON.stringify(data));
}
var validateRefeshToken = function( id, refesh, client ) {
    var error = null;
    if (!id || !refesh || !client) {
        error = {
            user_message: "refesh fail",
            internal_message: "block",
            code: 403
        };
    } else if (!validator.isNumeric(id + "")) {
        error = {
            user_message: "format id fail",
            internal_message: "invalid id",
            code: 400
        };
    } else if (
        !client.browser ||
        !client.browser_version ||
        !client.browser_major_version ||
        !client.os ||
        !client.os_version
    ) {
        error = {
            user_message: "failure for data",
            internal_message: "invalid object data",
            code: 400
        };
    }
    return error;
}
var refeshAccessTokenByRefeshToken = async (req, res) => {
    var { id, refesh, client } = req.body;
    var user_agent = req.headers['user-agent'] ? req.headers['user-agent'] : '';
    var error = validateRefeshToken(id, refesh, client);
    if (!error) {
        client = { ...client, user_agent };
        var token = await db.TOKEN_REFESH.getRefeshDataByToken(refesh);
        if (!token) {
            error = {
                user_message: "authenticate fail",
                internal_message: "refesh token not found",
                code: 403
            };
        }
    }
    if (error) {
        return res.end(JSON.stringify(error));
    }
    var _user = await db.USER.getUserById(id);
    var accessToken = await setTokenAccess( _user, client, refesh);
    if(!accessToken){
        error = {
            user_message: "hệ thống có lỗi, vui lòng thử lại sau",
            internal_message: "create access token fail",
            code: 500
        };
        return res.end(JSON.stringify(error));
    }
    var data = {
        user_message: "refesh thành công",
        internal_message: "login true",
        code: 200,
        data: accessToken
    };
    return res.end(JSON.stringify(data));
}

var validateUserRegister = function( email, password, name ){
    var error = null;
    if (!email || !password || !name) {
        error = {
            user_message: "đăng kí thất bại",
            internal_message: "block",
            code: 400
        };
    } else if (!validator.isLength(password, { min: 6, max: 64 })) {
        error = {
            user_message: "số kí tự mật khẩu >= 6 và <= 64 ",
            internal_message: "invalid password",
            code: 400
        };
    } else if (!validator.isEmail(email)) {
        error = {
            user_message: "email lỗi",
            internal_message: "invalid email",
            code: 400
        };
    }
    return error;
}

var userRegister = async function(req, res){
    var { email, password, name } = req.body;
    var error = validateUserRegister(email, password, name);
    if(!error){
        var user  = await db.USER.checkEmailExist(email);
        if (user) {
            error = {
                user_message: "email tồn tại",
                internal_message: "exist email",
                code: 400
            };
        }
    }
    if (!error) {
        var hash_password = bcrypt.hashSync(password, salt);
        var new_user = {
            email,
            password: hash_password,
            name
        }
        var is_save_user = await db.USER.saveUser(new_user).then(new_record => new_record).catch(error =>  false);
        if (!is_save_user) {
            error = {
                user_message: "đăng kí thất bại",
                internal_message: "error register user",
                code: 500
            };
        }
    }
    if (error) {
        return res.end(JSON.stringify(error));
    }
    var success = {
        user_message: "đăng kí thành công",
        internal_message: "register true",
        code: 200
    };
    return res.end(JSON.stringify(success));
}

module.exports = {
    userLogin, userRegister, refeshAccessTokenByRefeshToken,
    setREDIS : function(_REDIS) { REDIS = _REDIS; }
};