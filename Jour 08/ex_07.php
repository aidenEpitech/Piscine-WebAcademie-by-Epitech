<?php

function count_char(string $str)
{
	$charCount = [];
	foreach (str_split($str) as $char) {
		if ($char !== ' ' && $char !== "\t") {
			if (!isset($charCount[$char])) {
				$charCount[$char] = 1;
			} else {
				$charCount[$char]++;
			}
		}
	}
	ksort($charCount);
	return $charCount;
}
