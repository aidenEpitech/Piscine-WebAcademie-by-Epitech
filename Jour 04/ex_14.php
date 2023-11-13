<?php
function goto_is_evil()
{
	$i = 0;	

	checkpoint:

	$i++;
    
	echo "wac\n";

	if ($i < 42)
	{
		goto checkpoint;
	}
}
?>
