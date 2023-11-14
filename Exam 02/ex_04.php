<?php

function return_calls($functionName, $argsArray)
{
	static $callCount = 0;
	$callCount++;

	if (!function_exists($functionName)) {
		return false;
	}

	try {
		call_user_func_array($functionName, $argsArray);
		return $callCount;
	} catch (Exception $e) {
		return false;
	}
}