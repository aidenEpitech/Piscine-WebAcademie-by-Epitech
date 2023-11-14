<?php
function resum_join_str($str1 = false, $str2 = false){
     if (!is_string($str1) || !is_string($str2) || !isset($str1) || !isset($str2)){
          return false;
     }
    $VerifLongueur = strlen($str1);
    $VerifLongueur2 = strlen($str2);
   if ($VerifLongueur < 12 && $VerifLongueur2 > 8){ // Si $str1 est plus petit que 12
        $count = 12 - $VerifLongueur;
        return substr($str1, 0, 12) . str_repeat(".", $count) . substr($str2, -8,);
   }if ($VerifLongueur > 12 && $VerifLongueur2 < 8){ // Si $str2 est plus petit que 8
        $count = 8 - $VerifLongueur2;
        return substr($str1, 0, 12) . str_repeat(".", $count) . substr($str2, -8,);
   }if ($VerifLongueur + $VerifLongueur2 < 20){ // Si $str 1 et $str2 est plus petit que 20
        $count = 20 - $VerifLongueur - $VerifLongueur2;
        return substr($str1, 0, 12) . str_repeat(".", $count) . substr($str2, -8,);
   }else{  // Si $str1 est supérieur à 12 && $str2 est supérieur a 8
        return substr($str1, 0, 12) . substr($str2, -8,);
   }
}