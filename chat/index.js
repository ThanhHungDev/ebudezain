/**
 * library
 */
var express    = require('express');
var app        = express();
/**
 * my define
 */
var CONFIG           = require('./configs');
var middlewares      = require("./middlewares");
var redisController  = require("./controllers/redisController.js");
var socketController = require("./controllers/socketController.js");
var api              = require('./routes/api.js');
/***
 * nodejs allow origin localhost *
 */
app.use(middlewares.setAllowOrigin);
/////////////////////////////////////////////////////////////////////////
// for parsing application/x-www-form-urlencoded/////////////////////////
/////////////////////////////////////////////////////////////////////////
var bodyParser = require('body-parser');
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: true }));
/////////////////////////////////////////////////////////////////////////
/**
 * listener server with socket
 */
var server = require('http').createServer(app);
var io = require('socket.io')(server);
server.listen(CONFIG.SERVER.PORT,  () => {
    console.log(`server listen: ${server.address().address}:${ server.address().port}`);
});
/////////////////////////////////////////////////////////////////////////
//////connect database redis ////////////////////////////////////////////
const REDIS = redisController.connect();
redisController.listen_connect(REDIS);
redisController.listen_error(REDIS);
api.apiSetRedis(REDIS);
/////////////////////////////////////////////////////////////////////////
//////run function socket ///////////////////////////////////////////////
socketController.run(io);
socketController.setREDIS(REDIS);
/////////////////////////////////////////////////////////////////////////
//// router express /////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////
app.use('/api', [ middlewares.apiJson ] , api);
app.get('*', (req, res)=>{
    res.setHeader('Content-Type', 'application/json');
    return res.send(JSON.stringify({key:"Page Not Found"}));
});
/////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////
