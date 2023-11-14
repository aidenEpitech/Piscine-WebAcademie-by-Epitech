<?php
function resum_join_str($str1 = false, $str2 = false)
{
	$VerifLongueur = strlen($str1);
	$VerifLongueur2 = strlen($str2);
	if ($VerifLongueur < 14 && $VerifLongueur2 > 3) {
		$count = 14 - $VerifLongueur;
		return substr($str1, 0, 14) . str_repeat(".", $count) . substr($str2, -3,);
	} if ($VerifLongueur > 14 && $VerifLongueur2 < 3) {
		$count = 3 - $VerifLongueur2;
		return substr($str1, 0, 14) . str_repeat(".", $count) . substr($str2, -3,);
	} if ($VerifLongueur + $VerifLongueur2 < 17) {
		$count = 17 - $VerifLongueur - $VerifLongueur2;
		return substr($str1, 0, 14) . str_repeat(".", $count) . substr($str2, -3,);
	} else {
		return substr($str1, 0, 14) . substr($str2, -3,);
	}
}
