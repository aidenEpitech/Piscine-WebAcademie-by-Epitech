<?php
function return_calls(){	
	static $i = 1;
	if($i % 2 === 0){
		return $i++;
	}else{
		$i++;
		return NULL;
	}	
}