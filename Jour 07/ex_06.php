<?php
function sum_rec($nbr_a=NULL, $nbr_b=NULL){
	if(!is_int($nbr_a) || !is_int($nbr_b)){
		return NULL;
	}else{
    if($nbr_b != 0){
			if($nbr_b < 0){
				$nbr_a += $nbr_b;
				$nbr_b++;
				return $nbr_a = sum_rec($nbr_a,$nbr_b);
			}else{
				$nbr_a += $nbr_b;
				$nbr_b--;
				return $nbr_a = sum_rec($nbr_a,$nbr_b);
			}
		}else{
      return $nbr_a;
    }
  }
}