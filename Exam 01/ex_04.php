<?php

function print_array($array)
{
	foreach ($array as $key => $value) {
		echo "[$key] => $value\n";
	}
}
