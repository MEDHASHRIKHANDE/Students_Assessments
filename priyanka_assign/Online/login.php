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
    <div class="container" style="margin-top: 40px;">
      <div class="row">
        <div class="col-lg-6">
          <form class="" action="login_handler.php" method="post">
            <div class="form-group row">
              <label for="email" class="col-lg-4 py-2">Enter Your Email :</label>
              <input type="email" class="form-control col-lg-7" name="email" placeholder="Email Id">
            </div>
            <div class="form-group row">
              <label for="password" class="col-lg-4 py-2">Enter Your Password :</label>
              <input type="password" class="form-control col-lg-7" name="password" placeholder="Password">
            </div>
            <center><input type="submit" name="login" class="btn btn-success" value="Log In"></center>
          </form>
        </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <div class="card-title">
                <h5>Latest News</h5>
              </div>
              <div class="card-text">
                <p>This is the best website for you.come check it out bro....</p>
              </div>
            </div>
          </div>
        </div>
      </div>
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
  </body>
</html>
