<?php
try{
  for ($i=0; $i < 5 ; $i++){
    call_pangolin();
  }
}
catch(Exception $e){
  echo $e->getMessage();
}