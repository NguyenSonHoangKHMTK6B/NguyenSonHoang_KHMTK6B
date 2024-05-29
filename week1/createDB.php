<?php
    $serverName = "localhost";
    $userName= "root";
    $password= "";

    $conn = new mysqli($serverName, $userName, $password);
    if ($conn -> connect_error){
        die("connect failed". $conn->connect_error);
    }
    echo "Connected thanh cong";
    echo "<br>";
    $sql="CREATE DATABASE newDB";
    if($conn->query($sql) === TRUE){
        echo "Database is created";
    }else{
        echo "Error creating database". $conn->error;
    }
    $conn->close();
?>