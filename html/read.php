<?php
  
  $page = 1;
  $limit = 5;

  if(isset($_GET['page'])) {
    $page = $_GET['page'];
  }

  $current = ($page - 1) * $limit;

  try {
    $records = $obj -> getUsers($current, $limit);
  }
  catch (Exception $e) {
    echo $e -> getMessage();
  }

  echo "<tr>";

  foreach ($records as $keys => $record) {
    if ($record['id'] == $_GET['id']) {
      echo "<form class='form-inline' method='post'>";
      echo "<td>" . $record['id'] . "</td>";
      echo '<td><input type="text" name="name" id="name" value="'.$record['name'].'"></td>';
      echo '<td><input type="text" name="des" id="designation" value="'.$record['designation'].'"></td>';
      echo '<td>
                <button onclick="updateData('.$record['id'], $record['name'], $record['designation'].')" class="btn btn-success">Save</button>
                <input type="hidden" name="id" value="'.$record['id'].'">
            </td>';
      echo "</form>";
      echo "</tr>";

    }
  
    else {
        echo "<td>" . $record['id'] . "</td>";
        echo "<td>" . $record['name'] . "</td>";
        echo "<td>" . $record['designation'] . "</td>";
        echo '<td class="controls">
                <a class="btn btn-success" href="index.php?page='.$page.'&id=' . $record['id'] . '" role="button">Update</a>
                <a class="btn btn-danger" href="delete.php?id=' . $record['id'] . '" role="button">Delete</a>
              </td>';
        echo "</tr>";
    }
  }
?>

<script>
  function updateData(id, name, designation) {
        name = $('#name').val();
        alert(name);
    }
</script>