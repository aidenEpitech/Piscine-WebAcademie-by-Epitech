<?php
include "ex_03.php";
use Imperium\Soldier;
class Scanner{
	public function scan($soldier){
		$class = new \ReflectionClass(get_class($soldier));
		echo (class_exists('\\Imperium\\Soldier')) ? "Praise be, Emperor, Lord\n" : "Xenos spotted.\n";
	}
}