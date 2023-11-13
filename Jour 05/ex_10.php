<?php
function my_get_weird_info()
{
  if(isset($_GET["nbr_elem"]) && is_int($_GET["nbr_elem"]))
  {
    $keys_array = array_keys($_GET);
		for($i = 0; $i < $_GET["nbr_elem"]; $i++)
    {
      $keys_value = $keys_array[$i];
			if(is_int($_GET[$keys_value]))
      {
				echo "\$_GET['$keys_value'] = $_GET[$keys_value]\n";
			}
		  else
      {
				echo "\$_GET['$keys_value'] = \"$_GET[$keys_value]\"\n";
			}
		}
		return 0;
	}
	else
  {
	return NULL;
	}
}