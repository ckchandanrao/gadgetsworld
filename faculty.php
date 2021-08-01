<?php
include_once("connection.php");
$msg="";
if(isset($_POST['submit']))
{   $tname=$_POST['teachername'];
    $tage=$_POST['teacherage'];
    $tdob=$_POST['TDOB'];
    $tsub=$_POST['teachersubject'];
    $tphone=$_POST['tphoneno'];
    $image=$_FILES['image']['name'];//to fetch image name

    $ext = pathinfo($image, PATHINFO_EXTENSION);//to find img extension
    if($ext=="jpg"||$ext=="jpeg")//validations
    {
    $target="photos/".basename($_FILES['image']['name']);//creating folder path
    $stm="INSERT INTO `schoollogin`.`faculty`(`tname`, `tage`, `tdob`, `tsubject`, `tphone`, `timage`) 
    VALUES ('$tname','$tage','$tdob','$tsub','$tphone','$image')";

    mysqli_query($conn,$stm);//execution of query

    if(move_uploaded_file($_FILES['image']['tmp_name'],$target))//file upload to folder
    {
        $msg="successfully inserted";
        echo "<script>alert('.$msg.')</script>";
    }
    else
    {
        $img="fail to insert";
    }
    }
    else
    {
        echo "<script>alert('only jpg')</script>";
    }
    
}
?>
























<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty</title>
    <link rel="stylesheet" href="faculty.css">
</head>
<body>

<div class="topnav">
  <a class="active" href="homepage.php">HOME</a>
  <a href="list.php">LIST OF STUDENTS</a>
  <a href="update.php">UPDATE MARKS</a>
  <a href="markslist.php">MARKS LIST</a>
  <a href="#">FACULTY LIST</a>
  <a href="login.php">LOG OUT</a>
  

 
</div>

<div class="block1">
<h1>TEACHER FORM</h1>
<h4>Kindly enter the details which are given below</h4>
</div>



<div class="block2">

<form action="faculty.php" method="POST" enctype="multipart/form-data">
<input type="text" name="teachername" placeholder="Teacher Name" required><br><br>
<input type="text" name="teacherage" placeholder="Teacher Age" required><br><br>
<input type="date" name="TDOB" placeholder="Teacher DOB" required><br><br>
<input type="text" name="teachersubject" placeholder="subject" required ><br><br>
<input type="text" name="tphoneno" placeholder="phone no" maxlength="10" required ><br><br>

<label>UPLOAD YOUR IMAGE:</label><br><br>
<input type="file" name="image" required >

    <br>
    <br>

<button type="submit" name="submit">Submit</button>



</form>
</div>
    
</body>
</html>