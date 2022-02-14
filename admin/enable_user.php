<?php 
  session_start();
  require_once "../config.php";
  $user_id = $_GET['id'];
  $sql_ban = "UPDATE user_account SET status = 'Verified' where id = '$user_id' ";
  mysqli_query($conn,$sql_ban);
  header("location:manager_user.php");
?>