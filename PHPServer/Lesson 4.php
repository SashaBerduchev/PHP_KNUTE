<?php
require 'connection.php';


$name =  $_POST['name'];
$index = $_POST['index'];
$data = $_POST['data'];
$cost = $_POST['cost'];
$last_cost = $_POST['last_cost'];

$insert_sql =  "INSERT INTO class_data (name, index, data, cost, last_cost)" .
    "VALUES ('{$name}', '{$index}', '{$data}', '{$cost}', '{$last_cost}');";
// Вставка даних про користувача у БД
mssql_query($conn, $insert_sql)
or die(mssql_query($conn));
header("Location: show_user.php?user_id=" . mysqli_insert_id($link));