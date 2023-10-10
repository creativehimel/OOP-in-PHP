<?php
class ServiceProvider{
    private $providerName;
    private $contactPerson;
    private $contactNumber;
    public function __construct($provider, $contact, $number){
        $this->providerName = $provider;
        $this->contactPerson = $contact;
        $this->contactNumber = $number;
    }
    public function showProviderInfo(){
        echo "Provider Name: " . $this->providerName . "\n";
        echo "Contact Person: " . $this->contactPerson . "\n";
        echo "Contact Number: " . $this->contactNumber . "\n";
    }
}

$p1 = new ServiceProvider("ABC Company", "John Doe", "123-456-7890");
$p2 = new ServiceProvider("XYZ Company", "Jane Doe", "987-654-3210");
$p3 = new ServiceProvider("PQR Company", "Tom Smith", "456-789-0123");

$serviceProviders = [
    ["packageNo"=>1, "provider"=>$p1],
    ["packageNo"=>2, "provider"=>$p2],
    ["packageNo"=>3, "provider"=>$p3]
];

foreach($serviceProviders as $sp){
    echo "Provider: ";
    echo "\nPackage No: #" . $sp["packageNo"] . "\n";
    $sp["provider"]->showProviderInfo();
    echo "\n";
}