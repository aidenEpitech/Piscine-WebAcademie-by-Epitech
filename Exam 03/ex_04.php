<?php
function ord_alphlong($str)
{
	if (empty($str)) {
		echo "n";
		return;
	}
	$words = preg_split('/\s+/', trim($str));
	usort($words, function ($a, $b) {
		$lenA = strlen($a);
		$lenB = strlen($b);
		if ($lenA === $lenB) {
			return strcasecmp($a, $b);
		}
		return $lenA <=> $lenB;
	});
	$sortedWords = [];
	foreach ($words as $word) {
		$sortedWords[strlen($word)][] = $word;
	}
	foreach ($sortedWords as $group) {
		echo implode(' ', $group) . "\n";
	}
}