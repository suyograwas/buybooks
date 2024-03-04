
<!DOCTYPE html>
<html lang="en">

<head>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Home </title>
  <link rel="stylesheet" href="Css/style.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />

  <link href="https://fonts.googleapis.com/css2?
    family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet" />
  <script src="https://use.fontawesome.com/5f13ae597e.js"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <style>
    a {
      text-decoration: none;
      color: #555;
    }

    .btn {
      background: #ff523b;
      color: #fff;
      border-radius: 30px;
      transition: 0.6s;
    }
    form .check-box-frm {
    height: 10px;
}
.col-2 img {
      max-width: 115%;
      padding: 50px 0;
    }
    
  </style>


</head>

<body>
  <div class="container">
    <div class="navbar  my-2" data-aos="fade-down">
      <div class="logo">
        <a href="index.php"><img src="images/logo.png" width="160px" height="40px" /></a>
      </div>
      <nav>
        <ul id="MenuItems">
          <li><a href="index.php">Home</a></li>
        </ul>
      </nav>
      <a href="index.php"><img src="images/cart.png" width="30px" height="30px" /></a>
      <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
    </div>

  </div>
<?php
  if (isset($_GET['check'])) {
    echo '<div class="alert alert-danger" role="alert">
    Click on Remember Password
  </div>';
  }
  ?>


  <!-- -----------------------account page----------------------- -->


  <div class="account-page my-3">
    <div class="container">
      <div class="row">
        <div class="col-2" data-aos="fade-right">
          <img src="https://cdni.iconscout.com/illustration/premium/thumb/man-reading-book-960661.png" >
        </div>
        <div class="col-2" data-aos="fade-left">
          <div class="form-container">
            <div class="form-btn">
              <span onclick="login()">AdminLogin</span>
            </div>
            <form id="AdminLog" action="adminaction.php" method="POST">
              <input type="text" placeholder="Username" id="uname" name="urname" class="input-field" required>
              <input type="password" placeholder="Password" id="pass"name="urpass" class="input-field" required>
              <div>
                <input type="checkbox" name="check"  class="check-box-frm"><span>Remember Password</span>
              </div>
              <button type="submit" class="btn" id="sub">Login</button>
              <a href="">Forgot Password</a>
            </form>
          </div>
        </div>
      </div>
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
          <img src="images/logo-white.png">
          <p> Our Purpose Is To Sustainably Make the Pleasure and Benefits
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
      <p class="copyright">Copyright @ 2021 Suyog | All Rights Reserved </p>
    </div>
  </div>
  <script src="javascript/account.js"></script>
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