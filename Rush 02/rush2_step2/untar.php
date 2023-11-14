
<?php
$files = array_slice($argv, 1); // Récupérer les fichiers à décompresser à partir des arguments en ligne de commande

foreach ($files as $file) {
    $gzdata = file_get_contents($file);
    $data = gzdecode($gzdata, 0); // Décompresser les données
    file_put_contents(str_replace('.mytar', '', $file), $data); // Ecrire les données dans un fichier du même nom en retirant le .mytar
}
