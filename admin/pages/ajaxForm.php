<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
</head>
<body>
<?php
require_once "connect.php";
if(isset($_REQUEST['id'])){
  $id = $_REQUEST['id'];
  $sql = "select * from employee where id = $id";
  $res = mysqli_query($con,$sql);
  if($res){
      $data = mysqli_fetch_assoc($res);
  ?>
  <div class="modal-content">
            <div class="image-part">
              <img
                src="../admin/<?php echo $data['imgpath']; ?>"
                alt=""
              />
            </div>
            <div class="card-content">
              <h2><?php echo $data['name']; ?></h2>
              <p><?php echo $data['skill']; ?></p>
              <p>Experience: <?php echo $data['experience']; ?> year</p>
              <p>Work Done: <?php echo $data['apnt_done']; ?> user</p>
              <div class="description">
              <?php echo $data['description']; ?>
              </div>
            </div>
            <i
              class="fa-solid fa-rectangle-xmark"
              id="closeWin"
              onclick="closeWin('myModal')"
            ></i>
          </div>
  
          <?php
  }
}else if(isset($_REQUEST['gen'])){
  $gen = $_REQUEST['gen'];
    $sersql = "select * from `service` where gender = '$gen'";
    $serres = mysqli_query($con,$sersql);
    $count = mysqli_num_rows($serres);
    if($count >0){
      while($mdata = mysqli_fetch_assoc($serres)){
        ?>
        <option value="<?php echo $mdata['name']; ?>"><?php echo $mdata['name']; ?></option>
        <?php
      }
    }
  }else if(isset($_REQUEST['artist'])){
    $gen = $_REQUEST['artist'];
    $sqlart = "select * from `employee` where gender = '$gen'";
    $resart = mysqli_query($con,$sqlart);
    if(mysqli_num_rows($resart)>0){
      while($data = mysqli_fetch_assoc($resart)){
        ?>
        
          <option value="<?php echo $data['name']; ?>"><?php echo $data['name']; ?></option>
        <?php
      }
    }else{
      echo "Not";
    }
  }else if(isset($_REQUEST['Info'])){
    $name = $_REQUEST['Info'];
    $artsql = "select * from `employee` where name = '$name'";
    $artres = mysqli_query($con,$artsql);
    if($artres){
      $artdata = mysqli_fetch_assoc($artres);
      ?>
      <div class="image-part">
        <img src="../admin/<?php echo $artdata['imgpath']; ?>" alt="">
      </div>
                    <div class="sub-info">
                      <h4><?php echo $artdata['name']; ?></h4>
                      <p><?php echo $artdata['skill']; ?></p>
                      <p><?php echo $artdata['experience']; ?> Years of Experience</p>
                    </div>
                    <div class="description">
                    <?php echo $artdata['description']; ?>
                    </div>
      <?php
    }
  }else if(isset($_REQUEST['genWM'])){
    $order = $_REQUEST['genWM'];
    $sqlGen = "select * from service order by gender $order";
    $resGen = mysqli_query($con,$sqlGen);
    $countGen = mysqli_num_rows($resGen);
    if($countGen){
      $item = 1;
      while($genData = mysqli_fetch_assoc($resGen)){
        ?>
        <div class="service-card" id="service">
          <span><?php echo $item++; ?></span>
          <div class="image-part">
            <img src="../<?php echo $genData['imagepath']; ?>" alt="">
          </div>
          <div class="type">
            <div class="title">
              <h3><?php echo $genData['name']; ?></h3>
            </div>
            <div class="price">
              <i class="fa-solid fa-indian-rupee-sign"></i
              ><span><?php echo $genData['price']; ?></span>
            </div>
          </div>
          <div class="gen"><?php echo $genData['gender']; ?></div>
          <div class="action">
            <a href="action.php?req=delete&id=<?php echo $genData['id']; ?>">Delete</a>||<a href="">Edit</a>
          </div>
        </div>
        <?php
      }
    }
  }else if(isset($_REQUEST['price'])){
    $serviceName = $_REQUEST['price'];
    $pricesql ="select * from `service` where name = '$serviceName'";
    $priceres = mysqli_query($con,$pricesql);
    if($priceres){
      $amount = mysqli_fetch_assoc($priceres);
      ?>
      <span>Price:<i class="fa-solid fa-indian-rupee-sign"></i> <?php echo $amount['price']; ?></span>
      <?php
    }
  }
    
?>
</body>
</html>