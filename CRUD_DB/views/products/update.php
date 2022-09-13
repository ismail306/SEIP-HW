<?php

    //  include_once './app/item.php';
     include_once'./../../vendor/autoload.php';
     use table\item;
     $item =new item();
     echo"<pre>";
     print_r($_POST);
     $item->update($_POST,$_GET['id']);
    header('Location: ./index.php');


?>