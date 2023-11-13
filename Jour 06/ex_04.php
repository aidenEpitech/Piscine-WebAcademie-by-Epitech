<?php
function display_xml_nodes($xmlstr, $node){
    $xml = simplexml_load_file($xmlstr);
    if ($xml){
        foreach ($xml ->children()as $n) {
            echo $n->$node."\n";
        }
        return true;
    }else {
        return false;
    }
}