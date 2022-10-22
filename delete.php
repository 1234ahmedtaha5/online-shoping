<?php 
include("config.php");

$id=$_GET['id'];
mysqli_query($conn,"DELETE FROM online_product WHERE prod_id=$id");
header("location:product.php");
?>