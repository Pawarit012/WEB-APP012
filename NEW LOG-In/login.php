 <?php include('server.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    
    <div class="header">
        <h2>Login</h2>
    </div>

    <form action="register_db.php" method='post' >
       
        <div class="input-group">
            <label for="username">username</label>
            <input type="text" name='username' >
        </div>

        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" name='password' >
        </div>

        <div class="input-group">
            <button type="submit"name ="login_user " class="btn" >Login</button>
        </div>
        <p>Not yet a member? <a href="register.php">Sign up</a></p>

    </form>
    
    

</body>
</html>