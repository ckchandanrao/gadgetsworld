<?php

//1)set connection variables
    $server="localhost";
    $username="root";
    $password="";
    $dbname="schoollogin";


    //2)create database connection
    $conn=mysqli_connect($server,$username,$password,$dbname);
    
    //3) check a database connection success
    if(!$conn)
    {
        die("connect failed due to".mysqli_connect_error());
    }

?>
