<?php
function clear_and_replace($string = NULL, $word = NULL)
{
  $espaces = trim($string);
  $newString = preg_replace("/$word/", "Pangolin", $espaces, 2);
  return $newString;
}