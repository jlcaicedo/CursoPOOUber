<?php
require_once 'Account.php';

class Car {
    public $id = integer;
    public $license = string;
    public $driver = string;
    public $passengers = integer;

    function __construct($license, Account $driver){
        $this->license = $license;
        $this->driver = $driver;
    }


    function printDataCar(){
        echo
        "License: ".$this->license.
        " Driver: ".$this->driver->name.
        " Document: ".$this->driver->document;
    }
}
?>