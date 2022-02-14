<?php include 'header.php';?>
    <main class = "main">
        <div class="content_left">
            <div class="multiple-items">
                <!-- logo size 400x200 -->
                <span class="wrap-img">
                    <img src="img/main/1.jpg" alt="">
                    <p>hm.khoaa</p>
                </span>

                <span class="wrap-img">
                    <img src="img/main/2.jpg" alt="">
                    <p>funne.nq</p>
                </span>

                <span class="wrap-img">
                    <img src="img/main/4.jpg" alt="">
                    <p>hamin</p>
                </span>

                <span class="wrap-img">
                    <img src="img/main/5.jfif" alt="">
                    <p>trnq mai</p>
                </span>

                <span class="wrap-img">
                    <img src="img/main/2.jpg" alt="">
                    <p>elena</p>
                </span>

                <span class="wrap-img">
                    <img src="img/main/1.jpg" alt="">
                    <p>kung quan</p>
                </span>
            </div>
        <?php
       $sql_post = "select user_account.id,username, avatar,photo, posts.id as 'post_id' from user_account inner join posts on posts.user_id = user_account.id WHERE user_id in( select followers_following.follower_id FROM user_account INNER JOIN followers_following on user_account.id = followers_following.user_id WHERE user_id = $user_id)";
       $query = mysqli_query($conn, $sql_post);
        while($pro = mysqli_fetch_assoc($query)){
        ?>  

            <div class="content_item">
                <div class="content_item_avt">
                    <a class="a_post" href="profile.php?id=<?php echo $pro['id']; ?>">
                    <img src="<?php if($pro["avatar"]==null){ echo 'images/blank-user.jpg' ; }else{echo 'images/'.$pro["avatar"];} ?>" alt="">

                    <p>
                        <?php echo $pro["username"] ?>
                    </p>
                    </a>
                    <a class="text_report" href="report_post.php?id=<?php echo $pro['post_id']; ?>">
                    <h6>Báo cáo</h6>
                    </a>
                </div>
                
                <div class="content_post">
                    <img class="content_post_img" src="<?php echo 'images/' . $pro["photo"] ?>" alt="">
                </div>
                <div data-id ="divreact<?php echo $pro['post_id']?>" class="divreact">
                    <div class="content_item_react">
                        <?php 
                        $tym_post_id = $pro["post_id"];
                        $sql_tym = "select COUNT(*) as sl_tym from likes where user_id = $user_id and photo_id = $tym_post_id";
                        $query_tym = mysqli_query($conn, $sql_tym);
                        $pro_tym = mysqli_fetch_assoc($query_tym);
                        if($pro_tym["sl_tym"]>0):?>
                            <span id="<?php echo $pro['post_id']?>" style="color:red"; class="redtym material-icons-outlined">favorite</span>
                        <?php
                        else:?>
                            <span id="<?php echo $pro['post_id']?>" class="tym material-icons-outlined">favorite_border</span>
                        <?php endif;
                        ?>
                        <span class="material-icons-outlined">maps_ugc
                        </span>
                        <span class="material-icons-outlined">send</span>
                        <span class="material-icons-outlined">bookmark_border</span>
                    </div>
                    <div class="count_like">
                    <?php 
                        $tym_post_id = $pro["post_id"];
                        $sql_sl_tym = "select COUNT(*) as sl_like from likes where photo_id = $tym_post_id;";
                        $query_sl_tym = mysqli_query($conn, $sql_sl_tym);
                        $pro_sl_tym = mysqli_fetch_assoc($query_sl_tym);?>
                        <p><?php echo $pro_sl_tym["sl_like"] ?> lượt thích</p>
                    </div>
                </div>
                <div data-id = "<?php echo $pro['post_id'] ?>" class="content_item_comment">
                <?php
                $a = $pro["post_id"];
                $load_comment = "SELECT * FROM comments inner join user_account on comments.user_id = user_account.id WHERE postid = $a ;";
                $result = mysqli_query($conn,$load_comment);
                while($row = mysqli_fetch_assoc($result)):
                ?>
                <div class="content_item_comment_item">
                <h6 class="name_account"><?php echo $row["username"] ?></h6>
                <h6 class="comment_context"><?php echo $row["comment"] ?></h6>
                </div>
                <?php endwhile ?>
                    
                </div>
                    <div class="content_item_input">
                        <input name="input_content" class = "item_input_comment" data-id = "input<?php echo $pro['post_id'] ?>" type="text" placeholder="Thêm bình luận">
                        <span class="material-icons-outlined">
                            sentiment_satisfied_alt
                        </span>
                        <button id =<?php echo $pro['post_id'] ?>  class="btn_dang" type = "button" >Đăng</button>
                   
                    </div>
            </div>
            
        <?php } ?>
            
        </div>
        <div class="content_right">
            <div class="account_profile">
                        <?php
                        $sql_avatar = "SELECT avatar from user_account where id = $user_id;";
                        $query = mysqli_query($conn, $sql_avatar);
                        $pro = mysqli_fetch_assoc($query);
                        ?>
                <div class="account_profile_avatar">
                    <img src="<?php if($pro["avatar"]==null){echo 'images/blank-user.jpg';}else{echo 'images/'.$pro["avatar"];}?>" alt="">
                </div>
                <div class="account_profile_name">
                    <h6><?php echo $_SESSION["username"] ?></h6>
                    <h6><?php echo $_SESSION["email"] ?></h6>
                </div>
                <h6>Chuyển</h6>
            </div>
            <div class="follow_profile">
                <div class="all">
                    <h6>Gợi ý cho bạn</h6>
                    <h6>Xem tất cả</h6>
                </div>
                
                <?php 
                $sql_not_follow = "select * from user_account where user_account.id not in( select followers_following.follower_id from followers_following where followers_following.user_id = $user_id) and user_account.id !=$user_id limit 5;";
                $query = mysqli_query($conn, $sql_not_follow);
                while($pro = mysqli_fetch_assoc($query)): $need = $pro["id"]
                ?>
                
                <div class="not_follow">
                <a href="profile.php?id=<?php echo $pro['id']; ?>">
                <img src="<?php if($pro["avatar"]==null){ echo 'images/blank-user.jpg' ; }else{echo 'images/'.$pro["avatar"];} ?>" alt="">
                </a>
                <div class="not_follow_info">
                <h6><?php echo $pro["username"] ?></h6>
                <h6>Có may_06th + 3 người nữa theo...</h6>
                </div>
               
                <a style="text-decoration: none;color: rgba(var(--d69,0,149,246),1);" href="follow_index.php?id=<?php echo $pro['id']; ?>">
                <h6 style ="font-size: 13px;" type="submit" name ="follow" >Theo dõi</h6 >
                </a>
                </div>

