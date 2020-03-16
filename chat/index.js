/**
 * library
 */
var express    = require('express');
var app        = express();
/**
 * my define
 */
var CONFIG           = require('./configs');
var MIDDLEWARE       = require("./middleware");

var RedisController  = require("./controllers/RedisController.js");
var SocketController = require("./controllers/SocketController.js");

var apiRouter        = require('./routes/api.js');
/***
 * nodejs allow origin localhost *
 */
app.use(MIDDLEWARE.setAllowOrigin);
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
//////return connect redis to api controller ////////////////////////////
const REDIS = RedisController.connect();
RedisController.listen_connect(REDIS);
RedisController.listen_error(REDIS);

apiRouter.apiSetRedis(REDIS);
/////////////////////////////////////////////////////////////////////////
//////run function socket ///////////////////////////////////////////////
SocketController.run(io);
SocketController.setREDIS(REDIS);
/////////////////////////////////////////////////////////////////////////
//// router express /////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////
app.use('/api', [ MIDDLEWARE.apiJson ] , apiRouter);
app.get('*', (req, res)=>{
    res.setHeader('Content-Type', 'application/json');
    return res.send(JSON.stringify({key:"Page Not Found"}));
});
/////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////
