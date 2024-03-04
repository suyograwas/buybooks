
<?php
include 'dbconnect.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $urname = $_POST["urname"];
 $urpass = $_POST["urpass"];
 if($_POST['check']=='on'){
  $sql = "SELECT * FROM `admin` WHERE ausername='$urname' AND apassword='$urpass'";
  $result = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($result);

  if ($num==1) {
    $login = true;
  header("Location:adminhome.php");
  session_start();
    $_SESSION['adminloggedin']=true;
  }
   else {
    header("Location:adminlogin.php");
  }
}
else {
  header("Location:adminlogin.php?check=".false);
}
}

?>
