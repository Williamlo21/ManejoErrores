<?php

class Dividir{
    public $dividendo;
    public $divisor;

    public function __construct()
    {
        
    }
    

    public function getDividendo()
    {
        return $this->dividendo;
    }

    public function setDividendo($dividendo)
    {
        $this->dividendo = $dividendo;

        return $this;
    }

    public function getDivisor()
    {
        return $this->divisor;
    }

    public function setDivisor($divisor)
    {
        $this->divisor = $divisor;

        return $this;
    }
    public function calcular(){
        $dividendo= $this->dividendo;
        $divisor= $this->divisor;

        $resultado = $dividendo/$divisor;

        return $resultado;
    }
}