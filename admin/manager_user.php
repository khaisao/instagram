<?php include "header.php" ?>
            <div class="main_right container">               
                <div class ="tab-content">
                    <div id="manager_user" class="tabcontent">                  
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                  <th>Username</th>
                                  <th>Email</th>
                                  <th>Status</th>
                                  <th>Report Count</th>  
                                  <th>Manager</th>                                 
                                </tr>
                              </thead>                              
                              <tbody>  
                              <?php
                                $sql_get_user = "select * from user_account where status ='Verified' OR  status='Disable' ";
                                $query_user = mysqli_query($conn, $sql_get_user);
                                 while($pro = mysqli_fetch_assoc($query_user)):
                              ?>                           
                                <tr>
                                  <td><?php echo $pro["username"] ?></td>
                                  <td><?php echo $pro["email"] ?></td>
                                  <td>
                                        <?php if($pro["status"]=="Verified"):?>
                                            <button type="button" class="btn btn-success btn-block"><?php echo $pro["status"] ?></button>
                                        <?php else:?>
                                            <button type="button" class="btn btn-danger btn-block"><?php echo $pro["status"] ?></button>
                                        <?php endif;?>
                                </td>

                                  <td><?php echo $pro["report_count"] ?></td>

                                  <td>
                                      <?php if($pro["status"] == "Disable"):?>
                                        <a href="enable_user.php?id=<?php echo $pro["id"] ?>"><button type="button" class="btn btn-warning btn-block">Enable</button></a>
                                      <?php else: ?>
                                        <a href="disable_user.php?id=<?php echo $pro["id"] ?>"><button type="button" class="btn btn-warning btn-block">Ban</button></a>
                                      <?php endif; ?>
                                
                                </td>
                                 </tr>   
                                 <?php endwhile ?>                                                      
                              </tbody>                                         
                          </table>                         
                    </div>   
            </div>
        </div>
    </main>
    <footer>
        
        
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="js/admin.js"></script>
    <script>
        $(document).ready(function() {   
     // C???u h??nh c??c nh??n ph??n trang
     $('#example').dataTable( {
         "language": {
         "sProcessing":   "??ang x??? l??...",
         "sLengthMenu":   "Xem _MENU_ m???c",
         "sZeroRecords":  "Kh??ng t??m th???y d??ng n??o ph?? h???p",
         "sInfo":         "??ang xem _START_ ?????n _END_ trong t???ng s??? _TOTAL_ m???c",
         "sInfoEmpty":    "??ang xem 0 ?????n 0 trong t???ng s??? 0 m???c",
         "sInfoFiltered": "(???????c l???c t??? _MAX_ m???c)",
         "sInfoPostFix":  "",
         "sSearch":       "T??m:",
         "sUrl":          "",
         "oPaginate": {
             "sFirst":    "?????u",
             "sPrevious": "Tr?????c",
             "sNext":     "Ti???p",
             "sLast":     "Cu???i"
             }
         }
     } );
          
     } ); 
    </script>
</body>

</html>