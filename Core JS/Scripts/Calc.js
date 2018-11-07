var operation = function(first, second, operand){
	this.firstValue = first;
	this.secondValue = second;
	this.operand = operand;
	this.result = 0;
	this.operate = function(){
		switch (this.operand) {
			case "+":
				this.result = this.firstValue + this.secondValue;
				break;
			case "-":
				this.result = this.firstValue - this.secondValue;
				break;
			case "X":
				this.result = this.firstValue * this.secondValue;
				break;
			case "/":
				this.result = this.firstValue / this.secondValue;
				break;
		}
	}
}

var calcHistory =function(){
	var list = [];
	this.addList = function(op){
		if(list.length == 5)
			list.splice(0, 1);
		list.push(op);
	}

	this.remove = function(index){
		list.splice(index, 1);
	}

	this.getAll = function(){
		return list;//function that returns a value......
	}
}
