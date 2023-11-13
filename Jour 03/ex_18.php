<?php
function get_args(...$args)
{
	return $args;
}

function get_last_arg(...$args)
{
	return array_pop($args);
}