<?php
function which_is_longer($str1=NULL, $str2=NULL){
    if (!is_string($str1) || !is_string($str2)){
        return -1;
    }
        $str22 = strlen($str2);     
        $str11 = strlen($str1);
        if($str11 <= $str22){
        return $str22;
        }else{
        return $str11;
    }
}
