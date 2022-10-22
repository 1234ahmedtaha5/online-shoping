<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,400&family=Source+Sans+Pro:wght@200&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>products</title>
</head>
<style>
    h1{
        font-family: 'Cairo', sans-serif;
        font-weight: bold;
    }
    .card{
        float: left;
        margin: 10px;
    }
    .card img{
        width: 100%;
        height: 200px;
    }
    main{
        width: 70%;
    }
</style>
<body>
    <center>
        <h1>Show All Product</h1>
    </center>
    
    <?php 
    include("config.php");
    $result="SELECT * FROM online_product";
    $info= mysqli_query($conn,$result);
    while($row=mysqli_fetch_array($info)){
        echo "<center>
        <main>
        <div class='card' style='width:18rem;'>
        <img src='$row[prod_image]' class='card-img-top'>
        <div class='card-body'>
            <h5 class='card-title'>$row[prod_name]</h5>
            <h6 class='card-title'>$row[prod_price]</h6>
            <p class='card-text'>$row[prod_disc]</p>
            <a href='delete.php? id=$row[prod_id]' class='btn btn-danger'>delete product</a>
            <a href='update.php? id=$row[prod_id]' class='btn btn-primary'>edit product</a>
        </div>
    </div>

        </main>
        </center>";

    }
    ?>

    
    
</body>