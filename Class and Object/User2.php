<?php
class User2{
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

// read table data and create object array

function readUserFromDatabase(&$users){
    $tableData = [
        [1, "John", "k8bqA@example.com"],
        [2, "Mary", "xhv2h@example.com"],
        [3, "Tom", "ktomk@example.com"]
    ];
    foreach($tableData as $td){
        $id = $td[0];
        $name = $td[1];
        $email = $td[2];
        $users[] = new User2($id, $name, $email);
    }
}

// Create empty array
$users = [];

// pass array as reference
readUserFromDatabase($users);
$i =1;
foreach($users as $user){
    echo "User #" . $i. " \n";
    $user->showUserInfo();
    $i++;
}