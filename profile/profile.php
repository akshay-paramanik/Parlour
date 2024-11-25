<?php
session_start();
require_once "../admin/pages/connect.php";
if(isset($_SESSION['email'])){
  $email = $_SESSION['email'];
  $sql = "select * from `user` where email = '$email'";
  $res = mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="profile.css">
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
        <div class="navbar">
            <div class="brand"><h1>Parlour</h1></div>
            <div class="logout">
              <a href="../logout.php">
            <i class="fa-solid fa-right-from-bracket"></i>
            Logout
            </a>
            </div>
        </div>

          <?php
  if($res){
  $udata = mysqli_fetch_assoc($res);
          ?>
        <div class="top">
          <div class="name-image">
            <div class="image-part">
            <img src="../images/profile-user.png" alt="">
            </div>
            <div class="name-part">
            <h2>Hi,</h2>
            <?php
              if($udata['gender'] == "Male"){?>
              <h2 id="name">Mr. <?php echo $udata['name']; ?></h2>
              <?php

              }else if($udata['gender'] == "Female"){?>
              <h2 id="name">Ms. <?php echo $udata['name']; ?></h2>
              <?php

              }else{?>
              <h2><?php echo $udata['name']; ?></h2>
              <?php
              }
            ?>
            <p>Welcome</p>
            </div>
          </div>
          <div class="email-mobile">
            <p><?php echo $email; ?></p>
            <p><?php echo $udata['mobile']; ?></p>
          </div>
          <div class="appointment-count">
            <h3>Appointment</h3>
            <p><?php echo $udata['appointment']; ?></p>
          </div>
          
        </div>
        <div class="edit-profile">
          Edit Profile
        </div>
        <div class="bottom">
          <div class="tabs">
            <button type="button" class="btn-group" id="done">Appointment done</button>
            <button type="button" class="btn-group" id="pendding">Appointment pendding</button>
            <button type="button" class="btn-group" id="garaly-apnt">Galary</button>
          </div>
          <div class="tab-content">
            <div id="apnt-done">
              <table>
                <tr>
                  <th>Name</th>
                  <th>Service type</th>
                  <th>Date</th>
                  <th>Done by</th>
                  <th>Artist name</th>
                </tr>
                <tr>
                  <td class="name"></td>
                  <td>Hair Style</td>
                  <td>15/01/2024</td>
                  <td>02/02/2024</td>
                  <td>Leo Chong</td>
                </tr>
              </table>
            </div>
            <div id="apnt-pendding">
              <table>
                <tr>
                  <th>Name</th>
                  <th>Service type</th>
                  <th>Date</th>
                  <th>Artist name</th>
                </tr>
                <?php
                $pendsql = "select * from `appointment`";
                $pendres = mysqli_query($con,$pendsql);
                if(mysqli_num_rows($pendres)){
                  while($penddata = mysqli_fetch_assoc($pendres)){
                    ?>

                <tr>
                  <td class="name"></td>
                  <td><?php echo $penddata['type']; ?></td>
                  <td><?php echo $penddata['apnt_date']; ?></td>
                  <td><?php echo $penddata['artist']; ?></td>
                </tr>
                <?php
              }
                }
                ?>
              </table>
            </div>
            <div id="galary">
              <div class="galary-image">
                <img src="" alt="">
              </div>

              <div class="galary-image">
                <img src="" alt="">
              </div>

              <div class="galary-image">
                <img src="" alt="">
              </div>

              <div class="galary-image">
                <img src="" alt="">
              </div>
              
              <div class="galary-image">
                <img src="" alt="">
              </div>

              <div class="galary-image">
                <img src="" alt="">
              </div>

              <div class="galary-image">
                <img src="" alt="">
              </div>
              
              <div class="galary-image">
                <img src="" alt="">
              </div>

              <div class="galary-image">
                <img src="" alt="">
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
    </div>
    <script src="profile.js"></script>
  </body>
  </html>
<?php
}else{
  header("location:../logout.php");
}
?>