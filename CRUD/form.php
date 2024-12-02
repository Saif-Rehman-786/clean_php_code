<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>






</head>
<body>
    <h1>product Managment</h1>




    <form action="" method="post">


<label for="#">name:</label>
<input type="text" name="username"><br><br>

<label for="#">stock:</label>
<input type="number" name="stoke"><br><br>

<label for="#">price:</label>
<input type="number" name="price"><br><br>

<input type="submit" name="btn">

    </form>

    <?php 
    if (isset($_POST['btn'])) {
    
$name  = $_POST['username'];
$stoke = $_POST['stoke'];
$price = $_POST['price'];


$con = mysqli_connect("localhost","root","","product_managment_system");

$insert = "INSERT INTO `product`(`name`, `stock`, `price`) VALUES ('$name ','$stoke ','$price ')";


$run = mysqli_query($con,$insert);

if (!$run) {
   
echo "not connected";

}

    }
    
    
    
    
    
    
    ?>
</body>
</html>