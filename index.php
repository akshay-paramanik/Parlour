<?php
session_start();
require_once "admin/pages/connect.php";
$wsql = "select * from service where gender='Female' order by time desc";
$wres = mysqli_query($con,$wsql);
$wcount = mysqli_num_rows($wres);

$msql = "select * from service where gender='Male' order by time desc";
$mres = mysqli_query($con,$msql);
$mcount = mysqli_num_rows($mres);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
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
    <div id="top" onclick="window.location.href='#parlour'"><i class="fa-solid fa-angle-up"></i></div>
      <div class="uper-body">
        <div class="uper-container">
          <div class="navbar">
            <div class="brand" id="parlour"><h1>Parlour</h1></div>
            <div class="menu" id="menu">
              <img
                width="50"
                height="50"
                src="https://img.icons8.com/ios-filled/50/FFFFFF/menu--v6.png"
                alt="menu--v6"
              />
            </div>
            <div id="navbar-item">
              <ol>
                <li id="close">
                  <img
                    width="30"
                    height="30"
                    src="https://img.icons8.com/ios-glyphs/30/FFFFFF/delete-sign.png"
                    alt="delete-sign"
                  />
                </li>
                <li>
                  <a href="" class="list">Home</a>
                </li>
                <li><a href="" class="list">Services</a></li>
                <li><a href="about/about.html" class="list">About</a></li>
                <?php
              if(isset($_SESSION['email'])){

                ?>
              <li><a href="profile/profile.php" class="list">Profile</a></li>

                <?php

              }else{

                ?>
              <li><a href="login/login.php" class="list">Log in</a></li>
                <?php

              }
              ?>
              </ol>
            </div>
            <ul>
              <li><a href="" class="list">Home</a></li>
              <li><a href="services/service.php" class="list">Services</a></li>
              <li><a href="about/about.php" class="list">About</a></li>
              <?php
              if(isset($_SESSION['email'])){

                ?>
              <li><a href="profile/profile.php" class="list">Profile</a></li>

                <?php

              }else{

                ?>
              <li><a href="login/login.php" class="list">Log in</a></li>
                <?php

              }
              ?>
            </ul>
          </div>
          <div class="main-nav">
            <div class="description">
              <div class="heading">
                <h1>Nature makes buety for Attraction</h1>
                <h4>make your buety with best brand</h4>
              </div>
            </div>
            <div class="appointment">
              <button type="button" class="appointment-btn" onclick="window.location.href='booking/booking.php';">
                Book Appointment
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="services">
        <div class="female-services">
          <div class="headig">
            <h2>Women's Services</h2>
            <div class="scroll">
              <div onclick="leftClick('women')" class="arrow">
                <img
                  width="48"
                  height="48"
                  src="https://img.icons8.com/external-tanah-basah-basic-outline-tanah-basah/48/external-circle-arrows-tanah-basah-basic-outline-tanah-basah-6.png"
                  alt="external-circle-arrows-tanah-basah-basic-outline-tanah-basah-6"
                />
              </div>
              <div onclick="rightClick('women')" class="arrow">
                <img
                  width="48"
                  height="48"
                  src="https://img.icons8.com/external-tanah-basah-basic-outline-tanah-basah/48/external-circle-arrows-tanah-basah-basic-outline-tanah-basah-7.png"
                  alt="external-circle-arrows-tanah-basah-basic-outline-tanah-basah-7"
                />
              </div>
            </div>
          </div>
          <div class="service-body" id="women">
            <div class="services-container">
              <?php
                if($wcount>0){
                  while($wdata = mysqli_fetch_assoc($wres)){

                    ?>
                <a href="booking/booking.php?req=type&name=<?php echo $wdata['name']; ?>">
              <div class="card">
                <div class="image-container">
                  <img src="admin/<?php echo $wdata['imagepath']; ?>" alt="" />
                </div>
                <div class="title">
                  <p><?php echo $wdata['name']."<br>"; ?><i class="fa-solid fa-indian-rupee-sign"></i><?php echo $wdata['price']; ?></p>
                </div>
              </div>
            </a>
                    <?php
                  }
                }
              ?>
              
              
            </div>
          </div>
        </div>
        <div class="mens-services">
          <div class="headig">
            <h2>Men's Services</h2>
            <div class="scroll">
              <div onclick="leftClick('men')" class="arrow">
                <img
                  width="48"
                  height="48"
                  src="https://img.icons8.com/external-tanah-basah-basic-outline-tanah-basah/48/external-circle-arrows-tanah-basah-basic-outline-tanah-basah-6.png"
                  alt="external-circle-arrows-tanah-basah-basic-outline-tanah-basah-6"
                />
              </div>
              <div onclick="rightClick('men')" class="arrow">
                <img
                  width="48"
                  height="48"
                  src="https://img.icons8.com/external-tanah-basah-basic-outline-tanah-basah/48/external-circle-arrows-tanah-basah-basic-outline-tanah-basah-7.png"
                  alt="external-circle-arrows-tanah-basah-basic-outline-tanah-basah-7"
                />
              </div>
            </div>
          </div>
          <div class="service-body" id="men">
          <div class="services-container">
              <?php
                if($mcount>0){
                  while($mdata = mysqli_fetch_assoc($mres)){

                    ?>
                    <a href="booking/booking.php?req=type&name=<?php echo $mdata['name']; ?>">
              <div class="card">
                <div class="image-container">
                  <img src="admin/<?php echo $mdata['imagepath']; ?>" alt="" />
                </div>
                <div class="title">
                <p><?php echo $mdata['name']."<br>"; ?><i class="fa-solid fa-indian-rupee-sign"></i><?php echo $mdata['price']; ?></p>
                </div>
              </div>
              </a>
                    <?php
                  }
                }
              ?>
              
              
            </div>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="product-body">
          <div class="text-container">
            <h1>Product we use</h1>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum
              quas eaque sunt vero! Dolores iste, perferendis mollitia iusto ut
              aut tenetur incidunt veniam modi hic, nesciunt quam? Dignissimos,
              laborum illum? Cum, perferendis commodi aliquid facilis dolore
              quae quisquam voluptates non! Quos eligendi, quam quasi culpa
              <a href="#">Learn more</a>
            </p>
            <hr />
            <div class="prdc-appoitment">
              <button type="button" class="appointment-btn" onclick="window.location.href='booking/booking.php';">
                Book Appointment
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="meeting">
        <div class="meet-container">
          <div class="item" onclick="window.location.href='about/about.php?#founder';">
            <img src="images/founder.png" alt="" />
            <div class="sub-item"><p>Meet our Founder</p></div>
          </div>
          <div class="item" onclick="window.location.href='booking/booking.php';">
            <img src="images/book appointment.jpg" alt="" />
            <div class="sub-item"><p >Book Appointment</p></div>
          </div>
          <div class="item" onclick="window.location.href='about/about.php?#employee';">
            <img src="images/emloyee.png" alt="" />
            <div class="sub-item"><p >Our Skilled employee</p></div>
          </div>
        </div>
      </div>
      <div class="story">
        <div class="story-container">
          <div class="story-content">
            <h1>Our Story</h1>
            <h4>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Dignissimos placeat error vitae veniam in deserunt nesciunt a.
            </h4>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Reiciendis unde voluptates dolor magnam quis nostrum, sequi
              praesentium ut laboriosam autem quo ipsam, natus eius. Id fugit
              corporis quisquam totam iste. <a href="#">Know more</a>
            </p>
            <div class="story-appoitment">
              <button type="button" class="appointment-btn" onclick="window.location.href='booking/booking.php';">
                Book Appointment
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="footer">
        <div class="footer-container">
          <div class="informatio-container">
            <div class="services-part parts">
              <h3>Services</h3>
              <h4>Services</h4>
            </div>
            <div class="contact-part parts">
              <div class="number">
                <h3>Contact</h3>
                <h4>Contact</h4>
              </div>
              <div class="address">
                <h3>Address:</h3>
                <h4>Address:</h4>
              </div>
            </div>
            <div class="working-hour parts">
              <h4>Working Hour</h4>
              <h3>Working Hour</h3>
            </div>
          </div>
          <hr />
          <div class="developer-container">
            <p>@copyright: all right reserve</p>
            <p>Developed and designed by Akshay Paramanik</p>
          </div>
        </div>
      </div>
    </div>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"
      integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js" integrity="sha512-onMTRKJBKz8M1TnqqDuGBlowlH0ohFzMXYRNebz+yOcc5TQr/zAKsthzhuv0hiyUKEiQEQXEynnXCvNTOk50dg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="script.js"></script>
  </body>
</html>
