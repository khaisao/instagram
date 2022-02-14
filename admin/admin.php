<?php include 'header.php'; ?>
            <div style ="  height: 100vh !important ;" class="main_right container">               
                   <h3 style="margin-bottom: 30px;">Trang chủ quản trị</h3>
                   <div class="row">
                       <div class="col-md-4">
                        <div class="card" >
                            <span class="material-icons-outlined span_user">person_outline</span>
                            <div class="card-body">
                              <?php 
                              $sql_count_user = "select count(*) as sl from user_account ";
                              $query_user = mysqli_query($conn, $sql_count_user);
                              $pro = mysqli_fetch_assoc($query_user);
                              ?>
                              <p class="card-text sl_count "><?php echo $pro["sl"]; ?> </p>
                              <p class="card-text p_context">Account</p>
                            </div>
                          </div>
                       </div>
                       <div class="col-md-4">
                        <div class="card" >
                            <span class="material-icons-outlined span_post">description</span>
                            <div class="card-body">
                            <?php 
                              $sql_count_posts = "select count(*) as sl from posts ";
                              $query_user = mysqli_query($conn, $sql_count_posts);
                              $pro = mysqli_fetch_assoc($query_user);
                              ?>
                              <p class="card-text sl_count"><?php echo $pro["sl"]; ?> </p>
                              <p class="card-text p_context">Post</p>
                            </div>
                          </div>
                       </div>
                       <div class="col-md-4">
                        <div class="card" >
                            <span class="material-icons-outlined span_comment">mode_comment</span>
                            <div class="card-body">
                            <?php 
                              $sql_count_comments = "select count(*) as sl from comments ";
                              $query_user = mysqli_query($conn, $sql_count_comments);
                              $pro = mysqli_fetch_assoc($query_user);
                              ?>
                              <p class="card-text sl_count"><?php echo $pro["sl"]; ?> </p>
                              <p class="card-text p_context">Comment</p>
                            </div>
                          </div>
                       </div>
                       
                    </div>

                 <h5 style="margin-top:20px; margin-bottom:30px">Giới thiệu</h5>   
                 <p>Năm 2010, Instagram được thành lập bởi Kevin Systrom và Mike Krieger với tên gọi ban đầu là burbn. Đây là một ứng dụng sử dụng nền tảng HTML5 với tính năng hỗ trợ người check-in ngay tại các địa điểm mà người dùng đặt chân qua. Qua nhiều giai đoạn nghiên cứu và phát triển, họ cùng các cộng sự huy động khoảng 500 nghìn USD đầu tư từ quỹ Andreessen Horowitz và quỹ Baseline Ventures. Và cuối cùng đã phát triển thành công ứng dụng dễ dàng sử dụng hơn, đó chính là Instagram.  Ngày 06/10/2010, Instagram được chính thức đưa lên kho ứng dụng App Store và nhanh chóng trở thành một cơn sốt trong 2 năm sau đó.</p>
                 <p>Đây là hệ thống quản trị của Instagram do trường Đại học Thủy Lợi xây dựng và phát triển, dành cho học viên của lớp 61THNB (Nghiêm cấm sao lưu hay chia sẻ dưới mọi hình thức đối với những ai không phải là học viên của lớp này)</p>
                   
            </div>
        </div>
    </main>
    <footer>
        
        
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="js/admin.js"></script>
</body>

</html>