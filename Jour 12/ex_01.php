<?php
function printArray(array $array){
    foreach ($array as $key => $value){
        echo "$key => $value\n";
    }
}