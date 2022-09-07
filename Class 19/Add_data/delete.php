<?php
session_start();

// echo"DELETING";
// $product=$_SESSION['item'];
// echo "<pre>";
// print_r($product);
 $id=$_GET['id'];
unset($_SESSION['item'][$id]);


// foreach($product as $key => $prod){
// if($prod['id']==$id){
//     unset($_SESSION['product'][$key]);
// }
// }

header('Location: ./index.php');
?>