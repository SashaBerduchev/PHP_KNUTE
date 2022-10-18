<?php
require '../connection/connection.php';

$user_id =  $_REQUEST['user_id'];
// Создание инструкции SELECT
$select_query = "SELECT * FROM users WHERE user_id = " . $user_id;
// Запуск запроса
$result = mssql_query($conn, $select_query);
if ($result) {
    $row = mssql_fetch_array($result);
    $first_name = $row['first_name'];
    $last_name = $row['last_name'];
    $email = $row['email'];
} else {
    die("Ошибка обнаружения пользователя с ID {$user_id}");
}
?>

<html>
<head>
</head>
<body>
<h1><?php echo "{$first_name} {$last_name}"; ?></h1>
Поддерживайте связь с <?php echo $first_name; ?>:
<a href="<?php echo $email; ?>">по электронной почте</a>
</body>
</html>
