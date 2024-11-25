<?php
require_once "connect.php";
$sql = "Select * from employee order by time desc";
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
    <link rel="stylesheet" href="../css/employee.css">
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
          <div class="item"><a href="appointments.php">Appointments</a></div>
          <div class="item"><a href="">Sales</a></div>
          <div class="item"><a href="">Employees</a></div>
          <div class="item"><a href="">Events</a></div>
          <div class="item"><a href="">Feedbacks</a></div>
        </div>
        <div class="right-part">
            <div class="employee">
            <div class="header">
              <h2>Employees</h2>
              <div class="short-add">
                <p id="adding" onclick="myfun('myModal')">Add more Employees</p>
              </div>
            </div>
            <div class="model" id="myModal">
              <div class="model-container">
                <div class="model-header">
                  <h2>Add Employee</h2>
                <i
            class="fa-solid fa-rectangle-xmark"
            id="closeWin"
            onclick="closeWin('myModal')"
          ></i>
                </div>
                <div class="addemployee">
                  <div class="employee-image">
                    <label for="empinput">
                      <span id="plush">Add Picture</span>
                    <img src="" id="emp-img" alt="">
                    </label>
                    </div>
                    <div class="form-container">
                    <form action="process.php" method="post" enctype="multipart/form-data">
                    <input type="file" name="empimg" value="" id="empinput">
                    <label for="">Employee name</label>
                    <input type="text" name="emp" id="">
                    <label for="">Gender</label>
                    <select name="gen" id="">
                      <option value="">Select Gender</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                    <label for="">Skill</label>
                    <input type="text" name="skill" id="">

                    <label for="">Experience</label>
                    <input type="number" name="exp" id="">
                    <label for="">Description</label>
                    <input type="text" name="description" id="desc">
                    <input type="submit" name="addemployee" value="ADD NOW">
                  </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="employee-container">

            <?php 
              if($count>0){
                while($data = mysqli_fetch_assoc($res)){

                  ?>
                      <div class="employee-card">
                <span>1</span>
                <div class="image-part">
                  <img src="../<?php echo $data['imgpath']; ?>" alt="">
                </div>
                <div class="name-skill">
                  <h3><?php echo $data['name']; ?></h3>
                  <p><?php echo $data['skill']; ?></p>
                  <p>Experience: <?php echo $data['experience']; ?> year</p>
                </div>
                <div class="appointments">
                  <div class="done">Done: <?php echo $data['apnt_done']; ?></div>
                  <div class="pendding">pendding: <?php echo $data['apnt_pendding']; ?></div>
                </div>
                <div class="description">
                <?php echo $data['description']; ?>
                </div>
                <div class="action">
                  <a href="action.php?empreq=delete&id=<?php echo $data['id']; ?>">Delete</a>||<a href="">Edit</a>
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

    <script src="../js/employee.js"></script>
</body>
</html>