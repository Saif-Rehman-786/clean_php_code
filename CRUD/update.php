<?php 
if(isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $stock = $_POST['stock'];
    $price = $_POST['price'];
   

    $conn = mysqli_connect("localhost", "root","", "product_managment_system");
    $sql ="UPDATE `product` SET `name`=' $name',`stock`='   $stock',`price`='$price' WHERE id=$id";
    
    $run = mysqli_query($conn, $sql);
    if($run){
        header("Location: display.php");
    }else{
        echo "<script>alert('Something Went wrong! Record could not be updated')</script>";
    }
}
?>