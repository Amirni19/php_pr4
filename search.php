<?
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
    <div class="POISK">
    <form action="" method="POST" class="search" name="search">
    <input type="text" name="name" placeholder="Поиск">
    <input class="filter" type="submit" name="search" value="Найти">
</form> 
<?
if(isset($_POST['search'])){
$text=$_POST['name'];
$dopSql= "WHERE `name` LIKE '%" . $text . "%' ";
$sql = "SELECT * FROM `book` $dopSql";
$result = $connect->query($sql);
}else{
    $dopSql="";
}
$sql = "SELECT * FROM `book` $dopSql";
$result = $connect->query($sql);
$res_error = $connect->query($sql)->fetchColumn();

if ($res_error == 0){ ?>
<р>По вашему запросу новостей не найдено! <a href="?page=search">Вернуться ко всем новостям</a></p>
<? } else{ ?>
 <a class="under" href="ind.php">Вернуться ко всем новосTЯM</a>
<?}
if($result = $connect->query($sql)){
    foreach ($result as $news) {
        $id_author = $news['author'];
        $sql_a = "SELECT * FROM `book` WHERE `id` = '$id_author'";
        $author = $connect->query($sql_a)->fetch(2);
        
        $id_category= $news['id_category'];
        $sql = "SELECT * FROM `book_id` WHERE `id`='$id_category'";
        $result_cat= $connect->query($sql)->fetch(2);
        ?>
        <div class="news_block">
        <h6 class="name">Название: <?= $news['name']?></h6>
        <p> Дaтa: <?= $news['date']?>, ABTOP: <?= $news['author'] ?>  </p>
        </div>
        <p class="text"> Teкст: <?= $news['text'] ?></p>
        <p class="text"> Kатегория: <?= $result_cat['name'] ?></p>
        <hr>
        <? } 
} ?>
    </div>   
</body>
</html>