<?php
function isPrime($number)
{
	if ($number <= 1) return false;
	if ($number <= 3) return true;

	if ($number % 2 == 0 || $number % 3 == 0) return false;

	for ($i = 5; $i * $i <= $number; $i += 6) {
		if ($number % $i == 0 || $number % ($i + 2) == 0) return false;
	}

	return true;
}

$primes = [];
for ($number = 2; $number <= 100; $number++) {
	if (isPrime($number)) {
		$primes[] = $number;
	}
}

// Write the primes to a file
file_put_contents('bonus.php', implode(' ', $primes) . "\n");
