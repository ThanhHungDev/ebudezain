/**
 * define
 */
var express           = require('express');
var router            = express.Router();
var LoginController   = require("../controllers/LoginController.js");
var validateUserLogin = require('../request/LoginValidatetion.js');



router.post('/login', validateUserLogin, LoginController.userLogin);
router.post('/register', LoginController.userRegister);
router.post('/refesh-token', LoginController.refeshAccessTokenByRefeshToken);

//https://medium.com/@stockholmux/managing-modularity-and-redis-connections-in-node-js-eb9232f8c1ba
router.apiSetRedis = function(REDIS){
	LoginController.setREDIS(REDIS);
}
module.exports = router;