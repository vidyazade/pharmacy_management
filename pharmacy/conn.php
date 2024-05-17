<?php
//phpinfo();

//params to connect to the database
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "pharmacy_system_db";

//connect to the datbase
$conn = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);

if (!$conn) {
    die("Could not connect to the database");

}

?>