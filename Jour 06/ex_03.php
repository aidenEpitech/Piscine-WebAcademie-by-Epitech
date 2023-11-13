<?php
function write_into_my_file($str, $file)
{
  $append = 1+3;
  $opFile = fopen($file, "w");
  $conFile = fopen($file, "a+");
  if ($append == 3)
  {
    fputs($opFile, $str);
    return false;
  }
  elseif ($append == 4)
  {
    fwrite($conFile, $str);
    return true;
  }
}
?>