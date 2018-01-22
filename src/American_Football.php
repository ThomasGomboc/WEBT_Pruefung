<?php
/**
 * Created by PhpStorm.
 * User: Thomas Gomboc
 * Date: 10.01.2018
 * Time: 20:15
 */

namespace ballnamespace;


class American_Football extends Ball implements Ball_Interface
{
    private $hight;

    public function __construct($name, $durchmesser, $material, $hight, $farbe)
    {
        parent::__construct($name, $durchmesser, $material, $farbe);
        $this->hight=$hight;
    }


    /**
     * @return float Formel des Ellipsoids = 4/3 * pi * a*b*c , Weil b und c sind gleich groß.
     */

    public function getVolumen() : float{
        $volumen = round(4/3 * pi() * $this->getDurchmesser() * $this->hight * $this->hight, 3); // Auf 3 Nachkommastellen gerunded
        return $volumen;
    }

    public function __toString()
    {
        return $this->getName().' mit dem Material '.$this->getMaterial().' und einem Volumen von '.$this->getVolumen()."<br>";
    }
}