<?php
function my_add_to_cookie(string $key, string $value){
    $value = $value . "toto";
    setcookie($key, $value);
}