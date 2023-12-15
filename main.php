
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <style> 
    		
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    }
.asr{
    height: 100vh;
    width: 100vw;
    overflow: hidden; 
    background-color: white;
    
    position: absolute;
}
.asr>div{
    height: 70px;
    width: 70px;
    border: 10px solid #45474b;
    border-top-color: #2a88e6;
    position: absolute;
    margin: auto;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    border-radius: 50%;
    animation: spin 1.5s infinite linear;
}
.www{
    display: none;
    }
@keyframes spin{
    100%{
        transform: rotate(360deg);
    }
}

    </style>

    <div class="asr">
        <div></div>
    </div>
    
    
<?php include_once("config.php");
 
 
  
   $email = $_GET['email']; 

      $sql1=mysqli_query($mysqli,"SELECT * FROM cust_login where email='$email'");
    $row  = mysqli_fetch_array($sql1);
    if(is_array($row))
    {

        


    }
    else
    {
			        echo '<script>';
                                echo 'alert("ACCESS DENIED, LOGIN REQUIRED")
                                window.location="index.php";';
                                echo '</script>';
                                }
?>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="Clasified">
    <meta name="generator" content="Wordpress! - Open Source Content Management">
    <title>Welome to OSSC</title>    

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">    
    <link rel="stylesheet" href="assets/css/jasny-bootstrap.min.css" type="text/css">    
    <link rel="stylesheet" href="assets/css/jasny-bootstrap.min.css" type="text/css">
    <!-- Material CSS -->
    <link rel="stylesheet" href="assets/css/material-kit.css" type="text/css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css">
        <!-- Line Icons CSS -->
    <link rel="stylesheet" href="assets/fonts/line-icons/line-icons.css" type="text/css">
        <!-- Line Icons CSS -->
    <link rel="stylesheet" href="assets/fonts/line-icons/line-icons.css" type="text/css">
    <!-- Main Styles -->
    <link rel="stylesheet" href="assets/css/main.css" type="text/css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/extras/animate.css" type="text/css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="assets/extras/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="assets/extras/owl.theme.css" type="text/css">    
    <!-- Responsive CSS Styles -->
    <link rel="stylesheet" href="assets/css/responsive.css" type="text/css">
    <!-- Slicknav js -->
    <link rel="stylesheet" href="assets/css/slicknav.css" type="text/css">
        <!-- Bootstrap Select -->
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
    
  </head>

  <body>  
  <section class="www">
    <!-- Header Section Start -->
    <div class="header">    
      <nav class="navbar navbar-default main-navigation" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <!-- Stat Toggle Nav Link For Mobiles -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- End Toggle Nav Link For Mobiles -->
            <a class="navbar-brand logo" href="#"><img src="assets/img/logo.png" alt=""></a>
          </div>
          <!-- brand and toggle menu for mobile End -->

          <!-- Navbar Start -->
          <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav navbar-right">
            
            <li><a href="#"><i class="lnr lnr-user"></i> Welocme,
            <?php $email=$_GET['email'];
           
 include_once("config.php"); 
 $result = mysqli_query($mysqli, "SELECT name FROM cust_login WHERE email = '$email'"); 
 
 ?>
 <?php
while($res = mysqli_fetch_array($result))
{ 		 		
 echo strtoupper($res['name']);
 }
?>
            
            
            </a></li>
            <li><a href="index.php"><i class="fa fa-sign-out"></i> Logout</a></li>
              
              <li class="postadd">
                <a class="btn btn-danger btn-post" href="postad.php?email=<?php echo $email;?>" ><span class="fa fa-plus-circle"></span> Post an Ad</a>
              </li>
            </ul>
          </div>
          <!-- Navbar End -->
        </div>
      </nav>


    <!-- Start intro section -->
    <section id="intro" class="section-intro">
      <div class="overlay">
        <div class="container">
          <div class="main-text">
            <h1 class="intro-title">Welcome To <span style="color: #3498DB ;line-spacing:2px; "><b>OSSC </b></span></h1>
            <p class="sub-title">Please select your damaged product from the list <br>
            Due to Lock down, Some services are not available.</p>

            <!-- Start Search box -->
            
            
          <div class="row search-bar">
              
              		          				
              				
             <form class="search-form" name="form" onSubmit="return validate()" action="form.php?email=<?php echo $email;?>" method="POST">
             				<table border="0" width="100%"><tr><td><center>
                                        <button style="width:300px;border:none;height:40px;background:dodgerblue;color:white"><a style="color:white" href="form.php?email=<?php echo $email;?>">SERVICE SECTION</a>
                                       </button></center> </td></tr>
                                        
                                        
                                        <tr><td><center> <button style="width:300px;border:none;height:40px;margin-top:20px;background:dodgerblue;"><a style="color:white" href="ads.php?email=<?php echo $email; ?>">VISIT ADS SECTION</a>
                                        </button></center></td></tr></table>
                  
                </form> 
                
                
              </div>
            </div> 
            <!-- End Search box -->
          </div>
        </div>
     
    </section>
    <!-- end intro section -->
