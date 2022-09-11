<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
</head>
<body>
    <?php
    session_start();
    // include_once './store.php' ;
    $product=$_SESSION['item'] ?? [];

    ?>
    <a href="creat.php">Insert Data</a>



    <div style="width:80%; margin: 0 auto ;text-align: center">




        <table border="1" style="width:80%; margin: 0 auto">
            <thead>

            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
            <tbody>

                <?php

                // echo"<pre>";
                // print_r($product);
                foreach($product as $key=> $prod){?>

            <tr>
                <td> <?= $prod['id'] ?></td>
                <td>  <?= $prod['name'] ?></td>
                <td>  <?= $prod['price'] ?></td>
                <td>
                    <a href="delete.php?id=<?=$key?>"onclick="return confirm('Are you Sure ? ')">Delete</a>
                    <a href="details.php?id=<?=$key?>">Details</a>
                    <a href="edit.php?id=<?=$key?>">EDIT</a>
                </td>
            </tr>


            <?php
            }
                ?>



            </tbody>
            </thead>


        </table>


    </div>


</body>
</html>