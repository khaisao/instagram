<?php
require_once "../config.php";
 
$postinfo = $_POST['postinfo'];
$sql = "select * from posts inner join user_account on posts.user_id = user_account.id where posts.id=".$postinfo;
$result = mysqli_query($conn,$sql);
while( $row = mysqli_fetch_array($result) ){
?>
<table border='0' width='100%'>
<tr>
    <td width="300"><img style="width:100%;" src="<?php echo '../images/'.$row["photo"];?>">
    <td style="padding:20px;">
    <p>Account : <?php echo $row['username']; ?></p>
    
    </td>
</tr>
</table>
 
<?php } ?>