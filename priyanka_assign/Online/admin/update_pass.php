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
    <style media="screen">
      p{
        font-size: 12px;
      }
    </style>
  </head>
  <body>
    <div class="header" style="background:black; height:50px; padding:12px;">
      <?php
      session_start();
      $user = $_SESSION['name'];
      echo "<h5 class='text-light'>Hello " .$_SESSION['name']."</h5>";
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
                <a href="manage_notification.php" class="btn text-primary"><span class="fa fa-envelope">  Manage Notifications</span></a>
                <a href="update_pass.php" class="btn text-primary"><span class="fa fa-user"></span>  Update Password</a>
                <a href="update_user.php" class="btn text-primary"><span class="fa fa-user"></span>  Update User</a><br>
                <a href="log_out.php" class="btn text-primary"><span class="fa fa-sign-out"></span>  Log Out</a>
          </div>
        </div>
        <div class="col-lg-9">
          <h2>Manage Password</h2>
          <?php
          $conn = mysqli_connect("localhost","root","","notice");
          $sql = "select *from admin where username='$user'";
          $res = mysqli_query($conn,$sql);
          if($res == True){
            $record = mysqli_fetch_assoc($res);
            $db_name = $record['username'];
            $db_pass = $record['password'];
          }else{

          }
           ?>
          <form class="" action="" method="post">
            <div class="form-group row">
              <label for="username" class="col-lg-2 py-2">Username : </label>
              <input type="text" class="col-lg-6 form-control" name="username" value="<?php echo $db_name; ?>" readonly>
            </div>
            <div class="form-group row">
              <label for="Password" class="col-lg-2 py-2">Old Password : </label>
              <input type="text" class="col-lg-6 form-control" name="old_pass" value="<?php echo $db_pass; ?>">
            </div>
            <div class="form-group row">
              <label for="Password" class="col-lg-2 py-2">New Password : </label>
              <input type="text" class="col-lg-6 form-control" name="new_pass" value="">
            </div>
            <input type="submit" class="btn btn-primary" name="update_pass" value="Change Password" style="margin-left: 250px;">
          </form>
        </div>
      </div>
    </div>
    <?php
    if ($conn == True && isset($_POST['update_pass'])) {
      $newpass = $_POST['new_pass'];
      $sql = "update admin set password='$newpass' where username='$user'";
      $res = mysqli_query($conn,$sql);
      header('Location: dash.php?msg=Password Changed');
    }

    ?>
    <div class="">
      <center><h1 class="text-primary"><?php
      if (isset($_GET['msg'])) {
        echo $_GET['msg'];
      }
       ?></h1></center>
    </div>
  </body>
</html>
