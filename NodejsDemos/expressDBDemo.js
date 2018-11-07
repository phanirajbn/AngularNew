//This program uses the Mysql Database and extracts the data from it. 
var app = require('express')();
app.set('view engine', 'jade');

//U need to install a package for mysql:mysql
app.get('/', function(req, res){
	var sql = require('mysql');
	var config = {
		server :'localhost',
		database : 'cdactraining',
		user:'root',
		password:''
	};

	var con = sql.createConnection(config);
	con.query('select * from emptable', function(err, results, fields){
		if(err) console.log(err);
		console.log(results);
		res.render('empList', {list :results})
	})
});

var server = app.listen(1234, function(){
	console.log("server is ready at port 1234")
})