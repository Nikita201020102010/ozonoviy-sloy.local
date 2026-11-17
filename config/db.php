<?php
$host = 'MySQL-8.0';
$user = 'root';
$pass = ''; // Если не пустит, попробуйте указать 'root'
$db_name = 'shop_db';

$conn = mysqli_connect($host, $user, $pass, $db_name);

if (!$conn) {
    die("Ошибка подключения к БД: " . mysqli_connect_error());
}
mysqli_set_charset($conn, "utf8mb4");
?>