<?php
include "Coche.php";
class CocheFurgoneta{
    public $capacidadCarga;

    public function __construct($m,$c,$pl,$pe,$l,$r,$cap)
    {
        parent::__construct($m,$c,$pl,$pe,$l,$r);
        $this->capacidadCarga=$cap;
    }

}