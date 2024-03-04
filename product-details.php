<?php
include 'dbconnect.php';
session_start();
if(!isset($_SESSION['loggedin'])||$_SESSION['loggedin']!=true){
header("location:index.php");
}

$branch;

?>


<!DOCTYPE html>
<html lang="en">
  <head>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Products-details  </title>
    <link rel="stylesheet" href="Css/style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />

    <link
      href="https://fonts.googleapis.com/css2?
    family=Poppins:wght@300;400;600;700&display=swap"
      rel="stylesheet"
    />
    <script src="https://use.fontawesome.com/5f13ae597e.js"></script>
    <style>
      .btn{
        max-width: 150px;
      }
    </style>
  </head>
  <body>
      <div class="container">
        <div class="navbar" data-aos="fade-down">
          <div class="logo">
            <a href="home.php"><img src="images/logo.png" width="160px" height="40px" /></a>
          </div>
          <nav>
            <ul id="MenuItems">
              <li><a href="home.php">Home</a></li>
              <li><a href="products.php<?php echo'?products='.true ?>">Products</a></li>
              <li><a href="myorder.php">Myorder</a></li>
              <li><a href="">Contact</a></li>
              <li><a href="logout.php">logout</a></li>
            </ul>
          </nav>
          <a href="cart.php"><img src="images/cart.png" width="30px" height="30px" /></a>
          <img src="images/menu.png" class="menu-icon"  onclick="menutoggle()">
        </div>

      </div>
    
<!-- ----------------single product details------------ -->
<div class="small-container single-product">
    <div class="row">
<?php
if(isset($_GET['pid']))
{
  $pid = $_GET['pid'];
  $sql = "SELECT * FROM `products` WHERE pid='$pid'";
  $result = mysqli_query($conn, $sql);


 if (mysqli_num_rows($result) > 0) {

while ($data = mysqli_fetch_assoc($result))
{
  ?>
        <?php  $branch=$data['pbranch'] ?>
        <div class="col-2"  data-aos="fade-right">
            <img src=<?php echo $data['pimg1'] ?> width="100%" id="ProductImg" >

            

            <div class="small-img-row">
                <div class="small-img-col">
                    <img src=<?php echo $data['pimg1'] ?> width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src=<?php echo $data['pimg2'] ?> width="100%"  class="small-img">
                </div>
                <div class="small-img-col">
                    <img src=<?php echo $data['pimg3'] ?> width="100%"  class="small-img">
                </div>
                
            </div>

        </div>
        <div class="col-2"  data-aos="fade-left">
          <form action="add-to-cart-action.php" method="POST">
            <p>Home / products / product-details </p>

          

            <h1><?php echo $pname=$data['pname'] ?></h1>
            <h4><?php echo 'Price : ₹' .$data['pprice'] ?></h4>
          <?php
          
          $pprice=$data['pprice'];
          $pimg1=$data['pimg1'];
          ?>
           <input type="number" name="pquan" id="num" min="1" value="1">
           <button class="btn" name="add-to-cart" type="submit">Add To Cart</button>
           <button class="btn" name="add-cart" type="submit">Buy Now</button>
           <p><?php echo 'Author: ' . $data['pauthor'] ?></p>

           <h3>product Details <i class="fa fa-indent"></i></h3>
           <br>
           <p><?php echo $data['pdescription'] ?></p>
           <input type="hidden" name="pid" value="<?php echo $pid ;?>">
            <input type="hidden" name="pimg" value="<?php echo $pimg1 ;?>">
            <input type="hidden" name="pname" value="<?php echo $pname ;?>">
            <input type="hidden" name="pprice" value="<?php echo $pprice ;?>">
           </form>
        </div>
        <?php } ?>
        <?php } ?>
<?php } ?>
    </div>
</div>





<!-- -----------------title------------------- -->
<div class="small-container">
  <div class="row row-2" >
    <h2>Related Products</h2>
  </div>
</div>

<!-- ----------------products----------- -->
<div class="small-container">

<div class="row" data-aos="zoom-in">
<?php

$sql = "SELECT * FROM `products` WHERE pbranch='$branch' LIMIT 4";
  $result = mysqli_query($conn, $sql);
      
 if (mysqli_num_rows($result) > 0) {

while ($data = mysqli_fetch_assoc($result))
{
  
  ?>

       
          <div class="col-4">
            <img src=<?php echo $data['pimg1'] ?> />
            <h4><?php echo $pname=$data['pname'] ?></h4>
            <div class="rating">
            <?php
            echo'  <i class="fa fa-star-o"></i>'.$data['prating'] ?>
            </div>
            <p><?php echo 'Price : ₹' .$data['pprice'] ?></p>
          </div>
        
<?php }?>
<?php }?>



</div>
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
              <img src="images/logo-white.png" >
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
          <p class="copyright">Copyright @ 2021  Suyog | All Rights Reserved </p>
        </div>
      </div>
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
