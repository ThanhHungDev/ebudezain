'use strict'
var redis  = require('redis');
var CONFIG = require('../configs');

var connect = function(){
    return redis.createClient(CONFIG.REDIS.PORT , CONFIG.REDIS.IP);
}
var listen_connect = function (REDIS){
    return REDIS.on('connect', function() {
        console.log('connected redis server ' + CONFIG.REDIS.IP);
    });
}
var listen_error = function( REDIS ){
    return REDIS.on("error", function(err) {
        console.error("Error connecting to redis", err);
    });
}
module.exports = {
    connect, listen_connect, listen_error
}