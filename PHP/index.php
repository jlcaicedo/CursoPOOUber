<?php

require_once 'Account.php';
require_once 'Car.php';

$car = new Car("L123", new Account("Peter", "ANDA876"));

echo "<pre>";
var_dump( $car->License() );
var_dump( $car->Driver() );

?>
