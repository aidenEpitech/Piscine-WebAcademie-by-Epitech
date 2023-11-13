<?php
function my_pow_rec($nb_a=0, $nb_b=-1){
    if(!is_int($nb_a) || !is_int($nb_b) || $nb_b < 0){
		return NULL;
	}
	elseif($nb_b == 0){
		return 1;
	}
	else{
		$i = $nb_a;
		return $nb_a*=my_pow_rec($i, $nb_b-1);
	}
}
