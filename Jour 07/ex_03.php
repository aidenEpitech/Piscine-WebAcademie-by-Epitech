<?php
function my_pow($nb_a=0, $nb_b=-1){
	if(!is_int($nb_a) || !is_int($nb_b) || $nb_b < 0){
		return NULL;
	}
	elseif($nb_b == 0){
		return 1;
	}
		$a = $nb_a;
		for($i=1;$i<$nb_b;$i++){
		$nb_a*=$a;
	}
		return $nb_a;
}