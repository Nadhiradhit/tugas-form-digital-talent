<?php

include 'connect.php';
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($db, "SELECT * FROM admin where 
        username='$username' 
        and password='$password'");

$cek_login = mysqli_num_rows($login);

if($cek_login>0){
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:../public/index-admin.php");
}else{
    echo "<script>alert('Password mu salah')</script>";
}


?>