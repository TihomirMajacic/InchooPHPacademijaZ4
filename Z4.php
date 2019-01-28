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
            for (; ;) {
                echo "
                1. Ukupna starost\n
                2. Prosječna starost\n
                3. Ukupna primanja\n
                4. Prosječna primanja\n
                ";
                echo 'Unesi 1-4: ';
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

                       default;
                       echo 'Pogrešan unos';
                       break;
                }


            }
            break;
        default:
            echo 'Pogrešan unos';

    }
}
