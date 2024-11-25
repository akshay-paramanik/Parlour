<?php
session_start();
if(isset($_SESSION['akadmin'])){
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/common.css" />
    <link rel="stylesheet" href="css/style.css" />

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
          <div class="item"><a href="">Dashbord</a></div>
          <div class="item"><a href="pages/services.php">Services</a></div>
          <div class="item"><a href="pages/users.php">Users</a></div>
          <div class="item"><a href="pages/appointments.php">Appointments</a></div>
          <div class="item"><a href="">Sales</a></div>
          <div class="item"><a href="pages/employee.php">Employees</a></div>
          <div class="item"><a href="">Events</a></div>
          <div class="item"><a href="">Feedbacks</a></div>
        </div>
        <div class="right-part">
          <div class="user-appointment">
            <div class="recent-user">
              <h2>Recent Users</h2>
              <div class="user-container">
                <div class="user-card">
                  <div class="image-part">
                    <div class="image-place"></div>
                  </div>
                  <div class="name-part">
                    <h4>Akshay Paramenik</h4>
                    <p class="email">akshayparamanik@gmail.com</p>
                  </div>
                  <div class="time">
                    <h5>May 5,2024</h5>
                  </div>
                </div>

                <div class="user-card">
                  <div class="image-part">
                    <div class="image-place"></div>
                  </div>
                  <div class="name-part">
                    <h4>Akshay Paramenik</h4>
                    <p class="email">akshayparamanik@gmail.com</p>
                  </div>
                  <div class="time">
                    <h5>May 5,2024</h5>
                  </div>
                </div>

                <div class="user-card">
                  <div class="image-part">
                    <div class="image-place"></div>
                  </div>
                  <div class="name-part">
                    <h4>Akshay Paramenik</h4>
                    <p class="email">akshayparamanik@gmail.com</p>
                  </div>
                  <div class="time">
                    <h5>May 5,2024</h5>
                  </div>
                </div>

                <div class="user-card">
                  <div class="image-part">
                    <div class="image-place"></div>
                  </div>
                  <div class="name-part">
                    <h4>Akshay Paramenik</h4>
                    <p class="email">akshayparamanik@gmail.com</p>
                  </div>
                  <div class="time">
                    <h5>May 5,2024</h5>
                  </div>
                </div>

                <div class="user-card">
                  <div class="image-part">
                    <div class="image-place"></div>
                  </div>
                  <div class="name-part">
                    <h4>Akshay Paramenik</h4>
                    <p class="email">akshayparamanik@gmail.com</p>
                  </div>
                  <div class="time">
                    <h5>May 5,2024</h5>
                  </div>
                </div>

                <div class="user-card">
                  <div class="image-part">
                    <div class="image-place"></div>
                  </div>
                  <div class="name-part">
                    <h4>Akshay Paramenik</h4>
                    <p class="email">akshayparamanik@gmail.com</p>
                  </div>
                  <div class="time">
                    <h5>May 5,2024</h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="recent-appointment">
              <h2>Recent Appointments</h2>
              <div class="user-container">
                <div class="user-card">
                  <div class="image-part">
                    <div class="image-place"></div>
                  </div>
                  <div class="name-part">
                    <h4>Akshay Paramenik</h4>
                    <p class="email">akshayparamanik@gmail.com</p>
                  </div>
                  <div class="time">
                    <h5>Hair Spa</h5>
                    <p>May 5, 2024</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="quick-access">
            <div class="user-count quick">
              <h2>User</h2>
              <span>25</span>
            </div>
            <div class="appointment-count quick">
              <h2>Appointments</h2>
              <span>25</span>
            </div>
            <div class="pendding-count quick">
              <h2>Pendding Appointments</h2>
              <span>26</span>
            </div>
            <div class="service-count quick">
              <h2>Services</h2>
              <span>15</span>
            </div>
          </div>
          <div class="feedback">
            <h1>Recent Feedbacks</h1>
            <div class="feedback-container">
              <div class="rate-card">
                <div class="id-rate">
                  <div class="id-name">
                    <h2>Lorem Vench</h2>
                    <p>May 15,2024</p>
                  </div>
                  <div class="rating">4.5<i class="fa-solid fa-star"></i></div>
                </div>
                <div class="rate-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Similique optio harum omnis qui laborum? Officia deleniti
                  ducimus magni! Animi labore mollitia dolorem consectetur
                  veniam tenetur sed. Quidem tempore libero sit.
                </div>
              </div>

              <div class="rate-card">
                <div class="id-rate">
                  <div class="id-name">
                    <h2>Lorem Vench</h2>
                    <p>May 15,2024</p>
                  </div>
                  <div class="rating">4.5<i class="fa-solid fa-star"></i></div>
                </div>
                <div class="rate-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Similique optio harum omnis qui laborum? Officia deleniti
                  ducimus magni! Animi labore mollitia dolorem consectetur
                  veniam tenetur sed. Quidem tempore libero sit.
                </div>
              </div>

              <div class="rate-card">
                <div class="id-rate">
                  <div class="id-name">
                    <h2>Lorem Vench</h2>
                    <p>May 15,2024</p>
                  </div>
                  <div class="rating">4.5<i class="fa-solid fa-star"></i></div>
                </div>
                <div class="rate-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Similique optio harum omnis qui laborum? Officia deleniti
                  ducimus magni! Animi labore mollitia dolorem consectetur
                  veniam tenetur sed. Quidem tempore libero sit. Lorem ipsum
                  dolor sit amet consectetur adipisicing elit. Cumque neque
                  alias provident accusamus totam. Tenetur esse, odio voluptatem
                  enim consectetur soluta! Dicta accusantium vero similique
                  delectus ratione sed laboriosam aperiam.
                </div>
              </div>

              <div class="rate-card">
                <div class="id-rate">
                  <div class="id-name">
                    <h2>Lorem Vench</h2>
                    <p>May 15,2024</p>
                  </div>
                  <div class="rating">4.5<i class="fa-solid fa-star"></i></div>
                </div>
                <div class="rate-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Similique optio harum omnis qui laborum? Officia deleniti
                  ducimus magni! Animi labore mollitia dolorem consectetur
                  veniam tenetur sed. Quidem tempore libero sit.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
<?php
}else{
  header("location:adminLogin/login.php");
}
?>