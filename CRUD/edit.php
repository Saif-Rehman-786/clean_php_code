<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $conn = mysqli_connect("localhost","root","","product_managment_system");
    $id = $_GET['id'];
    $sql = "SELECT * FROM product WHERE id =$id ";
    $run=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($run);
    ?>

    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">  <br>
        <input type="text" name="name" value="<?php echo $row['name']; ?>"> <br>
        <input type="number" name="stock" value="<?php echo $row['stock']; ?>"> <br>
        <input type="number" name="price" value="<?php echo $row['price']; ?>"> <br>

        <input type="submit" value="update" name="update">
    </form>
</body>
</html>