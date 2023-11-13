<?php

function my_generate_file(string $name)
{
	$file = fopen($name . ".txt", "w");
	if ($file) {
		fclose($file);
		return true;
	} else {
		return false;
	}
}
