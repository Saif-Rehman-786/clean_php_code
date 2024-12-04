<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
session_start();

if (isset($_SESSION['username'])) {

if ((time() - $_session['Last_time'])>60) {
    # code...
header('Location:logout.php');

}

    # code...
echo 'Welcome To 😡😡😡😡' ." ".  $_SESSION['username'];

}

else{
    echo header('Location:page1.php');
}

?>

<a href="page3.php">NEXT</a>

</body>
</html>