<?php
class Consultant{
    private $name;
    private $role;
    public function __construct($name, $role){
        $this->name = $name;
        $this->role = $role;
    }
    public function setConsultant($name, $role){
        $this->name = $name;
        $this->role = $role;
    }
    public function showConsultant(){
        echo "Consultant: " . $this->name."\n";
        echo "Role: " . $this->role . "\n";
    }
}

$p1 = new Consultant("Niton", "PHP Developer");
$p2 = $p1;
$p1->showConsultant();
$p2->showConsultant();
$p2->setConsultant("Hasan", "Vue js Developer");
$p1->showConsultant();
$p2->showConsultant();