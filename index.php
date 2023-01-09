<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="76x76" href="img\stisla.svg">
  <link rel="icon" type="image/png" href="img\stisla.svg">
<title>SoleGlance </title>

    <!-- google fonts cdn link  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="startscreen/style.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link href="webfonts\uicons-regular-straight.css" rel="stylesheet">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>

</head>
<body>
   
<!-- header section starts  -->

<header>

    <div id="menu" class="fas fa-bars"></div>
    <img src="img\stisla-light.svg" class="w3-circle w3-left" w3-padding-16 style="width:40px">
    <nav class="navbar">
        <ul>
            <li><a class="active" href="#home">home</a></li>
            <li><a href="#about">about</a></li>
        </ul>
    </nav>

   <a href="login_form.php"  id="login"><i class="fi fi-sr-user"></i></a>
</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">
    <h1>SoleGlance</h1>
    <h2>Lets Roam Around The World together</h2>
    <a href="register_form.php"><button class="btn">get started</button></a>

    <div class="shape"></div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <div class="image">
        <img src="img/img3.jpg" alt="">
    </div>

    <div class="content">
        <h3>why choose us?</h3>
        <p>Sole Glance, a new platform that will allow users to sign up for free. 
            They can share their daily activities, upload statuses, post photos, videos, and articles 
            as well as can share their thoughts and opinions with the many people they like. 
            Users can not only use Sole Glance to stay in touch with friends and family
             but can get analytical reports for free. Our all-in-one platform makes it easy
              to share your thoughts and experiences with others & can help build relationships. 
              Our users will be able to see trending topics that include news, sports, weather, travel, 
              and entertainment, just within a few clicks. They will also be able to see how well the topic 
              is received by the audience, which will help them make more informed decisions.</p>
        <a href="#"><button class="btn">learn more</button></a>
    </div>

</section>

<!-- about section ends -->

<div class="footer">

    <div class="box-container">


        <div class="box">
            <h3>contact info</h3>
            <p> <i class="fas fa-map-marker-alt"></i> Islamabad, Pakistan. </p>
            <p> <i class="fas fa-envelope"></i> example@gmail.com </p>
            <p> <i class="fas fa-phone"></i> +123-456-7890 </p>
        </div>

    </div>



</div>

<!-- footer section ends -->





















<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="startscreen/script.js"></script>

</body>
</html>