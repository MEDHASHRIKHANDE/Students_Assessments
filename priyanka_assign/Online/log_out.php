<?php
  $conn = mysqli_connect("localhost","root","","notice");
  if($conn == True && isset($_POST['logout'])){
    session_start();
    session_destroy($_SESSION['name']);
    echo "<h1>Log Out successfull</h1>";
  }
 ?>
