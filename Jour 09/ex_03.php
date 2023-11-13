<?php
	class MyAttributes{   
        private $a;
		private $b;
			public function setA($a){
				$this->a = $a;
			}
			public function getA(){
				return $this->a;
			}
			public function setB($b){
				$this->b = $b;
			}
			public function getB(){
				return $this->b;
			}
			public function __construct($value, $arg){
				$this->a = $value;
				$this->b = $arg;
			}
			public function display(){
				echo $this->a . " " . $this->b . "\n";
			}
    }