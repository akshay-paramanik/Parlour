<?php
session_start();
    require_once "connect.php";
    if(isset($_REQUEST['register'])){
        $name = mysqli_real_escape_string($con,$_REQUEST['fullname']);
        $email = mysqli_real_escape_string($con,$_REQUEST['email']);
        $mobile = mysqli_real_escape_string($con,$_REQUEST['mobile']);
        $psw = mysqli_real_escape_string($con,$_REQUEST['psw']);
        $encpsw = password_hash($psw,PASSWORD_BCRYPT);
        $gen = mysqli_real_escape_string($con,$_REQUEST['gen']);

        $sql = "insert into user(`name`,`email`,`mobile`,`password`,`gender`)
        values('$name','$email','$mobile','$encpsw','$gen')";
        $emailCheck = "select * from user";
        $rescheck = mysqli_query($con,$emailCheck);
            while($data = mysqli_fetch_array($rescheck)){
                if($data['email']==$email){
                    echo "Email already registered";
                    die();
                }
                
            }
            $res = mysqli_query($con,$sql);
            if($res){
                $_SESSION['email'] = $email;
                header("location:../../index.php");
            }else{
                echo "not inserted";
            }
        
    }else if(isset($_REQUEST['addservice'])){
        $servicename = mysqli_real_escape_string($con,$_REQUEST['service']);
        $gender = mysqli_real_escape_string($con,$_REQUEST['gen']);
        $price = mysqli_real_escape_string($con,$_REQUEST['price']);
        $image = mysqli_real_escape_string($con,$_FILES['serimg']['name']);
        $path = 'uploads/services/';
        $path.=$image;
        if($_FILES['serimg']['type']=="image/png" || $_FILES['serimg']['type']=="image/webp" || $_FILES['serimg']['type']=="image/jpg" || $_FILES['serimg']['type']=="image/jpeg"){
    
            if(!move_uploaded_file($_FILES['serimg']['tmp_name'],"../".$path)){
                echo "upload fail";
            }
        }else{
            echo "invalid file format";
            die();
        }
        $date=date('Y-m-d h:i:s');
        $sql = "insert into service(`name`,`gender`,`price`,`imagepath`,`time`)values('$servicename','$gender','$price','$path','$date')";
        $res = mysqli_query($con,$sql);
        if($res){
            header("location:services.php");
        }else{
            echo "not inserted";
        }
    }else if(isset($_REQUEST['addemployee'])){
        $empname = mysqli_real_escape_string($con,$_REQUEST['emp']);
        $gender = mysqli_real_escape_string($con,$_REQUEST['gen']);
        $image = mysqli_real_escape_string($con,$_FILES['empimg']['name']);
        $skill = mysqli_real_escape_string($con,$_REQUEST['skill']);
        $exp = mysqli_real_escape_string($con,$_REQUEST['exp']);
        $des = mysqli_real_escape_string($con,$_REQUEST['description']);
        $path = 'uploads/employee/';
        $path.=$image;
        if($_FILES['empimg']['type']=="image/png" || $_FILES['empimg']['type']=="image/webp" || $_FILES['empimg']['type']=="image/jpg" || $_FILES['empimg']['type']=="image/jpeg"){
    
            if(!move_uploaded_file($_FILES['empimg']['tmp_name'],"../".$path)){
                echo "upload fail";
            }
        }else{
            echo "invalid file format";
            die();
        }
        $date=date('Y-m-d h:i:s');
        $sql = "insert into employee(`name`,`gender`,`imgpath`,`skill`,`time`,`experience`,`description`)values('$empname','$gender','$path','$skill','$date','$exp','$des')";
        $res = mysqli_query($con,$sql);
        if($res){
            header("location:employee.php");
        }else{
            echo "not inserted";
        }
    }else if(isset($_REQUEST['appointment'])){
        $service = mysqli_real_escape_string($con,$_REQUEST['service']);
        $artist = mysqli_real_escape_string($con,$_REQUEST['artist']);
        $date = mysqli_real_escape_string($con,$_REQUEST['date']);
        $curDate = date('Y-m-d h:i:s');
        $email = $_SESSION['email'];
        $sql = "select * from user where email = '$email'";
        $res = mysqli_query($con,$sql);
        if($res){
            $data = mysqli_fetch_assoc($res);
            $user = $data['id'];
            $apnt = "insert into appointment(`type`,`artist`,`apnt_date`,`book_date`,`user_id`)values
            ('$service','$artist','$date','$curDate','$user')";
            $apntRes = mysqli_query($con,$apnt);
            if($apntRes){
                header("location:../../index.php?req=booked");
            }else{
                echo "Not insert";
            }
        }else{
            echo "user not found";
        }
    }
?>