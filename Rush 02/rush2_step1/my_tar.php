<?php
function test($argc, $argv)
{
    // Mise en place du scan récursif
    unset($argv[0]);
    foreach($argv as $key => $value){
        if(is_dir($value)) { // Si dossier scanner en récursif
            scan($value, $deep=0);
        }else if(is_file($value)) {
        }
    }
    createArchive();
}
$arraypath = [];
$archiveName = "output.mytar";
function scan($dir, $deep = 0)
{
    // SCAN RÉCURSIF (Deep = profondeur)
    global $arraypath;
    $list = scandir($dir);
    $list = array_diff($list, array(".", "..")); // Censé enlever les valeurs commencant par "." et ".."
    foreach($list as $sub_dir_file) {
        array_push($arraypath, $dir . "/" . $sub_dir_file); // Pousser TOUS les chemins (PATH) des dossiers et fichiers dans un array
        if(is_dir($dir . "/" . $sub_dir_file)) {
            scan($dir . "/" . $sub_dir_file, $deep + 1);
        }
    }
}


function createArchive()
{
    // CREATION DU FICHIER TAR
    global $archiveName;
    fopen($archiveName, 'w+'); // OUVRIR LE FICHIER EN W+ = Lecture et ecriture , si il n'existe pas il sera créé
    getcontent();
}
$arraycontent = []; // Initialisation du array qui aura le contenu des fichiers
function getcontent()
{
    global $arraypath;
    global $arraycontent;
    foreach($arraypath as $key => $value){
        $last = strripos($value, "/"); // Avoir la position du dernier "/"
        if(substr($value, $last+1, 1) == ".") { // Checker si le charactere suivant le dernier Slash est un "." afin de le négliger
        } else {
            if(is_file($value)) {
                $content = file_get_contents($value);
                $arraycontent[$value] = $content; // push dans l'array avec comme key le path et comme valeur le contenu du fichier
            }
        }
    }
    putcontent();
}
function putcontent()
{
    global $arraycontent;
    global $archiveName;
    global $content;
    $new = "";
    foreach($arraycontent as $key => $value){ // Concatenation d'une str contenant un séparateur entre chaque content
        $new .= $value . PHP_EOL;
        $new .= "----------------------------------------------------------------------------------------------------" . PHP_EOL;
    }
    file_put_contents($archiveName, utf8_encode(($new))); // Put dans le TAR de la str conteannt le contenu de chaque fichier

}
test($argc, $argv);

$data = file_get_contents("output.mytar");
$gzdata = gzencode($data, 9);
file_put_contents("output.mytar", $gzdata);