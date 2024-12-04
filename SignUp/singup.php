<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: auto;
            align-items: center;
        }
    </style>
</head>
<body>
    <h1> SIGN UP</h1>
    <form action="" method="post" name="f"> 
        <table border="1" cellspacing="0">

            <tr>
                <td colspan=2 align="center" >Sign Up</td>
            </tr>
            <tr>
                <td><label>First Name</label></td>
                <td><input type="text" name="fname" require></td>
            </tr>
            <tr>
                <td><label>Last Name</label></td>
                <td><input type="text" name="lname" require></td>
            </tr>
            <tr>
                <td><label>Gender</label></td>
                <td><select name="gender">
                <option value="select gender" require >select gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option></td>
            </tr>
            <tr>
                <td><label>Age</label></td>
                <td><input type="number" name="age" min="10" max="50" require></td>
            </tr>
            <tr>
                <td><label>Email</label></td>
                <td><input type="text" pattern="^[A-Za-\d]+(?:[_%+][A-Za-\d]+)*@[a-z]+{2,4}$" name="email" require></td>
            </tr>
            <tr>
                <td><label>Username</label></td>
                <td><input type="text" name="uname" require></td>
            </tr>
            <tr>
                <td><label>Password</label></td>
                <td><input type="text" pattern="^[\dA-Za-z\W]+$" name="password" require></td>
            </tr>
            <tr>
                <td><label>Confirm Password</label></td>
                <td><input type="text" name="cpassword" require></td>
            </tr>
            <tr>
                <td colspan=2 align="center"><input type="submit" value="Sign Up" onclick="return check()" name="sihnbtn"></td>
            </tr>

        </table>
    </form>
    <script>
        function check() {
            let pass = f.password.value;
            let cpass = f.cpassword.value;
            if(pass!=cpass){
                alert("Password is not identical");
                return false;
            }else{
                return true;
            }
        }
    </script>
</body>
</html>