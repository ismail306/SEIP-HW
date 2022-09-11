<?php
namespace table;

class item{
    public $id;
    public $name;
    public $price;


    public function store($data){
        session_start();
    //    session_destroy();
        $_SESSION['item'][]=$data;
        return;


    }
    public function update($data,$key){
        session_start();
    //    session_destroy();
        $_SESSION['item'][$key]=$data;
        return;


    }

    public function show($key){

        echo"<pre>";
        $id=$_SESSION['item'][$key]['id'];
        $name=$_SESSION['item'][$key]['name'];
        $price=$_SESSION['item'][$key]['price'];
        echo "Product id: $id <br>";
        echo  "Product name: $name <br>";
        echo  "Product price: $price <br>";


       // print_r ($_SESSION['item'][$key]);
       return;

    }

    function edit($key){



    }

    public function destroy($key){
        session_start();
    $id=$key;
    //  echo"<pre>";
    //  print_r($_SESSION);

    unset($_SESSION['item'][$id]);


    }


}
?>