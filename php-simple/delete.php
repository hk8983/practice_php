<?php

include 'connection.php';

$id = $_GET['id'];

$deletequrry = "delete from test123table where id={$id}";

$query = mysqli_query($conn, $deletequrry);

header('location:displaydata.php');


?>