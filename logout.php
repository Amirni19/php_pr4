<?php
session_start();

if(!isset($_POST)) die('Только POST');

session_destroy();

header("Location: ind.php");

die();