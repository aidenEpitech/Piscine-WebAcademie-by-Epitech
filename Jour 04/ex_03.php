<?php
function print_age(int $nb){
    if ($nb <= 0){
        echo "Enfantillage...\n";
    }
    elseif ($nb == 42) {
        echo "the answer.\n";
    }
    else {
        echo "je peux aller en boite\n";
    }
}