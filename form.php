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

<!DOCTYPE html>
<html>
<head>
				<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="Clasified">
    <meta name="generator" content="Wordpress! - Open Source Content Management">
    <title>Octane website</title>    

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

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

* {box-sizing: border-box;}

input[type=text], input[type=tel], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit]  {
  background-color: Dodgerblue;
  color: white;
  width:200px;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}


input[type=submit]:hover {
  background-color: #45a049;
}

.containerr {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  border:1px solid black;
  box-shadow: 5px 5px 3px #aaaaaa;
}
label{
				font-weight:bold;
}
h1{
color:black;
}
</style>
</head>
<body>
				
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
             <!-- <li><a href="login.html"><i class="lnr lnr-enter"></i> Login</a></li>
              <li><a href="signup.html"><i class="lnr lnr-user"></i> Signup</a></li>
             --> <li class="postad" style="font-color:white;">
                <a class="btn btn-primary btn-lg" style="color: white; " href="servicelog.php?email=<?php echo $email;?>"><span class="fa fa-plus-circle" style="color:white;" ></span> Service History </a>
              </li>
            </ul>
          </div>
          <!-- Navbar End -->
        </div>
      </nav>
      <!-- Off Canvas Navigation -->
<br>
<br>
<?php 
    // Include the database config file 
    include_once 'config.php'; 
     
    // Fetch all the country data 
    $query = "SELECT * FROM countries WHERE status = 1 ORDER BY country_name ASC"; 
    $result = $mysqli->query($query); 
?>

<div class="container"><center>
				<h2>SERVICE BOOKING</h2>
				<hr></center>
				
  <form action="upload1.php"
           method="post"
           enctype="multipart/form-data">
    

    

    <label for="country">Product </label><br>
    
    <!-- Country dropdown -->
<select id="country" name="product">
    <option value="">Select Product</option>
    <?php 
    if($result->num_rows > 0){ 
        while($row = $result->fetch_assoc()){  
            echo '<option value="'.$row['country_id'].'">'.$row['country_name'].'</option>'; 
        } 
    }else{ 
        echo '<option value="">Country not available</option>'; 
    } 
    ?>
</select>

    
    
<br>

<label>Product Name</label>

<!-- State dropdown -->
<select id="state" name="productname">
    <option value="">Select Product first</option>
</select>
 

 <br>
 <label>Product Model</label>
 <!-- City dropdown -->
<select id="city" name="productmodel">
    <option value="">Select Product Name first</option>
</select>
<br>
 
 
  
  <label for="Address">Address</label>
    <input type="text"  name="address" required >
    <label for="City">City</label>
    <input type="text" class="city" name="city" required>
        <label for="Pin code">Pin Code</label>
    <input type="text" class="pincode" name="pin" required>

<label for="phone">Phone Number</label>
    <input type="tel" id="phone" name="phone" required>
    <input type="hidden" name="email" value="<?php echo $email; ?>">

    <label for="issue">Explain your issue</label>
    <textarea id="subject" name="subject" placeholder="" name="issue" style="height:100px"></textarea>

<label>Upload damaged product image</label><br><br>
<input type="file" 
                  name="my_image" ><br><br>
<center>
           
    <input type="submit" name="submit" value="REQUEST SERVICE"></center><br><br><br><hr><br>
    
    
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
$(document).ready(function(){
    $('#country').on('change', function(){
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'action.php',
                data:'country_id='+countryID,
                success:function(html)
                {
                    $('#state').html(html);
                    $('#city').html('<option value="">Select Product Name first</option>'); 
                }
            }); 
        }else{
            $('#state').html('<option value="">Select Product first</option>');
            $('#city').html('<option value="">Select Product Name first</option>'); 
        }
    });
    
    $('#state').on('change', function(){
        var stateID = $(this).val();
        if(stateID){
            $.ajax({
                type:'POST',
                url:'action.php',
                data:'state_id='+stateID,
                success:function(html){
                    $('#city').html(html);
                }
            }); 
        }else{
            $('#city').html('<option value="">Select state first</option>'); 
        }
    });
});
</script>



  </form>
</div>
</div>
</label>

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
             
                  <li><a href="#">Terms & Conditions</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                </ul>
    					</div>
    				</div>
    				<!-- 
    				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="1s">
    					<div class="widget">
                <h3 class="block-title">Latest Tweets</h3>
                <div class="twitter-content clearfix">
                  <ul class="twitter-list">
                    <li class="clearfix">
                      <span>
                        Platform to Download and Submit #Bootstrap Templates via @ProductHunt @GrayGrids
                        <a href="#">http://t.co/cLo2w7rWOx</a>
                      </span>
                    </li>
                    <li class="clearfix">
                      <span>
                        Introducing Bootstrap 4 Features: What’s new, What’s gone!
                        <a href="#">http://t.co/cLo2w7rWOx</a>
                      </span>
                    </li>
                  </ul>
                </div>
              </div>
    				</div>
    				 -->
    				
    	</section>
    	<!-- Footer area End -->
    	
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
    	<!-- Copyright End -->

    </footer>
    <!-- Footer Section End -->  
    
    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="fa fa-angle-up"></i>
    </a>
      
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
