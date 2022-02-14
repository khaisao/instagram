<?php
include "config.php";
 
$postid = $_POST['postid'];
$input = $_POST['input'];
$user_id = $_POST['user_id'];
$sql="INSERT INTO comments (user_id,comment, postid) VALUES ('$user_id','$input','$postid')";
mysqli_query($conn,$sql);
$load_comment = "SELECT * FROM `comments` inner join user_account on comments.user_id = user_account.id WHERE postid = $postid;";
$result = mysqli_query($conn,$load_comment);
while($row = mysqli_fetch_assoc($result)):
 ?>
 <div class="content_item_comment_item">
    <h6 class="name_account"><?php echo $row["username"] ?></h6>
   <h6 class="comment_context"><?php echo $row["comment"] ?></h6>
</div>
<?php endwhile ?>