<?php
function make_pangolins(array &$my_array=NULL){	
	foreach($my_array as $key => $value){
		$my_array[$key] = "pangolin";
	}
}