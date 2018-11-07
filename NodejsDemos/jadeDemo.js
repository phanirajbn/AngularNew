//Express provides one or more ViewEngines that allows to mix HTML and Server side data in a simplified syntax. Most of the server side technologies have one such View Engines that helps in mixing the server code and the client code. Jade is one of the ViewEngines available for Express Applications. This is similar to RAZOR of ASP.NET MVC Apps, ASPX of ASP.NET Web Apps and Views of CodeIgniter in php's MVC Application development. 

var app = require('express')();
app.set('view engine', 'jade');

app.get('/', function(req, res){
	res.render('sampleDemo');
}) 

var server = app.listen(1234, function(){
	console.log("express is running at 1234");
})