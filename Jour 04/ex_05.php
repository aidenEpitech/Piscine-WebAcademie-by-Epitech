<?php
function print_range(int $min){

	while($min == 42)
	{
		echo 42 . "\n";
		return true;
	}
	do{
		echo $min . "\n";
		$min++;
	}while($min <= 42);
		return false;
}