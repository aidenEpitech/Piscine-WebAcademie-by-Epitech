<?php

class Pangolin
{
	private $_name;

	public function __construct($name)
	{
		$this->_name = $name;
	}

	public function correct($arcanist)
	{
		$reflection = new ReflectionClass($arcanist);

		// Test 0
		echo "Test 0 : " . ($reflection->isInstantiable() ? "Good !\n" : "KO.\n");

		// Test 1
		echo "Test 1 : " . ($reflection->implementsInterface('iPerso') ? "Good !\n" : "KO.\n");

		// Test 2
		echo "Test 2 : " . ($reflection->isSubclassOf('aUnit') ? "Good !\n" : "KO.\n");

		// Test 3
		$aUnitReflection = new ReflectionClass('aUnit');
		echo "Test 3 : " . (!$aUnitReflection->isInstantiable() ? "Good !\n" : "KO.\n");
	}
}
