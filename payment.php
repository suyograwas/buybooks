<?php

$total = 0;
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location:index.php");
    exit;
}


if (isset($_SESSION['cart'])) {

    foreach ($_SESSION['cart'] as $k => $item) {

        $total += $item['pprice'];
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Css/style.css" />
    <link rel="stylesheet" href="Css/payment.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <script src="https://use.fontawesome.com/5f13ae597e.js"></script>
    <style>
        a {
            text-decoration: none;
            color: black;
        }

        .btn:hover {
            color: whitesmoke;
        }
    
    </style>
</head>

<body>

    <div class="container">
        <div class="navbar my-3" data-aos="fade-down">
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
            <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
        </div>
    </div>

    <div class="con" data-aos="zoom-in">
        <form action="paymentaction.php" class="my-5 p-4" method="POST">
            <h3 class=" mb-4 "> All other options</h3>

            <div class="form-check py-3 ">
                <input class="form-check-input " type="radio" name="flexRadioDefault" id="flexRadioDefault1" disabled>
                <label class="form-check-label radio-label" for="flexRadioDefault1">
                    UPI  <span> Unavailabe </span>
                </label>
                <i class="fa fa-paypal" aria-hidden="true"></i>
            </div>
            <div class="form-check  py-3 ">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" disabled>
                <label class="form-check-label radio-label" for="flexRadioDefault2">
                    Wallets  <span> Unavailabe </span>
                </label>
                <i class="fa fa-envelope" aria-hidden="true"></i>
            </div>
            <div class="form-check py-3">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" disabled>
                <label class="form-check-label radio-label" for="flexRadioDefault3">
                    Credit/Debit/ATM Card  <span> Unavailabe </span>
                </label>
                <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
            </div>
            <div class="form-check  py-3">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4" disabled>
                <label class="form-check-label radio-label" for="flexRadioDefault4">
                    Net Banking  <span> Unavailabe </span>
                </label>
                <i class="fa fa-university" aria-hidden="true"></i>
            </div>
            <div class="form-check py-3">
                <input class="form-check-input" type="radio" name="cod" id="cod" value="cod" checked>
                <label class="form-check-label radio-label" for="cod">
                    Cash on Delivery 
                </label>
                <i class="fa fa-money" aria-hidden="true" ></i>
            </div>
            <table>
                <tr>
                    <td>
                        <div class="temp p-2">
                            <span><?php echo  '₹' . number_format( $total); ?></span>
                        </div>
                    </td>
                    <td>
                        <div class="p-5 temp ">
                            <input type="submit" value="Place Order" class="btn submit" name="submit" id="submit" />
                        </div>
                    </td>
                </tr>
            </table>


        </form>
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
                    <img src="images/logo-white.png">
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