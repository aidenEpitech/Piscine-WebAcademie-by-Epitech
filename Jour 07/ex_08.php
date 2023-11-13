<?php

function str_beautifuler($str)
{
	if (!is_string($str)) {
		return null;
	}

	$str = preg_replace('/\s+/', ' ', trim($str));
	$words = explode(' ', $str);
	$beautifulWords = array_map(function ($word) {
		return strtolower(substr($word, 0, -1)) . strtoupper(substr($word, -1));
	}, $words);
	return implode(' ', $beautifulWords);
}