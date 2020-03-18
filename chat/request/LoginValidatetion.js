'use strict'
var validator = require("validator");
var responseErrorValidate = require("../helpers");

var validateUserLogin = function (req, res, next) {
    var { email, password, client } = req.body;
    var error = null;
    if (!email || !password || !client) {

        error = { user_message: "login fail", internal_message: "block", code: 403 };
    } else if (!validator.isEmail(email)) {

        error = { user_message: "format email fail", internal_message: "invalid email", code: 400 };
    } else if (!validator.isLength(password, { min: 6, max: 64 })) {

        error = { user_message: "password character number >= 6 and <= 64 ", internal_message: "invalid password", code: 400 };
    } else if ( !client.browser || !client.browser_version || !client.browser_major_version || !client.os || !client.os_version ){

        error = { user_message: "failure for data", internal_message: "invalid object data", code: 400 };
    }
    req._error = error;
    responseErrorValidate(req, res, next);
}


module.exports = { validateUserLogin };