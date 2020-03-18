var db = require("../models");
var setAllowOrigin = function(req, res, next) {
    res.header("Access-Control-Allow-Origin", "*");
    res.header("Access-Control-Allow-Headers", "Origin, X-Requested-With, Content-Type, Accept");
    next();
}
var apiJson = function( req, res, next ) {
    res.setHeader('Content-Type', 'application/json');
    next();
}
var isAdmin = function( req, res, next ){
    var { authorization } = req.headers;
    if( req.path == "/admin/login"){
        return next();
    }
    db.TOKEN_REFESH.getRefeshDataByToken(authorization)
    .then( user => {
        if( user && user.user_id == 1 ){
            return next();
        }
        throw new Error( "token fail" )
    })
    .catch( error => {
        var responses = { 
            code: 403, 
            user_message : "permision denied", 
            internal_message : 'token fail'
        };
        return res.end(JSON.stringify(responses));
    })
}
var setFlagApi = function(req, res, next) {
    req.isAPI = true;
    next();
}
module.exports = {
    setAllowOrigin, apiJson, setFlagApi
};