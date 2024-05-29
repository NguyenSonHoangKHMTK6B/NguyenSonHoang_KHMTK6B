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

    $sql = "SELECT * FROM tblproduct";
    $result = $conn->query($sql);

    if ($result->num_rows > 0){
        while ($row = $result->fetch_assoc()){
            echo $row["id"]."-".$row["company_Name"]." ".$row["pname"]." ".$row["year"]." ".$row["band"]."<br>";
        }
    }else{
        echo "0 result";
    }
    $conn->close();
?>