<?php
namespace table;

class item{
    public $id;
    public $name;


    public function store($data){
        session_start();
        session_destroy();
        $_SESSION['item'][]=$data;


    }


}
?>