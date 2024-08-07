<!-- trait cirle,radius , color prv ... , get,set radius ,get , set color, get area , tostring  -->
<?php

trait Circle{
    private float $radius=1.0;
private $color="red";

function setCirc($color,$radius){
    $this->color=$color;
    $this->radius=$radius;
}

function getRadius(){
    return $this->radius;
}
function setRadius($radius):void{
    $this->radius=$radius;
}
function getColor(){
    return $this->color;
}
function setColor($color):void{
    $this->color=$color;
}
function getArea(){
    return 3.14* $this->radius*$this->radius; 
}
function __toString(){
    return "the Circle Color". $this->color . "cirle radius" . $this->radius ;
}
}


class cylidner {
    use Circle;
    private $height;

    function __construct($height,$radius,$color){
    $this->height=$height;
    $this->setCirc($color,$radius);

}
  function getHeight(){
    return $this->height->height;
  }
  function setHeight($height):void{
    $this->height=$height;
}
function getVolume():float{
    return $this->getArea()* $this->height;
}
function __toString():string{
    return "The Circle Color is " . $this->getColor() . " and the circle radius is " . $this->getRadius() . " and the cylinder height is " . $this->height . PHP_EOL;
    }
}



$cylinder1=new cylidner(5,2,"blue");
echo $cylinder1->__toString() . PHP_EOL;


?>

