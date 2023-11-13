<?php

function get_array_key(array $arr, $value)
{
	foreach ($arr as $key => $val) {
		if ($val === $value) {
			return $key;
		}
	}
	return null;
}
