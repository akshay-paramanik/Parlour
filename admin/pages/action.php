<?php
require_once "connect.php";
session_start();
if(isset($_REQUEST['login'])){
    $email = $_REQUEST['email'];
    $pass = $_REQUEST['psw'];
    $sql = "select * from `user` where email = '$email'";
    $res = mysqli_query($con,$sql);
    $count = mysqli_num_rows($res);
    if($count>0){
        $data = mysqli_fetch_assoc($res);
        if(password_verify($pass,$data['password'])){
            $_SESSION['email'] = $email;
            header("location:../../index.php");
        }else{
            echo "unauthorize access";
        }
    }else{
        echo "user not found";
    }
}else if($_REQUEST['req']=='delete'){
    $id = $_REQUEST['id'];
    $sql = "delete from `service` where id='$id'";
    $res = mysqli_query($con,$sql);
    if($res){
        header("location:services.php");
    }else{
        echo "Not deleted";
    }
}else if($_REQUEST['empreq']=='delete'){
    $id = $_REQUEST['id'];
    $sql = "delete from `employee` where id='$id'";
    $res = mysqli_query($con,$sql);
    if($res){
        header("location:employee.php");
    }else{
        echo "Not deleted";
    }
}else if(isset($_REQUEST['admin'])){
    $email = mysqli_real_escape_string($con,$_REQUEST['email']);
    $pass = mysqli_real_escape_string($con,$_REQUEST['psw']);
    if($email == "akshayparamanik04@gmail.com"){
        if($pass == "ak123paramanik#"){
            $_SESSION['akadmin'] = "adminloged";
            header("location:../index.php");
        }else{
            echo "unauthorize access";
        }
    }else{
        echo "user not found";
    }
}

?>