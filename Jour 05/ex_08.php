<?php
function helix_post_finder(){
    if (isset($_POST['phelix']))
    {
        return $_POST['phelix'];
    }
    else{
        return null;
    }
}