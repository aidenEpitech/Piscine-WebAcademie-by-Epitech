<?php
function get_execution_time()
{
  $tps = microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'];
	return number_format($tps,7);
}