<?php
	class Factory{
		private $sign;

		public function __construct($sign){
			$this->sign=$sign;
		}

		public function factory(){
			switch($this->sign){
				case '+':
					$obj = new Add();
					break;
				case '-':
					$obj = new Minus();
					break;
				case '*':
					$obj = new Multiply();
					break;
				case '/':
					$obj = new Divide();
					break;
			}
				return $obj;
		}


	}









?>