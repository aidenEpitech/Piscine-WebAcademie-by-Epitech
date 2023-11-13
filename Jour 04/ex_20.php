<?php

function continue_cat()
{
	while ($line = fgets(STDIN)) {
		if (trim($line) === "EOF") {
			echo $line;
			return;
		}
		echo $line;
	}
}

continue_cat();
