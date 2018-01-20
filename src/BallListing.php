<?php
/**
 * Created by PhpStorm.
 * User: Thomas Gomboc
 * Date: 19.01.2018
 * Time: 09:50
 */

namespace ballnamespace;


class BallListing
{
    private $balllist;

    public function __construct(Ball $ball1, Ball $ball2, Ball $ball3)
    {
        $this->balllist[] = $ball1.$ball2.$ball3;
    }

    public function __toString()
    {
        foreach($this->balllist as $auszugebenderBall){

            echo $auszugebenderBall;    //Einfügen eines zeilenumbruchs nicht möglich.

        }
        return 'Alle Elemente der Ball liste wurden ausgegeben';
    }
}