<?php
function count_island($filename)
{
	if (!file_exists($filename) || !is_readable($filename)) {
		return false;
	}

	$content = file_get_contents($filename);
	if ($content === false) {
		return false;
	}

	$lines = explode("\n", $content);
	if (empty($lines)) {
		return false;
	}

	$islandCount = 0;
	$map = [];

	foreach ($lines as $y => $line) {
		$map[$y] = str_split($line);
	}

	foreach ($map as $y => $row) {
		foreach ($row as $x => $char) {
			if ($char === 'w') {
				$islandCount++;
				flood_fill($map, $x, $y, $islandCount);
			}
		}
	}

	if ($islandCount === 0) {
		return false;
	}

	foreach ($map as $row) {
		echo implode('', $row) . "\n";
	}

	return true;
}

function flood_fill(&$map, $x, $y, $count)
{
	if (!isset($map[$y][$x]) || $map[$y][$x] !== 'w') {
		return;
	}

	$map[$y][$x] = $count;

	flood_fill($map, $x - 1, $y, $count);
	flood_fill($map, $x + 1, $y, $count);
	flood_fill($map, $x, $y - 1, $count);
	flood_fill($map, $x, $y + 1, $count);
}