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
          <h2>Manage Users</h2>
            <table class="table">
              <tr class="bg-info text-light">
                <th style="width: 50px;">Sr.No</th>
                <th style="width: 150px;">Subject</th>
                <th style="width: 300px;">Details</th>
                <th style="width: 150px;">User</th>
                <th style="width: 250px;">Date</th>
                <th>Delete</th>
                <th>Update</th>
              </tr>
              <?php
              $conn = mysqli_connect("localhost","root","","notice");
              $user = $_SESSION['name'];
              $qry = "select *from notification";
              $res = mysqli_query($conn,$qry);
              $serial;
              if($res == True){
                $i= 1;
                while($row=mysqli_fetch_assoc($res)){
                  $serial = $row['sr'];
                  $name_d = $row['subject'];
                  echo "<tr>";
                  echo "<td>"."<p>".$i."</p>"."</td>";
                  echo "<td>"."<p>".$row['subject']."</p>"."</td>";
                  echo "<td>"."<p>".$row['details']."</p>"."</td>";
                  $name=$row['user_name'];
                  echo "<td>"."<p>".$row['user_name']."</p>"."</td>";
                  echo "<td>"."<p>".$row['date']."</p>"."</td>";
                  echo "<form method='post' action='' >";
                  echo "<input type='text' name='$serial' style='display:none;' value='$serial'>";
                  echo "<td>"."<button type='submit' class='fa fa-trash-o text-danger' name='submit1'></button>"."</td>";
                  echo "<td>"."<button type='submit' class='fa fa-pencil-square-o' name='submit2'></button>"."</td>";
                  echo "</form>";
                  $i++;

                }
              }
               ?>
            </table>
            <?php
                  if (isset($_POST['submit1'])) {
                  $conn = mysqli_connect("localhost","root","","notice");

                    $record = mysqli_fetch_assoc($res);
                    $user_name = $record['name'];
                    $sql2 = "delete from notification where sr=$serial";
                    $res2 = mysqli_query($conn,$sql2);
                    if ($res2) {
                        header('Location: dash.php?msg=Notice Deleted');
                    }
                  }else{

                  }


             ?>
        </div>
      </div>
    </div>
    <div class="">
      <center><h1 class="text-primary"><?php
      if (isset($_GET['msg'])) {
        echo $_GET['msg'];
      }
       ?></h1></center>
    </div>
  </body>
</html>
