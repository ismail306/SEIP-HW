<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="index.php">Home</a>
<?php


session_start();
include_once'./../../vendor/autoload.php';
use table\item;
$item =new item();
$item->show($_GET['id']);

//header('Location: ./index.php');



?>

</body>
</html>

