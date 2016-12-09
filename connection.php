<?php

$servername = "localhost";
$username = "root";
$password = "coderslab";
$dbname = "shop";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Polaczenie nieudane. Blad: " . $conn->connect_error);
}
echo("Polaczenie udane.<br/>");
