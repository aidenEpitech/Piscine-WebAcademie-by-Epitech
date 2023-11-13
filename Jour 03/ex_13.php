<?php
function my_swap_vars(&$var1, &$var2){
    $vartemp = $var2;
    $var2 = $var1;
    $var1 = $vartemp;
}
?>