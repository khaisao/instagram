<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>accounts/emailsignup/</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/register.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                       
                            <?php
                                if(isset($_SESSION["thongbao"])){
                                    echo $_SESSION["thongbao"];
                                    // session_unset("thongbao");
                                }
                            ?>
                        
                        <form action="register_submit.php" method="POST">
                            <div class="main">
                                <div class="top">
                                    <div class="h1">
                                        <img src="img/login/Untitled1.png" alt="">
                                    </div>

                                    <div class="dangkidexemanh">
                                        <h6>
                                            ????ng k?? ????? xem ???nh v?? video t??? b???n b??

                                        </h6>

                                    </div>
                                  
                                    <div class="btn">
                                        <button>
                                            <i class="fab fa-facebook-square"></i>
                                            ????ng nh???p b???ng Facebook
                                        </button>
                                    </div>
                                    <div class="or">
                                        <div class="line"></div>
                                        <h6> HO???C </h6>
                                        <div class="line"></div>

                                    </div>

                                    <div class="form-group">
                                        <div class="check_email">
                                        <input type="text" id="email" name="email" class="form-control input-lg" required
                                            autoforcus placeholder="Email">
                                        <span class="material-icons-outlined correct_email">check_circle_outline</span>
                                        <span class="material-icons-outlined wrong_email" >cancel</span>
                                        </div>
                                        
                                        <div class="check_user_name">
                                        <input type="text" id="username" name="username" class="form-control input-lg"
                                            placeholder="T??n ng?????i d??ng" required autoforcus>
                                        <span class="material-icons-outlined correct_user">check_circle_outline</span>
                                        <span class="material-icons-outlined wrong_user" >cancel</span>
                                        </div>
                                        
                                        <input type="password" id="password" name="password" class="form-control input-lg"
                                            placeholder="M???t kh???u" required autoforcus>
                                        </div>
                                        <div class="btn">
                                        <button type="submit" name="submit" id="btn" >????ng k??</button>
                                        </div> 
                                        <br /> 
                                        </form> 
                                        <!-- <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />   -->
                                   

                                   
                                     
                               
                                <div class="p">
                                    <p>B???ng c??ch nh???p v??o ????ng k??, b???n ?????ng ?? v???i ch??nh s??ch v?? ??i???u kho???n c???a ch??ng t??i</p>

                                </div>

                                </div>
                                

             

          
                <div class="mid">
                    <div class="mid1">
                        <p>
                            B???n c?? t??i kho???n ? <a style="font-size:15px;color:#385185;" href="login.php">????ng nh???p</a>
                        </p>

                    </div>

                </div>
                <div class="taiungdung">
                    <p>
                        T???i ???ng d???ng.
                    </p>
                </div>
           
                <div class="bot">

              
                    <div class="img">
                        <a href="https://apps.apple.com/app/instagram/id389801252?vt=lo"><img src="img/login/IOS.png"
                                alt="t???i v??? tr??n appstor"></a>
                        <a
                            href="https://play.google.com/store/apps/details?id=com.instagram.android&referrer=utm_source%3Dinstagramweb&utm_campaign=loginPage&ig_mid=37023918-0B95-4643-8949-584BD53816D2&utm_content=lo&utm_medium=badge"><img
                                src="img/login/androi.png" alt="t???i v??? tr??n google play"></a>
                    </div>

                </div>
            </div>
        </div>
                <div class="footer">
                    <div class=" row1">
                       

                        <a href="https://about.facebook.com/meta">Meta</a>
                        <a href="https://about.instagram.com/">Gi???i thi???u</a>
                        <a href="https://about.instagram.com/en_US/blog">Blog</a></li>
                        <a href="https://about.instagram.com/about-us/careers">Tr??? gi??p</a>
                        <a href="https://help.instagram.com/">Vi???c l??m</a>
                        <a href="https://developers.facebook.com/docs/instagram">API</a></li>
                        <a href="https://help.instagram.com/519522125107875">Quy???n ri??ng t??</a>
                        <a href="https://help.instagram.com/581066165581870">??i???u kho???n</a>
                        <a href="https://www.instagram.com/directory/profiles/">T??i kho???n li??n quan nh???t</a>
                        <a href="https://www.instagram.com/directory/hashtags/">
                            Hashtag</a>
                        <a href="https://www.instagram.com/explore/locations/">
                            V??? tr??</a>
                        <a href="https://www.instagram.com/web/lite/">Instagram Lite</a>
                    </div>
                    
                    <div class="fn">
                        <div class="fn2">
                            ?? 2021 Instagram from Meta
                        </div>
                    </div>
                </div>

            

            <!-- </fieldset> -->
            
        




    </div>
    </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
        <script src="js/register.js"></script>
        
</body>

</html>