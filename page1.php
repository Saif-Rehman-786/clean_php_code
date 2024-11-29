<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">

<label>username:</label>
<input type="text" name="username">

<label>password:</label>
<input type="text" name="password">


<input type="submit" name="btn">
</form>

<?php 
session_start();
if (isset($_REQUEST['btn'])) {
    if ($_REQUEST['username'] == "saif" && $_REQUEST['password'] =='saif131268') {
    $_SESSION['username'] = $_REQUEST['username'];

    $_SESSION['Last_time'] = time();

header('Location:page2.php');


        # code...
    }




}





?>



</body>
</html>