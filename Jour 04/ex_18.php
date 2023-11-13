<?php

function return_calls()
{
	static $count = 0;
	$count++;
	return $count * 3;
}

return_calls();
return_calls();
return return_calls();