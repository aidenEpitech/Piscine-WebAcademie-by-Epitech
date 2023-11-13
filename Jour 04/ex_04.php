<?php
function print_until(int $nb){
    $i = 0;
    if ($nb > 0){
        echo "Boulet !\n";
        return false;
    }
    else {
        while($i <= $nb){
            echo "$i\n";
            $i++;
        }
        return true;
    }    
}

print_until(10);