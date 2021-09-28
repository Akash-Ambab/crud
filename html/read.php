<table class='table'>
  <thead>
    <th>#</th>
    <th>Name</th>
    <th>Designation</th>
    <th>Actions</th>
  </thead>
  <tbody>


<?php

  require_once './backend/Object.php';
  
  $pageNo = 1;
  $limit = 5;

  if(isset($_POST['pageNo'])) {
    $pageNo = $_POST['pageNo'];
  }

  $current = ($pageNo - 1) * $limit;

  try {
    $records = $obj -> getUsers($current, $limit);
  }
  catch (Exception $e) {
    echo $e -> getMessage();
  }
  
  $data = "";
  $data .= "<tr>";
  $count = 1 + $current;
  foreach ($records as $keys => $record) {
    if ($record['id'] == $_GET['id']) {
      $data .= "<form class='form-inline' method='post'>";
      $data .= "<td>" . $count . "</td>";
      $data .= '<td><input type="text" name="name" id="name" value="'.$record['name'].'"></td>';
      $data .= '<td><input type="text" name="des" id="designation" value="'.$record['designation'].'"></td>';
      $data .= '<td>
                  <button class="btn btn-success">Save</button>
                <input type="hidden" name="id" value="'.$record['id'].'">
            </td>';
      $data .= "</form>";
      $data .= "</tr>";

    }
  
    else {
        $data .= "<td>" . $count . "</td>";
        $data .= "<td>" . $record['name'] . "</td>";
        $data .= "<td>" . $record['designation'] . "</td>";
        $data .= '<td class="controls">
                <a class="btn btn-success" href="index.php?page='.$page.'&id=' . $record['id'] . '" role="button">Update</a>
                <a class="btn btn-danger" href="delete.php?id=' . $record['id'] . '" role="button">Delete</a>
              </td>';
        $data .= "</tr>";
    }

    $count += 1;
    
  }
  echo $data;
?>

  </tbody>
</table>

<div class="pagination">
  <?php require_once "pagination.php"; ?>
</div>
