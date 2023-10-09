<?php
class User{
    private $name;
    public function __construct($name){
        $this->name = $name;
    }
    public function getName(){
        echo $this->name . "\n";
    }
    public function setName($name){
        $this->name = $name;
    }
}
$u1 = new User("Niton"); // create new object
$u2 = $u1; // assign to another veriable
$u1->setName("Hasan"); // set value for $u1
$n1= NULL;  // null to $u1
$u2->getName(); // $u2 still holding the object value
$u3 = new User("Hatim"); // create new object
$u4 = &$u3; // assign to another veriable
$u4->getName(); // $u4 still holding the object value
$u3->setName("Sindbad"); // set value for $u3
$u3-> NULL;
$u4->getName(); // $u4 still holding the object value