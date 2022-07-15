<?php

    $host = "localhost";
    $database = "db1";
    $username = "root2";
    $password = "phpmysql";

    $conn = mysqli_connect($host, $username, $password, $database);

    if(!$conn)
    {
        echo "Not Connected" . mysqli_connect_error();
    }

?>