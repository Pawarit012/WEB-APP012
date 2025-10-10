<?php
    session_start();
    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = 'You must login first';
        header('location: login.php');

    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="/NEW LOG-In/style.css">
    
</head>
<body>
    
    <div class="header">
        <h2>Home Page</h2>
    </div>

    <div class="content">
        <!-- loggen in user information -->
         <?php if(isset($_SESSION['username'])) :  ?>
            <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
            <p><a href="index.php?logout='1' " style ="color :red;" >Logout</a></p>
        <?php endif ?>
    </div>

</body>
</html>