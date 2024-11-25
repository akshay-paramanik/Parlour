<?php
session_start();
require_once "../admin/pages/connect.php";
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
    <link rel="stylesheet" href="service.css" />
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
                  <a href="../index.php" class="list">Home</a>
                </li>
                <li><a href="" class="list">Services</a></li>
                <li><a href="../about/about.php" class="list">About</a></li>
                <?php
              if(isset($_SESSION['email'])){

                ?>
              <li><a href="" class="list">Profile</a></li>

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
              <li><a href="../index.php" class="list">Home</a></li>
              <li><a href="" class="list">Services</a></li>
              <li><a href="../about/about.php" class="list">About</a></li>
              <?php
              if(isset($_SESSION['email'])){

                ?>
              <li><a href="" class="list">Profile</a></li>

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
                <h4>Our Services</h4>
                <h1>Best brand can make perfect beuty</h1>
              </div>
            </div>
            <div class="appointment">
              <button type="button" class="appointment-btn">
                Book Appointment
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="service" id="women">
        <h1>Women's Services</h1>
        <div class="service-hold" id="whold">
          <?php
            if($wcount>0){
              while($wdata = mysqli_fetch_assoc($wres)){

                ?>
                <div class="card">
            <div class="image-div">
              <img
                src="../admin/<?php echo $wdata['imagepath']; ?>"
                alt=""
              />
            </div>
            <h2><?php echo $wdata['name']; ?></h2>
            <p class="sub-heading">
              <i class="fa-solid fa-indian-rupee-sign"></i><?php echo $wdata['price']; ?>
            </p>
            <input type="hidden" name="" value="<?php echo $wdata['id']; ?>">
            <button type="button" id="description">
              Add to cart
            </button>
          </div>
                <?php
              }
            }
          ?>
          

          
        </div>
      </div>
      <div class="service" id="men">
        <h1>Men's Services</h1>
        <div class="service-hold" id="mhold">
          <?php
            if($mcount>0){
              while($mdata = mysqli_fetch_assoc($mres)){

                ?>
                <div class="card">
            <div class="image-div">
              <img
                src="../admin/<?php echo $mdata['imagepath']; ?>"
                alt=""
              />
            </div>
            <h2><?php echo $mdata['name']; ?></h2>
            <p class="sub-heading">
              <i class="fa-solid fa-indian-rupee-sign"></i><?php echo $mdata['price']; ?>
            </p>
            <input type="hidden" name="" value="<?php echo $mdata['id']; ?>">
            <button type="button" id="description">
              Add to cart
            </button>
          </div>
                <?php
              }
            }
          ?>
          

          
        </div>
      </div>
      <div class="feedback">
        <h1>What our clint said</h1>
        <div class="feedback-container">
          <div class="rate-card">
            <div class="id-rate">
              <div class="id-name"><h2>Lorem Vench</h2></div>
              <div class="rating">4.5<i class="fa-solid fa-star"></i></div>
            </div>
            <div class="rate-description">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique
              optio harum omnis qui laborum? Officia deleniti ducimus magni!
              Animi labore mollitia dolorem consectetur veniam tenetur sed.
              Quidem tempore libero sit.
            </div>
          </div>

          <div class="rate-card">
            <div class="id-rate">
              <div class="id-name"><h2>Lorem Vench</h2></div>
              <div class="rating">4.5<i class="fa-solid fa-star"></i></div>
            </div>
            <div class="rate-description">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique
              optio harum omnis qui laborum? Officia deleniti ducimus magni!
              Animi labore mollitia dolorem consectetur veniam tenetur sed.
              Quidem tempore libero sit.
            </div>
          </div>

          <div class="rate-card">
            <div class="id-rate">
              <div class="id-name"><h2>Lorem Vench</h2></div>
              <div class="rating">4.5<i class="fa-solid fa-star"></i></div>
            </div>
            <div class="rate-description">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique
              optio harum omnis qui laborum? Officia deleniti ducimus magni!
              Animi labore mollitia dolorem consectetur veniam tenetur sed.
              Quidem tempore libero sit. Lorem ipsum dolor sit amet consectetur
              adipisicing elit. Cumque neque alias provident accusamus totam.
              Tenetur esse, odio voluptatem enim consectetur soluta! Dicta
              accusantium vero similique delectus ratione sed laboriosam
              aperiam.
            </div>
          </div>

          <div class="rate-card">
            <div class="id-rate">
              <div class="id-name"><h2>Lorem Vench</h2></div>
              <div class="rating">4.5<i class="fa-solid fa-star"></i></div>
            </div>
            <div class="rate-description">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique
              optio harum omnis qui laborum? Officia deleniti ducimus magni!
              Animi labore mollitia dolorem consectetur veniam tenetur sed.
              Quidem tempore libero sit.
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
    <script src="service.js"></script>
  </body>
</html>
