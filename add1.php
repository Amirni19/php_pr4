<?php

// Подключение к БД
include('db/db.php');
global $connect; 

$sql = "SELECT * FROM `tovar`";
$query=$connect->query($sql);
$products = $query->fetchAll(PDO::FETCH_ASSOC);

if(isset($_POST)) {

    // Получение данных
    
    $name = $_POST['name'];
    $comm = $_POST['comm'];
    $product_id = $_POST['id'];

    // Формирование запроса на обновление
    $sql = "UPDATE `tovar` SET `photo`='$file_path', `name`='$name',`comm`='$comm' WHERE id='$product_id'";
    // Выполнение запроса на обновление
    $query = $connect->query($sql);

    // Перенаправление пользователя на главную страницу
    header('Location: ../ind.php'.$product_id);
}