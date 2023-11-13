<?php
function my_rounds($nb=NULL){
    if(!is_float($nb)){
        return;
    }
    $arr1 = round($nb);
    $arr2 = ceil($nb);
    $arr3 = floor($nb);
    echo "Results : $arr1 - $arr2 - $arr3\n";
}