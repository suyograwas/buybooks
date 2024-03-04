<?php
include 'dbconnect.php';
?>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $rusername = trim($_POST["rusername"]);
  $remail = trim($_POST["remail"]);
  $rpassword =trim($_POST["rpassword"]);

  if($_POST['check2']=='on'){
  $sql = "INSERT INTO `user` ( `username`, `password`,`email`) VALUES ( '$rusername', '$rpassword','$remail')";
  $result = mysqli_query($conn,$sql);
  if($result){
    header("Location:index.php?alert1=".true);
  }
  else{
    header("Location:index.php?alert2=".true);
  }
}else{
  header("Location:index.php?check2=".true);
}
}


?>