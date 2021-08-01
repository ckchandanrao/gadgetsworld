<?php 
require_once("connection.php");
  
if(isset($_POST['submit']))
{
    $sql="SELECT * FROM `schoollogin`.`login` WHERE `email`='$_POST[email]' and `password`='$_POST[password]' ";//Here we are checking whether database query are  match with passed email and password
    $result=mysqli_query($conn,$sql); #mysqli_query() is used to run the query
    if(mysqli_num_rows($result)==1)    #here mysqli_num_rows() is used check how many rows were returned
    {
        session_start();
        $_SESSION['adminmail']=$_POST['email']; //here admin's email is stored in $_session['adminmail']
                                                //setting the SESSION
    
        header("Location:homepage.php");
    }
    else{
            echo "<script>alert('Invalid email or password');</script>";
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
    <link rel="stylesheet" href="login.css">
</head>
<body>

    <div class="loginpage">
    <form action="login.php" method="POST">
        <h1>ADMIN LOGIN</h1>
     
    <label>E-mail:</label>
    <input type="email" name="email" required ><br>
    <label>Password:</label>
    <input type="password" name="password" required><br>
    <button  type="submit" name="submit">Login</button>




    </form>
    
    
    
    
    </div>
    
</body>
</html>