<?php

$host = 'db';
$db = 'db';
$user = 'root';
$pass = 'secret';

try {
    $pdo = new PDO("mysql:host=$host; dbname=$db", $user, $pass);

} catch (PDOException $e) {
    echo 'Ошибка соединения с базой данных' .$e->getMessage();       
}
