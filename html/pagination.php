<?php

try {
    $pages = $obj -> getPages(5);
  }
  catch (Exception $e) {
    echo $e -> getMessage();
  }

  $start = 1;

  if(isset($_GET['page'])) {
    $start = $_GET['page'];
  }

  for($page = 1; $page <= $pages; $page++) {

    if($page == $start) {
      echo "<a class='active m-2' href='index.php?page=$page'>$page</a>";
    }
    else {
      echo "<a class='m-2' href='index.php?page=$page'>$page</a>";
    }
  }
  
  




// <!-- <script>
// $(document).ready(function() {
// $("#target-content").load("pagination.php?page=1");
// $(".page-link").click(function(){
// var id = $(this).attr("data-id");
// var select_id = $(this).parent().attr("id");
// $.ajax({
// url: "pagination.php",
// type: "GET",
// data: {
// page : id
// },
// cache: false,
// success: function(dataResult){
// $("#target-content").html(dataResult);
// $(".pageitem").removeClass("active");
// $("#"+select_id).addClass("active");

// }
// });
// });
// });
// </script> -->