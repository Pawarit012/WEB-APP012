 <?php include('server.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    
    <div class="header">
        <h2>Register</h2>
    </div>

    <form action="register_db.php">
       
        <div class="input-group">
            <label for="username">username</label>
            <input type="text" name='username' >
        </div>

        <div class="input-group">
            <label for="Tel.">Tel.</label>
            <input type="tel" name='Tel.' >
        </div>

        <div class="input-group">
            <label for="email">email</label>
            <input type="email" name='email' >
        </div>

        <div class="input-group">
            <label for="password_1">password</label>
            <input type="password" name='password_1' >
        </div>

        <div class="input-group">
            <label for="password_2">Confrim Password</label>
            <input type="password" name='password_2' >
        </div>

        <div class="input-group">
            <button type="submit"name ="req_user " class="btn" >Register</button>
        </div>
        <p>Already a member? <a href="login.php">Sign in</a></p>

    </form>
    
    

</body>
</html>