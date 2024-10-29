<?
include('db/db.php');
global $connect; 
?>

<div class="books">
    <a class="color" href="ind.php">Назад</a><br><br><br>
        <?
    $sql = "SELECT * FROM `book_id`";
    $result_cat = $connect->query($sql);

    foreach ($result_cat as $category) { ?>
<a class="filter" href="?page=book&book_id=<?= $category['id']?>"><?= $category['name'] ?></a><br> <? } ?>
<a class="filter" href="?page=book">Bce</a><br>
<br><br>
<hr>
<?
$sql = "SELECT * FROM `book`";
if (isset($_GET['book_id'])) {
    $id_category = $_GET['book_id'];
    $sql .= "WHERE `id_category` = '$id_category'";
}
// var_dump($sql);

$result = $connect->query($sql);
foreach ($result as $news) {
$id_author = $news['author'];
$sql_a = "SELECT * FROM `book` WHERE `id` = '$id_author'";
$author = $connect->query($sql_a)->fetch(2);

$id_category= $news['id_category'];
$sql = "SELECT * FROM `book_id` WHERE `id`='$id_category'";
$result_cat= $connect->query($sql)->fetch(2);
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
<div class="news_block">
<h6 class="name">Название: <?= $news['name']?></h6>
<p> Дaтa: <?= $news['date']?>, ABTOP: <?= $news['author'] ?>  </p>
</div>
<p class="text"> Teкст: <?= $news['text'] ?></p>
<p class="text"> Kатегория: <?= $result_cat['name'] ?></p><br>
<hr>
<? } ?>
    </div>
    </div>
</body>
</html>