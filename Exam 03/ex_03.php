<?php

function count_rec_str($array, $string, $depth = 0, &$results = [])
{
	if ($string === "") {
		return false;
	} if (!isset($results[$depth])) {
		$results[$depth] = 0;
	}

	foreach ($array as $item) {
		if (is_array($item)) {
			count_rec_str($item, $string, $depth + 1, $results);
		} else {
			if ($item === $string) {
				$results[$depth]++;
			}
		}
	} if ($depth === 0) {
		ksort($results); 
		return $results;
	}
}