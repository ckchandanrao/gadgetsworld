<?php 
require_once('connection.php');
$stm="SELECT * FROM `schoollogin`.`studentsinfo` ";
$result= mysqli_query($conn,$stm);
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details of studentsinfo table</title>
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
</head>
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
        <th colspan="9"><h3>STUDENTS ADMITTED LIST</h3></th>
        <tr>
            <th><h2>id</h2></th>
            <th><h2>student name</h2></th>
            <th><h2>student age</h2></th>
            <th><h2>fathername</h2></th>
            <th><h2>mothername</h2></th>
            <th><h2>date of birth</h2></th>
            <th><h2>class of admit</h2></th>
            <th><h2>Reg no</h2></th>
            <th><h2>phone no</h2></th>
        </tr>


        <?php

        while($rows=mysqli_fetch_assoc($result))  //here $row is a variable and mysql_fetch_assoc() is a inbuilt function to fetch database contents 
        {
            

        ?>

            <tr>
                <td><b><?php echo $rows['student_id']; ?></b></td>
                <td><b><?php echo $rows['studentname']; ?></b></td>
                <td><b><?php echo $rows['age'] ;?></b></td>
                <td><b><?php echo $rows['fathername']; ?></b></td>
                <td><b><?php echo $rows['mothername']; ?></b></td>
                <td><b><?php echo $rows['DOB']; ?></b></td>
                <td><b><?php echo $rows['classofadmit'];?></b></td>
                <td><b><?php echo $rows['regno'];?></b></td>
                <td><b><?php echo $rows['phoneno'];?></b></td>

            </tr>
        <?php    
            
        }
       
        ?>







        








    </table>
    
</body>
</html>