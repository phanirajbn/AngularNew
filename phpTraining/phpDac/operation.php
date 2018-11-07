<?php
class operation{
		public $first;
		public $second;
		public $operand;
		public $result;

		function operation($first, $sec, $op, $res){
			$this->first = $first;
			$this->second = $sec;
			$this->operand = $op;
			$this->result = $res;
		}
}  
?>
