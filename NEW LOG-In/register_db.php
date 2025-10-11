<?php

    session_start();
    include('server.php');

    $error = array();

    if (isset($_POST['reg_user'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']) ;
        $email = mysqli_real_escape_string($conn, $_POST['email']) ;
        $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']) ;
        $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']) ;

        if (empty($username)) {
            array_push($error, 'Username is required');
        }

        if (empty($email)) {
            array_push($error, 'email is required');
        }

        if (empty($password_1)) {
            array_push($error, 'Password is required');
        }

        if ($password_1 != $password_2)
            array_push($error, 'the to passwords do not match');

        $user_check_query = "SELECT * FROM user WHERE username = '$username' OR email = '$email' ";
        $query = mysqli_query($conn, $user_chaek_query);
        $result = mysqli_fetch_assoc($query);

        if ($result) {
            if ($result['username'] === $username) {
                array_push($error, 'Username already exists');
            }

            if ($result['email'] === $email) {
                array_push($error, 'email already exists');
            }
        }

        if (count($error) == 0) {
            $password = md5($password_1);

            $sql = "INSERT INTO user (username ,email,password) VALUES ('$username', '$email' , '$password')";
            mysqli_query($conn , $sql);


            $_SESSION['username'] = $username ;
            $_SESSION['success'] = "Your are now loggen in" ;
            header('location:index.php');
        }
    }

?>