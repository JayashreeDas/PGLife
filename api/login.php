<?php
session_start ();
require("../includes/database_connect.php");

  $email = $_POST['email'];
  $password = sha1($_POST['password']);

  $sql = "select * from users where email='$email'and password='$password'";
  $r= mysqli_query($conn, $sql);
  $user = mysqli_fetch_assoc($r);
  if($r->num_rows>0){
   $_SESSION["user_id"]=$user['id'];
   $_SESSION["user_full_name"]=$user['full_name'];
   $_SESSION["user_phone"]=$user['phone'];
   $_SESSION["user_email"]=$user['email'];
   $_SESSION["user_college_name"]=$user['college_name'];
   echo "Login Successfully";
  }else{
    echo "Invalid Credentials";
    exit;
  }
?>
<?php
mysqli_close($conn);