<?php

$Name = $_POST["Name"];
$Cech = $_POST["Cech"];
$typecount = $_POST["typecount"];
$type = $_POST["type"];
$price = $_POST["price"];

$myArray = array('Name' => $Name, 'Cech' => $Cech, 'Typecount'=>$typecount, 'Type' => $type, 'price'=>$price);
$showArr=array();
array_push($showArr, $myArray);
print_r($showArr);

