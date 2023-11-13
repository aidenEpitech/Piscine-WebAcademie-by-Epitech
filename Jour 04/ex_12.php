<?php
function is_similar(mixed $a, mixed $b)
{
	if ($a == $b)
	{
		echo "Same value.\n";
	}
	if (gettype($a) === gettype($b))
	{
		echo "Same type.\n";
	}
	if ($a === $b)
	{
		echo "Same type and value.\n";
	}
}
