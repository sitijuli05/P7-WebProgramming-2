<?php

require "src/mobil/calculator.php";
require "src/mobil/mobil.php";
require "src/mobil/toyota.php";
require "src/mobil/honda.php";



$toyota = new Toyota("Toyota", 10); 
$honda = new Honda("Honda", 16);
$calculator = new Calculator();

echo "Jarak Maksimum ".$toyota->getMerk()." adalah ".$calculator->hitungJarak($toyota)."\n";
echo "Jarak Maksimum ".$honda->getMerk()." adalah ".$calculator->hitungJarak($honda)."\n";
