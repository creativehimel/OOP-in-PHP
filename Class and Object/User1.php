<?php
class User1{
    private $id;
    private $name;
    private $email;
    
    public function __construct($id, $name, $email){
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }

    public function showUserInfo(){
        echo "ID: " . $this->id . "\n";
        echo "Name: " . $this->name . "\n";
        echo "Email: " . $this->email . "\n \n";
    }
}

$tableData = [
    [1, "John", "k8bqA@example.com"],
    [2, "Mary", "xhv2h@example.com"],
    [3, "Tom", "ktomk@example.com"]
];

foreach($tableData as $td){
   $id = $td[0];
   $name = $td[1];
   $email = $td[2];
   $users = new User1($id, $name, $email);
    $users->showUserInfo();
}