<?php
include "config.php";
$postid = $_POST['postid'];
$user_id = $_POST['user_id'];
$sql="DELETE FROM  likes where photo_id = '$postid' AND user_id=  '$user_id' ";
mysqli_query($conn,$sql);
?>

                    <div class="content_item_react">
                        <?php 
                        $sql_tym = "select COUNT(*) as sl_tym from likes where user_id = $user_id and photo_id = $postid";
                        $query_tym = mysqli_query($conn, $sql_tym);
                        $pro_tym = mysqli_fetch_assoc($query_tym);
                        if($pro_tym["sl_tym"]>0):?>
                            <span id="<?php echo $postid?>" style="color:red"; class="redtym material-icons-outlined">favorite</span>
                        <?php
                        else:?>
                            <span id="<?php echo $postid?>" class="tym material-icons-outlined">favorite_border</span>
                        <?php endif;
                        ?>
                        <span class="material-icons-outlined">maps_ugc
                        </span>
                        <span class="material-icons-outlined">send</span>
                        <span class="material-icons-outlined">bookmark_border</span>
                    </div>
                    <div class="count_like">
                    <?php 
                        $sql_sl_tym = "select COUNT(*) as sl_like from likes where photo_id = $postid;";
                        $query_sl_tym = mysqli_query($conn, $sql_sl_tym);
                        $pro_sl_tym = mysqli_fetch_assoc($query_sl_tym);?>
                        <p><?php echo $pro_sl_tym["sl_like"] ?> lượt thích</p>
                    </div>

