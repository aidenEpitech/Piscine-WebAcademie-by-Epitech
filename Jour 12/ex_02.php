<?php
function cesar2(string $jsp){
    $jsp = strtolower("$jsp");
    $jsp = strtr($jsp, 'abcdefghijklmnopqrstuvwxyz', 'cdefghijklmnopqrstuvwxyzab' );
    echo $jsp . "\n";
}