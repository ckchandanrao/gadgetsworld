<?php 
require_once("connection.php");
session_start();
if(!isset($_SESSION['adminmail'])) //here if SESSION is not set then redirect to login.php 
{
    header("Location:login.php");
}

$submit=false;

    if(isset($_POST['submit']))
    {
    //4)collect POST variables
    $sname=$_POST['studentname'];
    $sage=$_POST['age'];
    $sfname=$_POST['fathername'];
    $smname=$_POST['mothername'];
    $sdob=$_POST['DOB'];
    $coa=$_POST['classofadmit'];
    $regno=$_POST['regno'];
    $phoneno=$_POST['phoneno'];



    $stm="INSERT INTO `schoollogin`.`studentsinfo` ( `studentname`, `age`, `fathername`, `mothername`, `DOB`, `classofadmit`, `regno`, `phoneno`)
     VALUES ('$sname','$sage','$sfname','$smname','$sdob','$coa','$regno','$phoneno')";

    //5)execute the query
    if($conn->query($stm)==True)
    {
        //echo "successfully inserted";
        $submit=true;
        
    }
    else{
       echo "ERROR $stm <br> $conn->error";
    }
    //6)close the database connection  
    $conn->close();

    }

?>
        



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    










<?php 
if(isset($_POST['logout']))
{
    session_destroy();
    header("Location:login.php");
}



?>








<div class="topnav">
  <a class="active" href="homepage.php">HOME</a>
  <a href="list.php">LIST OF STUDENTS</a>
  <a href="update.php">UPDATE MARKS</a>
  <a href="markslist.php">MARKS LIST</a>
  <a href="login.php">LOG OUT</a>
 
</div>





<div class="block1">



  

<h3>WELCOME -<?php echo $_SESSION['adminmail']?></h3>

<h1>SCHOOL ADMISSION</h1>
<h4>Kindly enter the details which are given below and make your future glorious</h4>





<?php 
if($submit==true)
{
  echo  "<p class='submitmsg'>Form successfully filled  </p>";
}
?>

</div>






<div class="block2">

<form action="index.php" method="POST">
<input type="text" name="studentname" placeholder="Student name" required><br><br>
<input type="text" name="age" placeholder="Student age" required><br><br>
<input type="text" name="fathername" placeholder="Student father_name" required><br><br>
<input type="text" name="mothername" placeholder="Student mother_name" required><br><br>
<input type="date" name="DOB" placeholder="Student DOB" required><br><br>
<input type="int" name="classofadmit" placeholder="class of admit" required ><br><br>
<input type="text" name="regno" placeholder="regno" required ><br><br>
<input type="text" name="phoneno" placeholder="phone no" maxlength="10" required >

    <br>
    <br>

<button type="submit" name="submit">Submit</button>



</form>
</div>

    
</body>
</html>