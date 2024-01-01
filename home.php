<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>HOME</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link href="home.css" rel="stylesheet">
    <link rel="icon" href="img/logo.png" type="image">
</head>

<body>

  <nav class="navbar-nav navbar-expand-lg fixed-top bg-white">
  <div class="container text-center">
    <div class=" navbar-collapse">
      <div class="col-3 d-flex">
        <div class="col ">
          <a href="home.html">Home</a>
        </div>
        <div class="col">
          <a href="#ab">About us</a>
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
          <a href="login.php">Log out</a>
        </div> -->
      </div>
    </div>
  </div>
</nav>

<br>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <!-- <ol class="carousel-indicators">
    <li data-target="#s1" data-slide-to="0" class="active"></li>
    <li data-target="#s2" data-slide-to="1"></li>
    <li data-target="#s3" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active"> -->
      <img class="d-block w-100" src="img/1.jpg" alt="First slide">
    <!-- </div> -->
    <!-- <div class="carousel-item">
      <img class="d-block w-100" src="img/2.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/3.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#s3" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#s2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a> -->
</div>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container "style="color:black;background:whitesmoke;" >
  <div class="w3-content">
    <div class="w3-twothird">
      <h1 id="ab">About us</h1>
      <h5 class="w3-padding-32">Welcome <?php if(isset($_SESSION['email']))echo $_SESSION['email']; ?> to our world of Moroccan craftsmanship, where tradition meets artistry in a vibrant fusion of colors and patterns. At <a class="text-decoration-none w3-text-blue-gray" href="home.html"> Moroccan-Bazar</a>, we take pride in curating and showcasing the rich heritage of Morocco through an exquisite collection of handcrafted treasures. Each piece tells a story of skilled artisans who have perfected their craft over generations, infusing passion and dedication into every stitch, weave, and detail.
      </h5>
      <p >Indulge in the timeless elegance of Moroccan craftsmanship, and let each carefully chosen item add a touch of sophistication and cultural flair to your life. Join us on a journey that celebrates tradition, honors craftsmanship, and brings the soulful beauty of Morocco to your doorstep.
         </p>
         <button type="button" class="btn btn-dark text-white"><a href="aboutus.php">read more</a></button>
    </div>
    <div class="w3-third w3-center">
      <img src="img/5.jpg" width="88%" height="88%" style="border-radius: 50%;margin-right: -40%;" alt="berber">
    </div>
  </div>
</div>


<section class="section-products">
  <div class="container">
      <div class="row justify-content-center text-center">
            <div class="col-md-8 col-lg-6">
                <div class="header">
                    <h3>Featured Product</h3>
                    <h2>Comming Soon</h2>
                </div>
            </div>
      </div>


      <div class="row">
            <!-- Single Product -->
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div id="product-1" class="single-product">
                    <div class="part-1">
                    </div>
                    <div class="part-2">
                        <h3 class="product-title">Leather Puff</h3>
                        <h4 class="product-old-price">$79.99</h4>
                        <h4 class="product-price">$49.99</h4>
                    </div>
                </div>
            </div>
            <!-- Single Product -->
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div id="product-2" class="single-product">
                    <div class="part-1">
                        <span class="discount">15% off</span>
                        
                    </div>
                    <div class="part-2">
                        <h3 class="product-title">Hand made modern rug</h3>
                        <h4 class="product-price">$49.99</h4>
                    </div>
                </div>
            </div>
            <!-- Single Product -->
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div id="product-3" class="single-product">
                    <div class="part-1">
                      
                    </div>
                    <div class="part-2">
                        <h3 class="product-title">Traditional lamp</h3>
                        <h4 class="product-old-price">$79.99</h4>
                        <h4 class="product-price">$49.99</h4>
                    </div>
                </div>
            </div>
            <!-- Single Product -->
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div id="product-4" class="single-product">
                    <div class="part-1">
                        <span class="new">new</span>
                        
                    </div>
                    <div class="part-2">
                        <h3 class="product-title">Traditional dress women</h3>
                        <h4 class="product-price">$49.99</h4>
                    </div>
                </div>
            </div>
            <!-- Single Product -->
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div id="product-5" class="single-product">
                    <div class="part-1">
                      
                    </div>
                    <div class="part-2">
                        <h3 class="product-title">Traditionnal rug</h3>
                        <h4 class="product-old-price">$79.99</h4>
                        <h4 class="product-price">$49.99</h4>
                    </div>
                </div>
            </div>
            <!-- Single Product -->
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div id="product-6" class="single-product">
                    <div class="part-1">
                        <span class="discount">15% off</span>
                      
                    </div>
                    <div class="part-2">
                        <h3 class="product-title">Traditional sink</h3>
                        <h4 class="product-price">$49.99</h4>
                    </div>
                </div>
            </div>
            <!-- Single Product -->
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div id="product-7" class="single-product">
                    <div class="part-1">
                      
                    </div>
                    <div class="part-2">
                        <h3 class="product-title">Traditional hoodie</h3>
                        <h4 class="product-old-price">$79.99</h4>
                        <h4 class="product-price">$49.99</h4>
                    </div>
                </div>
            </div>
            <!-- Single Product -->
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div id="product-8" class="single-product">
                    <div class="part-1">
                        <span class="new">new</span>
                      
                    </div>
                    <div class="part-2">
                        <h3 class="product-title">Traditional men's cape</h3>
                        <h4 class="product-price">$49.99</h4>
                    </div>
                </div>
            </div>
            <center>
            <div>
              <a style="border:3px solid" href="article.php">MYSTERY SHOP</a>
            </div>
            </center>
      </div>
  </div>
</section>


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
