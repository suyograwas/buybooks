<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
  header("location:index.php");
  exit;
}
include 'dbconnect.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>BuyBooks | Welcome </title>
  <link rel="stylesheet" href="Css/style.css" />
  <link rel="stylesheet" href="Css/search.css" />
 
  <link rel="preconnect" href="https://fonts.gstatic.com" />

  <link href="https://fonts.googleapis.com/css2?
    family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet" />
  <script src="https://use.fontawesome.com/5f13ae597e.js"></script>
  <style>
  .col-4 img:hover{
    box-shadow: 0 0 30px 2px rgba(0, 0, 0, 0.5);
  } 
 
  </style>

</head>

<body>
  <div class="header">
    <div class="container"  >
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
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </nav>
      
        <div class="search-box">
        <form action="products.php" method="get">
          <input type="text" class="input-field" id="search-bar" minlength="1" name="search-bar" placeholder="Search here..... ">
          <label for="search-bar" class="fa fa-search" aria-hidden="true"></label>
         </form>
        </div>

        <a href="cart.php"><img src="images/cart.png" width="30px" height="30px" /></a>
        <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
      </div>

      <div class="row" >
        <div class="col-2" data-aos="zoom-in">
          <h1>
            I Was Born With A Reading List I Will Never Finish!
          </h1>
          <p>
            Success isn't always about consistent. Consistent <br />
            hard work gains success. Greatness will come
          </p>
          
        </div>
        <div class="col-2"  data-aos="zoom-in">
          <img src="images/image1.png" />
        </div>
      </div>
    </div>
  </div>



  <!-- ----------------feature products-------------->

  <div class="small-container">
    <h2 class="title">Trending Books</h2>
    <div class="row">

      <?php
      
      $sql = "SELECT * FROM `products` ORDER BY pdate  DESC LIMIT 8";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {

        while ($data = mysqli_fetch_assoc($result)) {
        
        ?>
          <div class="col-4" data-aos="zoom-in-left">
          <?php $pid=$data['pid']; ?>
          <a href="product-details.php<?php echo'?pid='.$pid ?>">
            <img src=<?php echo $data['pimg1'] ?> />
              <h4><?php echo $data['pname'] ?></h4>
            </a>
            <div class="rating">
            <?php
            
            echo '  <i class="fa fa-star-o"></i>' .$data['prating']?>
            </div>
            <p><?php echo 'Price : ₹' . $data['pprice'] ?></p>
            </a>
          </div>
        <?php   } ?>

      <?php } ?>
    </div>

    <h2 class="title">Latest Books</h2>
    <div class="row">

      <?php

    
      $sql = "SELECT * FROM `products` ORDER BY `ptime` DESC LIMIT 12";
      $res = mysqli_query($conn, $sql);

      if (mysqli_num_rows($res) > 0) {

        while ($ldata = mysqli_fetch_assoc($res)) {
         
        ?>

          <div class="col-4" data-aos="zoom-in-right" >
          <?php $pid=$ldata['pid']; ?>
            <a href="product-details.php<?php echo'?pid='.$pid ?>">
            <img src="<?php echo $ldata['pimg1'] ?>" />
            <h4><?php echo $ldata['pname'] ?></h4>
            <div class="rating">
            <?php  
            echo '  <i class="fa fa-star-o"></i>'.$ldata['prating'] ?>
            </div>
            <p><?php echo 'Price : ₹' . $ldata['pprice'] ?></p>
          </div>
          </a>
        <?php } ?>
      <?php } ?>



    </div>

  </div>

  <!-- ----------offer--------- -->
  <?php


$sql = "SELECT * FROM `products` WHERE pbranch='ex' ORDER BY `pdate` DESC LIMIT 1";
$res = mysqli_query($conn, $sql);


if (mysqli_num_rows($res) > 0) {

  while ($data = mysqli_fetch_assoc($res)) {
    
  ?>


  <div class="offer">
    <div class="small-container">
      <div class="row" >
        <div class="col-2" data-aos="zoom-in-right">
          <img src="<?php echo $data['pimg1'];?>" class="offer-img">
        </div>
        <div class="col-2"  data-aos="zoom-in-left">
          <p>Exclusively Available on BuyBooks</p>
          <h1> "<?php echo $data['pname'];?></h1>
          <small>"<?php echo $data['pdescription'];?> <br></small>
          <?php $pid=$data['pid']; ?>
          <a href="product-details.php<?php echo'?pid='.$pid ?>" class="btn">Check Out &#8594;</a>
        </div>
      </div>
    </div>
  </div>
  <?php } ?>
      <?php } ?>
      

  <!-- --------------------testimonial---------------- -->
  <div class="testimonial" >
    <div class="small-container">
      <div class="row">
        <div class="col-3" data-aos="fade-right">
          <i class="fa fa-quote-left"></i>
          <p> Dark and difficult times lie ahead. Soon we must all face 
            the choice between what is right and what is easy..</p>
          
          <img src="images/jk-rowling.png">
          <h3>J. K. Rowling</h3>
        </div>
        <div class="col-3"  data-aos="zoom-in-right">
          <i class="fa fa-quote-left"></i>
          <p>
“Sometimes in your life you just meet someone or hear something that nudges you on the right path. And that becomes the best advice. It could just be a bit of commonsense said in a way that resonates with something in you.
 It's nothing new, but because it connects with you it holds meaning for you.”.</p>
       
          <img src="images/chetan-bhagat.png">
          <h3>Chetan Bhagat</h3>
        </div>

        <div class="col-3" data-aos="fade-left">
          <i class="fa fa-quote-left"></i>
          <p> Life was indeed unpredictable and it was 
            true that it could take a sudden unexpected turn</p>
          
          <img src="images/PREET.png">
          <h3>Preeti Shenoy</h3>
        </div>
      </div>
    </div>
  </div>

  <!-- ---------------brands----------------- -->

  <div class="brands">
    <div class="small-container">
      <div class="row">
        <div class="col-5" data-aos="fade-right">
          <img src="images/thomson.png">
        </div>
        <div class="col-5" data-aos="fade-right">
          <img src="images/hachette.png">
        </div>
        <div class="col-5"  data-aos="zoom-in-right">
          <img src="images/Penguin_logo.png">
        </div>
        <div class="col-5">
          <img src="images/Macmillan.png" data-aos="fade-left">
        </div>
        <div class="col-5"  data-aos="fade-left">
          <img src="images/Bertelsmann.png">
        </div>
      </div>
    </div>
  </div>

  <!-- -----------------footer------------------ -->
  <?php
include 'footer.php';
?>
  
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