<?php endwhile ?>
                
                
            </div>
            <div class="intro">
                <div class="intro1">
                    <h6>Giới thiệu · </h6>
                    <h6>Trợ giúp · </h6>
                    <h6>Báo chí · </h6>
                    <h6>API · </h6>
                    <h6>Việc làm</h6>
                </div>
                <div class="intro1">
                    <h6>Quyền riêng tư · </h6>
                    <h6>Điều khoản · </h6>
                    <h6>Vị trí</h6>
                </div>
                <div class="intro1">
                    <h6>Tài khoản liên quan nhất · </h6>

                    <h6>Hasgtag · </h6>
                    <h6>Ngôn ngữ </h6>
                </div>
                <div class="intro1">
                    <h6>© 2021 INSTAGRAM FROM META</h6>

                </div>

            </div>
        </div>

    </main>
    <script>
    $(function(){
    $(".btn_dang").click(function(){
            var postid = $(this).attr("id");
            var input =$('input[data-id="input'+postid +'"]').val();
            var user_id = <?php echo $user_id ?>;
            //var div_id =$('div[data-id="'+postid +'"]').html(data);
              $.ajax({
                type:'POST',
                url:'addcm.php',
                data:{postid:postid,input:input,user_id:user_id},
                success:function(data){
                    //alert(data);
                    $('div[data-id="'+postid +'"]').html(data);
                }
            });
        });
    });
    $(function(){
    $(".redtym").click(function(){
            var postid = $(this).attr("id");
            var user_id = <?php echo $user_id ?>;
              $.ajax({
                type:'POST',
                url:'deletelike.php',
                data:{postid:postid ,user_id:user_id},
                success:function(data){
                    $('div[data-id="divreact'+postid +'"]').html(data);
                    location.reload();
                }
            });
        });
    });
    $(function(){
    $(".tym").click(function(){
            var postid = $(this).attr("id");
            var user_id = <?php echo $user_id ?>;
              $.ajax({
                type:'POST',
                url:'addlike.php',
                data:{postid:postid ,user_id:user_id},
                success:function(data){
                    $('div[data-id="divreact'+postid +'"]').html(data);
                    location.reload();
                }
            });
        });
    });
</script>
    <?php include 'footer.php';?>