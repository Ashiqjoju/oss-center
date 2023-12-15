<?php include "config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All ads</title>

    <!-- Favicon -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive E-Commerce Website Design Tutorial</title>

    <!-- owl carousel css file cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body

<!-- Header Section Start -->
    <div class="header">    
      <nav class="navbar navbar-default main-navigation" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <!-- Stat Toggle Nav Link For Mobiles -->
            
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            
            <!-- End Toggle Nav Link For Mobiles -->
            <a class="navbar-brand logo" href="#"><img style="width:100px;margin-left:30px; margin-top:20px;" src="assets/img/logo.png" alt=""></a>
          </div>
          <!-- brand and toggle menu for mobile End -->

          <!-- Navbar Start -->
          
<!-- gallery section starts  -->

<section class="gallery" id="gallery">

<h1 class="heading"> <span> product gallery </span> </h1>

<ul class="controls">
    <li class="btn button-active" data-filter="all">ALL</li>
    <li class="btn" data-filter="phone">MY ADS</li></li>

</ul>

<br>

<marquee style="Font-size: 20px; background:dodgerblue;color: white;">Contact the owners for buying the products. Phone numbers are available</marquee>
<?php 
          $sql = "SELECT * FROM advertisement ORDER BY id DESC";
          $res = mysqli_query($mysqli,  $sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)) { 
          	 ?>

<div class="image-container">

    <div class="box phone">
        <div class="image">
            <img src="uploads/<?=$images['image_url']?>" alt="">
        </div>
        <div class="info">
            <h3> PRODUCT : <?=$images['product']?></h3>
            <h3 style="color:black; font-size:15px;">PRODUCT NAME : <?=$images['product_name']?></h3>
            <div class="subInfo">
                <strong class="price">Contact : <?=$images['phone']?></strong>
                
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
                
            </div>
            
        </div>
        
    </div>
    </div>

<?php } }?>


</section>
<script src="main.js"></script>

<!-- gallery section ends -->
