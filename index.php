<?
session_start();
include('db/db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <? 
    if(isset($_GET['page'])){
        $page = $_GET['page'];
        if($page == 'login'){
            include('login.php');
        }
        if($page == 'reg'){
            include('reg.php');
        }
        if($page == 'account'){
            include('account.php');
        }
        if($page == 'add'){
            include('add.php');
        }
        if($page == 'add1'){
            include('add1.php');
        }
        if($page == 'ind'){
            include('ind.php');
        }
    }
    else{
        include('ind.php');
    }
    ?>
</body>
</html>