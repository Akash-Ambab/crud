<?php

include '../db.php';
$name = $_POST['name'];
$des = $_POST['des'];

$query = "insert into users (name, designation) values ('$name', '$des')";
$conn->query($query);
$conn->close();
header("location: index.php");
?>