<?php
function my_aff_global(){
    foreach ($GLOBALS as $nom => $valeur) {
         if (is_string($valeur)) {
            echo $nom . " => " . $valeur . "\n";
         }
    }
}