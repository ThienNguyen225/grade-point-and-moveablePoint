<?php
include "Point.php";
include "MovePoint.php";
$point = new Point(5,5);
$point->setXY(20,30);
$point->toString();
echo "<hr>";
$moveablePoint = new MovePoint(50,40,5,5);
$moveablePoint->setSpeed(2, 2);
$moveablePoint->toString();
echo "<br>";
$moveablePoint->move();

