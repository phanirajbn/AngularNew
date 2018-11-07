//Rest service using Nodejs and connecting to mysql daetabase. 
var app = require('express')();
var parser = require('body-parser');

app.use(parser.urlencoded({extended:true}));//allowing json format
app.use(parser.json());

//add additional middleware if required...
app.use(function(req, res, next){
	res.header('Access-Control-Allow-Origin', '*');
	res.header('Access-Control-Allow-Methods', 'GET,PUT, POST, DELETE');
	res.header('Access-Control-Allow-Headers', '*');
	next();
});

function createConnection(){
	var sql = require('mysql');//npm install mysql
	var config ={
		server :'localhost',
		database : 'cdactraining',
		user:'root',
		password:''
	}
	var con = sql.createConnection(config);
	return con;
}

app.get('/', function(req, res){
	var con = createConnection();
	var strQuery ="SELECT * FROM EMPTABLE";
	con.query(strQuery, function(err, results, fields){
		res.send(JSON.stringify(results));
	})
})


app.get("/:id", function(req, res){
	var id = req.params.id;//extracting the id sent as parameter to the url....
	console.log(id);
	var con = createConnection();
	var strQuery = "SELECT * FROM EMPTABLE WHERE EMPID = " + id;
	con.query(strQuery, function(err, results, fields){
		if(err) res.send("Error in geting the records");
		else res.send(JSON.stringify(results));
	})
})

app.post('/', function(req, res){
	var data = req.body;//The data is parsed..
	console.log(data);
	var con = createConnection();
	var strQuery ="INSERT INTO EMPTABLE VALUES(" + data.empId + ",'" + data.empName +"','" + data.empAddress +"')";
	con.query(strQuery, (e, r, f)=>{
		if(e) res.send(e);
		res.send("Inserted successfully");
	})
})

app.delete('/:id', function(req, res){
   var id = req.params.id;
   var strQuery = "DELETE FROM EMPTABLE WHERE EMPID=" + id;
   var con = createConnection();
   con.query(strQuery, (e, r, f)=>{
   	  if(e) res.send(JSON.stringify(e));
   	  res.send("Deleted successfully")
   }) 
})

var server = app.listen(1234, function(){
	console.log("server is available at port 1234");
})

