<?php
class BMW implements iCars{
	private $_price;
	private $_weight;
	public function __construct($_price, $_weight = 4242){    
		$this->_price = $_price;	
		$this->_weight = $_weight;				
	}
	public function getPrice() {
		return $this->_price;
    }
    public function getWeight(){
		return $this->_weight;
	}
	public static function lessExpensive(){
		 return 15000;
    }
    public function mineIsBigger($obj){
		if (is_a($obj, 'Toyota')) {
		  echo "Mine is bigger";
		}else if(is_a($obj, 'Smart')){
			echo "Mine is way bigger !";
		}else if(is_a($obj, 'Velib')){
			echo "LOL";
		}else{
			echo "Show me !";
		}
	}
}
class Suzuki implements iCars{
	private $_price;
	private $_weight;
	public function __construct($_price, $_weight = 4242){    
		$this->_price = $_price;	
		$this->_weight = $_weight;				
	}
	public function getPrice() {
		return $this->_price;
    }
    public function getWeight(){
		return $this->_weight;
	}
	public static function lessExpensive() {
		return 5000;
    }
    public function mineIsBigger($obj){
		if (is_a($obj, 'Toyota')) {
		  echo "Mine is bigger";
		}else if(is_a($obj, 'Smart')){
			echo "Mine is way bigger !";
		}else if(is_a($obj, 'Velib')){
			echo "LOL";
		}else{
			echo "Show me !";
		}
	}
}
interface iCars{
	public function getPrice();
	public function getWeight();
	public function mineIsBigger($obj);
}
