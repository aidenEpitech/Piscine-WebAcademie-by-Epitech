<?php
function calc($type, $nb1, $nb2){
    switch($type)
    {
        case '+':
        return $nb1 + $nb2;
        break;

        case '-':
        return $nb1 - $nb2;
        break;

        case '%':
        return $nb1 % $nb2;
        break;

        case '*':
        return $nb1 * $nb2;
        break;

        case '/':
        return $nb1 / $nb2;
        break;
    }
}
?>