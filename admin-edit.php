<?
session_start();
include('db/db.php');
global $connect; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sty.css">
    <title>Document</title>
</head>
<body>
<? include('component/header.php'); ?>

<?php
     $product_id = $_GET['id'];
     $sql = "SELECT * FROM `tovar` WHERE id = '$product_id'";
     $query = $connect->query($sql);
     $tovar = $query->fetch(PDO::FETCH_ASSOC);
?>

    <h4>Editting product</h4>
    <div class="logiin section">
        <form action="add1.php" method="POST">
        <div class="login section">
            <div class="input">
                <label for="Image">Image*</label>
                <input type="file" name="photo" placeholder="Add Image" value="<?=$tovar['photo']?>">
            </div><br>
            <div class="input">
                <label for="Nmae">Name*</label>
                <input type="text" name="name" placeholder="Add name" value="<?=$tovar['name']?>">
            </div><br>
            <div class="input">
                <label for="com">Comment*</label>
                <input type="text" name="comm" placeholder="Add password" value="<?=$tovar['comm']?>">
            </div>
            <div class="input">
                <input type="hidden" name="id" value="<?=$tovar['id']?>">
            </div>
            <input class="btn" type="submit" placeholder="login">
        </div><br>
        </form>
    </div>
</body>
</html>