<?php include "header.php" ?>
    <div style="  height: 100vh !important ;" class="main_right container">               
                <div class ="tab-content">
                    <div id="manager_user" class="tabcontent">                  
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                  <th>Post ID</th>
                                  <th>Report Count</th>
                                  <th>Reprot_Content</th>
                                  <th>View</th>  
                                  <th>Delete</th>                                 
                                </tr>
                              </thead>                              
                              <tbody>  
                              <?php
                                $sql_get_user = "select * from posts where report >0  ";
                                $query_user = mysqli_query($conn, $sql_get_user);
                                 while($pro = mysqli_fetch_assoc($query_user)):
                              ?>                           
                                <tr>
                                  <td><?php echo $pro["id"] ?></td>
                                  <td><?php echo $pro["report"] ?></td>
                                  <td><?php echo $pro["report_content"] ?></td>
                                  <td><button style="display:flex;" data-id='<?php echo $pro['id']; ?>' class="postinfo btn btn-success"><span class="material-icons-outlined">visibility</span></button></td>
                                  
                                  <td><a style="text-decoration:none;" href="delete_post.php?id=<?php echo $pro["id"]?>"><button style="display:flex;" class="btn btn-danger"><span class="material-icons-outlined">delete</span></button></a></td>
                                  
                                  
                                 </tr>   
                                 <?php endwhile ?>                                                      
                              </tbody>                                         
                          </table>                         
                    </div>   
            </div>
        </div>
    </main>
    <div class="modal fade" id="empModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Post Info</h4>
                          <button type="button" class="close" data-dismiss="modal">×</button>
                        </div>
                        <div class="modal-body">
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
        </div>
    </div>
    <footer>
        
        
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="js/admin.js"></script>
    <script>
        $(document).ready(function() {   
     // Cấu hình các nhãn phân trang
     $('#example').dataTable( {
         "language": {
         "sProcessing":   "Đang xử lý...",
         "sLengthMenu":   "Xem _MENU_ mục",
         "sZeroRecords":  "Không tìm thấy dòng nào phù hợp",
         "sInfo":         "Đang xem _START_ đến _END_ trong tổng số _TOTAL_ mục",
         "sInfoEmpty":    "Đang xem 0 đến 0 trong tổng số 0 mục",
         "sInfoFiltered": "(được lọc từ _MAX_ mục)",
         "sInfoPostFix":  "",
         "sSearch":       "Tìm:",
         "sUrl":          "",
         "oPaginate": {
             "sFirst":    "Đầu",
             "sPrevious": "Trước",
             "sNext":     "Tiếp",
             "sLast":     "Cuối"
             }
         }
     } );
          
     } ); 
    </script>
    <script type='text/javascript'>
            $(document).ready(function(){
                $('.postinfo').click(function(){
                    var postinfo = $(this).data('id');
                    $.ajax({
                        url: 'viewpost.php',
                        type: 'post',
                        data: {postinfo: postinfo},
                        success: function(response){ 
                            $('.modal-body').html(response); 
                            $('#empModal').modal('show'); 
                        }
                    });
                });
        });
    </script>
</body>

</html>