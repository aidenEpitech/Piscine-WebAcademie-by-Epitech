<?php
function rotone(string $jsp){
    $jsp = strtolower("$jsp");
    $jsp = strtr($jsp, 'abcdefghijklmnopqrstuvwxyz', 'bcdefghijklmnopqrstuvwxyza' );
    echo $jsp . "\n";
}