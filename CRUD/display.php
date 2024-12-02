
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 


$connect = mysqli_connect('localhost','root','','product_managment_system');

$selectquery = "SELECT * FROM product";

$result = mysqli_query($connect,$selectquery);


if (mysqli_num_rows($result)>0) {
    # code...
    
    ?>
<table border="1" cellpadding="20px" cellspacing="0">

<thead>
<tr>


<th>username</th>
<th>stock</th>
<th>price</th>
<th>action</th>

</tr>

</thead>

<tbody>

<?php 

while ($all = mysqli_fetch_assoc($result )) {
    ?>
    
<tr>



<td><?php echo $all['name'];?></td>
    <td><?php echo$all['stock'];?></td>
    <td><?php echo$all['price'];?></td>
   


<td>
    <a href="edit.php?id=<?php echo $all['id'];?>">Edit</a>
    <a href="delete.php?id=<?php echo $all['id'];?>">Delete</a>
</td>
</tr>
    
    
<?php }?>

</tbody>

</table>
<br><br><br>
<a href="form.php"><button>GO To Form</button></a>

    <?php } ?>

</body>
</html>