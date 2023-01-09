
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
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<!-- icons & bootstrap-->

<link rel='stylesheet' type='text/css' media='screen' href='webfonts/uicons-regular-straight.css'>

<link rel='stylesheet'  href='css\profile.css'>
<script src='main.js'></script>
</head>
<body>

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
<!-- !PAGE CONTENT! -->

  <div class="main-content bg-light" style="margin-top:10px;">
  <div class="container-xl px-4 ">
    <!-- Account page navigation-->
    <nav class="nav nav-borders">
        <a class="nav-link active ms-0" href="profile.php" target="__blank">Profile</a>
        <a class="nav-link" href="settings.php" target="__blank">Settings</a>
            </nav>
    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-xl-4">
            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <img class="img-account-profile rounded-circle mb-2" src="img/avatar/user1.jpg" alt="">
                    <!-- Profile picture help block-->
                    <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                    <!-- Profile picture upload button-->
                    <button class="btn btn-primary" type="button">Upload new image</button>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Account Details</div>
                <div class="card-body">
                    <form>
                        <!-- Form Group (username)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputUsername">Username</label>
                            <input class="form-control" id="inputUsername" type="text" placeholder="Enter your username" value="username">
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputFirstName">First name</label>
                                <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" value="">
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLastName">Last name</label>
                                <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value="">
                            </div>
                        </div>
                        <!-- Form Row        -->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (organization name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputOrgName">Organization name</label>
                                <input class="form-control" id="inputOrgName" type="text" placeholder="Enter your organization name" value="">
                            </div>
                            <!-- Form Group (location)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLocation">Location</label>
                                <input class="form-control" id="inputLocation" type="text" placeholder="Enter your location" value="">
                            </div>
                        </div>
                        <!-- Form Group (email address)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Email address</label>
                            <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="name@example.com">
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (phone number)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputPhone">Phone number</label>
                                <input class="form-control" id="inputPhone" type="tel" placeholder="Enter your phone number" value="">
                            </div>
                            <!-- Form Group (birthday)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputBirthday">Birthday</label>
                                <input class="form-control" id="inputBirthday" type="text" name="birthday" placeholder="Enter your birthday" value="">
                            </div>
                        </div>
                        <!-- Save changes button-->
                        <button class="btn btn-primary" type="button">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>
  </div>

</body>
</html>
