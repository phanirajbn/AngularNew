//http is a most primitive way or core node programmer's way of creating Web servers and rendering web pages. For quick App development and usages U should use an external package called Express. Express provides a professional way of designing web pages as well as processing the web content. 
//It uses advanced features of nodejs like middleware(extra logic that is invoked for every request in a processing pipeline of http), event handling thro Event Emitters and file streaming thro an API called pipe. 
//This makes the Application development easier and faster. 
//express has to be installed from the npm website. UR App should have a config file called package.json that provides info about UR App and dependencies if any. if npm packages has to be installed in ur app, U should create package.json and provide the required details. 
//PS: Alternatively, U could use the npm init to create a package.json to UR Application using a wizard. 

var express = require('express');//This returns a class of the Express module. 
var parser = require('body-parser');
var app = express();//instantiating it....

app.use(parser.urlencoded({extended:false}));

app.get("/", function(req, res){
	res.send("<h1>Home Page</h1>");
})
app.get("/CDAC", function(req, res){
	res.send("<h1>CDAC Page</h1>");
})
app.get("/Courses", function(req, res){
	res.send("<h1>Courses Page</h1>");
})
app.get("/About", function(req, res){
	res.send("<h1>About Page</h1>");
})
app.get("/RestDemo", function(req, res){
	res.sendFile(__dirname +"/RestClient.html");
})

app.get('/Register', function(req, res){
	res.sendFile(__dirname + "/Register.html");
})

/*app.get('/registerData', function(req, res){
	//get the values posted by the page...
	var uName = req.query.username;
	var email = req.query.email;
	var inputs = {
		uName : uName,
		emailId : email
	};
	res.send(JSON.stringify(inputs));
})*/

app.post('/registerData', function(req, res){
	console.log(req);
	var name = req.body.username;
	var email = req.body.email;
	res.send(name + " has successfully registered with us<br/>We will send an acknowledgement to the registered email address at " + email);
})


var server = app.listen(1235, function(){
	console.log("Express is running at port:1235")
})

