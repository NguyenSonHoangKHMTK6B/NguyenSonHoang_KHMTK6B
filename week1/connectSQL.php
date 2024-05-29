<?php
    $serverName = "localhost";
    $userName= "root";
    $password= "";

    $conn = new mysqli($serverName, $userName, $password);
    if ($conn -> connect_error){
        die("connect failed". $conn->connect_error);
    }
    echo "Connected thanh cong";


?>