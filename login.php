<?
session_start();
include('db/db.php');
if(isset($_POST['login'])){
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

    <h4>LOGIN</h4>
    <div class="logiin section">
        <form action="" method="POST" name="login">
        <div class="login section">
            <div class="input">
                <label for="Email">Email*</label>
                <input type="email" name="email" placeholder="Add email">
            </div><br>
            <? if(isset($_POST['login'])){
                $sql = "SELECT * FROM `user` WHERE `email` = '$email'";
                $res = $connect->query($sql)->fetch(2);
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
            <? if(isset($_POST['login'])){
                if(empty($password)){
                    echo $error[0];
                    $flag = 'false';
                }
                elseif(strlen($password) < 6){
                    echo $error[2];
                    $flag = 'false';
                }
            } ?>
            <input class="btn" type="submit" placeholder="login" name="login">
        </div><br>
        </form>
        <?
            if(isset($_POST['login'])){
                if($flag != 'false'){
                    $_SESSION['user'] = $res;
                    echo '<script>document.location.href="../ind.php?page=account"</script>';
                }
            }
            ?>
        <a class="let" href="reg.php">No account? Let make it!</a>
    </div>
</body>
</html>