<!-- 
    <div class="wrapper">
      
      

    </div>
    -->

    <!-- Counter Section Start -->
   
    <section id="counter">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="counting wow fadeInDownQuick" data-wow-delay=".5s">
              <div class="icon">
                <span>
                  <i class="lnr lnr-tag"></i>
                </span>
              </div>
              <div class="desc">
                <h3 class="counter">190</h3>
                <p>Daily Services</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="counting wow fadeInDownQuick" data-wow-delay="1s">
              <div class="icon">
                <span>
                  <i class="lnr lnr-map"></i>
                </span>
              </div>
              <div class="desc">
                <h3 class="counter">60</h3>
                <p>Locations</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="counting wow fadeInDownQuick" data-wow-delay="1.5s">
              <div class="icon">
                <span>
                  <i class="lnr lnr-users"></i>
                </span>
              </div>
              <div class="desc">
                <h3 class="counter">23453</h3>
                <p>Regular Members</p>
              </div>
            </div>
          </div>
       
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="counting wow fadeInDownQuick" data-wow-delay="2s">
              <div class="icon">
              <span>
               <i class="lnr lnr-users"></i>
              </span>
             </div>
             <div class="desc">
             <h3 class="counter">45</h3>
             <p>Employees</p>
            
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
    
    
     
    <!-- Counter Section End -->

    <!-- Footer Section Start -->
    <footer>
    	<!-- Footer Area Start -->
    	<section class="footer-Content">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0">
              <div class="widget">
                <h3 class="block-title">About us</h3>
                <div class="textwidget">
                  <p>We provide all kind of electronic device services within a less timespan. </p>
                </div>
              </div>
            </div>
    				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.5">
    					<div class="widget">
    						<h3 class="block-title">Useful Links</h3>
  							<ul class="menu">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Categories</a></li>
                  <li><a href="#">FAQ</a></li>
               
                  <li><a href="#">About</a></li>
                  <li><a href="#">Contact</a></li>
             
                  <li><a href="#">Terms &#38;Conditions</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                </ul>
    					</div>
    				</div>
                       </div>
                       </div>
    				   				
    	</section>
    	<!-- Footer area End -->
    	<section>
    	<!-- Copyright Start  -->
    	<div id="copyright">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
              <div class="site-info pull-left">
                <p>All copyrights reserved @ 2021 - Designed by Octane</p>
              </div>    					
              <div class="bottom-social-icons social-icon pull-right">  
                <a class="facebook" target="_blank" href="https://web.facebook.com/GrayGrids"><i class="fa fa-facebook"></i></a> 
                <a class="twitter" target="_blank" href="https://twitter.com/GrayGrids"><i class="fa fa-twitter"></i></a>
                <a class="dribble" target="_blank" href="https://dribbble.com/"><i class="fa fa-dribbble"></i></a>
                <a class="flickr" target="_blank" href="https://www.flickr.com/"><i class="fa fa-flickr"></i></a>
                <a class="youtube" target="_blank" href="https://youtube.com"><i class="fa fa-youtube"></i></a>
                <a class="google-plus" target="_blank" href="https://plus.google.com"><i class="fa fa-google-plus"></i></a>
                <a class="linkedin" target="_blank" href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
              </div>
    				</div>
    			</div>
    		</div>
    	</div>
        </div>
      </div></div>
    	<!-- Copyright End -->
 </section>
    </footer>
    <!-- Footer Section End -->  
    
    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="fa fa-angle-up"></i>
    </a>
    </section>
      
    <!-- Main JS  -->
    <script type="text/javascript" src="assets/js/jquery-min.js"></script>      
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/material.min.js"></script>
    <script type="text/javascript" src="assets/js/material-kit.js"></script>
    <script type="text/javascript" src="assets/js/jquery.parallax.js"></script>
    <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="assets/js/wow.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/js/jquery.counterup.min.js"></script>
    <script type="text/javascript" src="assets/js/waypoints.min.js"></script>
    <script type="text/javascript" src="assets/js/jasny-bootstrap.min.js"></script>
        <script src="assets/js/bootstrap-select.min.js"></script>

    
  </body>
</html>

<script>
        $(window).on('load',function(){
            $(".asr").fadeOut(2500);
            $(".www").fadeIn(2500);
        });
    </script>