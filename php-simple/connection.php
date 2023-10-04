<?php

$username = "root";
$password = "root";
$server = "localhost";
$db = "test1";

$conn = new mysqli($server, $username, $password, $db);

if ($conn) {
    echo "<br/>DB Connected!";
} else {
    echo "<br/> Connection Failed";
}
