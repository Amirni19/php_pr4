<? session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sty.css">
    <title>Document</title>
</head>
<body>
    <div class="header">
        <div class="header-content section">
            <div class="nav">
                <a href="#">SHOP</a>
                <a href="#">READ</a>
                <a href="#">020 D004 7160</a>
            </div>
            <div class="logo">
                <a href="index.php?page=ind"><h1>MANUAL</h1></a>
            </div>
            <div class="nav">
                <a href="#">ABOUT</a>
                <? if(empty($_SESSION['user'])){ ?>
                    <a href="login.php">LOGIN</a>
                <? } ?>
                <? if(!empty($_SESSION['user'])){ ?>
                    <a href="logout.php">EXIT</a>
                    <a href="account.php">ADMIN</a>
                <? } ?>
                <a href="#"><img src="icon/Frame.png" alt=""></a>
            </div>
        </div>
    </div>
</body>
</html>
