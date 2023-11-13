<?php
function str_to_wordtab($str=NULL, $delim=NULL){
    if (!is_string($str) || !is_string($delim)){
        return NULL;
    }
    $array = explode($delim, $str);
	return $array;
}