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

    <div class="banner">
        <div class="banner-content section">
            <h2>Men’s health. The<br>way it should be.</h2>
            <p>No waiting rooms or awkward conversations. Just clinically<br>proven treatments direct to your door with support along the<br>way.</p>
            <button class="color">Get Started</button><br><br>
            <button class="nocolor">View Treatments</button>
        </div>
    </div>

    <h1 class="section">Дорогой Админ! ЧТобы добавить товары, Вам нужно сначала войти! -> <a href="login.php">Войти</a></h1><br>
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
                    </div>
                </a>
                   <? }
                } ?>
            </div>
        </div>
    </div>

    <div class="section nounder">
    <h1>Рекомендуем для саморазвитие книги</h1><br>
    <a class="color" href="news.php">Книги</a><br><br><br>
    <a class="color" href="search.php">Найти книгу</a>
    </div>
</body>
</html>