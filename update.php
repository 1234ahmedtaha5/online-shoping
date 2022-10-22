<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,400&family=Source+Sans+Pro:wght@200&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
</head>
<style>
    body{
        background-image: none;
    }
    label{
    font-family: 'Cairo', sans-serif;
    font-size: 20px;
    font-weight: bold;
    color:black;
}
</style>

<body>
    <?php
    include("config.php");
    $id=$_GET["id"];
    $up=mysqli_query($conn,"SELECT * FROM online_product where prod_id=$id");
   $data=mysqli_fetch_array($up)
    ?>

    <center>
        <div class="main">
            <form action="up.php" method="POST" enctype="multipart/form-data">
                <h1>update product</h1><br>
                <label for="">product name:</label><br>
                <input type="text" name="p_name" value="<?php echo $data["prod_name"]?>"><br>
                <label for="">product price:</label><br>
                <input type="text" name="p_price"  value="<?php echo $data["prod_price"]?>"><br>
                <input type="file" name="file" class="file">
                <button name="update">update product</button><br>
                <a href="product.php">show all product</a>
            </form>
        </div>
        <h3>Developer By AhmedTaha</h3>
    </center>
    
</body>
</html>