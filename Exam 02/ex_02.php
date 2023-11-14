<?php

function min_len_array($array)
{
	if (empty($array)) {
		return false;
	}

	$minKeyLength = PHP_INT_MAX;
	$minValueLength = PHP_INT_MAX;
	$result = '';

	foreach ($array as $key => $value) {
		$keyLength = strlen($key);
		$valueLength = strlen($value);
		if ($keyLength < $minKeyLength || ($keyLength === $minKeyLength && $valueLength < $minValueLength)) {
			$minKeyLength = $keyLength;
			$minValueLength = $valueLength;
			$result = $value;
		}
	}

	return $result;
}
