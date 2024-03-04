<?php

session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
  header("location:index.php");
  exit;
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>address</title>
    <link rel="stylesheet" href="Css/style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
 <!-- Main css -->
 <link rel="stylesheet" href="Css/add.css">
 
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <script src="https://use.fontawesome.com/5f13ae597e.js"></script>
    <style>
     a{
        text-decoration: none;
        color:black;
    }
    
    </style>
</head>
<body>

<div class="container">
        <div class="navbar my-2" data-aos="fade-down">
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
      
    

      <div class="main my-5"  data-aos="zoom-in">
        <div class="container">
            <div class="signup-content ">
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form" action="addressaction.php">
                    <h2>Address :</h2>
                        <div >
                            <div class="form-group">
                                <label for="name">Full Name :</label>
                                <input type="text" name="name" class="input-field"  id="name" required/>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone :</label>
                                <input type="text" name="number" class="input-field" minlength="10" maxlength="10" id="phone" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email ID :</label>
                            <input type="email" name="email"  class="input-field" id="email"  required />
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="city">City :</label>
                                <input type="text" name="city"  class="input-field" id="city" required/>
                            </div>
                            <div class="form-group">
                                <label for="pincode">Pincode :</label>
                                <input type="text" name="pincode" maxlength="6" class="input-field" id="pincode" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address">House No. Building Name :</label>
                            <input type="text" name="address1"  class="input-field" id="address" required/>
                        </div>
                        <div class="form-group">
                            <label for="address">Rode Name,Area,Colony :</label>
                            <input type="text" name="address2"  class="input-field" id="address" required/>
                        </div>
                        
          
                        
                        <div class="form-submit">
              
                            <input type="submit" value="Continue" class="submit" name="submit" id="submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>


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

