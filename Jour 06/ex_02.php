<?php
function my_cat_files()
{
    $getParam = func_get_args();
    $endParam = end($getParam);
    $countParam = count($getParam) - 1;
    for ($i=0; $i < $countParam ; $i++)
    {
        $shwFile = file_get_contents($getParam[$i]);
        $ret = $shwFile . "_____\n";
        return $ret;

    }
    $shwFile = file_get_contents($endParam);
    $ret2 = $shwFile . "\n";
    return $ret2;
}
?>