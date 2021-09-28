<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
  require_once './backend/Object.php';
?>

<div class="container">

  <h1 class="mt-4 text-center">CRUD Demo</h1>
  <p class="text-center">Create, read, update, and delete records below</p>

  <form class="form-inline m-2 d-flex justify-content-center" method="POST">
    <label for="name">Name:</label>
    <input type="text" class="form-control m-2" id="name" name="name" required>
    <label for="des">Designation:</label>
    <input type="text" class="form-control m-2" id="des" name="des" required>
    <input type="submit" name="submit" class="btn btn-warning" value="Save">
  </form>

  <?php require_once "create.php"; ?>
  <?php require_once "read.php"; ?>
    
  
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="backend/script.js"></script>
</body>
</html>