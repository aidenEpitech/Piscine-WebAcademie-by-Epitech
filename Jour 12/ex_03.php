<?php 
function rev_epur_str($str = NULL){
    if($str === NULL){
        return FALSE;
    }
    $str = trim($str);
    $str = str_replace("\t", " ", $str);
    $str = preg_replace("!\s+!"," ", $str);
    $array = explode(" ", $str);
    $array = array_reverse($array);
    $str = implode(" ", $array);
    return $str;
}