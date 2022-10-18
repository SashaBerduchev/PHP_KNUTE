<?php


$serverName = "serverName\\BERDUCHEV"; //serverName\instanceName
$connectionInfo = array( "Database"=>"PHP_DB", "UID"=>"sa", "PWD"=>"123456");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
if (!$conn) {
    header("Location: show_error.php?" . " помилка з'єднання з базою даних");
    // die('Помилка з'єднання: ' . mysqli_error());
} else {
    echo " Успішно з'єдналися! ";
};
$query ="SELECT * FROM users";
$result = mysqli_query($conn, $query) or die("Ошибка " . mysqli_error($conn));
if ($result)
{
    echo $result;
    echo " Запит виконано успішно";
};
?>
