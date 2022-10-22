<?php 
include("config.php");

if(isset($_POST['upload'])){
    $p_name=$_POST["p_name"];
    $p_price=$_POST["p_price"];
    $p_disc=$_POST["p_dics"];
    $imge=$_FILES['file'];
    $imge_location=$_FILES["file"]['tmp_name'];
    $image_name=$_FILES['file']['name'];
    $image_up="images/".$image_name;
    $insert="INSERT INTO online_product (prod_name,prod_price,prod_disc,prod_image) VALUES('$p_name'
    ,'$p_price','$p_disc','$image_up')";

    mysqli_query($conn,$insert);
    if(move_uploaded_file($imge_location,'images/'. $image_name)){
        echo "<script>alert('sucsessfull to upload product')</script>";
    }else{
        echo "<script>alert('filed to upload product')</script>";
    }
    header("location:index.php");

}
?>