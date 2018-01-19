<?php
/**
 * Created by PhpStorm.
 * User: Thomas Gomboc
 * Date: 01.01.2018
 * Time: 16:59
 */

require_once 'vendor/autoload.php';

use ballnamespace\American_Football;
use ballnamespace\Basketball;
use ballnamespace\Fussball;
use ballnamespace\Volleyball;

$MyFussball = new Fussball('WM Ball', 4, 'Leder', 'Hexagons');

echo $MyFussball->getName()."<br>"; // br für neue Zeile

$myBallcollection[] = new Basketball('Champion Basketball', 7, 'Kunstleder', 'Puma');
$myBallcollection[] = new American_Football('Super Bowl Ball 2009', 2, 'Kuh Leder', 3);
$myBallcollection[] = new VolleyBall('Alter VolleyBall', 5, 'weiches Kunstleder', 0.5);

foreach($myBallcollection as $ball){
    echo $ball."<br>";
}

echo "<br>"."<br>"."html oder json?"."<br>";

echo isset($_GET['format']) ? $_GET['format'] : "no format given";
//echo $_GET['name'];

function renderHTML(ballnamespace\Ball $ball): string
{
    return $ball;
}

function renderJSON(ballnamespace\Ball $ball): string
{
    json_encode($ball);
    return '{ "name":'.$ball->getName().',"durchmesser":"'.$ball->getDurchmesser().' "material":'.$ball->getMaterial().'}';
}

if (isset($_GET['format'])) {
    if ($_GET['format'] == 'html') {
        echo renderHTML($MyFussball);
    }

    if ($_GET['format'] == 'json') {
        echo renderJSON($MyFussball);
    }

    if ($_GET['format'] != 'json' && $_GET['format'] != 'html') {
        echo 'no format given';
    }
}