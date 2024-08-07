<?php

class Author{

    private  $name;
    private  $email;
    private  $gender;

     function __construct( $n, $e, $g) {
        $this->name = $n;
        $this->email = $e;
        $this->gender = $g;

}
function getName() {
    return $this->name;

}
function getEmail() {
    return $this->email;
}
function setEmail($newE){
    $this->email=$newE ;
}
function getGender() {

    return $this->gender;

}
function toString() {
    return "Author=[name=\"" . $this->name . "\", Email=\"" . $this->email . "\", Gender=\"" . $this->gender . "\"]";
}
function print_r(){
    echo "". $this->toString() . PHP_EOL;
}


}

class Book{
    private $isbn;
    private $name;
    private $author=[];
    private int $quantity=0;
    private  $price;

    function __construct($isbn ,$n, $qty=0,$prc){
        $this->isbn=$isbn;
        $this->name = $n;
        $this->quantity = $qty;
        $this->price = $prc;

        
    }
    function addAuthor(Author $auth){
        $this->author[] = $auth;
    }
    
    function getIsbn(){
        return $this->isbn;
    }
function getName(){
    return $this->name;
}
function getAuthor(){
    return $this->author;

    
}
function getPrice(){
    return $this->price;
    }

function setPrice($price){
    if(is_numeric($price)&&$price>= 0){
        $this->price=$price;
    }else{
            echo"enter a numeric value". PHP_EOL;
        }
    $this->price = $price;

}
function getQuantity():int{
    return $this-> quantity;
}
function __tostring(){
    $authorDetails = array_map(function($author) {
        return $author->toString();
    }, $this->author);

    return "Book=[ Isbn ="  . $this->isbn . "   name=\"" . $this->name . "\", Authors=[" . implode(", ", $authorDetails) . "], Price=" . $this->price . ", Quantity=" . $this->quantity . "]";;
}



}
$author1=new Author("Mohamed","Mohamed@gamil.com","25");
$author2=new Author("yasser","yass@gamil.com","30");


 $TestBook1= new Book(10,"alf leila w leilha",50,200);
 $TestBook2= new Book(15,"alf leila",10,500);

$TestBook1->addAuthor($author1);
$TestBook2->addAuthor($author2);

echo $TestBook1->__toString() ."".PHP_EOL . "<br>";
echo $TestBook2->__toString() ."";

?>
     