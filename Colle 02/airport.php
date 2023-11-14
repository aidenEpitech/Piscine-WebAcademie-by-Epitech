<?php

function airport_php(string $string)
{
	$displayLength = 30;
	$temp = str_repeat(" ", $displayLength) . $string . str_repeat(" ", $displayLength);
	$stringLength = strlen($temp);

	for ($i = 0; $i < $stringLength - $displayLength; $i++) {
		echo substr($temp, $i, $displayLength) . "\n";
		usleep(500000);
		system('clear');
	}
}

airport_php("Ici on vise le 10 de moyenne exactement");
//airport_php("Le but de notre vie est d’être heureux.");
