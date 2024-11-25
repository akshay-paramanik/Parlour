<?php
session_start();
require_once "../admin/pages/connect.php";
$sql = "select * from employee";
$res = mysqli_query($con,$sql);
$count = mysqli_num_rows($res);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="about.css" />
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
                <li><a href="../services/service.php" class="list">Services</a></li>
                <li><a href="" class="list">About</a></li>
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
              <li><a href="../services/service.php" class="list">Services</a></li>
              <li><a href="" class="list">About</a></li>
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
                <h4>Our Salon</h4>
                <h1>About Us</h1>
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
      <div class="about">
        <div class="about-container">
          <div class="appointment-part">
            <div class="writing-part">Book An Appointment Now</div>
            <div class="contact-part">
              <span><i class="fa-solid fa-phone-volume"></i></span>
              <span>8710077109</span>
            </div>
          </div>
          <div class="description-part">
            <h5>Our Parlour</h5>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias
              quisquam dignissimos quidem suscipit eveniet repellendus, debitis
              commodi
            </p>
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
              <button type="button" class="appointment-btn">
                Book Appointment
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="founder" id="founder">
        <div class="founder-container">
          <div class="founder-details">
            <h1>Founder</h1>
            <p>
              i am Bilash Lechu, founder of
              <a href="../index.html" class="f-brand">Parlour</a> Lorem ipsum
              dolor sit amet consectetur adipisicing elit. Dolores odio
              doloremque officia. Tempore cumque nemo ipsum repudiandae eum,
              suscipit quaerat reprehenderit tenetur hic sed soluta ratione
              aliquid, nostrum eius? Earum?
            </p>
            <h3>We Provide</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Reprehenderit nemo nulla molestiae molestias est, alias aperiam
              asperiores, aspernatur, quis vel magnam sit ad aliquam! Dolorem
              explicabo dolore nesciunt architecto distinctio!
            </p>
            <div class="founder-appointment">
              <button type="button" class="appointment-btn">
                Book Appointment
              </button>
            </div>
          </div>
          <div class="founder-image">
            <img
              src="../images/create a realistic handsome business man picture who's have friendy nature (1).png"
              alt=""
            />
          </div>
        </div>
      </div>
      <div id="myModal" class="modal">
        <!-- <div class="modal-content">
          <div class="image-part">
            <img
              src="../images/create a realistic handsome business man picture who's have friendy nature (1).png"
              alt=""
            />
          </div>
          <div class="card-content">
            <h2>Seui Chong</h2>
            <p>Hair stylist</p>
            <div class="description">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque,
              eveniet. Voluptate corporis ratione earum quasi voluptas
              asperiores. Fugiat ullam, magni illum ab iste alias odit vel,
              sint, quam voluptates molestias! Dolore tenetur sit voluptatum
              enim minima asperiores nihil ut consectetur ullam distinctio hic
              autem aperiam odit, quod corporis? Enim quis maxime nihil
              mollitia. Perferendis ratione quam error. Error, maiores eum.
              Aliquid sapiente eius rem eveniet quidem quae tempora molestias,
              adipisci nisi et, sequi deserunt! Placeat, commodi perspiciatis.
              Deleniti labore nostrum, corrupti, ex aspernatur voluptas hic
              officia tenetur, quos eveniet quia.
            </div>
          </div>
          <i
            class="fa-solid fa-rectangle-xmark"
            id="closeWin"
            onclick="closeWin('myModal')"
          ></i>
        </div> -->
      </div>
      <div class="employee" id="employee">
        <h1>Our Employees</h1>
        <div class="employe-comtainer">

        <?php
          if($count>0){
            while($data = mysqli_fetch_assoc($res)){

              ?>
              <div class="card">
            <div class="image-div">
              <img
                src="../admin/<?php echo $data['imgpath']; ?>"
                alt=""
              />
            </div>
            <h2><?php echo $data['name']; ?></h2>
            <p class="sub-heading"><?php echo $data['skill']; ?></p>
            <button type="button" id="description" onclick="myfun('myModal','<?php echo $data['id']; ?>')">
              Learn More
            </button>
          </div>
              <?php
            }
          }
        ?>

          
          
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

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <script src="about.js"></script>
  </body>
</html>
