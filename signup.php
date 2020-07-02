<?php
session_start();
if(isset($_SESSION['id'])){
    header('location:index.php');
}
?>
<html>
<head>
    <title>Signup page</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-offset-4 col-md-4">
            <h3>SignUP</h3>
            <form method="post" action="signup_script.php">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" required="true">
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" name="email" required="true">
                </div>
                <div class="form-group">
                    <label for="year">year of study</label>
                    <select class="form-control" name="year">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="college">College</label>
                    <input type="text" class="form-control" name="college" required="true">
                </div>
                <div class="form-group">
                    <label for="dob">Date of birth</label>
                    <input type="date" class="form-control" name="dob" required="true">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" required="true">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>
            <p>If you have already registered <a href="loginpage.php">click here</a> to go to login page.</p>
        </div>
    </div>
</div>
</body>
</html>