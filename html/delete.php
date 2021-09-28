<?php

$id = $_GET['id'];

try {
    $result = $obj -> deleteData($id);

    if($result) {
      header("location: index.php?page=$page");
    }
  }
  catch (Exception $e) {
      echo $e -> getMessage();
  }

$query = "delete from users where id = '$id'";
$conn->query($query);
$conn->close();
header("location: index.php");
?>