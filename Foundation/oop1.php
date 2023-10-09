<?php
class Human{
    public $name;
    public $age;
    public function __construct($personName, $personAge = 0){
        $this->name = $personName;
        $this->age = $personAge;
    }
    public function sayName(){
        if($this->age){
            echo "My name is {$this->name}. I am {$this->age} years old.\n";
        }else{
            echo "My name is {$this->name}. I don't know how old I am.";
        }
            
        
    }
}

$h1 = new Human('Md. Himel Ali' , 25);
$h2 = new Human("Marufa Yasmin");
$h1->sayName();
$h2->sayName();