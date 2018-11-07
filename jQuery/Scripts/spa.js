var emp = function(id, name, address){
	this.id = id;
	this.name = name;
	this.address = address;
}

var empRepository = function(){
	var list = [
		new emp(123, "Phaniraj","Bangalore"),
		new emp(124, "JoyDip Mondal","Kolkata"),
		new emp(125, "Ramesh","Mysore"),
		new emp(126, "Vinod Kumar","Shimoga")
	];
	this.addEmp = function(emp){
		list.push(emp)
	}
	this.removeEmp = function(emp){
		var id = list.indexOf(emp);
		list.splice(id, 1);
	}
	this.getAll = function(){
		return list;
	}

	this.update = function(emp){
		for(var i =0; i< list.length;i++){
			if(list[i].id == emp.id){
				list[i] = emp;
				return;
			}
		}
		throw "Employee by id " + emp.id +" not found to update";
	}
}