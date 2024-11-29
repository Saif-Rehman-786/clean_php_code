<?php

include("dbconnection.php");

session_start();
if (isset($_SESSION['username'])) {


    header("Location:dashbord.php");
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page </title>
</head>
<body>
    
<form action="" method="post">

<label for="#">username</label>
<input type="text" name="username"><br><br>

<label for="#">password</label>

<input type="text" name="password" id="showpass"><br><br>
<input type="checkbox" onclick="Showpassword()">
<label for="#">Showpassword</label>


<input type="submit" name="sub">
</form>


<?php
if (isset($_POST['sub'])) {

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM sonic_products WHERE username = '$username' and password = '$password'" ;

$runquery = mysqli_query($con,$sql );

$totalrows = mysqli_num_rows($runquery );

if ($totalrows==1) {
    $_SESSION['username'] = $username;
    $_SESSION['last_time'] = time();
    header("Location:dashbord.php");
}else{
    echo "your code problem";
}



}



?>
<script>


function Showpassword(){

    const myElement = document.getElementById("showpass");
    if (myElement.type == 'password') {
        
        myElement.type='text';
    }else{
        
        myElement.type='password';

    }
}





</script>


</body>
</html>