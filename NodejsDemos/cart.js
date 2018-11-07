//This is first module that U wish to export to external files.
//module.exports is a JS object that can export one or more Programming components that can be used by the external clients. 
/**********************Anonymous Method for Exports**********************
module.exports = (function(){
	var cart =[];//array...

	function add(item){
		cart.push(item);
	}

	function getAll() {
		return cart;
	}
	//functions and statements created in the object are not exported directly..
	return {
		addItem : add,
		getAllItems: getAll
	}
})();
******************Named Method for exports************/
exports.shoppingCart = (function(){
	var cart =[];//array...

	function add(item){
		cart.push(item);
	}

	function getAll() {
		return cart;
	}
	//functions and statements created in the object are not exported directly..
	return {
		addItem : add,
		getAllItems: getAll
	}
})();

exports.title="Nodejs Training for CDAC";
exports.developed ="Phaniraj B.N.";
exports.developedOn = new Date();

