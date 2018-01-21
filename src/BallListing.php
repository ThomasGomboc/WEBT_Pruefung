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

    public function getListMaterial()
    {
        return $this->balllist->material;
    }

    public function __construct(Ball $ball1, Ball $ball2, Ball $ball3)
    {
        $this->balllist[] = $ball1 . $ball2 . $ball3;
    }

    public function __toString()
    {
        /* Hat leider nicht funktioniert
        if (isset ($_GET['material'])) {
            $balllistspezial = [];
            foreach ($this->balllist as $ball) {
                if (($_GET['material']) == $ball->getMaterial()) {
                    $balllistspezial = $ball;
                }
            }
            foreach ($balllistspezial as $ball) {

                if(isset ($_GET['format'])){
                    if($_GET['format'] = 'html') {
                        echo($ball);
                    } elseif($_GET['format'] = 'json'){
                        json_encode($ball);
                        echo($ball);
                    }
                } else {
                    echo ('kein Format gegebwn');
                }
            }
        } else { */
        foreach ($this->balllist as $auszugebenderBall) {

            echo $auszugebenderBall;    //Einfügen eines zeilenumbruchs nicht möglich.

        }
        return 'Alle Elemente der Ball liste wurden ausgegeben' . "<br>";
    }

}