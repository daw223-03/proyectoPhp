<?php
include "Coche.php";
class CocheFamiliar{
    public $numPuertas;
    public $sillitaSofix;

    public function __construct($m,$c,$pl,$pe,$l,$r,$num,$sill)
    {
        parent::__construct($m,$c,$pl,$pe,$l,$r);
        $this->numPuertas=$num;
        $this->sillitaSofix=$sill;
    }

}