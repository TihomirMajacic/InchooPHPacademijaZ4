<?php



//Kreiranje klase zaposlenik
class Zaposlenik
{
    // kreiranje property - a
    private $id;
    public $ime;
    public $prezime;
    public $spol;
    public $datumRodenja;
    private $mjesecnaPrimanja;



    function __construct()
    {

    }
// Dodavanje metoda
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getMjesecnaPrimanja()
    {
        return $this->mjesecnaPrimanja;
    }

    /**
     * @param mixed $mjesecnaPrimanja
     */
    public function setMjesecnaPrimanja($mjesecnaPrimanja)
    {
        $this->mjesecnaPrimanja = $mjesecnaPrimanja;
    }

    public function getDob()
    {

    }
}