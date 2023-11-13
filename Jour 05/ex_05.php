<?php
function my_add_to_session(string $key, string $value){
    $value = $value . "titi";
    $_SESSION[$key] = $value;
}