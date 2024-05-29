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

    $sql = "INSERT INTO tblproduct(id,company_Name, pname, year, band)
    VALUE (101,'Hoang','Nguyen Son Hoang', 2002, 'VietNam')";

    if ($conn->query($sql) === TRUE){
        echo "Table is inserted";
    }else{
        echo "Error inserting Table". $conn->error;
    }
    $conn->close();
?>