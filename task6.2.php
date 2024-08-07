<?php
interface Shape{

    function getColor(): string;
    function setColor(string $color):void;
function isFilled():bool;
function setFilled(bool $filled):void;

}
class Circlee implements Shape{
    private float $radius=1.0;
    private $color;
    private $filled;

function __construct($color,$radius,$filled){
    $this->color=$color;
    $this->radius=$radius;
    $this->filled=$filled;
}

function getRadius(){
    return $this->radius;
}
function setRadius($radius):void{
    $this->radius=$radius;
}
function getColor():string{
    return $this->color;
}
function setColor($color):void{
    $this->color=$color;
}
function isFilled():bool{
    return $this->filled;
}
function setFilled(bool $filled):void{
    $this->filled=$filled;
    }
function getArea(){
    return 3.14* $this->radius*$this->radius; 
}
function getPerimeters(){
    return 2*3.14*$this->radius;
}
function __toString():string{
    return "Circle  [Color = ". $this->getColor() .  " is filled : " . ($this->isFilled() ? "Yes" : "No")."". " it's radius = ". $this->radius . "]"  ;
}

}

class Rectangle implements Shape{
    private float $length;
    private float $width;
    private $color;
    private $filled;
function __construct($length,$width,$color,$filled){
    $this->length=$length;
    $this->width=$width;
    $this->color=$color;
    $this->filled=$filled;

}
    function getColor():string{
        return $this->color;
    }
    function setColor($color):void{
        $this->color=$color;
    }
    function isFilled():bool{
        return $this->filled;
    }
    function setFilled(bool $filled):void{
        $this->filled=$filled;
        }
function getLength():float{
    return $this->length;

}
function setLength(int $length):void{
    $this->length=$length;
}
function getWidth(){
    return $this->width;
}
function setWidth($width):void{
$this->width=$width;
}
function getArea(){
 return  $this->length*$this->width;

}
function getPerimeter(){
    return 2*($this->length*$this->width);
}
function __toString():string{
    return "Rectangle = [ Color = ". $this->getColor() .  ", is filled :" . ($this->isFilled() ? "Yes" : "No") ."". " it's area = ". $this->getArea() . " it's Perimeter = " . $this->getPerimeter() ."]" ;

}
}

class Square extends Rectangle{

private $side;

    function __construct($side,$color, bool $filled){
        parent::__construct($side,$side,$color,$filled);
    
    }
    function getSide(){
        return $this->getLength();
    }
    function setSide($side){
        $this->setLength($side);
        $this->setWidth($side);
          
        }
        function __toString(): string{
    
            return "Square [Color: " . $this->getColor() . ", Filled: " . ($this->isFilled() ? "Yes" : "No") . ", Side: " . $this->getSide() . "]";
        }

    
}
$circ= new Circlee("black",true,50);
echo $circ->__toString() . "<br>";

$rect=new Rectangle(20,40,"red",false);
echo $rect->__toString() . "<br>";
$s=new Square(20,"blue",true);
echo $s->__toString() ."".PHP_EOL . "<br>";

?>