<?php
$conn = mysqli_connect("localhost","root","","notice");

if($conn == True && isset($_POST['login'])){

  $username = $_POST['username'];
  $pass = $_POST['password'];

  $sql = "select *from admin where username='$username' and password='$pass'";
  $res = mysqli_query($conn,$sql);

  if($res == True){

    $record = mysqli_fetch_assoc($res);

    $db_username = $record['username'];
    $db_pass = $record['password'];

    if($username === $db_username && $pass === $db_pass){

      session_start();
      $_SESSION['name']= $record['username'];
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
