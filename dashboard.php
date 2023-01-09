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

<link rel="stylesheet" href="css/index_style.css">
<link rel="stylesheet" href="css/feed.css">
<link rel="stylesheet" href="css/feed.scss">
<!-- icons & bootstrap-->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<link rel='stylesheet' type='text/css' media='screen' href='webfonts/uicons-regular-straight.css'>
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
<div class="w3-main bg-light" style="margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5> My Dashboard</h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"><i class="fi fi-rr-envelope w3-xlarge"></i></div>
        <div class="w3-right">
          <h3>52</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Messages</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fi fi-rs-eye w3-xlarge"></i></div>
        <div class="w3-right">
          <h3>99</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Analytics</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-teal w3-padding-16">
        <div class="w3-left"><i class="fi fi-rr-arrow-trend-up w3-xlarge"></i></div>
        <div class="w3-right">
          <h3>23</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Trending Topics</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fi fi-rr-users-alt w3-xlarge"></i></div>
        <div class="w3-right">
          <h3>50</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Users</h4>
      </div>
    </div>
  </div>
  <br>
    <div class="w3-twothird">
      <h5 class="text-uppercase" style="text-align:center;">Feeds</h5>
			<br>
		 
			<div class="row">
     
				<div class="col-lg-8 offset-sm-2">
					<div class="post-block">
						<div class="d-flex justify-content-between">
							<div class="d-flex mb-3">
								<div class="mr-2">
									<a href="#!" class="text-dark"><img src="img/avatar/user6.jpg" alt="User" class="author-img"></a>
								</div>
								<div>
									<h5 class="mb-0"><a href="" class="text-dark"> &nbsp;Kiran Khan</a></h5>
									<p class="mb-0 text-muted">5m</p>
								</div>
							</div>
							<div class="post-block__user-options">
								<a href="#!" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
										aria-expanded="false">
											<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="triggerId">
									<a class="dropdown-item text-dark" href="#!"><i class="fa fa-pencil mr-1"></i>Edit</a>
									<a class="dropdown-item text-danger" href="#!"><i class="fa fa-trash mr-1"></i>Delete</a>
								</div>
							</div>
						</div>
						<div class="post-block__content mb-2">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione laboriosam non atque, porro cupiditate commodi? Provident culpa vel sit enim!</p>
							<img src="img/entertainment.jpg" alt="Content img">
						</div>
						<div class="mb-3">
							<div class="d-flex justify-content-between mb-2">
								<div class="d-flex">
									<a href="#!" class="text-danger mr-2"><span><i class="fa fa-heart"></i></span></a>
									<a href="#!" class="text-dark mr-2"><span>Comment</span></a>
								</div>
								<a href="#!" class="text-dark"><span>Share</span></a>
							</div>
							<p class="mb-0">Liked by <a href="#!" class="text-muted font-weight-bold">John doe</a> & <a href="#!" class="text-muted font-weight-bold">25 others</a></p>
						</div>
						
						<div class="post-block__comments">
							<!-- Comment Input -->
							<div class="input-group mb-3">
								<input type="text" class="form-control" placeholder="Add your comment">
								<div class="input-group-append">
								  	<button class="btn btn-primary" type="button" id="button-addon2"><i class="fi fi-rs-paper-plane"></i></button>
								</div>
							</div>
							<!-- Comment content -->
							<div class="comment-view-box mb-3">
								<div class="d-flex mb-2">
									<img src="img/avatar/user4.jpg" alt="User img" class="author-img author-img--small mr-2">
									<div>
										<h6 class="mb-1"><p class="text-dark">&nbsp;Aiman Raza</p><small>1m</small></h6>
										<p class="mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
										<div class="d-flex">
											<a href="#!" class="text-dark mr-2"><span><i class="fa fa-heart-o"></i></span></a>
											<a href="#!" class="text-dark mr-2"><span>&nbsp; Reply</span></a>
										</div>
									</div>
								</div>
							</div>
							<!-- More Comments -->
							<hr>
							<a href="#!" class="text-dark">View More comments <span class="font-weight-bold">(12)</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      
    
  <div class="w3-container">
    <h5>Stocks Market</h5>
    <h6>AUTOMOBILE ASSEMBLER</h6>
    <div class="w3-grey">
      <div class="w3-container w3-center  w3-red" style="width:-2.39%">-2.39%</div>
    </div>
<br>
    <h6>AUTOMOBILE PARTS & ACCESSORIES</h6>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-red" style="width:.08%">-.08%</div>
    </div>
    <br>
    <h6>CABLE & ELECTRICAL GOODS</h6>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-green" style="width:3.07%">+3.07%</div>
    </div>
    <br>
    <h6>Cement</h6>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-red" style="width:-.38%">-0.38%</div>
    </div>
    <br>
    <h6>Chemical</h6>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-red" style="width:-.04%">-0.04%</div>
    </div>
  </div>
  <br>
  <hr>

  <div class="w3-container">
    <h5>Countries</h5>
    <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
      <tr>
        <td>United States</td>
        <td>65%</td>
      </tr>
      <tr>
        <td>UK</td>
        <td>15.7%</td>
      </tr>
      <tr>
        <td>Russia</td>
        <td>5.6%</td>
      </tr>
      <tr>
        <td>Spain</td>
        <td>2.1%</td>
      </tr>
      <tr>
        <td>India</td>
        <td>1.9%</td>
      </tr>
      <tr>
        <td>France</td>
        <td>1.5%</td>
      </tr>
    </table><br>
    <button class="w3-button w3-dark-grey">More Countries  <i class="fa fa-arrow-right"></i></button>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Recent Users</h5>
    <ul class="w3-ul w3-card-4 w3-white">
      <li class="w3-padding-16">
        <img src="img/avatar/user7.jpg" class="w3-left w3-circle w3-margin-right" style="width:35px">
        <span class="w3-large">Maria</span><br>
      </li>
      <li class="w3-padding-16">
        <img src="img/avatar/user6.jpg" class="w3-left w3-circle w3-margin-right" style="width:35px">
        <span class="w3-large">Kiran</span><br>
      </li>
      <li class="w3-padding-16">
        <img src="img/avatar/user5.jpg" class="w3-left w3-circle w3-margin-right" style="width:35px">
        <span class="w3-large">Jaweria</span><br>
      </li>
      <li class="w3-padding-16">
        <img src="img/avatar/user8.jpg" class="w3-left w3-circle w3-margin-right" style="width:35px">
        <span class="w3-large">Jiya</span><br>
      </li>
    </ul>
  </div>
  <hr>

  <div class="w3-container">
    <h5>Recent Comments</h5>
    <div class="w3-row">
      <div class="w3-col m1 text-center">
        <img class="w3-circle" src="img/avatar/user5.jpg" style="width:80px;height:80px">
      </div>
      <div class="w3-col m10 w3-container">
        <h4>Jaweria<span class="w3-opacity w3-medium"> &nbsp;Sep 29, 2014, 9:12 PM</span></h4>
        <p>Keep up the GREAT work! I am cheering for you!! Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><br>
      </div>
    </div>

    <div class="w3-row">
      <div class="w3-col m1 text-center">
        <img class="w3-circle" src="img/avatar/user8.jpg" style="width:80px;height:80px">
      </div>
      <div class="w3-col m10 w3-container">
        <h4>Bisma <span class="w3-opacity w3-medium">&nbsp;Sep 28, 2014, 10:15 PM</span></h4>
        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><br>
      </div>
    </div>
  </div>
  <br>
  </div>



</body>
</html>
