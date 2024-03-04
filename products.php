<?php

session_start();
include 'dbconnect.php';
if(!isset($_SESSION['loggedin'])||$_SESSION['loggedin']!=true){
header("location:index.php");
exit;
}

?>
<?php
$limit = 12;

if(isset($_GET['products'])){
 $page=1;
$offset = ($page -1) * $limit;
$sql = "SELECT * FROM `products` LIMIT {$offset},{$limit}";
$result = mysqli_query($conn, $sql);

}
elseif(isset($_GET['search-bar'])){
  $search=$_GET['search-bar'];
  $page = 1;
  $offset = ($page -1) * $limit;
  $sql="SELECT * FROM `products` WHERE pname LIKE '%$search%' LIMIT {$offset},{$limit}";
  $result = mysqli_query($conn, $sql);
}elseif(isset($_GET['page'])){
  $page =$_GET['page'];
  $offset = ($page -1) * $limit;
$sql = "SELECT * FROM `products` LIMIT {$offset},{$limit}";
$result = mysqli_query($conn, $sql);

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
    <title>All products </title>
    <link rel="stylesheet" href="Css/style.css" />
    <link rel="stylesheet" href="Css/search.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />

    <link
      href="https://fonts.googleapis.com/css2?
    family=Poppins:wght@300;400;600;700&display=swap"
      rel="stylesheet"
    />
    <script src="https://use.fontawesome.com/5f13ae597e.js"></script>
    <style>
     .col-4 img:hover{
    box-shadow: 0 0 30px 2px rgba(0, 0, 0, 0.5);
  }
  
    </style>
  </head>
  <body>
      <div class="container">
        <div class="navbar" data-aos="fade-down">
          <div class="logo">
            <a href="home.php"><img src="images/logo.png"  width="160px" height="40px" /></a>
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
          <img src="images/menu.png" class="menu-icon"  onclick="menutoggle()">
        </div>

      </div>
    
      <!-- ----------------products----------- -->

      <div class="small-container"  data-aos="zoom-in-right">
     
          <div class="row-2">
          
              <h2>All products</h2>
        
          </div>
          



        <div class="row">
        <?php

if (mysqli_num_rows($result) > 0) {

  while ($data = mysqli_fetch_assoc($result)) {

  ?>


          <div class="col-4">
          <?php $pid=$data['pid']; ?>
          <a href="product-details.php<?php echo'?pid='.$pid ?>">
            <img src=<?php echo $data['pimg1'] ?> />
            <h4><?php echo $data['pname'] ?></h4>
            <div class="rating">
            <?php
            echo'  <i class="fa fa-star-o"></i>'.$data['prating'] ?>
            </div>
            <p><?php echo 'Price : ₹' . $data['pprice'] ?></p>
          </div>
          </a>
       

        <?php }
      
      }  ?> 
        
         
        </div>
        <?php  

         if(isset($_GET['products']))
         {
        $sql1= "SELECT * FROM `products`";
        $result1 = mysqli_query($conn,$sql1);
         }elseif(isset($_GET['search-bar']))
         {
          $sql1="SELECT * FROM `products` WHERE pname LIKE '%$search%'";
          $result1 = mysqli_query($conn,$sql1);
         }elseif(isset($_GET['page']))
         {
          $sql1= "SELECT * FROM `products`";
          $result1 = mysqli_query($conn,$sql1);
         }



        if (mysqli_num_rows($result1)){
          $total_record=mysqli_num_rows($result1);
         
          $total_page =ceil($total_record/$limit);

          echo' <div class="page-btn">';
          if ($page >1){
            echo' <a href="products.php?page='.( $page - 1).'"><span>&#8592;</span></a>';
          }

           for ($i=1 ; $i <= $total_page ; $i++){

            echo'<a  href="products.php?page='.$i.'"><span >'.$i.'</span></a>';

           }
           if ($total_page > $page ){
            echo' <a  href="products.php?page='.( $page + 1).'"><span>&#8594;</span></a>';
          }
        }  
         
       echo '</div>'; 

        ?>

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
  </body>
</html>
