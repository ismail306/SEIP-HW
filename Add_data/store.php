<?php
if($_SERVER['REQUEST_METHOD']!=='POST'){
    echo 'Only post request Allowed';
    die;
}
else{
    echo '<script>alert("Data Successfully Added")</script>';
}
    //  include_once './app/item.php';
     include_once'./vendor/autoload.php';
     use table\item;
     $item =new item();
     $item->store($_POST);
     header('Location: ./index.php');


?>