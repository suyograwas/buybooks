<?php
session_start();
include 'dbconnect.php';
if(!isset($_SESSION['loggedin'])||$_SESSION['loggedin']!=true){
header("location:index.php");
exit;
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Order</title>
    <link rel="stylesheet" href="Css/style.css" />  
    <link rel="preconnect" href="https://fonts.gstatic.com" />

    <link
      href="https://fonts.googleapis.com/css2?
    family=Poppins:wght@300;400;600;700&display=swap"
      rel="stylesheet"
    />
    <script src="https://use.fontawesome.com/5f13ae597e.js"></script>
    <style>
        
      
    </style>
  </head>
  <body>
      <div class="container">
        <div class="navbar"  data-aos="fade-down">
          <div class="logo">
            <a href="home.php"><img src="images/logo.png"  width="160px" height="40px"/></a>
          </div>
          <nav>
            <ul id="MenuItems">
              <li><a href="home.php">Home</a></li>
              <li><a href="products.php<?php echo'?products='.true ?>">Products</a></li>
              <li><a href="myorder.php">Myorder</a></li>
              <li><a href="">Contact</a></li>
              <li><a href="logout.php">Logout</a></li>
            </ul>
          </nav>
          <a href="cart.php"><img src="images/cart.png" width="30px" height="30px" /></a>
          <img src="images/menu.png" class="menu-icon"  onclick="menutoggle()">
        </div>

      </div>


      <!-- --------------------cart items details----------------- -->
      <div class="small-container cart-page"  data-aos="zoom-in">
      <table>
          <tr>
              <th>All Products</th>
              <th>Oder-id</th>
              <th>Address</th>
              <th>Number</th>
              <th>Total Price</th>
              <th>Order date</th>
              <th>Staus</th>
              <th>EXP-Delivery</th>
          </tr>
          <?php 
           $uno=$_SESSION['uno'];
           $sql = "SELECT * FROM `orders` WHERE `uno`='$uno' ORDER BY `oderid` DESC";
           $result = mysqli_query($conn, $sql);
           if (mysqli_num_rows($result) > 0) {
            while ($data = mysqli_fetch_assoc($result)) {

            ?>
         
          <tr>
              <td>
                  <div class="cart-info">
                      <img src=<?php echo $data['pimg'] ?>>
                      <div>
                          <p><?php echo $data['pname'] ?></p>
                          <small>Price :<?php echo $data['ptotal']/$data['pquan'] ?></small>
                          <br>
                        <small> Quantity: <?php echo $data['pquan']?></small>
                      </div>
                  </div>
              </td>
             <td> <p><?php echo $data['oderid'] ?></p></td>
              <td><p><?php echo $data['custcity'].$data['custpincode'] ?></p></td>
              <td><p><?php echo $data['custnumber'] ?></p></td>
              <td><p><?php echo $data['ptotal'] ?></p></td>
              <td><p><?php echo $data['date'] ?></p></td>
              <td><p><?php echo $data['status'] ?></p></td>
              <td><p><?php echo date( 'Y-m-d',strtotime($data['date'].'7 day' ))?></p></td>
          </tr>

          <?php } ?>
          <?php } ?>
      </table>

      </div>

      <!-- -----------------footer------------------ -->

  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="footer-col-1">
          <h3>Download Our App</h3>
          <p>Download App for Android and ios mobile phone </p>
          <div class="app-logo">
            <img src="images/play-store.png">
            <img src="images/app-store.png">
          </div>
        </div>
        <div class="footer-col-2">
          <img src="images/logo-white.png">
          <p> Our Purpose Is To Sustainably Make the Plesure and Benefits
            of Sports Accessible to the Many. </p>
        </div>
        <div class="footer-col-3">
          <h3>Useful Links</h3>
          <ul>
            <li>Coupons</li>
            <li>Blog Post</li>
            <li>Return Policy</li>
            <li>Join Affiliate</li>
          </ul>
        </div>
        <div class="footer-col-3">
          <h3>Follow us</h3>
          <ul>
            <li>Facebook</li>
            <li>Twitter</li>
            <li>Instagram</li>
            <li>YouTube</li>
          </ul>
        </div>
      </div>
      <hr>
      <p class="copyright">Copyright @ 2021 Suyog | All Rights Reserved </p>
    </div>
  </div>
     <script src="javascript/javascript.js"></script>
     <script src="javascript/javascript.js"></script>
     <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
  AOS.init({
    offset:100,
    duration: 1000,
  });
</script>
  </body>
</html>
