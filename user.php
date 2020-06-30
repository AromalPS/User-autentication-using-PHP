<?php
$con = mysqli_connect('localhost', 'root','','user')
or die(mysqli_error($con));

$name = $_POST['name'];
$email = $_POST['email'];
$year = $_POST['year'];
$college = $_POST['college'];
$dob = $_POST['dob'];
$password = $_POST['password'];

$user_signup_query = "INSERT INTO `users1` (`id`, `name`, `email`, `year`, `college`, `dob`, `password`) VALUES (NULL, '$name', '$email', '$year', '$college', '$dob', '$password');";
$user_signup_result = mysqli_query($con,$user_signup_query) or die(mysqli_error($con));
echo "<script type='text/javascript'>alert('Signup Successful')</script>";
echo "<script type='text/javascript'>window.history.go(-1)</script>";
?>