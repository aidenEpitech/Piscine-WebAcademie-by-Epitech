<?
function print_film_from_nb(int $nbr){
    switch ($nbr) {
        case 3:
            echo "Les trois freres\n";
            break;
        case 6:
            echo "Sixieme sens\n";
            break;
        case 0:
            echo "l'homme invisible\n";
            break;
        case 23:
            echo "Le nombre 23\n";
            break;
        case 28:
            echo "28 jours plus tard\n";
            break;
        default:
            echo "Je ne connais pas.\n";
    }
}