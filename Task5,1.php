<!-- class named author , var name,email,gender,author constructor, getname,getemail,setemail,get gender,to string -->
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


$TestAuthor= new Author("Ahmed","Ahmedftw@gmail.com","M");
print_r( $TestAuthor->toString() ) .PHP_EOL;
$TestAuthor->setEmail("Mustafaftw@gmail.com");
print_r( $TestAuthor->toString() );
$TestAuthor->getName();
echo "". $TestAuthor->getName() ;
?>
     