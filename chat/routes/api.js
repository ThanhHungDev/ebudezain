/**
 * define
 */
var express = require('express');
var router = express.Router();
var loginController = require("../controllers/LoginController.js")



router.post('/login', async (req, res)=>{
	await loginController.userLogin(req, res)
});
router.post('/register', async (req, res)=>{
	await loginController.userRegister(req, res)
});
router.post('/refesh-token', async (req, res)=>{
	await loginController.refeshAccessTokenByRefeshToken(req, res)
});

//https://medium.com/@stockholmux/managing-modularity-and-redis-connections-in-node-js-eb9232f8c1ba
router.apiSetRedis = function(REDIS){
	loginController.setREDIS(REDIS);
}
module.exports = router;