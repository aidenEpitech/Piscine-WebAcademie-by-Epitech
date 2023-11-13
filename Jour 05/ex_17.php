<?php

function check_url(array $whiteList)
{
	if (!isset($_GET['token'])) {
		return false;
	}

	$token = $_GET['token'];
	foreach (str_split($token) as $char) {
		if (!in_array($char, $whiteList)) {
			return -1;
		}
	}

	return 1;
}
