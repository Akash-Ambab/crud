<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">

  <h1 class="mt-4">PHP + MySQL CRUD Demo</h1>
  <p>Create, read, update, and delete records below</p>

  <form class="form-inline m-2 d-flex justify-content-center" action="create.php" method="POST">
    <label for="name">Name:</label>
    <input type="text" class="form-control m-2" id="name" name="name" required>
    <label for="des">Designation:</label>
    <input type="text" class="form-control m-2" id="des" name="des" required>
    <button type="submit" class="btn btn-warning">Add</button>
  </form>

  <table class="table text-center">
    <tbody>
      <?php include 'read.php'; ?>
    </tbody>
  </table>

</div>
</body>
</html>