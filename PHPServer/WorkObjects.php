<?php

$Name = $_POST["Name"];
$Cech = $_POST["Cech"];
$typecount = $_POST["typecount"];
$type = $_POST["type"];
$price = $_POST["price"];
setResult($Name, $Cech, $typecount, $type, $price);

function setResult($name, $cech, $typecount, $type, $price){
    spl_autoload_register(function ($class_name) {
        include $class_name . '.php';
    });
    $objects = new \PHP_KNUTE\CollectionObjects();
    $objects->addElem($name, $cech, $typecount, $type, $price);

}

