<?php
function my_mail($mail = NULL){
  $a = strpos($mail, "@")+1;
  $b = strripos($mail, ".");
  $c = strlen($mail);
  $c = $c - $b;
  if($a < $b && is_string($mail)){
    echo substr($mail,$a,-$c) . "\n";
  }
}