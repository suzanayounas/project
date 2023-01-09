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

<link href="css/mainprofile.css" rel="stylesheet">

<main class="bg-light">
    <div class="container " style="margin-top:43px;">
       
        <div class="img" style="background-image:url(img/weather.jpg);height: 300px;background-size: cover; margin-top:10px;"></div>
        <div class="card social-prof">
            <div class="card-body">
                <div class="wrapper">
                    <img src="img/avatar/user1.jpg" alt="" class="user-profile">
                    <h3><?php echo $_SESSION['user_name'] ?></h3>
                    <p>Web Developer</p>
                </div>
                <div class="row ">
                    <div class="col-lg-12">
                        <ul class=" nav nav-tabs justify-content-center s-nav">
                            <li><a class="active" href="#">Timeline</a></li>
                            <li><a href="#About">About</a></li>
                            <li><a href="#friend-list">Friends</a></li>
                            <li><a href="#photos">Photos</a></li>
                            <li><a href="#Posts">Posts</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="card" id="About">
                    <div class="card-body">
                        <div class="h5 text-blue">@<?php echo $_SESSION['user_name'] ?></div>
                        <div class="h7 "><strong>Name :</strong> <?php echo $_SESSION['user_name'] ?></div>
                        <div class="h7"><strong>About :</strong> Developer of web applications, JavaScript, PHP, Java, Python, Ruby, Java, Node.js, etc.
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="h6 text-muted">Followers</div>
                            <div class="h5">5.2342</div>
                        </li>
                        <li class="list-group-item">
                            <div class="h6 text-muted">Following</div>
                            <div class="h5">6758</div>
                        </li>
                        <li class="list-group-item">
                            <div class="h6 text-muted">Themes</div>
                            <div class="h5">6758</div>
                        </li>
                    </ul>
                </div>
                <div class="card" id="photos">
                    <div class="card-body">
                        <h3 class="card-title">Latest Photos</h3>
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/avatar/user2.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item ">
                                    <img src="img/avatar/user3.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item ">
                                    <img src="img/avatar/user5.jpg"  class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 gedf-main" id="Posts">
                <!--- \\\\\\\Post-->
                <div class="card social-timeline-card">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="posts-tab" data-toggle="tab" href="#posts" role="tab" aria-controls="posts" aria-selected="true">Share your insights</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="images-tab" data-toggle="tab" role="tab" aria-controls="images" aria-selected="false" href="#images">Share Images</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade active show" id="posts" role="tabpanel" aria-labelledby="posts-tab">
                                <div class="form-group">
                                    <label class="sr-only" for="message">post</label>
                                    <textarea class="form-control" id="message" rows="3" placeholder="What are you thinking?"></textarea>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="images" role="tabpanel" aria-labelledby="images-tab">
                                <div class="form-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Upload image</label>
                                    </div>
                                </div>
                                <div class="py-4"></div>
                            </div>
                        </div>
                        <div class="btn-toolbar justify-content-between">
                            <div class="btn-group">
                                <a class="dropdown-item" href="#"><i class="fi fi-rr-share"></i>&nbsp; Share</a>
                            </div>
                            <div class="btn-group">
                                    <a class="dropdown-item" href="#"><i class="fi fi-rr-globe"></i> Public</a>
                                    &nbsp;
                                    <a class="dropdown-item" href="#"><i class="fi fi-rr-following"></i> Friends</a>
                                    &nbsp;
                                    <a class="dropdown-item" href="#"><i class="fi fi-rr-lock"></i> Just me</a>
                                                         </div>
                        </div>
                    </div>
                </div>
                <!-- Post /////-->
                <!--- \\\\\\\Post-->
                <div class="card social-timeline-card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-2">
                                    <img class="rounded-circle" width="45" src="img/avatar/user2.jpg" alt="">
                                </div>
                                <div class="ml-2">
                                    <div class="h5 m-0 text-blue"> &nbsp;@<?php echo $_SESSION['user_name'] ?></div>
                                    <div class="h7 text-muted"> &nbsp;Miracles Lee Cross</div>
                                </div>
                            </div>
                            <div>
                                <div class="dropdown">
                                    <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop11" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="text-decoration:none;">
                                    <i class="fi fi-rs-menu-dots"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="text-muted h7 mb-2"><i class="fi fi-rr-clock-three"></i> 10 min ago</div>
                        <a class="card-link" href="#">
                            <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur adip.</h5>
                        </a>
                        <img src="img/entertainment.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="card-footer">
                        <a href="#" class="card-link"><i class="fi fi-rr-heart"></i> Like</a>
                        <a href="#" class="card-link"><i class="fi fi-rr-comment-heart"></i> Comment</a>
                        <a href="#" class="card-link"><i class="fi fi-rr-share"></i> Share</a>
                    </div>
                </div>
                <!-- Post /////-->
                <!--- \\\\\\\Post-->
                <div class="card social-timeline-card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-2">
                                    <img class="rounded-circle" width="45" src="img/avatar/user2.jpg" alt="">
                                </div>
                                <div class="ml-2">
                                    <div class="h5 m-0 text-blue"> &nbsp;@<?php echo $_SESSION['user_name'] ?></div>
                                    <div class="h7 text-muted"> &nbsp;Miracles Lee Cross</div>
                                </div>
                            </div>
                            <div>
                                <div class="dropdown">
                                    <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop11" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="text-decoration:none;">
                                    <i class="fi fi-rs-menu-dots"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="text-muted h7 mb-2"><i class="fi fi-rr-clock-three"></i> 10 min ago</div>
                        <a class="card-link" href="#">
                            <h5 class="card-title"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit consectetur
                                            deserunt illo esse distinctio.</h5>
                        </a>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam omnis nihil, aliquam est, voluptates officiis iure soluta alias vel odit, placeat reiciendis ut libero! Quas aliquid natus cumque quae repellendus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, excepturi. Doloremque, reprehenderit! Quos in maiores, soluta doloremque molestiae reiciendis libero expedita assumenda fuga quae. Consectetur id molestias itaque facere? Hic!
                        </p>
                        <div>
                            <span class="badge badge-primary">JavaScript</span>
                            <span class="badge badge-primary">Android</span>
                            <span class="badge badge-primary">PHP</span>
                            <span class="badge badge-primary">Node.js</span>
                            <span class="badge badge-primary">Ruby</span>
                            <span class="badge badge-primary">Paython</span>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="card-link"><i class="fi fi-rr-heart"></i> Like</a>
                        <a href="#" class="card-link"><i class="fi fi-rr-comment-heart"></i> Comment</a>
                        <a href="#" class="card-link"><i class="fi fi-rr-share"></i> Share</a>
                     
                    </div>
                </div>
                <!-- Post /////-->
                <!--- \\\\\\\Post-->
                <div class="card social-timeline-card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-2">
                                    <img class="rounded-circle" width="45" src="img/avatar/user2.jpg" alt="">
                                </div>
                                <div class="ml-2">
                                    <div class="h5 m-0 text-blue"> &nbsp;@<?php echo $_SESSION['user_name'] ?></div>
                                    <div class="h7 text-muted">&nbsp; Miracles Lee Cross</div>
                                </div>
                            </div>
                            <div>
                                <div class="dropdown">
                                    <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop11" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="text-decoration:none;">
                                    <i class="fi fi-rs-menu-dots"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="text-muted h7 mb-2"><i class="fi fi-rr-clock-three"></i> 10 min ago</div>
                        <a class="card-link" href="#">
                            <h5 class="card-title"> Totam non adipisci hic! Possimus ducimus amet, dolores illo ipsum quos
                                            cum.</h5>
                        </a>
                        <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam sunt fugit reprehenderit consectetur exercitationem odio, quam nobis? Officiis, similique, harum voluptate, facilis voluptas pariatur dolorum tempora sapiente eius maxime quaerat.
                            <a href="https://mega.nz/#!1J01nRIb!lMZ4B_DR2UWi9SRQK5TTzU1PmQpDtbZkMZjAIbv97hU" target="_blank">https://mega.nz/#!1J01nRIb!lMZ4B_DR2UWi9SRQK5TTzU1PmQpDtbZkMZjAIbv97hU</a>
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="card-link"><i class="fi fi-rr-heart"></i> Like</a>
                        <a href="#" class="card-link"><i class="fi fi-rr-comment-heart"></i> Comment</a>
                        <a href="#" class="card-link"><i class="fi fi-rr-share"></i> Share</a>
                    </div>
                </div>

                <!-- Post /////-->
            </div>
            <div class="col-lg-3">
                <div class="card social-timeline-card">
                    <div class="card-body">
                        <h5 class="card-title">friends</h5>
                        <ul class="friend-list" id="friend-list">
                            <li>
                                <div class="left">
                                    <img src="img/avatar/user2.jpg" alt="">
                                </div>
                                <div class="right">
                                    <h3>Rameez Riaz </h3>
                                    <p>50 Friends</p>
                                </div>
                            </li>
                            <li>
                                <div class="left">
                                    <img src="img/avatar/user1.jpg" alt="">
                                </div>
                                <div class="right">
                                    <h3>Aaron Anees</h3>
                                    <p>10 Friends</p>
                                </div>
                            </li>
                            <li>
                                <div class="left">
                                    <img src="img/avatar/user10.jpg" alt="">
                                </div>
                                <div class="right">
                                    <h3>Muhamad Ali </h3>
                                    <p>20 Friends</p>
                                </div>
                            </li>
                            <li>
                                <div class="left">
                                    <img src="img/avatar/user1.jpg" alt="">
                                </div>
                                <div class="right">
                                    <h3>Adil Khan </h3>
                                    <p>10 Friends</p>
                                </div>
                            </li>
                            <li>
                                <div class="left">
                                    <img src="img/avatar/user7.jpg" alt="">
                                </div>
                                <div class="right">
                                    <h3>Hammad Mughal</h3>
                                    <p>10 Friends</p>
                                </div>
                            </li>
                            <li>
                                <div class="left">
                                    <img src="img/avatar/user2.jpg" alt="">
                                </div>
                                <div class="right">
                                    <h3>Muhammad Salman </h3>
                                    <p>10 Friends</p>
                                </div>
                            </li>
                            <li>
                                <div class="left">
                                    <img src="img/avatar/user10.jpg" alt="">
                                </div>
                                <div class="right">
                                    <h3>Rohail Riaz</h3>
                                    <p>10 Friends</p>
                                </div>
                            </li>
                            <li>
                                <div class="left">
                                    <img src="img/avatar/user6.jpg" alt="">
                                </div>
                                <div class="right">
                                    <h3>Bisma Raza</h3>
                                    <p>10 Friends</p>
                                </div>
                            </li>
                            <li>
                                <div class="left">
                                    <img src="img/avatar/user8.jpg" alt="">
                                </div>
                                <div class="right">
                                    <h3>Ayesha Waheed</h3>
                                    <p>10 Friends</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>