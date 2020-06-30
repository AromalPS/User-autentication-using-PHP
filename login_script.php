<?php
$con = mysqli_connect('localhost','root','','user')
    or die(mysqli_error($con));

$email = $_POST['email'];
$password = $_POST['password'];

$login_query = "SELECT email, password FROM `users1`WHERE email = '$email'";
$login_query_result = mysqli_query($con,$login_query) or die(mysqli_error($con));
$row = mysqli_fetch_array($login_query_result);
if($password == $row[1]){
    echo 'welcome</br>You have logged in.';
}else{
    echo "<script type='text/javascript'>alert('Email or password not found');</script>";
    echo "<script type='text/javascript'>window.history.go(-1)</script>";
}
?>