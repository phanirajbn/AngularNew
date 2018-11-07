//Nodejs gives us a host of modules that can be used to perform common operations required for any kind of nodejs Applications. This include Filesystem to interact with File IO operations(fs), os module for working with OS and getting info about the OS that the application is executing(os), util for string manipulations(util), http for creating and consuming services and servers. Nodejs.org contains many such modules that can be used for developing applications.

var fs = require('fs');//fs is the core module for file io operations.
var util = require('util');
var os= require('os');
//Core modules are loaded using require but without a ./
//U use the ./ for loading local modules that U have created...Refer the app.js for this information...

/*var filename = 'SampleExample.txt';
var contents = fs.readFileSync(filename, 'utf8');
//This function reads the file and gets the string content of it in the utf8 format(Text format)
console.log(contents); 

//reading the contents in an asynchronous manner, in this case, the file reading happens parallelly while the next line the application is executed. 2nd arg contains the encoding formating for textbased files, and 3rd arg is a callback function that has 2 args: err object and the contents of the file...

fs.readFile(filename, 'utf8', function(err, data){
	if(err) throw err;
	console.log(data);
})

console.log("Main task is continuing here....")

//writeFile is used to write text based data to a file in an asynchronous manner. First arg is the filename where the content has to be written, 2nd arg would be the content to write and 3rd arg is the error callback function that will be called when an error occurs. 
fs.writeFile("SampleExample.txt", "Some text to be written to the file specified", function(err){
	console.log(err)//called if the file writing is not possible...
})
console.log("This line of code is executed without the previous line completion");
///////////////appending the file/////////////////////////////
fs.appendFile(filename, 'Adding one more line\n', function(err){
	console.log(err);
})*/

////////////////////////Reading the info about UR directory//////
// var dir = '../NodeJsDemos';
// console.log(fs);
// fs.readdir(dir, function(err, files){
// 	for (var i = 0; i < files.length; i++) {
// 		fs.stat(files[i], function(err, stats){
// 			console.log(stats);
// 			console.log("-------------------End of the file info-------");		
// 		})
// 	}
// })
/////////////////////Util module for performing string operations
// var name = 'Phaniraj';
// var address = "RR Nagar, Bangalore";
// var age = 41;
// var strMsg = util.format("My Name is %s, I am from %s and I am %d years old", name, address, age);
//console.log(strMsg);
/////////////////////////////OS related operations//////////////////
console.log(os.type())
console.log((os.uptime()/3600)/24 + 'days') ;
console.log(os.hostname());
//os module is used to obtain information about the Os where the nodejs is executing...








