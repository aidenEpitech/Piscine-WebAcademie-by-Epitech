<?php

function airport_php(string $string, $displayLength = 30, $color = "default")
{
	// Define color codes
	$colors = [
		"default" => "",
		"red"     => "\033[31m",
		"green"   => "\033[32m",
		"yellow"  => "\033[33m",
		"blue"    => "\033[34m",
		"magenta" => "\033[35m",
		"cyan"    => "\033[36m",
		"white"   => "\033[97m"
	];

	// Prepare the colored string
	$coloredString = $colors[$color] . $string . "\033[0m";
	$paddedString = str_repeat(" ", $displayLength) . $coloredString . str_repeat(" ", $displayLength);
	$stringLength = strlen($paddedString);

	for ($i = 0; $i < $stringLength - $displayLength; $i++) {
		echo substr($paddedString, $i, $displayLength) . "\r";
		usleep(500000);
		// The `clear` command is not used here to prevent flickering
	}
	echo "\n"; // Move to a new line at the end
}

// Example usage:
airport_php("Ici on vise le 10 de moyenne exactement", 30, "red");
//airport_php("Le but de notre vie est d’être heureux.", 50, "green");
