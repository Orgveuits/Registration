
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="header">
        <h2>Register</h2>
    </div>

    <form method="POST" action="registration.php">
        <!--display validation error here  -->
       
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control" required>
        </div>
        <div class="input-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control" required >
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        
        <div class="input-group">
            <button type="submit" name="register" class="btn">Register</button>
        </div>
        <p>
            Already a member? <a href="login.php">Sign in</a>
        </p>
    </form>

</body>
</html>