<?php
function my_facto_rec($nbr = NULL){
  if(!is_int($nbr) || !isset($nbr) || ($nbr < 0)){
    return null;
  }
  if ($nbr == 0){
    return 1;
  }
  else{
    return $nbr*my_facto_rec($nbr-1);
  }
}