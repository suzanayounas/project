
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
<!-- icons & bootstrap-->
<link rel="stylesheet" href="css/sentiments.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>



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

<div class="container" style="margin-top:100px";>
<h5 class="card-title">sentiment reports</h5>

<hr>
    <div class="row align-items-center">
        <div class="col-md-4">
        <div class="dropdown">
                    <a class="btn btn-link text-muted py-1 font-size-16 shadow dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-horizontal-rounded"></i>User Sentiment Summary</a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
        </div>
        <div class="col-md-4"> 
    <div class="row align-items-center">
    <div class="input-group">
    <div class="input-group-text" id="btnGroupAddon"><i class="fi fi-rr-calendar-lines"></i></div>
    <input type="text" class="form-control" placeholder="select date range" aria-label="Input group example" aria-describedby="btnGroupAddon">
  </div>
</div> 
</div>
<div class="col-md-4">
  <a href="#" data-bs-toggle="modal" data-bs-target=".add-new" class="btn btn-primary"><i class="fi fi-rr-download"></i> Generate Report</a>
</div>
    <br>
    <br>
    <div class="row">
    <div class="col-lg-12">
        <br>
    <div class="row align-items-center">
    <div class="input-group">
    <div class="input-group-text" id="btnGroupAddon"><i class="fi fi-rr-search"></i></div>
    <input type="text" class="form-control" placeholder="select date range" aria-label="Input group example" aria-describedby="btnGroupAddon">
  </div>
</div> 
                <div class="table-responsive">
                    <table class="table project-list-table table-nowrap align-middle table-borderless">
                        <thead>
                            <tr>
                                <th scope="col" class="ps-4" style="width: 50px;">
                                    <div class="form-check font-size-16"><input type="checkbox" class="form-check-input" id="contacusercheck" /><label class="form-check-label" for="contacusercheck"></label></div>
                                </th>
                                <th scope="col-ps-3">Report Title</th>
                                <th scope="col">Report ID</th>
                                <th scope="col">Source Id</th>
                                <th scope="col">Views with rating </th>
                                <th scope="col">Median Rating</th>
                                <th scope="col">Max Rating</th>
                                <th scope="col">Min Rating</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" class="ps-4">
                                    <div class="form-check font-size-16"><input type="checkbox" class="form-check-input" id="contacusercheck1" /><label class="form-check-label" for="contacusercheck1"></label></div>
                                </th>
                                <td><a href="#" class="text-body">https://twitter.com/shamsjk/status/1608879889675083783</a></td>
                                <td><span class="badge badge-soft-success mb-0">2879898</span></td>
                                <td>1608879889675083783</td>
                                <td>1</td>
                                <td>5</td>
                                <td>2</td>    
                                <td></td>    
                            </tr>
                            <tr>
                                <th scope="row" class="ps-4">
                                    <div class="form-check font-size-16"><input type="checkbox" class="form-check-input" id="contacusercheck1" /><label class="form-check-label" for="contacusercheck1"></label></div>
                                </th>
                                <td><a href="#" class="text-body">https://twitter.com/DailyBee3/status/1610866191144198149</a></td>
                                <td><span class="badge badge-soft-success mb-0">2683498</span></td>
                                <td>1610866191144198149</td>
                                <td>2</td>
                                <td>5</td>
                                <td>1</td>    
                                <td></td>  
                           </tr>
                           <tr>
                                <th scope="row" class="ps-4">
                                    <div class="form-check font-size-16"><input type="checkbox" class="form-check-input" id="contacusercheck1" /><label class="form-check-label" for="contacusercheck1"></label></div>
                                </th>
                                <td><a href="#" class="text-body">https://twitter.com/CultureCrave/status/1609332465738579968</a></td>
                                <td><span class="badge badge-soft-success mb-0">4854698</span></td>
                                <td>1609332465738579968</td>
                                <td>1</td>
                                <td>5</td>
                                <td>3</td>    
                                <td></td>  
                           </tr>
                           <tr>
                                <th scope="row" class="ps-4">
                                    <div class="form-check font-size-16"><input type="checkbox" class="form-check-input" id="contacusercheck1" /><label class="form-check-label" for="contacusercheck1"></label></div>
                                </th>
                                <td><a href="#" class="text-body">https://twitter.com/iakhan/status/1612285052133511169</a></td>
                                <td><span class="badge badge-soft-success mb-0">2898798</span></td>
                                <td>1612285052133511169</td>
                                <td>1</td>
                                <td>5</td>
                                <td>1</td>    
                                <td></td>  
                           </tr>
                           <tr>
                                <th scope="row" class="ps-4">
                                    <div class="form-check font-size-16"><input type="checkbox" class="form-check-input" id="contacusercheck1" /><label class="form-check-label" for="contacusercheck1"></label></div>
                                </th>
                                <td><a href="#" class="text-body">https://twitter.com/SilviaMangiapa1/status/1608886848579043328</a></td>
                                <td><span class="badge badge-soft-success mb-0">8656698</span></td>
                                <td>1608886848579043328</td>
                                <td>3</td>
                                <td>5</td>
                                <td>1</td>    
                                <td></td>  
                           </tr>
                           <tr>
                                <th scope="row" class="ps-4">
                                    <div class="form-check font-size-16"><input type="checkbox" class="form-check-input" id="contacusercheck1" /><label class="form-check-label" for="contacusercheck1"></label></div>
                                </th>
                                <td><a href="#" class="text-body">https://twitter.com/oostraaaa/status/1612303874962120705</a></td>
                                <td><span class="badge badge-soft-success mb-0">3436637</span></td>
                                <td>1612303874962120705</td>
                                <td>1</td>
                                <td>5</td>
                                <td>1</td>    
                                <td></td>  
                           </tr>
                           <tr>
                                <th scope="row" class="ps-4">
                                    <div class="form-check font-size-16"><input type="checkbox" class="form-check-input" id="contacusercheck1" /><label class="form-check-label" for="contacusercheck1"></label></div>
                                </th>
                                <td><a href="#" class="text-body">https://twitter.com/oldschoolmonk/status/1612296682540249088</a></td>
                                <td><span class="badge badge-soft-success mb-0">6567568</span></td>
                                <td>1612296682540249088</td>
                                <td>1</td>
                                <td>5</td>
                                <td>1</td>    
                                <td></td>  
                           </tr>
                           <tr>
                                <th scope="row" class="ps-4">
                                    <div class="form-check font-size-16"><input type="checkbox" class="form-check-input" id="contacusercheck1" /><label class="form-check-label" for="contacusercheck1"></label></div>
                                </th>
                                <td><a href="#" class="text-body">https://twitter.com/AliShah82746194/status/1610258735246774273</a></td>
                                <td><span class="badge badge-soft-success mb-0">2876898</span></td>
                                <td>5125656747664564654</td>
                                <td>2</td>
                                <td>1</td>
                                <td></td>    
                                <td>2</td>  
                           </tr>
                           <tr>
                                <th scope="row" class="ps-4">
                                    <div class="form-check font-size-16"><input type="checkbox" class="form-check-input" id="contacusercheck1" /><label class="form-check-label" for="contacusercheck1"></label></div>
                                </th>
                                <td><a href="#" class="text-body">https://twitter.com/StephenMeier18/status/1612291092258426884</a></td>
                                <td><span class="badge badge-soft-success mb-0">2876898</span></td>
                                <td>1612291092258426884</td>
                                <td>2</td>
                                <td>1</td>
                                <td></td>    
                                <td>4</td>  
                           </tr>
                        </tbody>
                    </table>
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
                        <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                    </li>
                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item">
                        <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </div>
</div>
</div>