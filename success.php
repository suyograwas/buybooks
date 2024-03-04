<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location:index.php");
    exit;
}


?>

<html lang="en">

<head>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>success</title>
    <link rel="stylesheet" href="Css/payment.css">
    <link rel="stylesheet" href="Css/style.css">
</head>

<body>
    <?php 
    if(isset($_GET['msg'])){
        ?>
    
    <div id="success" data-aos="zoom-in">
        <form action="">
            <div class="img">
                <img src="images/write.png" alt="">
            </div>
            <div class="heading">
                <h2>Order Successful</h2>
            </div>
            <div class="para">
                <p> #ID<?php echo rand(100000000,1000000000000) ?></p>
            </div>
            <div class="info">
                <span> Thank you for ordering. We received your order and will processing it soon.
                    Your order information appears below.
                </span>
            </div>
            <div class="row">
                <div class="btn">
                    <a href="myorder.php">View Order</a>
                </div>
            </div>
        </form>
    </div>
    <?php 
     unset($_SESSION['cart']);
     unset($_SESSION['info']);
}
    else{
        echo "fail";
        unset($_SESSION['cart']);
        unset($_SESSION['info']);
        header("locattion:home.php");
    }
    ?>
</body>
<script src="javascript/javascript.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({
    offset:100,
    duration: 1000,
  });
  </script>

</html>