<?php
$id=$_GET['id'];
$conn = mysqli_connect("localhost","root","","product_managment_system");
$sql="DELETE FROM product WHERE id = $id";
$run=mysqli_query($conn,$sql);
if($run){
    header("location:display.php");
}else{
    echo "error in delete";
}
?>