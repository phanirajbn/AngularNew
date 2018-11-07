var app = require('express')();
var parser = require('body-parser');

app.use(parser.urlencoded({extended:true}));
app.use(parser.json());

app.use(function(req, res, next){
	res.header('Access-Control-Allow-Origin', '*');
	res.header('Access-Control-Allow-Methods', 'GET, PUT, POST, DELETE');

	next();
})

function createCon() {
	var sql = require('mysql');
	var config ={
		server :'localhost',
		database: 'cdactraining',
		user:'root',
		password:''
	};
	var con = sql.createConnection(config);
	return con;
}

app.get('/getAll', (req, res)=>{
	var con = createCon();
	var query ='select * from customer';
	con.query(query, (e, r, f)=>{
		res.send(JSON.stringify(r));
	})
})

app.listen(1234, function(){
	console.log('server is at 1234');
})