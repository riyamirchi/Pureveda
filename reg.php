<?php
include('connection.php');
if(isset($_POST['register']))
{
    $name = $_POST['name'] ;
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $check_email_query = "SELECT * FROM `test` WHERE `email` = '$email'";
    $check_email_result = mysqli_query($conn, $check_email_query);

    if (mysqli_num_rows($check_email_result) > 0) {
        echo "Email is already registered.";
    }
    else{

    $sql = "INSERT INTO `test`(`userName`, `email`, `password`) VALUES ('$name','$email','$pass')";
    $result = mysqli_query($conn,$sql);

    if($result){
        header('location:login.html');
    }
    }
}

?>
