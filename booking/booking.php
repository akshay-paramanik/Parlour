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
    <link rel="stylesheet" href="booking.css">
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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
        <div class="bottom">
          <div class="form-container">
            <div class="heading">
              <h2>Book you appointment</h2>
              <a href="">Edit</a>
            </div>
            <form action="../admin/pages/process.php">
              <h3>Registered Information</h3>
              <?php
if($res){
  $udata = mysqli_fetch_assoc($res);
              ?>
                  <label for="">Name</label>
                  <input type="text" name="name" id="" value="<?php echo $udata['name']; ?>">
                  <label for="">Email</label>
                  <input type="email" name="email" id="" value="<?php echo $udata['email']; ?>">
                  <label for="">Mobile No.</label>
                  <input type="number" name="mobile" id="" value="<?php echo $udata['mobile']; ?>">
                  <p>Gender: </p>
                  <?php
                  if($udata['gender'] == 'Male'){?>
                  <input type="radio" name="gen" value="Male" id="" checked> 
                  <label for="">Male</label><br>
                  <input type="radio" name="gen" value="Female" id="">
                  <label for="">Female</label>
                  <?php

                  }else if($udata['gender'] == 'Female'){?>
                  <input type="radio" name="gen" value="Male" id="">
                  <label for="">Male</label><br>
                  <input type="radio" name="gen" value="Female" id="" checked>
                  <label for="">Female</label>

                  <?php
                  }else{?>
                  <input type="radio" name="gen" value="Male" id=""> 
                  <label for="">Male</label><br>
                  <input type="radio" name="gen" value="Female" id="">
                  <label for="">Female</label>
                  <?php

                  }
                  ?>
                  <p id="val" onchange="genFun(this.value)"></p>

                  <h3>Service and Artist</h3>
                  <label for="">Service Type</label>
                  <select name="service" id="genService">
                  </select>
                  <div id="price"></div>
                  <label for="">Select your date of appointment</label>
                  <input type="date" name="date" id="">
                  <label for="">Select your best artist</label>
                  <select name="artist" onchange="artistS(this.value)" id="artist">
                  <option value="">Select Your artist</option>
                  </select>
                  <input type="submit" value="Book Now" id="submit" name="appointment">
                  <?php
}?>
                                    </form>
                <div class="artist-details" id="artistD">
                  <h3>Know your artist</h3>
                  <div class="artist-card" id="artistInfo">
                    
                  </div>
                </div>
              </div>
          </div>
        </div>
    </div>
</body>
<script src="booking.js"></script>
</html>
<?php

}else{
  header("location:../login/login.php");
}
?>