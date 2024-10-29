<?php 
include('db/db.php');

global $connect;

if(isset($_POST)){
      $product_id = $_GET['id'];
      $sql = "DELETE FROM tovar WHERE id = $product_id";
      $query = $connect->query($sql);
      header('Location: ../index.php?page=ind');
}
