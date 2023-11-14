<?php

function rev_epur_str($str)
{
	if (empty($str)) {
		return false;
	}

	$trimmedStr = trim($str);
	$normalizedStr = preg_replace('/[\s\t]+/', ' ', $trimmedStr);
	$words = explode(' ', $normalizedStr);
	$reversedWords = array_reverse($words);
	
	return implode(' ', $reversedWords);
}
