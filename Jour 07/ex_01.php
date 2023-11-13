<?php
function my_facto($nbr="NULL"){
	if(!is_int($nbr) || $nbr < 0){
		return NULL;
	}
	elseif($nbr == 0){
		return 1;
	}
	else{
		$i = $nbr;
		$nbr--;
		while($nbr > 0){
			$i*=$nbr;
			$nbr--;
		}
			return $i;
	}
}