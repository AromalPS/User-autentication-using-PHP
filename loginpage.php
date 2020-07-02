<html>
<head>
    <title>Login Page</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <form method="post" action="login_script.php">
                <h3>LOGIN</h3>
                <div class="form-group">
                    <label for="email">E-mail ID</label>
                    <input type="email" class="form-control" name="email" required="true">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" required="true">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>
            <p>If you have'nt registered <a href="signup.php">click here</a> to go to Signup page</p>
        </div>
    </div>
</div>
</body>
</html>