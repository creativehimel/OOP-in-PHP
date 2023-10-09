<?php
class ConsultantObj{
    private $name;
    private $role;
    public function __construct($name, $role){
        $this->name = $name;
        $this->role = $role;
    }
    public function showConsultant(){
        echo "Name: " . $this->name."\n";
        echo "Role: " . $this->role . "\n";
    }
}
$data = [];
$r1 = new ConsultantObj("Niton", "PHP Developer");
$data[] = $r1;
$r2 = new ConsultantObj("Hasan", "Vue js Developer");
$data[] = $r2;
$r3 = new ConsultantObj("Sindbad", "Java Developer");
$data[] = $r3;
$i = 1;
foreach($data as $r){
    echo "\nRole #". $i . "\n";
    $r->showConsultant();
    $i++;
}
?>