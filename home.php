<?php
session_start();
if(!isset($_SESSION['id'])){
    header('location:index.php');
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home page</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body>
    <h1>Hello</br><i>You are logged in</i></h1>
    <a href="logout.php">logout</a>
  </body>
</html>