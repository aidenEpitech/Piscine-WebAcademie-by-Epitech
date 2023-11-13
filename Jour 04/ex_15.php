<?php
function make_it_rain(array &$my_array)
{
	foreach($my_array as &$value)
	{
		$value = "rain";
	}

}
