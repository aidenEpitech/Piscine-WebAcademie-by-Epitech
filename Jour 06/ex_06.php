<?php
function my_comb_n($n){
    if (($n > 9 || $n < 0)){
        return null;
    }
    for($i = 10**($n-1); $i < 10**$n; $i++){
        $arr = array_map("intval", str_split($i));
        if (check_nb($arr)){
            echo $i."\n";
        }
    }
}
function check_nb($arr) {
    for ($j=0; $j<count($arr)-1;$j++){
        if($arr[$j] >= $arr[$j+1]){
            return false;
        }
    }
    return true;
}