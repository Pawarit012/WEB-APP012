<?php

    session_start();
    include('server.php');

    $error = array();

    if (isset($_POST['reg_user'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']) ;
        $Tel = mysqli_real_escape_string($conn, $_POST['tel.']) ;
        $email = mysqli_real_escape_string($conn, $_POST['email']) ;
        $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']) ;
        $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']) ;

        if (empty($username)) {
            array_push($error, 'Username is reauire')
        }

        if (empty($email)) {
            array_push($error, 'email is reauire')
        }

        if (empty($password_1)) {
            array_push($error, 'Password is reauire')
        }

        if ($password_1 != $password_2)
            array_push($error, 'the to passwords do not match')

        $user_chaek_query = 'SELECT * WHERE USER WHERE USERNEME = "$username" OR email = 'email' ';
        $query = mysqli_query($conn, $user_chaek_query);
        $result = mysqli_fetch_assoc($query);

        if ($result) {
            if ($result['username'] === $username) {
                array_push($error, 'Username already exists')
            }

            if ($result['email'] === $email) {
                array_push($error, 'email already exists')
            }
        }

        if (count($error) == 0) {
            $password = md5($password_1);

            $dql = 'INSERT INTO user (username ,email'
        }
    }

?>