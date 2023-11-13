<?php
class MyAttribute{
    public $nom;
		public function __construct($prenom){
			$this->nom = $prenom;
		}public function display(){
			echo $this->nom . "\n";
		}
	}