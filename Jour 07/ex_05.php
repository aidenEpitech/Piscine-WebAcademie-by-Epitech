<?php
function sum_it($nb_a=NULL, $nb_b=NULL) {
	$i = abs($nb_b);
	if(!is_int($nb_a) || !is_int($nb_b)){
		return NULL;
	}else{
		if($nb_b < 0){
			while($i > 0){
				$nb_a += $nb_b;
				$nb_b++;
				$i--;
			}
		}else{
			while($nb_b > 0){
				$nb_a += $nb_b;
				$nb_b--;
				
			}
		}
		return $nb_a;
	}
}