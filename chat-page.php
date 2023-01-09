<?php
@include 'config.php';
session_start();
if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="apple-touch-icon" sizes="76x76" href="img\stisla.svg">
  <link rel="icon" type="image/png" href="img\stisla.svg">
  <title>SoleGlance</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- custom css-->
<!-- icons & bootstrap-->


<link rel='stylesheet'  href='css\chat.css'>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<!-- icons & bootstrap-->
<link rel='stylesheet' type='text/css' media='screen' href='webfonts/uicons-regular-straight.css'>
</head>
<body style="background-color: #f8f9fa;">

<!-- Top container -->
<!-- Sidebar/menu -->
<nav class="navbar fixed-top">
<div class="container-fluid">

    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" >
      <span class="navbar-toggler-icon"></span>
     
    </button>
    <div class="row gx-10 mb-0">
  
       <div class="col-md-8">
       <h2 class="small " style="margin-top:16px;color:white;">Welcome! &nbsp;<?php echo $_SESSION['user_name'] ?></h2>
       </div>
    
       <div class="col-md-4">
       <a class="navbar-brand" href="mainprofile.php"><img src="img/avatar/user1.jpg"  style="width:46px;border-radius:50%" ></a>   
       </div>
       </div>
    
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
      <img src="img\stisla.svg"  style="width:40px">    
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">SoleGlance</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="dashboard.php"><i class="fi fi-rr-layout-fluid"></i> Overview</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="profile.php"><i class="fi fi-rr-user"></i>  Profile</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="chat-page.php"><i class="fi fi-rr-envelope"></i>  Chat</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="friends.php"><i class="fi fi-rr-users-alt"></i>  Friends</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="trendingtopics.php"><i class="fi fi-rr-arrow-trend-up"></i>  Trending Topics</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="sentiments.php"><i class="fi fi-rr-chat-arrow-grow"></i>  Sentiments</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="settings.php"><i class="fi fi-rr-settings"></i> Settings</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php"><i class="fi fi-rr-exit"></i>   Logout</a>
          </li>
        </ul>
        <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>

</nav>
<div class="container " style="margin-top:80px;">
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card chat-app">
            <div id="plist" class="people-list">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fi fi-rr-search"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Search...">
                </div>
                <ul class="list-unstyled chat-list mt-2 mb-0">
                    <li class="clearfix active">

                        <img src="img/avatar/user1.jpg" alt="avatar">
                        <div class="about">
                            <div class="name">Ali Akram</div>
                            <div class="status"> <i class="fa fa-circle offline"></i> left 7 mins ago </div>                                            
                        </div>
                    </li>
                    <li class="clearfix ">
                        <img src="img/avatar/user2.jpg" alt="avatar">
                        <div class="about">
                            <div class="name">Aaroon Babar</div>
                            <div class="status"> <i class="fa fa-circle online"></i> online </div>
                        </div>
                    </li>
                
                    <li class="clearfix">
                        <img src="img/avatar/user8.jpg" alt="avatar">
                        <div class="about">
                            <div class="name">Mariam Waheed</div>
                            <div class="status"> <i class="fa fa-circle online"></i> online </div>
                        </div>
                    </li>                                    
                    <li class="clearfix">
                        <img src="img/avatar/user7.jpg" alt="avatar">
                        <div class="about">
                            <div class="name">Salman Naqvi</div>
                            <div class="status"> <i class="fa fa-circle offline"></i> left 10 hours ago </div>
                        </div>
                    </li>
                    <li class="clearfix">
                        <img src="img/avatar/user5.jpg" alt="avatar">
                        <div class="about">
                            <div class="name">Mona Khurram</div>
                            <div class="status"> <i class="fa fa-circle online"></i> online </div>
                        </div>
                    </li>
                    <li class="clearfix">
                        <img src="img/avatar/user6.jpg" alt="avatar">
                        <div class="about">
                            <div class="name">Dania Ahmed</div>
                            <div class="status"> <i class="fa fa-circle offline"></i> offline since Oct 28 </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="chat">
                <div class="chat-header clearfix">
                    <div class="row">
                        <div class="col-lg-7">
                            <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
                                <img src="img/avatar/user1.jpg" alt="avatar">
                            </a>
                            <div class="chat-about">
                                <h6 class="m-b-0"><?php echo $_SESSION['user_name'] ?></h6>
                                <small>Last seen: 2 hours ago</small>
                            </div>
                        </div>
                        <div class="col-lg-4 hidden-sm ">
                            <a href="javascript:void(0);" class="btn btn-outline-secondary"><i class="fi fi-rr-picture"></i></a>
                            <a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fi fi-rr-link"></i></a>
                            <a href="javascript:void(0);" class="btn btn-outline-info"><i class="fi fi-rr-video-camera-alt"></i></a>
                            <a href="javascript:void(0);" class="btn btn-outline-warning"><i class="fi fi-rs-info"></i></a>
                        </div>
                    </div>
                </div>
                <div class="chat-history">
                    <ul class="m-b-0">
                        <li class="clearfix">
                            <div class="message-data ">
                                <span class="message-data-time text-right">10:10 AM, Today</span>
                            </div>
                            <div class="message other-message float-right"> Hi Aiden, how are you? How is the project coming along? </div>
                        </li>
                        <li class="clearfix">
                            <div class="message-data">
                                <span class="message-data-time">10:12 AM, Today</span>
                            </div>
                            <div class="message my-message">Are we meeting today?</div>                                    
                        </li>                               
                        <li class="clearfix">
                            <div class="message-data">
                                <span class="message-data-time">10:15 AM, Today</span>
                            </div>
                            <div class="message my-message">Project has been already finished and I have results to show you.</div>
                        </li>
                    </ul>
                </div>
                <div class="chat-message clearfix">
                    <div class="input-group mb-0">
                        
                        <input type="text" class="form-control" placeholder="Enter text here..."> 
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fi fi-rs-paper-plane"></i></span>
                        </div>                                   
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>