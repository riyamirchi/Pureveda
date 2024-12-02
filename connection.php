<?php
    $hostname="localhost";
    $username="root";
    $password="";
    $dbname="final";

    $conn=mysqli_connect("$hostname","$username","$password","$dbname");

    if(!$conn)
    {
        //echo "<script> alert ('try again ') </script>";
        
    }
    else
    {
        //echo "<script> alert ('connect') </script>";
    }
?>
