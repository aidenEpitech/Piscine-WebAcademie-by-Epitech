<?php
function  my_print_cookie(string $key)
{
  if (isset($_COOKIE[$key]))
  {
    echo $_COOKIE[$key] . "_END\n";
  } else {
    return null;
  }
}