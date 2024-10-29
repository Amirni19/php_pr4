<?php

include('db/db.php');

$sql = "SELECT * FROM `tovar`";
    $query=$connect->query($sql);
    $products = $query->fetchAll(PDO::FETCH_ASSOC);
    $file_name = $_FILES['photo']['name'];
$file_path = '../images/' . $file_name;
move_uploaded_file($_FILES['photo']['tmp_name'], $file_path);
// $file_path1 = './media/' . $file_name;
    $id = $_POST['id'];
    
    $name = $_POST['name'];
    $comm = $_POST['comm'];
    $folder = "./images/" . $photo;

    $sql = "INSERT INTO `tovar` (`id`,`photo`,`name`,`comm`) VALUES (NULL,'$file_path','$name','$comm')";

    $query = $connect->query($sql);

header('Location: ../ind.php?page=index');
