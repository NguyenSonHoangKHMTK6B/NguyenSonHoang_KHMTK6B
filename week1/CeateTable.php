<?php
    $serverName = "localhost";
    $userName= "root";
    $password= "";
    $dbname = "newdb";
    $conn = new mysqli($serverName, $userName, $password, $dbname);
    if ($conn -> connect_error){
        die("connect failed". $conn->connect_error);
    }
    echo "Connected thanh cong";
    echo "<br>";

    $sql = "CREATE TABLE MyGuesT(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    if ($conn->query($sql) === TRUE){
        echo "Table is created";
    }else{
        echo "Error creating Table". $conn->error;
    }
    $conn->close();
?>