<?php
function aff_array(array $my_array){
    foreach ($my_array as $value) {
       echo $value . "\n";
    }
    $nb = count($my_array);
    return $nb;
}