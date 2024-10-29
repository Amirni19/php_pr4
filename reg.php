<?
session_start();
include('db/db.php');
if(isset($_POST['reg'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $flag = 'true';
    $error = ['<p style="color: red;">Пустое значение</p>',
'<p style="color: red;">Некорректная почта</p>', '<p style="color: red;">Пароль должен быть не меньше 6 знаков</p>',
];
}
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

    <h4>LOGIN-UP</h4>
    <div class="logiin section">
    <form action="" method="POST" name="reg">
    <div class="login section">
            <div class="input">
                <label for="Name">Name*</label>
                <input type="text" name="name" placeholder="Add name">
            </div><br>
            <? if(isset($_POST['reg'])){
                if(empty($name)){
                    echo $error[0];
                    $flag = 'false';
                }
            } ?>
            <div class="input">
                <label for="Email">Email*</label>
                <input type="email" name="email" placeholder="Add email">
            </div><br>
            <? if(isset($_POST['reg'])){
                if(empty($email)){
                    echo $error[0];
                    $flag = 'false';
                }
                elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    echo $error[1];
                    $flag = 'false';
                }
            } ?>
            <div class="input">
                <label for="password">password*</label>
                <input type="password" name="password" placeholder="Add password">
            </div>
            <? if(isset($_POST['reg'])){
                if(empty($password)){
                    echo $error[0];
                    $flag = 'false';
                }
                elseif(strlen($password) < 6){
                    echo $error[2];
                    $flag = 'false';
                }
            } ?>
            <input class="btn" type="submit" name="reg" placeholder="login">
        </div>
    </form> 
    <? 
            if(isset($_POST['reg'])){
                if($flag != 'false'){
                    $password = password_hash($password, PASSWORD_DEFAULT);
                    $sql = "INSERT INTO `user` (`name`,`email`,`password`,`role`) VALUES ('$name','$email','$password', '1')";
                    $res = $connect->query($sql);
                    echo '<script>document.location.href="../ind.php?page=login"</script>';
                }
            }
            ?>   
    <br>
        <a class="let" href="login.php">Nave account? Let login!</a>
    </div>
</body>
</html>