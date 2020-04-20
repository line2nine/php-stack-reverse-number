<?php
include "class/ReverseNumber.php";

$reverse = new ReverseNumber();
$stackReverse = [];

$reverse->push(1);
$reverse->push(3);
$reverse->push(5);

for ($i = 0; $i <= $reverse->isFull(); $i++) {
    $arrReverse = array_push($stackReverse, $reverse->pop());
}

var_dump($stackReverse);