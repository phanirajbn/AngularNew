/*********Using Anonymous Module********************************
var cartApp = require('./cart');//Get the object refernce from an external file. 

cartApp.addItem({"id":3, "name":"Samsung Note 5", "price": 55000});
cartApp.addItem({"id":4, "name":"MI Note 5", "price": 15000});
cartApp.addItem({"id":5, "name":"OPPO Note 5", "price": 25000});

var items = cartApp.getAllItems();

items.forEach(function(val){
	console.log(val.name);
})
**************Using Named Module*****************/
var mod = require('./cart');//loading local modules....
var cartApp = mod.shoppingCart;
//console.log(mod);
cartApp.addItem({"id":3, "name":"Samsung Note 5", "price": 55000});
cartApp.addItem({"id":4, "name":"MI Note 5", "price": 15000});
cartApp.addItem({"id":5, "name":"OPPO Note 5", "price": 25000});

var items = cartApp.getAllItems();

items.forEach(function(val){
	console.log(val.name);
})

console.log("The program was developed by " + mod.developed)
console.log("The program was developed on " + mod.developedOn.getUTCFullYear());