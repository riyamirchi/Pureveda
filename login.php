<?php
include('connection.php');
if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM `test` WHERE `email` = '$email' AND `password` = '$pass' ";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "success";
        header('location:1.php');
    }
    else{
        echo "error";
    }
}

?>
