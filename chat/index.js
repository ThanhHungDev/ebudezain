/**
 * library
 */
var express = require('express');
var app     = express();
var ejs     = require('ejs');
var session = require('express-session');
var flash   = require('connect-flash');
/**
 * my define
 */
var CONFIG     = require('./configs');
var MIDDLEWARE = require("./middleware");

var RedisController  = require("./controllers/RedisController.js");
var SocketController = require("./controllers/SocketController.js");

var apiRouter        = require('./routes/api.js');
/***
 * nodejs allow origin localhost *
 */
app.use(MIDDLEWARE.setAllowOrigin);
app.use(session({
    resave: true, 
    saveUninitialized: true, 
    secret: 'somesecret', 
    cookie: { maxAge: 60000 }}));
app.use(flash());
/***
 * nodejs set view engine *
 */
app.set('view engine', 'ejs');
app.set('views', './views')
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
// const REDIS = RedisController.connect();
// RedisController.listen_connect(REDIS);
// RedisController.listen_error(REDIS);

// apiRouter.apiSetRedis(REDIS);
/////////////////////////////////////////////////////////////////////////
//////run function socket ///////////////////////////////////////////////
SocketController.run(io);
// SocketController.setREDIS(REDIS);
/////////////////////////////////////////////////////////////////////////
//// router express /////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////
app.use('/api', [ MIDDLEWARE.apiJson, MIDDLEWARE.setFlagApi ] , apiRouter);

app.get('/flash', function(req, res){
    req.flash('success', 'đây là message từ root flash');
    res.redirect('/');
});
app.get('/', function(req, res){
    var expressFlash = req.flash('success');
    res.render('index', { message: 'hung đẹp trai', info: expressFlash });
});
app.get('*', (req, res)=>{
    res.setHeader('Content-Type', 'application/json');
    return res.send(JSON.stringify({key:"Page Not Found"}));
});
/////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////
