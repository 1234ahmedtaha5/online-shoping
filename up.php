<?php 
include("config.php");

if(isset($_POST['update'])){
    $id=$_POST["prod_id"];
    $p_name=$_POST["p_name"];
    $p_price=$_POST["p_price"];
    $imge=$_FILES['file'];
    $imge_location=$_FILES["file"]['tmp_name'];
    $image_name=$_FILES['file']['name'];
    $image_up="images/".$image_name;
    $update="UPDATE online_product SET prod_name='$p_name', prod_price='$p_price',prod_image='$image_up'where prod_id=$id " ;

    mysqli_query($conn,$update);
   
    header("location:index.php");

}
?>