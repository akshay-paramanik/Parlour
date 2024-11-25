<?php
require_once "connect.php";
session_start();
$sql = "select a.type,a.artist,a.status,a.apnt_date,u.email,u.mobile from appointment as a inner join user as u on a.user_id = u.id";
$res = mysqli_query($con,$sql);
$count = mysqli_num_rows($res);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="../css/appointment.css">
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
          <div class="item"><a href="../index.html">Dashbord</a></div>
          <div class="item"><a href="services.php">Services</a></div>
          <div class="item"><a href="users.html">Users</a></div>
          <div class="item"><a href="">Appointments</a></div>
          <div class="item"><a href="">Sales</a></div>
          <div class="item"><a href="employee.php">Employees</a></div>
          <div class="item"><a href="">Events</a></div>
          <div class="item"><a href="">Feedbacks</a></div>
        </div>
        <div class="right-part">
            <div class="appointment-container">
                <div class="header">
                    <h2>Appointments</h2>
                </div>
                <div class="appointment-data">
                    <table>
                        <tr>
                            <th>Serial No.</th>
                            <th>User email</th>
                            <th>User mobile</th>
                            <th>Service Type</th>
                            <th>Artist</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        <?php
                          if($count>0){
                            while($data = mysqli_fetch_assoc($res)){
                              if($data['status'] == 0){
                                $status = "Pendding";
                              }else{
                                $status = "Done";
                              }
                        ?>
                        <tr>
                            <td>1</td>
                            <td><?php echo $data['email']; ?></td>
                            <td><?php echo $data['mobile']; ?></td>
                            <td><?php echo $data['type']; ?></td>
                            <td><?php echo $data['artist']; ?></td>
                            <td><?php echo $data['apnt_date']; ?></td>
                            <td><?php echo $status; ?></td>
                            <td><a href="">Delete</a><br><a href="">Edit</a></td>
                        </tr>
                        <?php
                                                      
                          }
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
      </div>
    </div>
</body>
</html>