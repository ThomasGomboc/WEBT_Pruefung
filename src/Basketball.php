<?php
/**
 * Created by PhpStorm.
 * User: Thomas Gomboc
 * Date: 01.01.2018
 * Time: 16:02
 */

namespace ballnamespace;


class Basketball extends Ball implements Ball_Interface
{
    private $marke;

    public function __construct($name, $durchmesser, $material, $marke, $farbe)
    {
        parent::__construct($name, $durchmesser, $material, $farbe);
        $this->marke = $marke;
    }

    public function getVolumen() : float{
        $volume = round (pi() * pow($this->getDurchmesser(), 3) / 6, 3);
        return $volume;
    }

    public function __toString()
    {
        return $this->getName().' mit dem Material '.$this->getMaterial().' und einem Volumen von '.$this->getVolumen()."<br>";
    }
}