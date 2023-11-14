<?php

function my_sort(&$array)
{
	static $callCount = 0;
	$callCount++;

	if (count($array) > 1) {
		$temp = $array[0];
		$array[0] = $array[count($array) - 1];
		$array[count($array) - 1] = $temp;
	}
	return $callCount;
}
