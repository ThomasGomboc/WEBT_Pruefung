<?php
/**
 * Created by PhpStorm.
 * User: Thomas Gomboc
 * Date: 01.01.2018
 * Time: 15:48
 */

namespace ballnamespace;


class Fussball extends Ball implements Ball_Interface
{
    private $ballmuster;

    public function __construct($name, $durchmesser, $material, $ballmuster)
    {
        parent::__construct($name, $durchmesser, $material);
        $this->ballmuster = $ballmuster;
    }
    public function getVolumen() : float{
        $volume = round(pi() * pow($this->getDurchmesser(), 3) / 6, 3);
        return $volume;
    }

    public function __toString()
    {
        return $this->getName().' mit dem Material '.$this->getMaterial().', dem Ballmuster '.' und einem Volumen von '.$this->getVolumen()."<br>";
    }

}