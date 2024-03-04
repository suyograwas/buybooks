<?php

session_start();
if(!isset($_SESSION['loggedin'])||$_SESSION['loggedin']!=true){
header("location:index.php");
exit;
}



if(isset($_POST['add-to-cart'])){

    $_SESSION['cart'][]=array(
      'id'=>rand(100,1000),
      'pimg'=>$_POST['pimg'],
      'pprice'=>$_POST['pprice'],
      'pname'=>$_POST['pname'],
      'pquan'=>$_POST['pquan'],
      'pid'=>$_POST['pid'],
    );
    header("location:cart.php");
  }elseif(isset($_POST['add-cart'])){

    $_SESSION['cart'][]=array(
      'id'=>rand(100,1000),
      'pimg'=>$_POST['pimg'],
      'pprice'=>$_POST['pprice'],
      'pname'=>$_POST['pname'],
      'pquan'=>$_POST['pquan'],
      'pid'=>$_POST['pid'],
    );
    header("location:address.php");
  }
  
  

?>