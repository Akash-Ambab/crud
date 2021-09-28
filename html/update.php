<?php

if(isset($_GET['submit'])) {
    $name = $_POST['name'];
    $designation = $_POST['des'];
    $id = $_POST['id'];
    $page = $_GET['page'];

    $data = [
        "name" => $name,
        "designation" => $designation
    ];

    try {
      $result = $obj -> updateData($id, $data);

      if($result) {
        header("location: index.php?page=$page");
      }
    }
    catch (Exception $e) {
        echo $e -> getMessage();
    }
  }
?>