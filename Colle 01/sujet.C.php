<?php
function colle($x, $y)
{
	$chars = ['A', 'B', 'C'];
	for ($i = 0; $i < $y; ++$i) {
		if ($i == 0 || $i == $y - 1) {
			echo str_repeat($chars[$i % count($chars)], $x) . "\n";
		} else {
			echo $chars[$i % count($chars)] . ($x > 1 ? str_repeat(" ", $x - 2) : "") . $chars[$i % count($chars)] . "\n";
		}
	}
}
