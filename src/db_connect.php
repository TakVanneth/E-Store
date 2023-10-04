<?php
function connectDB() {
    try {
        $host = "localhost";
        $user = "root";
        $password = "root";
        $dbName = "ESTORE";
        $conn = mysqli_connect($host, $user, $password, $dbName);
        if(!$conn){
            die('Could not connect to MySQL: ' . mysqli_connect_error());
        }
        return $conn;
    } catch(Exception $e) {}
}

?>