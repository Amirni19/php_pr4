<? session_start();
include('db/db.php');
global $connect; 

$sql = "SELECT * FROM `tovar`";
$query = $connect ->query($sql);
$products = $query->fetchall(PDO::FETCH_ASSOC);
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

    <h4>Admin page</h4>
    <div class="account">
        <div class="account-content section">
            <div class="avatar">
                <img src="icon/Frame.png" alt="">
            </div>
            <div class="avatar-info">
                <p>I'm ADMIN!</p><br>
                <a href="admin-add.php">LET ADD a PRODUCT!</a>
            </div>
        </div>
    </div>

    <div class="catalog">
        <div class="catalog-content section">
            <div class="string">
                <? if(count($products ) > 0){
                    foreach($products as $product){ ?>
                        <a href="#">
                    <div class="card">
                        <img src="<?=$product['photo']?>" alt="">
                        <h3><?=$product['name']?></h3>
                        <p><?=$product['comm']?></p>
                        <span><?=$product['id']?></span>
                        <a class="under" href="#">VIEW Treatments</a>
                        <div class="edit-delete">
                            <a href="admin-edit.php?id=<?=$product['id'] ?>">Редактировать</a>
                            <a href="delete.php?id=<?=$product['id'] ?>">Удалить</a>
                        </div>
                    </div>
                </a>
                   <? }
                } ?>
            </div>
        </div>
    </div>
</body>
</html>