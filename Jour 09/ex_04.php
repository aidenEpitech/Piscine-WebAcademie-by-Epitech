<?php

class MyTinyCalculator
{
	private $a;
	private $b;
	private $result;
			public function __construct($a,$b){
				$this->setA($a);
				$this->setB($b);
			}
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
			public function setResult($result){
				$this->result = $result;
			}
			public function getResult(){
				return $this->result;
			}
				public function add(){
					$this->setResult($this->getA()+$this->getB());
					return $this->getResult();
				}
				public function subtract(){
					$this->setResult($this->getA()-$this->getB());
					return $this->getResult();
				}
				public function multiply(){
					$this->setResult($this->getA()*$this->getB());
					return $this->getResult();
				}
				public function divide(){
					$this->setResult($this->getA()/$this->getB());
					return $this->getResult();
				}
				public function showResult(){
					return $this->result;
				}
}