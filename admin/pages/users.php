<?php
require_once "connect.php";
$sql = "select * from user";
$res = mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../css/common.css" />
    <link rel="stylesheet" href="../css/user.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=Lugrasimo&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lugrasimo&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <div class="container">
      <div class="top">
        <div class="brand"><h1>Parlour</h1></div>
        <div class="profile">
          <div class="profile-image"></div>
          <span>Profile</span>
        </div>
      </div>
      <div class="bottom">
        <div class="left-part">
          <div class="item"><a href="../index.php">Dashbord</a></div>
          <div class="item"><a href="services.php">Services</a></div>
          <div class="item"><a href="">Users</a></div>
          <div class="item"><a href="appointments.php">Appointments</a></div>
          <div class="item"><a href="">Sales</a></div>
          <div class="item"><a href="employee.php">Employees</a></div>
          <div class="item"><a href="">Events</a></div>
          <div class="item"><a href="">Feedbacks</a></div>
        </div>
        <div class="right-part">
          <div class="header">
            <h2>Users</h2>
            <div class="search">
              <input type="text" name="" id="" />
              <i class="fa-solid fa-magnifying-glass"></i>
            </div>
          </div>
          <div class="user-part">
            <table>
              <tr>
                <th>Serial No.</th>
                <th>Name</th>
                <th>Email address</th>
                <th>Mobile No.</th>
                <th>Gender</th>
                <th>Appointments</th>
                <th>Action</th>
              </tr>
              <?php 

                  $count=1;
                  while($data= mysqli_fetch_assoc($res)){
                    ?>
                       <tr>
                <td><?php echo $count++; ?></td>
                <td><?php echo $data['name']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td><?php echo $data['mobile']; ?></td>
                <td><?php echo $data['gender']; ?></td>
                <td><?php echo $data['appointment']; ?></td>
                <td><a href="">Delete</a>||<a href="">Block</a></td>
              </tr>
                    <?php
                  }

              ?>

           
              
            </table>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
