<?php

require_once("connection.php");
$sub=false;
if(isset($_POST['sub']))
{
  $reggno=$_POST['regno'];
  $snname=$_POST['studentname'];
  $cood=$_POST['classofadmit'];
  $maths=$_POST['maths'];
  $english=$_POST['english'];
  $kannada=$_POST['kannada'];


  $sql="INSERT INTO `schoollogin`.`updatemarks`(`regno`, `studentname`, `class`, `maths`, `english`, `kannada`) 
  VALUES ('$reggno','$snname','$cood','$maths','$english','$kannada')";
  
  if($conn->query($sql)==true)
  {
    $sub=true;
  }
  else{
    echo "ERROR $sql <br> $conn->error";
  }
  $conn->close();
}

?>






















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>testandexam</title>
   <link rel="stylesheet" href="update.css">
</head>
<body>
    
<div class="topnav">
  <a class="active" href="homepage.php">HOME</a>
  <a href="index.php">ADMISSION</a>
  <a href="list.php">LIST OF STUDENTS</a>
  <a href="markslist.php">MARKS LIST</a>
  <a href="#">NOTICE</a>
  <a href="login.php">LOG OUT</a>
 
</div>
<div class="block1">
  <h1>UPDATE MARKS</h1>
  
  <?php
  if($sub==true)
  {
  echo"<h1>successfully updated</h1>";
  }
  ?> 
 



</div>



<div class="block2">

<form action="update.php" method="POST">
<input type="text" name="regno" placeholder="regno" required ><br><br>
<input type="text" name="studentname" placeholder="Student name" required><br><br>
<input type="int" name="classofadmit" placeholder="class of admit" required ><br><br>
<label>Maths:</label><input type="text" name="maths" placeholder="marks obtained" required ><br><br>
<label>English:</label><input type="text" name="english" placeholder="marks obtained" required ><br><br>
<label>kannada:</label><input type="text" name="kannada" placeholder="marks obtained" required ><br><br>
<br>
<button  name="sub">submit</button>



</form>
</div>





      
        
        
        
        
        
        
    
    
</body>
</html>