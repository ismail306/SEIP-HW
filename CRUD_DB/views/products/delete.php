<?php
session_start();

// echo"DELETING";
// $product=$_SESSION['item'];
// echo "<pre>";
// print_r($product);
include_once'./../../vendor/autoload.php';
use table\item;
$item =new item();
$item->destroy($_GET['id']);
header('Location: ./index.php');



// foreach($product as $key => $prod){
// if($prod['id']==$id){
//     unset($_SESSION['product'][$key]);
// }
// }

// header('Location: ./index.php');
?>