<?php
$first_name = trim($_REQUEST['first_name']);
$last_name = trim($_REQUEST['last_name']);
$email = trim($_REQUEST['email']);
require 'connection.php';
$insert_sql =  "INSERT INTO users (first_name, last_name, email)" .
    "VALUES ('{$first_name}', '{$last_name}', '{$email}');";
// Вставка даних про користувача у БД
mysqli_query($conn, $insert_sql)
or die(mysqli_error($conn));
header("Location: show_user.php?user_id=" . mysqli_insert_id($link));
?>
