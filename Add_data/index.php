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
    $student=$_SESSION['item'];

    ?>



        <div style="width:80%; margin: 0 auto ;text-align: center">
        <form action="./store.php" method="POST">
            <input name="id" type="text" placeholder="please Enter Student ID">
            <input name ="name" type="text" placeholder="please Enter Student Name">
            <button> Add item</button>
        </form>



    <table border="1" style="width:80%; margin: 0 auto">
        <thead>

        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
        <tbody>
            <?php
            foreach($student as $std){?>

           <tr>
             <td> <?= $std['id'] ?></td>
             <td>  <?= $std['name'] ?></td>
         </tr>


        <?php }
            ?>



        </tbody>
        </thead>


    </table>


        </div>


</body>
</html>