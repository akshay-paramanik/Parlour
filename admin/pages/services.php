<?php
require_once "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../css/common.css" />
    <link rel="stylesheet" href="../css/services.css" />
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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
          <div class="item"><a href="">Services</a></div>
          <div class="item"><a href="users.html">Users</a></div>
          <div class="item"><a href="appointments.php">Appointments</a></div>
          <div class="item"><a href="">Sales</a></div>
          <div class="item"><a href="employee.php">Employees</a></div>
          <div class="item"><a href="">Events</a></div>
          <div class="item"><a href="">Feedbacks</a></div>
        </div>
        <div class="right-part">
          <div class="services">
            <div class="header">
              <h2>Services</h2>
              <div class="short-add">
                <div class="short" id="drop-down">Short by</div>
                <p id="adding" onclick="myfun('myModal')">Add more services</p>
              </div>
              <div id="drop-list">
                <p onclick="orderBy('desc');">Women's to Men's</p><br /><p onclick="orderBy('asc')"
                  >Men's to Women's</p>
              </div>
            </div>
            <div class="model" id="myModal">
              <div class="model-container">
                <div class="model-header">
                  <h2>Add Services</h2>
                  <p style="display: none;" id="order"></p>
                <i
            class="fa-solid fa-rectangle-xmark"
            id="closeWin"
            onclick="closeWin('myModal')"
          ></i>
                </div>
                <div class="addservice">
                  <div class="service-image">
                    <label for="sinput">
                      <span id="plush">Add Picture</span>
                    <img src="" id="service-img" alt="">
                    </label>
                    </div>
                    <div class="form-container">
                    <form action="process.php" method="post" enctype="multipart/form-data">
                    <input type="file" name="serimg" value="" id="sinput">
                    <label for="">Service name</label>
                    <input type="text" name="service" id="">
                    <label for="">Gender</label>
                    <select name="gen" id="">
                      <option value="">Select Gender</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                    <label for="">Price</label>
                    <input type="number" name="price" id="">
                    <input type="submit" name="addservice" value="ADD NOW">
                  </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="service-container">
              <?php
              $sql = "select * from service order by time desc";
              $res = mysqli_query($con,$sql);
              $count = mysqli_num_rows($res);
              if($count>0){
                $item = 1;
                while($data = mysqli_fetch_assoc($res)){

                  ?>
                  <div class="service-card" id="service">
                <span><?php echo $item++; ?></span>
                <div class="image-part">
                  <img src="../<?php echo $data['imagepath']; ?>" alt="">
                </div>
                <div class="type">
                  <div class="title">
                    <h3><?php echo $data['name']; ?></h3>
                  </div>
                  <div class="price">
                    <i class="fa-solid fa-indian-rupee-sign"></i
                    ><span><?php echo $data['price']; ?></span>
                  </div>
                </div>
                <div class="gen"><?php echo $data['gender']; ?></div>
                <div class="action">
                  <a href="action.php?req=delete&id=<?php echo $data['id']; ?>">Delete</a>||<a href="">Edit</a>
                </div>
              </div>
                  <?php

                }
              }
              ?>
              

              
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="../js/services.js"></script>
  </body>
</html>
