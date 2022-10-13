<?php

$Name = $_POST["Name"];
$Cech = $_POST["Cech"];
$typecount = $_POST["typecount"];
$type = $_POST["type"];
$price = $_POST["price"];
setResult($Name, $Cech, $typecount, $type, $price);
include_once CollectionObjects::class;
function setResult($name, $cech, $typecount, $type, $price){
    $objects = new CollectionObjects;
    $objects->addElem($name, $cech, $typecount, $type, $price);

}

