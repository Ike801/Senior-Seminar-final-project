<?php

  $id = $_GET['id'];
  // do some validation here to ensure id is safe

  require_once 'includes/fnadbh.inc.php';
  $sql = "SELECT imageContent FROM fanarts WHERE imageId=$id";
  $result = mysqli_query($conn, "$sql");
  $row = mysqli_fetch_assoc($result);
  mysqli_close($conn);

  header("content-type: image/png");
  echo $row['imageContent'];