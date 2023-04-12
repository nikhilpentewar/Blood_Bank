<?php

$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "bloodbank";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("unable to connect to host");

if ($conn) {
    // echo "connection ok";
} else {
    echo "connection failed" . mysqli_connect_error();
}
