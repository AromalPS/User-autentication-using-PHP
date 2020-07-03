<?php
include 'common.php';

$email = $_POST['email'];
$password = $_POST['password'];

$login_query = "SELECT id,email, password FROM `users1`WHERE email = '$email'";
$login_query_result = mysqli_query($con,$login_query) or die(mysqli_error($con));
$row = mysqli_fetch_array($login_query_result);
if($email != $row['email']){
    $_SESSION['error_email'] = 'error_email';
    header('location:loginpage.php');
}
else if($password == $row['password'] && $email == $row['email']){
    header('location:home.php');
}else{
    $_SESSION['error'] = 1;
    header('location:loginpage.php');
}
$_SESSION['id'] = $row['id'];
?>