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
      $conn = mysqli_connect("localhost","root","","notice");
      $sql = "select *from user_data where name = '$user'";
      $res = mysqli_query($conn,$sql);

      if($res == True){

        $record = mysqli_fetch_assoc($res);

        $name = $record['name'];
        $email = $record['email'];
        $mobile = $record['mobile'];

      }

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
        <div class="col-lg-9">
          <?php

           ?>
          <center><h3>Update Your Profile</h3></center>
          <hr>
          <form class="" action="" method="post">
            <div class="form-group row">
              <label for="name" class="col-lg-3 py-2">Enter Your Name :</label>
              <input type="text" class="form-control col-lg-8" name="name" value="<?php echo $name; ?>">
            </div>
            <div class="form-group row">
              <label for="email" class="col-lg-3 py-2">Enter Your Email :</label>
              <input type="email" class="form-control col-lg-8" name="email" value="<?php echo $email; ?>" readonly>
            </div>
            <div class="form-group row">
              <label for="mobile" class="col-lg-3 py-2">Enter Your Mobile :</label>
              <input type="text" class="form-control col-lg-8" name="mobile" value="<?php echo $mobile; ?>">
            </div>
            <center>
              <input type="submit" class="btn btn-primary" name="update" value="Update My Profile">
              <input type="reset" name="" class="btn btn-primary" value="Reset">
            </center>
          </form>
        </div>
      </div>
    </div>
    <?php
      if($conn == True && isset($_POST['update'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $sql = "update user_data set name='$name',mobile='$mobile' where email ='$email'";
        $res = mysqli_query($conn,$sql);
        if ($res == True) {
          echo "<center><h3 class='text-primary'>Update Successfull</h3></center>";
        }else{
          echo "Error";
        }
      }
     ?>
  </body>
</html>
