<?php

require_once "./vendor/autoload.php";

$cars= new \RandomCars\RandomCars();

print_r($cars->cars());

