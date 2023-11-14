<?php
function my_sort($arr){
	static $value;
	$i = $arr[0];
	$x = count($arr);
	$arg = $arr[$x-1];
	$arr[0] = $arg;
	$arr[$x-1] = $i;
	$value++;
	return $value;
}