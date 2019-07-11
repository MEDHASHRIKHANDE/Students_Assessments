<?php
$conn = mysqli_connect("localhost","root","","notice");

if($conn == True && isset($_POST['login'])){

  $email = $_POST['email'];
  $pass = $_POST['password'];

  $sql = "select *from user_data where email='$email' and password='$pass'";
  $res = mysqli_query($conn,$sql);

  if($res == True){

    $record = mysqli_fetch_assoc($res);

    $db_email = $record['email'];
    $db_pass = $record['password'];

    if($email === $db_email && $pass === $db_pass){

      session_start();
      $_SESSION['name']= $record['name'];
      $user = $_SESSION['name'];
      header('Location: dash.php?msg=logedin');

    }else{
      header('Location: login.php?msg=Check Username And Password');
    }

  }else{
    header('Location: login.php?msg=Something Went Wrong');
  }

}else{

}


 ?>
