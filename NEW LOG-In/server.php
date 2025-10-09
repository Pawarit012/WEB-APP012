<?php

    $servername = 'localhost';
    $username ='root';
    $password = '';
    $dbname ='WEBAPP012';

    //create connection
    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if (!$conn) {
        die('connection failed' . mysqli_connect_error());

    } else {
        echo 'Connected succesfully';
    }


?>