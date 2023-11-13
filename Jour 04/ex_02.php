<?php
function print_status(int $nb){
    if ($nb < 18){
        echo "Site interdit aux mineurs.\n";
    }
    else {
        echo "Vous pouvez entrer !\n";
    }
}