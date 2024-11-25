<?php
session_start();
if(!isset($_SESSION['email'])){
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>login page</title>
    <link rel="stylesheet" href="login.css" />
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
    <div class="navbar">
            <div class="brand"><h1>Parlour</h1></div>
        </div>
      <!-- Login Landing Page -->
      <div class="main">
        <div class="sign-in">
          <form action="../pages/action.php" method="post">
                <h1>Admin Login</h1>
                <p>Please fill in this form to Login.</p>
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" id="email" required>
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
                <input type="checkbox" name="showpassword" onclick="ckeck()" id="show"><span>show password</span><br>
                
                <input type="submit" class="registerbtn" value="Log In" name="admin">
    
            <div class="signin">
                <p>Create new account? <a href="signup.php">Sign up</a>.</p>
            </div>
        </form>
        </div>
      </div>
    </div>
      <script>
        let show = document.getElementById("show");
        function ckeck(){
        var password = document.getElementById("psw");
        var rePassword = document.getElementById("psw-repeat");
          if(password.type == "password"){
            password.type = "text";
          }else {
            password.type = "password";
          }
          if(rePassword.type == "password"){
            rePassword.type = "text";
          }else{
            rePassword.type = "password";
          }
        }
      </script>
  </body>
</html>
<?php
}else{
  header("location:../index.php");
}
?>