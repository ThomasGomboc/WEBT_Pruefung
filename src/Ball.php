<?php
/**
 * Created by PhpStorm.
 * User: Thomas Gomboc
 * Date: 01.01.2018
 * Time: 15:37
 */

namespace ballnamespace;


abstract class Ball
{
    private $name;
    private $durchmesser;
    private $material;

    /**
     * Ball constructor.
     * @param string $name
     * @param int $durchmesser
     * @param string $material
     */
    function __construct(string $name, int $durchmesser, string $material)
    {
        $this->name = $name;
        $this->durchmesser = $durchmesser;
        $this->material = $material;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int Gibt Durchmesser zurück, dieser wird beim Football benötigt.
     */
    public function getDurchmesser(){
        return $this->durchmesser;
    }

    public function getMaterial(){
        return $this->material;
    }

    public function __toString()
    {
        return $this->name.' mit dem Material '.$this->material."<br>";
    }
}
