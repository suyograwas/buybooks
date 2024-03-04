<?php
include 'dbconnect.php';

?>


<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  echo$urname = trim($_POST["urname"]);
 echo $urpass =trim($_POST["urpass"]);

if($_POST['check']=='on'){
  $sql = "SELECT * FROM `user` WHERE username='$urname' AND password='$urpass'";
  $result = mysqli_query($conn, $sql);

  if ( mysqli_num_rows($result)) {
    $data = mysqli_fetch_assoc($result);
    $login = true;
    session_start();
    $_SESSION['loggedin']=true;
    $_SESSION['uno']=$data['uno'];
    
    header("location:home.php");
  }
   else {
    header("Location:index.php?showalert=".false);
  }
}
else {
  header("Location:index.php?check=".false);
}
}



?>