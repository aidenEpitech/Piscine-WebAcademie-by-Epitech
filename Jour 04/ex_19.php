<?php
function break_cat()
{
	while ($line = fgets(STDIN)) {
		echo $line;
		if (trim($line) === "EOF") {
			break;
		}
	}
}

break_cat();
