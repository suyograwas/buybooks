
<?php
include 'header.php';
?>
<body>
  <div class="container" data-aos="fade-down">
    <div class="navbar  my-4">
      <div class="logo">
        <a href="index.php"><img src="images/logo.png" width="160px" height="40px" /></a>
      </div>

      <nav>
        <ul id="MenuItems">
          <li><a href="home.php">Home</a></li>
          <li><a href="products.php<?php echo '?products=' . true ?>">Products</a></li>
          <li><a href="myorder.php">My Order</a></li>
          <li><a href="">Contact</a></li>
          <li><a href="adminlogin.php">Admin login</a></li>
        </ul>
      </nav>
      <a href="index.php"><img src="images/cart.png" width="30px" height="30px" /></a>
      <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
    </div>

  </div>
  <?php
  

  if (isset($_GET['showalert'])) {
    echo '<div class="alert alert-danger" role="alert">
    Please enter valid username and password!
  </div>';
  } elseif (isset($_GET['alert1'])) {
    echo '<div class="alert alert-success" role="alert">
    Your account has been created! please login
  </div>';
  } elseif (isset($_GET['alert2'])) {
    echo '<div class="alert alert-danger" role="alert">
   This username and Email already registered please login OR try another email and username
  </div>';
  }elseif (isset($_GET['check'])) {
    echo '<div class="alert alert-danger" role="alert">
    Click on Remember Password
  </div>';
  }
  elseif (isset($_GET['check2'])) {
    echo '<div class="alert alert-danger" role="alert">
   Please accept terms & condition
  </div>';
  }

  ?>

  <!-- -----------------------account page----------------------- -->


  <div class="account-page">
    <div class="container">
      <div class="row">
        <div class="col-2" data-aos="fade-right">
          <img src="https://cdni.iconscout.com/illustration/premium/thumb/man-reading-book-960661.png">
        </div>
        <div class="col-2">
          <div class="form-container" data-aos="fade-left">
            <div class="form-btn">
              <span onclick="login()">Login</span>
              <span onclick="register()">Register</span>
              <hr id="Indicator">
            </div>
            <form id="LoginForm" action="laction.php" method="POST">
              <input type="text" placeholder="Username" maxlength="20" id="uname" name="urname" class="input-field" required>
              <input type="password" placeholder="Password" maxlength="20" id="pass" name="urpass" class="input-field" required>
              <div>
                <input type="checkbox" name="check" id="check"  class="check-box-frm"><label for="check">Remember Password</label>
              </div>
              <button type="submit" class="btn" id="sub">Login</button>
              <a href="">Forgot Password</a>
            </form>
            <form id="RegForm" action="raction.php" method="POST">
              <input type="text" placeholder="Username" id="rname" maxlength="20" class="input-field" name="rusername" required>
              <input type="email" placeholder="EmailId" id="remail" class="input-field" name="remail" required>
              <input type="password" placeholder="Enter Password" maxlength="20" id="rpass" class="input-field" name="rpassword" required>
              <div>
                <input type="checkbox" name="check2" class="check-box-frm"> <span for="check2">I agree to the terms & conditions</span>
              </div>
              <button type="submit" class="btn" id="reg" >Register</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
include 'footer.php';
?>

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