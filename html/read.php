<?php
  include '../db.php';
  $query  = "select * from users";
  $result  = $conn->query($query);
  while($row = $result->fetch_assoc()) {
    echo "<tr>";

    if ($row['id'] == $_GET['id']) {
        echo "<form class='form-inline m-2' action='update.php' method='post'>";
        echo '<td><input type="text" name="name" value="'.$row['name'].'"></td>';
        echo '<td><input type="text" name="des" value="'.$row['designation'].'"></td>';
        echo '<td><button type="submit" class="btn btn-success">Save</button></td>';
        echo '<td><input type="hidden" name="id" value="'.$row['id'].'"></td>';
        echo "</form>";

    }
    
    else {
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['designation'] . "</td>";
        echo '<td><a class="btn btn-success" href="index.php?id=' . $row['id'] . '" role="button">Update</a></td>';
        echo '<td><a class="btn btn-danger" href="delete.php?id=' . $row['id'] . '" role="button">Delete</a></td>';
        echo "</tr>";
    }
  }
  $conn->close();
?>