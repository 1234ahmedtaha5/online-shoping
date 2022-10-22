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
    <title>online shoping</title>
</head>
<body>
    <center>
        <div class="main">
            <form action="insert.php" method="POST" enctype="multipart/form-data">
                <img src="logo.jpg" width="300px" alt="logo"><br>
                <label for="">product name:</label><br>
                <input type="text" name="p_name"><br>
                <label for="">product price:</label><br>
                <input type="text" name="p_price"><br>
                <label for="">discription:</label><br>
                <textarea name="p_dics" cols="30" rows="10"></textarea><br>
                <input type="file" name="file" class="file">
                <button name="upload">upload product</button><br>
                <a href="product.php">show all product</a>
            </form>
        </div>
        <h3>Developer By AhmedTaha</h3>
    </center>
    
</body>
</html>