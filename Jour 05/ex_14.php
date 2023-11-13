<?php

function display_names(...$params)
{
	return [
		0 => basename(__FILE__),
		3 => count($params),
		4 => count($params) % 2 === 0 ? 1 : 0
	];
}
