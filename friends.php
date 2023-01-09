
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


<link rel="stylesheet" href="css/friends.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<!-- icons & bootstrap-->
<link rel='stylesheet' type='text/css' media='screen' href='webfonts/uicons-regular-straight.css'>
</head>
<body style="background-color: #f8f9fa;" >

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
<div class="container lg-light" style="margin-top:80px";>
<form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <br>
       
        <hr>
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="mb-3">
                <h5 class="card-title">Friends List</h5>
            </div>
        </div>
        <div class="col-md-6">
            <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                <div>
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-bs-toggle="tooltip" data-bs-placement="top" title="List"><i class="bx bx-list-ul"></i></a>
                        </li>
                        
                    </ul>
                </div>
                <div>
                    <a href="#" data-bs-toggle="modal" data-bs-target=".add-new" class="btn btn-primary"><i class="bx bx-plus me-1"></i> Add New</a>
                </div>
              
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="dropdown float-end">
                        <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"><i class="bx bx-dots-horizontal-rounded"></i></a>
                        <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Remove</a></div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div><img src="img/avatar/user2.jpg" alt="" class="avatar-md rounded-circle img-thumbnail" /></div>
                        <div class="flex-1 ms-3">
                            <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">Daniyal Hassan</a></h5>
                            <span class="badge badge-soft-success mb-0">Full Stack Developer</span>
                        </div>
                    </div>
                    <div class="mt-3 pt-1">
                        <p class="text-muted mb-0"><i class="mdi mdi-phone font-size-15 align-middle pe-2 text-primary"></i> 070 2860 5375</p>
                        <p class="text-muted mb-0 mt-2"><i class="mdi mdi-email font-size-15 align-middle pe-2 text-primary"></i> Daniyal@gmail.com</p>
                        <p class="text-muted mb-0 mt-2"><i class="mdi mdi-google-maps font-size-15 align-middle pe-2 text-primary"></i>Islamabad</p>
                    </div>
                    <div class="d-flex gap-2 pt-4">
                        <button type="button" class="btn btn-soft-primary btn-sm w-50"><i class="bx bx-user me-1"></i> Profile</button>
                        <button type="button" class="btn btn-primary btn-sm w-50"><i class="bx bx-message-square-dots me-1"></i> Add Friend</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="dropdown float-end">
                        <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"><i class="bx bx-dots-horizontal-rounded"></i></a>
                        <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Remove</a></div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div><img src="img/avatar/user10.jpg" alt="" class="avatar-md rounded-circle img-thumbnail" /></div>
                        <div class="flex-1 ms-3">
                            <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">Ahmed Ali</a></h5>
                            <span class="badge badge-soft-success mb-0">Full Stack Developer</span>
                        </div>
                    </div>
                    <div class="mt-3 pt-1">
                        <p class="text-muted mb-0"><i class="mdi mdi-phone font-size-15 align-middle pe-2 text-primary"></i> 046 5685 6969</p>
                        <p class="text-muted mb-0 mt-2"><i class="mdi mdi-email font-size-15 align-middle pe-2 text-primary"></i> Ali@gmail.com</p>
                        <p class="text-muted mb-0 mt-2"><i class="mdi mdi-google-maps font-size-15 align-middle pe-2 text-primary"></i> Bahawalpur</p>
                    </div>
                    <div class="d-flex gap-2 pt-4">
                        <button type="button" class="btn btn-soft-primary btn-sm w-50"><i class="bx bx-user me-1"></i> Profile</button>
                        <button type="button" class="btn btn-primary btn-sm w-50"><i class="bx bx-message-square-dots me-1"></i> Add Friend</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="dropdown float-end">
                        <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"><i class="bx bx-dots-horizontal-rounded"></i></a>
                        <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Remove</a></div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div><img src="img/avatar/user1.jpg" alt="" class="avatar-md rounded-circle img-thumbnail" /></div>
                        <div class="flex-1 ms-3">
                            <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">Dawood </a></h5>
                            <span class="badge badge-soft-danger mb-0">UI/UX Designer</span>
                        </div>
                    </div>
                    <div class="mt-3 pt-1">
                        <p class="text-muted mb-0"><i class="mdi mdi-phone font-size-15 align-middle pe-2 text-primary"></i> 012 6587 1236</p>
                        <p class="text-muted mb-0 mt-2"><i class="mdi mdi-email font-size-15 align-middle pe-2 text-primary"></i> Dawood@gmail.com</p>
                        <p class="text-muted mb-0 mt-2"><i class="mdi mdi-google-maps font-size-15 align-middle pe-2 text-primary"></i> 57 Harley Street,Rawalpindi</p>
                    </div>
                    <div class="d-flex gap-2 pt-4">
                        <button type="button" class="btn btn-soft-primary btn-sm w-50"><i class="bx bx-user me-1"></i> Profile</button>
                        <button type="button" class="btn btn-primary btn-sm w-50"><i class="bx bx-message-square-dots me-1"></i>  Add Friend</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="dropdown float-end">
                        <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"><i class="bx bx-dots-horizontal-rounded"></i></a>
                        <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Remove</a></div>
                    </div>
                    <div class="d-flex align-items-center">
                    <div><img src="img/avatar/user7.jpg" alt="" class="avatar-md rounded-circle img-thumbnail" /></div>
                    <div class="flex-1 ms-3">
                            <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">Waris Khan</a></h5>
                            <span class="badge badge-soft-danger mb-0">Backend Developer</span>
                        </div>
                    </div>
                    <div class="mt-3 pt-1">
                        <p class="text-muted mb-0"><i class="mdi mdi-phone font-size-15 align-middle pe-2 text-primary"></i> 012 6587 1236</p>
                        <p class="text-muted mb-0 mt-2"><i class="mdi mdi-email font-size-15 align-middle pe-2 text-primary"></i> Wariskhan@gmail.com</p>
                        <p class="text-muted mb-0 mt-2"><i class="mdi mdi-google-maps font-size-15 align-middle pe-2 text-primary"></i> 80 South Street MONKW 7BR</p>
                    </div>
                    <div class="d-flex gap-2 pt-4">
                        <button type="button" class="btn btn-soft-primary btn-sm w-50"><i class="bx bx-user me-1"></i> Profile</button>
                        <button type="button" class="btn btn-primary btn-sm w-50"><i class="bx bx-message-square-dots me-1"></i>  Add Friend</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="dropdown float-end">
                        <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"><i class="bx bx-dots-horizontal-rounded"></i></a>
                        <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Remove</a></div>
                    </div>
                    <div class="d-flex align-items-center">
                    <div><img src="img/avatar/user4.jpg" alt="" class="avatar-md rounded-circle img-thumbnail" /></div>
                        <div class="flex-1 ms-3">
                            <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">Kiran Khan</a></h5>
                            <span class="badge badge-soft-success mb-0">Full Stack Developer</span>
                        </div>
                    </div>
                    <div class="mt-3 pt-1">
                        <p class="text-muted mb-0"><i class="mdi mdi-phone font-size-15 align-middle pe-2 text-primary"></i> 052 6524 9896</p>
                        <p class="text-muted mb-0 mt-2"><i class="mdi mdi-email font-size-15 align-middle pe-2 text-primary"></i> Kiran@gmail.com</p>
                        <p class="text-muted mb-0 mt-2"><i class="mdi mdi-google-maps font-size-15 align-middle pe-2 text-primary"></i> Karachi</p>
                    </div>
                    <div class="d-flex gap-2 pt-4">
                        <button type="button" class="btn btn-soft-primary btn-sm w-50"><i class="bx bx-user me-1"></i> Profile</button>
                        <button type="button" class="btn btn-primary btn-sm w-50"><i class="bx bx-message-square-dots me-1"></i> Add Friend</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="dropdown float-end">
                        <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"><i class="bx bx-dots-horizontal-rounded"></i></a>
                        <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Remove</a></div>
                    </div>
                    <div class="d-flex align-items-center">
                    <div><img src="img/avatar/user5.jpg" alt="" class="avatar-md rounded-circle img-thumbnail" /></div>
                    <div class="flex-1 ms-3">
                            <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">Tayyaba Fatima</a></h5>
                            <span class="badge badge-soft-success mb-0">Backend Developer</span>
                        </div>
                    </div>
                    <div class="mt-3 pt-1">
                        <p class="text-muted mb-0"><i class="mdi mdi-phone font-size-15 align-middle pe-2 text-primary"></i> 065 2563 6587</p>
                        <p class="text-muted mb-0 mt-2"><i class="mdi mdi-email font-size-15 align-middle pe-2 text-primary"></i> Tayyaba@gmail.com</p>
                        <p class="text-muted mb-0 mt-2"><i class="mdi mdi-google-maps font-size-15 align-middle pe-2 text-primary"></i> Multan</p>
                    </div>
                    <div class="d-flex gap-2 pt-4">
                        <button type="button" class="btn btn-soft-primary btn-sm w-50"><i class="bx bx-user me-1"></i> Profile</button>
                        <button type="button" class="btn btn-primary btn-sm w-50"><i class="bx bx-message-square-dots me-1"></i>  Add Friend</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="dropdown float-end">
                        <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"><i class="bx bx-dots-horizontal-rounded"></i></a>
                        <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Remove</a></div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div><img src="img/avatar/user8.jpg" alt="" class="avatar-md rounded-circle img-thumbnail" /></div>
                        <div class="flex-1 ms-3">
                            <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">Mishail Tahir</a></h5>
                            <span class="badge badge-soft-danger mb-0">UI/UX Designer</span>
                        </div>
                    </div>
                    <div class="mt-3 pt-1">
                        <p class="text-muted mb-0"><i class="mdi mdi-phone font-size-15 align-middle pe-2 text-primary"></i> 087 6321 3235</p>
                        <p class="text-muted mb-0 mt-2"><i class="mdi mdi-email font-size-15 align-middle pe-2 text-primary"></i>Mishail@gmail.com</p>
                        <p class="text-muted mb-0 mt-2"><i class="mdi mdi-google-maps font-size-15 align-middle pe-2 text-primary"></i>Peshawar</p>
                    </div>
                    <div class="d-flex gap-2 pt-4">
                        <button type="button" class="btn btn-soft-primary btn-sm w-50"><i class="bx bx-user me-1"></i> Profile</button>
                        <button type="button" class="btn btn-primary btn-sm w-50"><i class="bx bx-message-square-dots me-1"></i>  Add Friend</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="dropdown float-end">
                        <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"><i class="bx bx-dots-horizontal-rounded"></i></a>
                        <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Remove</a></div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div><img src="img/avatar/user9.jpg" alt="" class="avatar-md rounded-circle img-thumbnail" /></div>
                        <div class="flex-1 ms-3">
                            <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">Hammad Khan</a></h5>
                            <span class="badge badge-soft-success mb-0">Full Stack Developer</span>
                        </div>
                    </div>
                    <div class="mt-3 pt-1">
                        <p class="text-muted mb-0"><i class="mdi mdi-phone font-size-15 align-middle pe-2 text-primary"></i> 021 0125 5689</p>
                        <p class="text-muted mb-0 mt-2"><i class="mdi mdi-email font-size-15 align-middle pe-2 text-primary"></i> hammad@gmail.com</p>
                        <p class="text-muted mb-0 mt-2"><i class="mdi mdi-google-maps font-size-15 align-middle pe-2 text-primary"></i> Lahore</p>
                    </div>
                    <div class="d-flex gap-2 pt-4">
                        <button type="button" class="btn btn-soft-primary btn-sm w-50"><i class="bx bx-user me-1"></i> Profile</button>
                        <button type="button" class="btn btn-primary btn-sm w-50"><i class="bx bx-message-square-dots me-1"></i>  Add Friend</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row g-0 align-items-center pb-4">
        <div class="col-sm-6">
            <div><p class="mb-sm-0">Showing 1 to 10 of 57 entries</p></div>
        </div>
        <div class="col-sm-6">
            <div class="float-sm-end">
                <ul class="pagination mb-sm-0">
                    <li class="page-item disabled">
                        <a href="#" class="page-link"><i class="fi fi-rr-arrow-small-left"></i></a>
                    </li>
                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item">
                        <a href="#" class="page-link"><i class="fi fi-rr-arrow-small-right"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>