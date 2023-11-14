#!/usr/bin/env php
<?php

if ($argc > 1) {
	for ($i = 1; $i < $argc; $i++) {
		echo md5($argv[$i]) . "\n";
	}
} else {
	echo "apprend à écrire";
}

?>