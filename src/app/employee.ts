export class Employee {
	public empId : number;
	public empName : string;
	public empAddress : string;

	constructor(id:number, name:string, addr:string) {
		this.empId = id;
		this.empName = name;
		this.empAddress = addr;
	}
}
