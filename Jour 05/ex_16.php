<?php

function check_types(array $types)
{
	foreach ($types as $type => $values) {
		foreach ($values as $value) {
			if (gettype($value) !== $type) {
				return false;
			}
		}
	}
	return true;
}
