<?php 
require_once('connection.php');
$stm="SELECT * FROM `schoollogin`.`faculty` ";
$result= mysqli_query($conn,$stm);
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>display faculty</title>
</head>
<style>

body{
           background:#FAEBD7;
           margin:0;
        }

        
       

        
        h3{
            font-size:40px;
            color:black;
        }



           .topnav {
            overflow: hidden;
            background-color:blue;
        }
  
           .topnav a {
            float: left;
            color: white;
            text-align: center;
            padding: 14px 60px;
            text-decoration: none;
            font-size: 17px;
        }
  
            .topnav a:hover {
            background-color: white ;
            color: black;
        }








</style>
<body>
<div class="topnav">
  <a class="active" href="homepage.php">HOME</a>
  <a href="update.php">UPDATE MARKS</a>
  <a href="#">DOWNLOAD</a>
  <a href="login.php">LOG OUT</a>
 
</div>
<br>
<br>
<br>



<table align="center" border="5px" style="width:1050px; line-height:50px">
<th colspan="7"><h3>FACULTY MEMBERS</h3></th>
<tr>
            <th><h2>id</h2></th>
            <th><h2>Teacher name</h2></th>
            <th><h2>Teacher age</h2></th>
            <th><h2>date of birth</h2></th>
            <th><h2>subject</h2></th>
            <th><h2>Phone no</h2></th>
            <th><h2>profile photo</h2></th>
</tr>





<?php

while($rows=mysqli_fetch_assoc($result))  //here $row is a variable and mysql_fetch_assoc() is a inbuilt function to fetch database contents 
{
    

?>

    <tr>
        <td><b><?php echo $rows['id']; ?></b></td>
        <td><b><?php echo $rows['tname']; ?></b></td>
        <td><b><?php echo $rows['tage'] ;?></b></td>
        <td><b><?php echo $rows['tdob']; ?></b></td>
        <td><b><?php echo $rows['tsubject'];?></b></td>
        <td><b><?php echo $rows['tphone'];?></b></td>
        <td><b><?php echo "<img src='photos/".$rows['timage']." '>"?></b></td>

    </tr>
<?php    
    
}

?>












</table>

    
</body>
</html>

