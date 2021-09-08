<?php

include '../db.php';
$name = $_POST['name'];
$des = $_POST['des'];
$id = $_POST['id'];

$query = "update users set name = '$name', designation = '$des' where id = '$id'";
$conn->query($query);
$conn->close();
header("location: index.php");
?>