<?php
function my_sort_files(array &$tab)
{
  $tps_exe = microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'];
	echo $tps_exe;
}
?>