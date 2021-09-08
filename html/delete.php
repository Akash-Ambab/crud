<?php

include '../db.php';
$id = $_GET['id'];

$query = "delete from users where id = '$id'";
$conn->query($query);
$conn->close();
header("location: index.php");
?>