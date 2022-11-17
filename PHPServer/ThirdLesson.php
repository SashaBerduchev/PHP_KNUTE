<?php

$index =  $_POST['index'];
$street = $_POST['street'];
$city = $_POST['Cities'];
$house = $_POST['house'];
$flat = $_POST['flat'];
$selvalue = $city;
if($index == '' || $street == '' || $city == '' || $house == '' || $flat == ''){
    alert("Fields are not filled");
    return;
}else if(preg_match("/^\d+$/", $index)==false){
    alert('Index not number');
    return;
}else if(preg_match("/^\d+$/", $flat)== false){
    alert('Flat not number');
    return;
}else if(preg_match("/^\w/", $street)==false){
    echo "Street must be a string";
    return;
}else{
    $addres = $selvalue + ', ' + $street + ', ' + $house + ', ' + $flat + ', ' + $index;
        echo $addres;
    }