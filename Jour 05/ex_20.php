<?php

function check_email()
{
	if (!isset($_POST['email'])) {
		echo "courriel invalide\n";
		return;
	}

	$email = $_POST['email'];
	if (strpos($email, ' ') !== false || strpos($email, "\t") !== false) {
		echo "courriel invalide\n";
		return;
	}

	$atPos = strpos($email, '@');
	if ($atPos === false || substr_count($email, '@') !== 1) {
		echo "courriel invalide\n";
		return;
	}

	$dotPos = strpos($email, '.', $atPos);
	if ($dotPos === false) {
		echo "courriel invalide\n";
		return;
	}

	echo "courriel valide\n";
}

check_email();
