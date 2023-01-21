<?php
include_once "Coche.php";
//extends coche; antes de un extends require "coche.php"
class CocheDeportivo{
    private $cv;
    private $velMax;

    public function getCv()
    {
        return $this->cv;
    }

    public function setCv($cv): void
    {
        $this->cv = $cv;
    }

    public function getVelMax()
    {
        return $this->velMax;
    }


    public function setVelMax($velMax): void
    {
        $this->velMax = $velMax;
    }



    public function __construct($m,$c,$pl,$pe,$l,$r,$cv,$vel)
    {
        parent::__construct($m,$c,$pl,$pe,$l,$r);
        $this->cv=$cv;
        $this->velMax=$vel;
    }


}
