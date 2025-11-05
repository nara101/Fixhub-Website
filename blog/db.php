<?php
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "fixupblog";

$conn = new mysqli($server, $user, $pass, $dbname);
if (!$conn) {
    echo "error!: {$conn->connect_error}";
}
