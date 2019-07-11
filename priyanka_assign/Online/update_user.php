<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper align-center.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <title>Dashboard</title>
  </head>
  <body>
    <div class="header" style="background:black; height:50px; padding:12px;">
      <?php
      session_start();
      $user = $_SESSION['name'];
      echo "<h5 class='text-light'>Hello " .$user."</h5>";
       ?>
    </div>
    <div class="container-fluid" style="margin-top: 20px;">
      <div class="row">
        <div class="col-lg-3">
          <div class="bg-primary" style="width:100%; height:60px;">
            <h4 class="text-light px-2 py-3">Dashboard</h4>
          </div>
          <img src="images/person.jpg" alt="" height="200px">
          <div class="" style="margin-top: 20px; margin-left:50px">
            <a href="dash.php" class="btn text-primary"><span class="fa fa-envelope">  Notifications</span></a>
            <a href="update_user.php" class="btn text-primary"><span class="fa fa-user"></span>  Update Password</a>
            <a href="update_profile.php" class="btn text-primary"><span class="fa fa-user"></span>  Update Profile</a><br>
            <a href="log_out.php" class="btn text-primary"><span class="fa fa-sign-out"></span>  Log Out</a>
          </div>
        </div>
        <?php
          $conn = mysqli_connect("localhost","root","","notice");

          $sql = "select *from user_data where name='$user'";

          $res = mysqli_query($conn, $sql);

          if($res == True){
            $record = mysqli_fetch_assoc($res);
            $db_pass = $record['password'];
          }else{
          }
         ?>
        <div class="col-lg-9">
          <form class="" action="" method="post">
            <div class="form-group row">
              <label for="old_pass" class="col-lg-2 py-2">Old Password : </label>
              <input type="text" class="form-control col-lg-4" name="old_pass" value="<?php echo $db_pass; ?>" readonly><br>
            </div>
            <div class="form-group row">
              <label for="new_pass" class="col-lg-2 py-2">New Password : </label>
              <input type="text" class="form-control col-lg-4" name="new_pass" value="" placeholder="New Password"><br>
            </div>
            <input type="submit" name="update_password" value="Change Password" class="btn btn-primary">
          </form>

        </div>
      </div>
    </div>
    <?php

    if($conn == True && isset($_POST['update_password'])){
      $newpass = $_POST['new_pass'];
      $sqlcp = "update user_data set password = '$newpass' where name ='$user' ";
      $res = mysqli_query($conn,$sqlcp);
      header('Location: dash.php?msg=Password Changed');
    }
     ?>
  </body>
</html>
