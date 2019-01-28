<?php

function unos()
{

    $zaposlenik = new Zaposlenik();
    $zaposlenik->ime = postaviString('ime');
    $zaposlenik->prezime = postaviString('prezime');
   // $zaposlenik->datumRodenja = postaviDatum();
    $zaposlenik->spol = postaviSpol();
   // $zaposlenik->setMjesecnaPrimanja(postaviDecimal());
    return $zaposlenik;

}


function postaviString($x)
{
    $str = null;
    for (;!(!preg_match('/[^A-Za-z]+/',$str) && strlen(trim($str))!==0);)
    {
        echo 'Unesite ', $x,':';
        $str = readline();

    }
    $str = ucfirst(strtolower($str));
    return $str;
}


function postaviSpol()

{
    $str = null;
    for (;!($str === 'm' or $str === 'z');)
    {
        echo 'Unesite spol: ';
        $str = readline();
    }
    return $str;
}