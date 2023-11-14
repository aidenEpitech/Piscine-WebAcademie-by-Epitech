<?php

function playWithMe($lines)
{
	if ($lines < 1) {
		return false;
	}
	$current = '1';
	for ($i = 1; $i < $lines; $i++) {
		$current = conway($current);
	}
	echo $current . "\n";
	return true;
}

function conway($s)
{
	$result = '';
	$length = strlen($s);
	$count = 1;
	for ($i = 1; $i < $length; $i++) {
		if ($s[$i] == $s[$i - 1]) {
			$count++;
		} else {
			$result .= $count . $s[$i - 1];
			$count = 1; // reset
		}
	}
	$result .= $count . $s[$length - 1];
	return $result;
}