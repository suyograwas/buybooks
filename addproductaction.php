<?php 

include 'dbconnect.php';
session_start();
if(!isset($_SESSION['adminloggedin'])||$_SESSION['adminloggedin']!=true){
header("location:index.php");
exit;
}


if(isset($_POST['add-product'])){
    $pname=$_POST['pname'];
    $pprice=$_POST['pprice'];
    $prating = $_POST['prating'];
    $pbranch = $_POST['pbranch'];
    $pauthor = $_POST['pauthor'];
    $pdescription = $_POST['pdescription'];
    $pimg1 = $_POST['pimg1'];
    $pimg2 = $_POST['pimg2'];
    $pimg3 = $_POST['pimg3'];
    
    $sql = "INSERT INTO `products` ( `pid`, `pname`, `pprice`, `prating`, `pbranch`, `pauthor`, `pdescription`, `pimg1`, `pimg2`, `pimg3`, `pdate`, `ptime`)
         VALUES ( NULL,'$pname`','$pprice','$prating','$pbranch','$pauthor','$pdescription','$pimg1','$pimg2','$pimg3',CURRENT_DATE(),CURRENT_TIME())";
        $result = mysqli_query($conn, $sql);

        if($result>0){
          header("location:addproducts.php?msg1=".true);
        }
        else{
            header("location:addproducts.php?msg2=".true);
        }


}



?>