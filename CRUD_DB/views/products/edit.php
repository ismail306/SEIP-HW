<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
session_start();
include_once'./../../vendor/autoload.php';
use table\item;
$item =new item();
$item->show($_GET['id']);

print_r($_SESSION['item'][$_GET['id']]);
$productinfo=$_SESSION['item'][$_GET['id']];
?>

<div style="width:80%; margin: 0 auto ;text-align: center">


<form action="./update.php?id=<?=$_GET['id']?>" method="POST">
            <input name="id" value="<?=$productinfo['id']?>">
            <input name ="name" value="<?=$productinfo['name']?>">
            <input name ="price" value="<?=$productinfo['price']?>">
            <button> Update</button>
        </form>


</div>



</body>
</html>