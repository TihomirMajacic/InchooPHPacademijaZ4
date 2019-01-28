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
        $this->id = SingletoneId::getInstance();
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

class SingletoneId
{
    protected static $id = 0;

    public static function getInstance()
    {
        if (!isset(self::$id)) {
            self::$id = new self();
        }
        self::$id++;
        return self::$id;
    }

}