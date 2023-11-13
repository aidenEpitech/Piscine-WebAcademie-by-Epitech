<?php

function print_double_array(array $my_array)
{
	foreach ($my_array as $subArray) {
		foreach ($subArray as $value) {
			echo $value . "\n";
		}
	}
}

// print_double_array(array(array(1, 2.7, 5), array("un", "foo", "bar")));
