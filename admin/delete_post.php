<?php 
  session_start();
  require_once "../config.php";
  $post_id = $_GET['id'];
  $sql_delete_like = "DELETE from likes where photo_id = $post_id";
  mysqli_query($conn,$sql_delete_like);
  $sql_delete_comment = "DELETE from comments where postid = $post_id ";
  mysqli_query($conn,$sql_delete_comment);
  $sql_delete = "DELETE from posts where id = $post_id ";
  mysqli_query($conn,$sql_delete);

 
  header("location:manager_post.php");
?>