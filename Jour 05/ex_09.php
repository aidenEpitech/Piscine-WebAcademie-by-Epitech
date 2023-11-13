<?php
function post_levenshtein_score(){
    if (isset($_POST['str_one'], $_POST['str_two']))
    {
        return levenshtein($_POST['str_one'], $_POST['str_two']);
    }
    else
    {
        return null;
    }
}