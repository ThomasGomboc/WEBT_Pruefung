<?php
/**
 * Created by PhpStorm.
 * User: Thomas Gomboc
 * Date: 01.01.2018
 * Time: 16:06
 */

namespace ballnamespace;


class Volleyball extends Ball implements Ball_Interface
{
    private $gewicht;

    public function __construct($name, $durchmesser, $material, $gewicht, $farbe)
    {
        parent::__construct($name, $durchmesser, $material, $farbe);
        $this->gewicht = $gewicht;
    }

    public function getVolumen() : float{
        $volume = round(pi() * pow($this->getDurchmesser(), 3) / 6, 3);
        return $volume;
    }

    public function __toString()
    {
        return $this->getName().' mit dem Material '.$this->getMaterial().', er ist '.$this->gewicht.'kg schwer und hat ein Volumen von '.$this->getVolumen()."<br>";
    }
}