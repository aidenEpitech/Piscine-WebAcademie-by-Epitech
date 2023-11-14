<?php
function colle($x, $y)
{
	$top = $x > 1 ? "/" . str_repeat("*", $x - 2) . "\\" : "/";
	$middle = $x > 1 ? "*" . str_repeat(" ", $x - 2) . "*" : "*";
	$bottom = $x > 1 ? "\\" . str_repeat("*", $x - 2) . "/" : "\\";
	echo $y > 1 ? $top . "\n" . str_repeat($middle . "\n", $y - 2) . $bottom : $top;
}
