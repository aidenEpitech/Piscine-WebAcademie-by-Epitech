<?php
function str_lower_epur($str=NULL){
    if (!is_string($str)){
        return NULL;
    }
    $supSpace = trim($str);
    $letOneSpace = preg_replace("/\s+/", " ", "$supSpace");
    $putMin = strtolower($letOneSpace);
    $inverse = strrev(ucwords(strrev($putMin)));
    return $inverse;
}