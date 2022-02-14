<?php 
    require_once "../config.php";
    session_start();
    if(isset($_SESSION["username_id"])){    
        $user_id = (int)$_SESSION["username_id"];
    }
    else{
        header("location:../login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    
    
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"></script>
    <title>Document</title>
</head>

<body>
    <header class ="header">
            <div class="header_left">
                <a href="admin.php">
                <img class="img_logo" src="img/logo.png" alt="">
                </a>
                <span class="material-icons-outlined">
                    menu
                </span>
                <span class="material-icons-outlined">
                    search
                </span>
            </div>
            <div class="header_right">
                <h6 style = "color:white;margin-right:20px;">Hello admin !</h6>
                <span class="material-icons-outlined span_ring">
                    notifications
                </span>
                <div class="dropdown_user">
                   
                    <span class="material-icons-outlined span_manager">
                        manage_accounts
                    </span>   
                </div>
            </div>
        
    </header>
    <main>
        <div class="main">
            <div class="main_left">
                <div class="main_profile">
                    <img src="img/logo_insta.png" alt="">
                </div>
                <div class="main_manager_menu">
                    <h6 style="color: white;">Admin Panel</h6>
                </div>
                <div class="tab">
                    <a style="text-decoration : none" href="manager_user.php">
                    <button class="tablinks" onclick="openManager(event, 'manager_user')" id="defaultOpen">
                        <span class="material-icons-outlined">
                            account_circle
                        </span>
                        <h6>Manager User</h6>
                    </button>
                    </a>
                    <a style="text-decoration : none" href="manager_post.php">
                    <button class="tablinks" onclick="openManager(event, 'manager_post')">
                        <span class="material-icons-outlined">
                            comment_bank
                            </span>
                        <h6>Manager Post</h6>
                    </button>
                    </a>
                        <a style="text-decoration : none" href="../logout.php">
                            <button class="tablinks">
                                <span class="material-icons-outlined">
                                    logout
                                    </span>
                                    <h6>Log out</h6>
                                </button>
                        </a>
                </div>  
            </div>