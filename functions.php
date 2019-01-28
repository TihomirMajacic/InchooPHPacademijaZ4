<?php
include_once 'Zaposlenik.php';
function unos()
{

    $zaposlenik = new Zaposlenik();
    $zaposlenik->ime = postaviString('ime');
    $zaposlenik->prezime = postaviString('prezime');
    $zaposlenik->datumRodenja = postaviDatum();
    $zaposlenik->spol = postaviSpol();
    $zaposlenik->setMjesecnaPrimanja(postaviDecimal());
    return $zaposlenik;

}


function postaviString($x)
{
    $str = null;
    for (; !(!preg_match('/[^A-Za-z]+/', $str) && strlen(trim($str)) !== 0);) {
        echo 'Unesite ', $x, ':';
        $str = readline();

    }
    $str = ucfirst(strtolower($str));
    return $str;
}


function postaviSpol()

{
    $str = null;
    for (; !($str === 'm' or $str === 'z');) {
        echo 'Unesite spol: ';
        $str = readline();
    }
    return $str;
}

function postaviDatum()
{
    $str = null;
    echo 'Unesite datum rodena: ';
    $str = readline();
    $datum = DateTime::createFromFormat('d. m. Y', $str);
    $errors = DateTime::getLastErrors();
    for (; $errors['error_count'] + $errors['warning_count'] > 0;) {
        echo 'Netocan datum, unesite ponovno: ';
        $str = readline();
        $datum = DateTime::createFromFormat('d. m. Y', $str);
        $errors = DateTime::getLastErrors();
    }
    return $datum;
}

function postaviDecimal()
{

    $str = null;
    for (; !preg_match('/^(0|[1-9]\d*)(\,\d+)?$/', $str);) {
        echo 'Unesi mjesecna primanja: ';
        $str = readline();

    }
    return $str;


}

function dohvatiSveZaposlenike($zaposlenici)
{
    foreach ($zaposlenici as $item) {
        echo 'id: ', $item->getId(), "\n";
        echo 'ime: ', $item->ime, "\n";
        echo 'prezime: ', $item->prezime, "\n";
        echo 'datum rodena: ', $item->datumRodenja->format('d. m. Y'), "\n";
        echo 'spol: ', $item->spol, "\n";
        echo 'mjesecna primanja: ', $item->getMjesecnaPrimanja(), "\n";
    }

}

