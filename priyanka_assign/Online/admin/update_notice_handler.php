<?php
  if(isset($_POST['submit'])){
    $users = $_POST['users'];
    $subject = $_POST['subject'];
    $details = $_POST['details'];
    $date = 'SYSDATE()';
    $conn = mysqli_connect("localhost","root","","notice");
    foreach ($users as $select) {
      $user = $select;
    }
    $sql = "update notification set subject = '$subject', details = '$details',date = $date where user_name='$user'";

    $res = mysqli_query($conn,$sql);
    if($res){
      header('Location: update_user.php');
    }else{
      echo "Error";
    }
  }else{
    echo "Come In Right Way!";
  }
 ?>
