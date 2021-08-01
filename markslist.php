<?php

require_once("connection.php");
$stm="SELECT * FROM `schoollogin`.`updatemarks`";
$res=mysqli_query($conn,$stm);
?>


















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
         body{
        margin:0;
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
    <a href="#">DOWNLOAD</a>
    <a href="login.php">LOG OUT</a>
    </div>
    <br>
    <br>
    <br>
    <br>
    <table align="center" border="4px" style="width:900px; line-height:40px">
        <th colspan="7"><h3>UPDATED MARKS LIST</h3></th>
        <tr>
            <th>SLNO</th>
            <th>REGNO</th>
            <th>STUDENT NAME</th>
            <th>CLASS</th>
            <th>MATHS</th>
            <th>ENGLISH</th>
            <th>KANNADA</th>
        </tr>

        <?php

        while($rows=mysqli_fetch_assoc($res))
        {
            ?>
            <tr>
                <td><center><?php echo $rows['slno'];   ?></center></td>
                <td><center><?php echo $rows['regno']; ?></center></td>
                <td><center><?php echo $rows['studentname']; ?></center></td>
                <td><center><?php echo $rows['class']; ?></center></td>
                <td><center><?php echo $rows['maths']; ?></center></td>
                <td><center><?php echo $rows['english'];?></center></td>
                <td><center><?php echo $rows['kannada']; ?></center></td>
            </tr>
            <?php

        }
        ?>


    </table>
    
</body>
</html>