<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper align-center.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Online Notice Board</title>
    <style media="screen">
      *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }
      img{
        width: 100%;
      }
      .form{
        margin-top: 50px;
      }
      .footer{
        margin-top: 100px;
      }
    </style>
  </head>
  <body>
    <div class="header">
      <nav class="navbar fixed-top" style="background:black">
        <div class="container">
          <ul class="nav navbar-left">
            <li class="nav-item"><a class="nav-link text-dark" href="index.php"><strong>Online Notice Board</strong></a></li>
            <li class="nav-item"><a class="nav-link text-dark" href="index.php"><span class="fa fa-user"><span>About</a></li>
            <li class="nav-item"><a class="nav-link text-dark" href="index.php"><span class="fa fa-phone"><span>Contact</a></li>
          </ul>
          <ul class="nav navbar-right">
            <li class="nav-item"><a class="nav-link text-dark" href="signup.php"><span class="fa fa-user-plus"><span>Sign Up</a></li>
            <li class="nav-item"><a class="nav-link text-dark" href="login.php"><span class="fa fa-sign-in"><span>Log In</a></li>
          </ul>
        </div>
      </nav>
    </div>
    <div class="carousel slide" id="myCarousel" data-ride="carousel">
      <ul class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ul>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/slider1.jpg" alt="">
        </div>
        <div class="carousel-item">
          <img src="images/slider2.jpg" alt="">
        </div>
        <div class="carousel-item">
          <img src="images/slider3.jpg" alt="">
        </div>
      </div>
      <a href="#myCarousel" class="carousel-control-prev" data-slide="prev"role="button"><span class="fa fa-chevron-left" ></span></a>
      <a href="#myCarousel" class="carousel-control-next" data-slide="next"role="button"><span class="fa fa-chevron-right" ></span></a>
    </div>
    <div class="main_container container">
      <form class="form" action="" method="post"enctype="multipart/form-data">
        <h2 class="text-primary">Registration Form</h2>
        <div class="form-group row">
          <label for="name" class="col-lg-2 py-2">Enter Your Name : </label>
          <input type="text" class="form-control col-lg-6" name="name" placeholder="Name" required>
        </div>
        <div class="form-group row">
          <label for="email" class="col-lg-2 py-2">Enter Your Email :</label>
          <input type="email" class="form-control col-lg-6" name="email" placeholder="Email" required>
        </div>
        <div class="form-group row">
          <label for="password" class="col-lg-2 py-2">Enter Your Password :</label>
          <input type="password" class="form-control col-lg-6"  name="password" placeholder="Password" required>
        </div>
        <div class="form-group row">
          <label for="mobile" class="col-lg-2 py-2">Enter Your Mobile :</label>
          <input type="text" class="form-control col-lg-6"  name="mobile" placeholder="Mobile No." required>
        </div>
        <div class="form-group row">
          <label for="gender" class="col-lg-2 py-2">Select Your Gender</label>
          <div class="col-lg-4 py-2">
            <label>Female</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="radio" class="form-check-input" name="gender" value="female">&nbsp&nbsp&nbsp&nbsp&nbsp
            <label>Male</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="radio" class="form-check-input" name="gender" value="male">
          </div>
        </div>
        <div class="form-group row">
          <label for="hobbies" class="col-lg-2 py-2">Choose Your Hobbies</label>
          <div class="col-lg-6 py-2">
            <label for="">Reading</label>&nbsp&nbsp&nbsp&nbsp&nbsp
            <input type="checkbox" class="form-check-input" name="read" value="singing">
            <label for="">Singing</label>&nbsp&nbsp&nbsp&nbsp&nbsp
            <input type="checkbox" class="form-check-input" name="sing" value="reading">
            <label for="">Playing</label>&nbsp&nbsp&nbsp&nbsp&nbsp
            <input type="checkbox" class="form-check-input" name="play" value="playing">
          </div>
        </div>
        <div class="form-group row">
          <label for="photo" class="col-lg-2 py-2">Upload Your Hobbies</label>
          <input type="file" class="col-lg-6 py-2" name="img" value="">
        </div>
        <div class="form-group row">
          <label for="dob" class="col-lg-2 py-2">Enter Your Birth Date</label>
          <input type="date"class="col-lg-2" name="dob" value="">
        </div>
        <div class="col-lg-6" style="margin-top: 30px;">
          <center>
            <input type="submit" name="save_data" class="btn btn-primary" style="width:100px;" value="Save" data-toggle="modal" data-target="#myModal">
            <input type="reset" name="reset" value="Reset" class="btn btn-primary" style="width:100px;" >
          </center>
        </div>
      </form>
    </div>
    <div class="footer">
      <nav class="navbar" style="background:black">
        <div class="container">
          <ul class="nav navbar-left">
            <li class="nav-item"><a class="nav-link text-dark" href="index.php">Developed By Priyanka</a></li>
          </ul>
        </div>
      </nav>
    </div>
    <?php
     //include 'conn.php';
     $conn = mysqli_connect("localhost","root","","notice");

    if($conn == True && isset($_POST['save_data'])){

      $name = $_POST['name'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $mobile = $_POST['mobile'];
      $gender = $_POST['gender'];
      $reading = $_POST['read'];
      $singing = $_POST['sing'];
      $playing = $_POST['play'];
      $dob = $_POST['dob'];//print_r($_FILES['img']);
      //die();
      //$file_name = $_FILES['img']['name'];
      //$temp_name = $_FILES['img']['tmp_name'];
      //$folder = "image/";

      //move_uploaded_file($temp_name, $folder.$file_name);


    //  if ($read == null) {
    //    $read = "NA";
    //  }
    //  if($sing == null){
      //  $sing = "NA";
    //  }
      //if($play == null){
      //  $play = "NA";
      //}

      $sql="insert into user_data values(null, '$name','$email','$password','$mobile','$gender','$reading','$singing','$playing','$dob')";
      $res = mysqli_query($conn,$sql);
      if($res == True){
        $result = "Account Has Been Created";
      }else{
        $result = "Account Not Created";
      }
     }else{
       $result = "Connection Error";
     }

     ?>
    <div class="modal" tabindex="-1" id="myModal" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" name="button"><span aria-hidden="true">x</span></button>
          </div>
          <div class="modal-body">
            <p><?php echo $result; ?></p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

</body>
</html>
