var item = function(id, name, cost, quantity){
	this.id = id;
	this.name =  name;
	this.price = cost;
	this.quantity = quantity
	this.calculatePrice = function(){
		return this.price * this.quantity;
	}
}

var cart = function(){
	//List of products with the App....
	var masterItems =[
		new item(111, 'Nokia E5', 6700, 0),
		new item(112, 'Mi Note3', 6700, 0),
		new item(113, 'Mi Note4', 6700, 0),
		new item(114, 'Samsung Guru 77', 6700, 0),
		new item(115, 'Poco 4', 6700, 0),
		new item(116, 'Samsung Shuru 88', 6700, 0),
		new item(117, 'Sony Erricson', 6700, 0),
		new item(118, 'Sony 6786', 6700, 0),
		new item(119, 'Nokia 9876', 6700, 0),
		new item(120, 'Mi Max 2', 6700, 0),
		new item(121, 'Oppo F3', 6700, 0),
		new item(122, 'Oppo F3', 6700, 0),
		new item(123, 'Oppo F3', 6700, 0),
		new item(124, 'Zippi 5', 6700, 0),
		new item(125, 'Zippi 8', 6700, 0),
		new item(126, 'Micromax E6', 6700, 0),
		new item(127, 'Macho 7', 6700, 0),
		new item(128, 'Ricjji 5', 6700, 0),
		new item(129, 'Transcend 7896', 6700, 0),
		new item(130, 'Surugii ', 6700, 0),
		new item(131, 'Soni Cokir', 6700, 0),
		new item(132, 'Samsung Note 4', 6700, 0),
		new item(133, 'Samsung Note 5', 6700, 0),
		new item(134, 'Samsung Note 6', 6700, 0),
		new item(135, 'Samsung Note 7', 6700, 0),
		new item(136, 'Nokia 1100', 6700, 0),
		new item(137, 'Micromax Max4', 6700, 0),
		new item(138, 'Samsung Duos 4', 6700, 0),
		new item(139, 'Samsung Duos 5', 6700, 0),
		new item(140, 'Lochi Min 7', 6700, 0),
		new item(141, 'Zehbr 5', 4700, 0)
	];

	items = [];//cart of the user...
	this.addNewItem = function(item){
		items.push(item)
	}
	this.deleteItem = function(id){
		for(var i = 0; i < items.length; i++){
			if(items[i].id == id){
				items.splice(i, 1);
				return;
			}
		}
		throw "No item found to delete";
	}
	this.getAll = function(){
		return items;
	}
	this.update = function(item){
		for(var i = 0; i < items.length; i++){
			if(items[i].id == item.id){//id is non-modifiable.....
				items[i] = item;
				return;
			}
		}
		throw "No item found to Update";
	}
	this.find = function(name){
		for(var i =0;i < masterItems.length;i++){
			if(masterItems[i].name ==name)
				return masterItems[i];
		}
		throw "Item not found";
	}
	this.generateBill = function(){
		var totalItems = items.length;
		var finalPrice = 0;
		items.forEach((item)=>{
			finalPrice += item.calculatePrice();
		})
		return {
			totalItems,
			finalPrice		
		}
	}
	this.getMasterList = function(){
		return masterItems;
	}
}
//////////////Helper functions for the DOM Manipulations/////////////////
function $(id){
	return document.getElementById(id)
}

function $click(id, action){
	document.getElementById(id).addEventListener('click', action);
}

function $classAction(name, action){
	var items = document.getElementsByClassName(name);
	debugger;
	/*items.forEach(function(item){
		item.addEventListener('click', action);
	})*/
	for(var i =0; i < items.length;i++){
		items[i].addEventListener('click', action);
	}
}
///////////////////////////////////////////////////////////////////////