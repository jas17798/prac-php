<?php
    include_once("conn.php");
    // print_r($_POST);
    $name = $_POST['name'];
    // echo $name;

    $sql = "INSERT INTO users (name) VALUES ('" . $name . "')";

    if(mysqli_query($conn, $sql))
    {
        echo "Value inserted successfully";
    }
    else{
        echo "Error";
    }