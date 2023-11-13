<?php

function get_median(array $vals)
{
	sort($vals);
	$count = count($vals);
	$middleIndex = floor(($count - 1) / 2);

	if ($count % 2) {
		return $vals[$middleIndex];
	} else {
		return ($vals[$middleIndex] + $vals[$middleIndex + 1]) / 2;
	}
}
