<?php

function str_to_wordtab($str, $delim)
{
	if (!is_string($str) || !is_string($delim)) {
		return null;
	}

	return explode($delim, $str);
}
