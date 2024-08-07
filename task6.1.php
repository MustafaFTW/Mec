<?php


abstract class person{
 private   string $name;
 private string $address;

 function __construct($name, $address){
    $this->name = $name;
    $this->address = $address;
 }
 public function getName(){
    return $this->name;
 }
 public function getAddress(){
    return $this->address;
 }
function setAddress($address){
    $this->address = $address;
}
abstract function __toString():string;



}
 class student extends person{
    private string $program;
    private int $year;
    private float $fee;

function __construct($name, $address,$program,$fee,$year){
parent::__construct($name,$address);
    $this->program = $program;
    $this->year = $year;
    $this->fee = $fee;


}
function getProgram(){  
    return $this->program;
}
function setProgram($program){
    $this->program = $program;
}
function getYear():int{
    return $this->year;
}
function setYear($year):void{
    $this->year = $year;
}
function getfee(){
    return $this->fee;
}
function setFee($fee){
    $this->fee = $fee;
}
function __toString():string{
return "Student Details are [". "Name :" . $this->getName() ." Address : ". $this->getAddress() . "] "  . PHP_EOL . " Program : ". $this->program . " Year : ". $this->year ." Price :  ". $this->fee;    

}


}

class staff extends person{

    private string $school;
    private float $pay;
    
    function __construct($name,$address, $school , $pay){
        parent::__construct($name,$address);
$this->school = $school;
    $this->pay = $pay;

}
function getschool(){
    return $this->school;
}
function setschool($school):void{
    $this->school = $school;

}
function getPay(){
    return $this->pay;
}
function setPay($pay):void{
    $this->pay = $pay;
}
function __toString(): string{
    return  "[Name : ". $this->getName() . " Address : ". $this->getAddress() . "]" . "  School :" . $this->school ." Amount =". $this->pay;
}
}
$stud=new student("Mustafa","Maadi","Dentistry",2000,2025.);
echo"". $stud->__toString() ."<br>";
$staff = new staff("Mahmoud","Maadi","Elfardous","2000");
echo"". $staff->__toString() ."";
?>