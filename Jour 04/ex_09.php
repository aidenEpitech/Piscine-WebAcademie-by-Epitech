<?php
function multiples(int $nb){
    for ($i=0; $i <= 200000; $i++) { 
        if ($i % $nb == 0){
            echo "$i\n";
        }
    }
}