//We use http module for creating web servers and processing of web content and rendering web pages from a certain folder. 
var http = require('http');
var fs = require('fs');
var join = require('path').join;
var parse = require('url').parse;


//////////////First Demo on http///////////////////////////////
// var server = http.createServer(function(req, res){
// 	res.write("Hello Http");
// 	res.end();
// })

// server.listen(2222);

//////////////////Rendering pages from a certain directory//////////

var root = __dirname;//Root directory of UR Application....

function errorPage(res){
	res.writeHead(200, {'Content-type' : 'text/html'});
	res.write("<h1>OOPs!!! Something happened. Please visit us after some time");
	res.end();
}


var server = http.createServer(function(req, res){
    var url = req.url;
    res.writeHead(200, {'Content-type' : 'text/html'});
    var parsedUrl = parse(req.url);
    var completePath = join(root, parsedUrl.pathname);
    //console.log(completePath);
    if(req.url !='/favicon.ico'){
    	switch(req.url){
    		case "/":
    		{
    			completePath = join(root, 'HomePage.html');
    			var stream = fs.createReadStream(completePath);
    			stream.on('data', function(arg){
    				res.write(arg);
    			})
    		}
    		break;
    		case "/CDAC":
    			res.write("<h2>CDAC courses for the Year 2018</h2>")
    			res.end();
    			break;
			case "/Courses":
    			res.write("<h2>List of courses with us</h2>")
    			res.end()
    			break;
			default:
				errorPage(res);
				break;
    	}
    }

}).listen(1234);
