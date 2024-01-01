<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ABOUT US</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link href="home.css" rel="stylesheet">
    <link rel="icon" href="img/logo.png" type="image">
    <style>
       .bg-image {
        margin-top: 2%;
      background-image: url(img/3.png);
      background-size: cover;
      background-position: center;
      height: 100vh; 
      color: #fff; 
      padding: 20px; 
    }
       .bg-image1 {
      background-image: url(img/6.jpg);
      background-size: cover;
      background-position: center;
      height: 100vh; 
      color: #fff; 
      padding: 20px; 
    }
       .bg-image2 {
      background-image: url(img/9.jpg);
      background-size: cover;
      background-position: center;
      height: 100vh; 
      color: #fff; 
      padding: 20px; 
    }
      div span{
        background-color: black;
      }

    </style>
</head>

<body>

  <nav class="navbar-nav navbar-expand-lg fixed-top bg-white ">
  <div class="container text-center">
    <div class=" navbar-collapse">
      <div class="col-3 d-flex">
        <div class="col ">
          <a href="home.php">Home</a>
        </div>
        <!-- <div class="col">
          <div class="dropdown">
            <a href="#">Categuories</a>
            <div class="dropdown-content">
              <a href="#">Decoration</a>
              <a href="#">Clothing</a>
              <a href="#">Accessories</a>
            </div>
          </div>
        </div> -->
      </div>
      
      <div class="col-6">
        <?php 
        if(isset($_SESSION['email'])){
            echo $_SESSION['email'];
        }else{
            echo"session expired";
        }
        ?>
      </div>

      <div class="col-3 d-flex">
        <div class="col">
          <a href="login.php">Log out</a>
        </div>
        <!-- <div class="col">
          <a href="signup.php">Sign up</a>
        </div> -->
      </div>
    </div>
  </div>
</nav>

<br>
<div class="container-fluid bg-image">
  <div class="row">
    <div class="col-md-6 mx-auto ">
      <h2 class="display-2 text-center">Our Story</h2>
      <br>
    </div>
  </div>
  <span class="lead">
    At Moroccan-Bazar, our journey began with a deep appreciation <br>
    for the artistic traditions of Morocco. Inspired by the intricate <br>
    designs, vibrant colors, and centuries-old craftsmanship,<br>
    we set out to share the magic of Moroccan culture with the world.<br>
    What started as a passion project soon evolved into a platform<br>
     dedicated to showcasing the beauty and uniqueness of <br>handmade 
     Moroccan products.
  </span>
</div>
<div class="container-fluid bg-image1">
  <div class="row">
    <div class="col-md-6 mx-auto ">
      <h2 class="display-2 text-center">Our Mission </h2>
      <br>
    </div>
  </div>
  <span class="lead">
    Our mission at Moroccan-Bazar goes beyond <br>selling products  it's about fostering a connection between <br>you and the heart of Moroccan craftsmanship. <br> We are committed to providing a platform that <br>celebrates the artisans, their heritage,<br> and the stories embedded in every piece. <br> By supporting Moroccan-Bazar, you become <br>a part of a movement to sustain traditional art forms and empower <br> artisans to thrive in a global market.
  </span>
</div>
<div class="container-fluid bg-image2">
    <div class="row">
      <div class="col-md-6 mx-auto ">
        <h2 class="display-2 text-center">Our Products </h2>
        <br>
      </div>
    </div>
    <span class="lead">
      Indulge in the allure of Moroccan-Bazar,<br>where every purchase is a celebration of culture, tradition,<br>and the enduring spirit of handmade craftsmanship. Join us on this journey,  <br>  as we invite you to experience the magic of Morocco <br>
      through our carefully curated selection of products.
    </span>
  </div>
  

  <footer
          class="text-center text-lg-start text-white"
          style="background-color: black;
          position: absolute;
        
          width: 100%;"
          >
    <div
         class="text-center p-3"
         style="background-color: rgba(0, 0, 0, 0.2)"
         >
         Made By: Idriss EL Bikri
    </div>
  </footer>

</div>

</body>

</html>
