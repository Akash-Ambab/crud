<?php
  $start = 1;

  if(isset($_POST['pageNo'])) {
    $start = $_POST['pageNo'];
  }

  try {
    $pages = $obj -> getPages(5);
  }
  catch (Exception $e) {
    echo $e -> getMessage();
  }

  for($page = 1; $page <= $pages; $page++) {

    if($page == $start) {
      echo "<button class='active m-2' onclick=goToPage($page)>$page</button>";
    }
    else {
      echo "<button class='m-2' onclick=goToPage($page)>$page</button>";
    }
  }
?>

<script>
  function goToPage(pageNo) {
    $.ajax({
      url: "read.php",
      type: "POST",
      data: {pageNo : pageNo},
      success: function(result) {
        $("table").html("");
        $(".pagination").html("");
        $("table").html(result);
      }
    })
  }
</script>