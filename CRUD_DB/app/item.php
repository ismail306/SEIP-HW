<?php
namespace table;
use PDO;

class item{
    public $id;
    public $name;
    public $price;


    public function store($data){
        session_start();
    //    session_destroy();
        $_SESSION['item'][]=$data;
        //DB Connection

        try {
        $pdo = new PDO('mysql:host=localhost;dbname=crud', 'root', '123');
        $query="INSERT INTO products(Product_Id, Product_Name, Product_Price) VALUES ( '{$data['id']}', '{$data['name']}', '{$data['price']}' )" ;
        $statement = $pdo->prepare($query);
        $statement->execute() ;
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }



        return;


    }
    public function showdata(){
        // database connecti

    $pdo = new PDO('mysql:host=localhost;dbname=crud','root','123');
    $statement = $pdo->query ("SELECT* FROM products");
    $data = $statement->fetchAll(PDO::FETCH_ASSOC);
    // echo"<pre>";
    // print_r($data);
    // die();

    return $data ;


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