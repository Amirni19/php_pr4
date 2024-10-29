<?
session_start();
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

    <h4>Adding product</h4>
    <div class="logiin section">
        <form action="add.php" enctype="multipart/form-data" name="add" method="POST">
        <div class="login section">
            <div class="input">
                <label for="Image">Image*</label>
                <input type="file" name="photo" placeholder="Add Image">
            </div><br>
            <div class="input">
                <label for="Nmae">Name*</label>
                <input type="text" name="name" placeholder="Add name">
            </div><br>
            <div class="input">
                <label for="comm">Comment*</label>
                <input type="text" name="comm" placeholder="Add comment">
            </div>
            <input class="btn" type="submit" placeholder="login">
        </div><br>
        </form>
    </div>
</body>
</html>