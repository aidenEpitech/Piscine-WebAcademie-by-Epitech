<?php
function objects_comparison($object1, $object2){
	if($object1 === $object2){
		echo "Objects are the same.\n";
	}
	elseif($object1 == $object2){
		echo "Objects are equal.\n";
	}
	else{
		echo "\n";
	}
}