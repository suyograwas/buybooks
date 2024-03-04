<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location:index.php");
    exit;
}

$custname;
$custnumber;
$custemail;
$custcity;
$custpincode;
$custaddress1;
$custaddress2;
$pmethod;
$uno = $_SESSION['uno'];
$msg;
include 'dbconnect.php';
$total = 0;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pmethod = trim($_POST["cod"]);
}

if (isset($_SESSION['info'])) {

    foreach ($_SESSION['info'] as $k => $item) {
        $custname = $item['name'];
        $custnumber = $item['number'];
        $custemail = $item['email'];
        $custcity = $item['city'];
        $custpincode = $item['pincode'];
        $custaddress1 = $item['address1'];
        $custaddress2 = $item['address2'];
    }
}


if (isset($_SESSION['cart'])) {

    foreach ($_SESSION['cart'] as $k => $item) {
        $pid = $item['pid'];
        $pquan = $item['pquan'];
        $ptotal = $item['pquan'] * $item['pprice'];
        $pname =  $item['pname'];
        $pimg = $item['pimg'];



        $sql = "INSERT INTO `orders` ( `uno`, `custname`,`custnumber`, `custemail`, `custcity`,`custpincode`, `custaddress1`, `custaddress2`,`pid`, `pquan`, `ptotal`,`pname`, `pimg`, `pmethod`)
         VALUES ( '$uno`', '$custname','$custnumber', '$custemail','$custcity', '$custpincode','$custaddress1', '$custaddress2','$pid', '$pquan', '$ptotal',' $pname', '$pimg', '$pmethod')";
        $result = mysqli_query($conn, $sql);
       if($result){
           header("location:success.php?msg=".$result);
       }
    }
}

?>
