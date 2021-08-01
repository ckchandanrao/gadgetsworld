<?php
require_once("connection.php");
if(isset($_POST['submit']))
{
    $stm="SELECT * FROM `schoollogin`.`parentlogin` WHERE `regno`='$_POST[regno]' and `password`='$_POST[password]' ";
    $result=mysqli_query($conn,$stm);
    if(mysqli_num_rows($result)==1)
    {
        header("Location:parenthome.php");
    }
    else
    {
        echo "<script>alert('Invalid username or password');</script>";
    }
}













?>

























<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="parentlogin.css">
</head>
<body>
    <div class="block1">
        <form action="parentlogin.php" method="POST">
        <h1>PARENT LOGIN</h1>
        <label>USERNAME:</label>
        <input type="text" name="regno" required ><br>
        <label>Password:</label>
        <input type="password" name="password" required><br>
        <button  type="submit" name="submit">Login</button>







        </form>










    </div>
    
</body>
</html>