<?php
include_once "Point.php";

class MovePoint extends Point
{
    public $xSpeed;
    public $ySpeed;
    public $arrayXYSpeed = [];

    public function __construct($x, $y, $xSpeed, $ySpeed)
    {
        parent::__construct($x, $y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    public function getXSpeed()
    {
        return $this->xSpeed;
    }

    public function setXSpeed($xSpeed)
    {
        $this->xSpeed = $xSpeed;
    }

    public function getYSpeed()
    {
        return $this->ySpeed;
    }

    public function setYSpeed($ySpeed)
    {
        $this->ySpeed = $ySpeed;
    }

    public function setSpeed($xSpeed, $ySpeed)
    {
        array_push($this->arrayXYSpeed, $xSpeed, $ySpeed);
    }

    public function getSpeed()
    {
        // Converter array to string (Chuyển đổi mảng thành chuỗi)
        return implode(",", $this->arrayXYSpeed);
    }

    public function toString()
    {
        $this->setXY($this->getX(), $this->getY());
        $this->getXY();
        echo "Moveable Point: " . "<br>";
        parent::toString();
        echo "<br>";

        echo "Moveable speed: ".$this->getSpeed() ."<br>";
        echo "($this->y,$this->y),speed = ($this->xSpeed,$this->ySpeed)";
    }
    public function move(){
        $this->x += $this->xSpeed;
        $this->y += $this->ySpeed;
        return [$this->x,$this->y];
    }
}