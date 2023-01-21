<?php
class Coche{
    static private $contador=0;
    private $matricula;
    public $color;
    public $plazas;
    public $peso;
    public $longitud;
    public $ruedas;

    public static function incrementar(){
        self::$contador++;
}

    public function __construct($m,$c,$pl,$pe,$l,$r)
    {

        $this->matricula=$m;
        $this->color=$c;
        $this->plazas=$pl;
        $this->peso=$pe;
        $this->longitud=$l;
        $this->ruedas=$r;
        self::incrementar();
    }

    public function getColor()
    {
        return $this->color;
    }


    public function getLongitud()
    {
        return $this->longitud;
    }

    public function getMatricula()
    {
        return $this->matricula;
    }


    public function getPeso()
    {
        return $this->peso;
    }


    public function getPlazas()
    {
        return $this->plazas;
    }


    public function getRuedas()
    {
        return $this->ruedas;
    }

    public function setColor($color): void
    {
        $this->color = $color;
    }


    public function setLongitud($longitud): void
    {
        $this->longitud = $longitud;
    }


    public function setMatricula($matricula): void
    {
        $this->matricula = $matricula;
    }


    public function setPeso($peso): void
    {
        $this->peso = $peso;
    }


    public function setPlazas($plazas): void
    {
        $this->plazas = $plazas;
    }

    public function setRuedas($ruedas): void
    {
        $this->ruedas = $ruedas;
    }
}