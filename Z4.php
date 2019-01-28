<?php

include_once 'Zaposlenik.php';


$zaposlenici [] = array();

$unos = 0;

for (; ;) {
    echo "
    1. Pregled Zaposlenika\n
    2. Unos novog Zaposlenika\n
    3. Promjena podataka postojećem zaposleniku\n
    4. Brisanje Zaposlenika\n
    5. Statistika\n
    ";
    echo 'Unesi 1-5: ';
    $unos = readline();

    switch ($unos) {
        case 1;
            echo '';
            break;

        case 2;
            echo '';
            break;

        case 3;
            echo '';
            break;

        case 4;
            echo '';
            break;

        case 5;
            echo '';
            break;


    }
}
