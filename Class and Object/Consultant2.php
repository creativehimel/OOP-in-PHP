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
$data[] = new ConsultantObj("Niton", "PHP Developer");
$data[] = new ConsultantObj("Hasan", "Vue js Developer");
$data[] = new ConsultantObj("Sindbad", "Java Developer");
$data[] = new ConsultantObj("Hatim", "Angular Developer");
$i = 1;
foreach($data as $r){
    echo "\nRole #". $i . "\n";
    $r->showConsultant();
    $i++;
}
?>