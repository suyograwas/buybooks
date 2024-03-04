<?php
session_start();
if(!isset($_SESSION['loggedin'])||$_SESSION['loggedin']!=true){
header("location:index.php");
exit;
}

if(isset($_POST['submit'])){ 

$_SESSION['info'][]=array(
  'id'=>rand(100,1000),
  'name'=>$_POST['name'],
  'number'=>trim($_POST['number']),
  'email'=>trim($_POST['email']),
  'city'=>trim($_POST['city']),
  'pincode'=>trim($_POST['pincode']),
  'address1'=>$_POST['address1'],
  'address2'=>$_POST['address2'],
);
header("location:payment.php");
}


?>