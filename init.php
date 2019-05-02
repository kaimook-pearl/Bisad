<?php
  $conn = mysqli_connect('localhost', 'root', '', 'test') or die(mysqli_error($conn));
  mysqli_set_charset($conn, "utf8");
?>