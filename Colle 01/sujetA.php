<?php
function colle($x, $y) {
    $top = $x > 1 ? "o" . str_repeat("-", $x - 2) . "o" : "o";
    $middle = $x > 1 ? "|" . str_repeat(" ", $x - 2) . "|" : "|";
    $bottom = $top;
    echo $y > 1 ? $top . "\n" . str_repeat($middle . "\n", $y - 2) . $bottom : $top;
}

colle(5,5);