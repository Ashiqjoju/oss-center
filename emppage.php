<?php include_once("config.php");
 
 
  
   $email = $_GET['email']; 

      $sql1=mysqli_query($mysqli,"SELECT * FROM emp_login where email='$email'");
    $row  = mysqli_fetch_array($sql1);
    if(is_array($row))
    {

        


    }
    else
    {
			        echo '<script>';
                                echo 'alert("ACCESS DENIED, LOGIN REQUIRED")
                                window.location="emplogin.php";';
                                echo '</script>';
                                }
?>
                                <!DOCTYPE html>
<html>
<head>
				<meta charset="UTF-8">
                                <meta http-equiv="refresh" content="10">
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
table {
 border-radius:5px;
}
 th, td {
    border: 4px solid #ddd;
  padding: 8px;
  Width:400px;
}
th{
color: white;
 background: dodgerblue;
}
td{
Font-family: Monospace;

}
table{ background:white;}
hr{
 
 Border-top: 3px solid white;
}
h4{
}
select, .iii{

Background: dodgerblue;

Width:100%;
height:40px;
Color: white;


}
</style>
</head>
<body>

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
            <a class="navbar-brand logo" href="index.php"><img src="assets/img/logo.png" alt=""></a>
          </div>
          <!-- brand and toggle menu for mobile End -->

          <!-- Navbar Start -->
          <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#"><i class="lnr lnr-user"></i>Welcome, AKHIL</a></li>
              <li><a href="emplogin.php"><i class="fa fa-sign-out"></i> Logout</a></li>
           <!--   <li class="postadd">
                <a class="btn btn-danger btn-post" href="post-ads.html"><span class="fa fa-plus-circle"></span> Post an Ad</a>
              </li>
            </ul>
          </div>
           -->
        </div>
      </nav>
      <!-- Off Canvas Navigation -->
      
      
      <div style="background:#ddd;"><br><br>
      <center>
      <h2 style="color:	#383838; Font-family: Monospace;">ORDER DETAILS</h2>
      
      <hr>
      
<h4>MY ORDERS</h4>
<br>
<?php
include "config.php";
if ($mysqli->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "


SELECT service4.id,service4.email, service4.dman, all_products.product,all_products.address,all_products.city,all_products.pin,all_products.phone,service4.product as product_1 ,service4.address as address_1,service4.city as city_1,service4.pin as pin_1, service4.phone as phone_1
FROM service4
INNER JOIN all_products 
ON
service4.product = all_products.product
WHERE dman = '$email' ORDER BY id DESC

"




;
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    echo "<center>
    
    <table>";
    
  
    
   
    while($row = $result->fetch_assoc())
    {
     echo "<tr>
     <th>PICK-UP DETAILS</th>
     <th>DELIVERY DETAILS</th>
     </tr>";
        echo "<tr>
        <td >
        <form action='demo.php' method='get'>
        
        
        ORDER ID : <b>OSS459". $row['id']."</b><br>
         PRODUCT : " . $row["product_1"]. " <br>
        PRODUCT NAME : " . $row["product_name"]."<br>
        
        ADDRESS : " . $row["address_1"]. "<br>
        CITY : " . $row["city_1"]. "<br>
        PIN : " . $row["pin_1"]. "<br>
        PHONE : <b> ". $row["phone_1"]. "</b><br>
        
        </td>
        
        
        
        
        <td>
        
        ORDER ID : <b>OSS459" . $row["id"]. "</b><br>
        PRODUCT : " . $row["product"]. " <br>
        PRODUCT NAME : " . $row["product_name"]."<br>
        ADDRESS : " . $row["address"]. "<br>
        CITY : " . $row["city"]. "<br>
        PIN : " . $row["pin"]. "<br>
        PHONE : <b>" . $row["phone"]. " <br>
        
        </td>
        
        
</tr>";
echo "

<tr><td style='background:#ddd'>

<center>

<input type='hidden' name='email' value='$email'>
<input type='hidden' name='idm' value='".$row['id']."'>


<select name='update'>
   <option value=''disabled selected></option>
    <option value='Your product id OSS459".$row['id']." has picked up.'>PICKED UP PRODUCT</option>
    <option value='Your product id OSS459".$row['id']." has reached the service center.'>DELIVERED PRODUCT</option>
  </select>
  
  
 

</center></td>
<td style='background:#ddd';>
<input class='iii' name='submit' type='submit' value='UPDATE'>
</td></tr>
</form>";

echo "<tr><td colspan='2' style='background:#ddd'><hr></td></tr>";
    }
    echo "</table></center>";
} else {
    
}

$mysqli->close();
?>
<br><hr>
<br>
<h4>ALL ORDERS</h4>
<br>
<?php


include "config.php";
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$sql = "SELECT * FROM service3 order by id desc";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    echo "<center><table><tr><th>ID</th><th>Pickup Details</th><th>Contact Number</th><th>Accept Order</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>OSS459" . $row["id"]. "</td>
<td>Product: ".$row["product"]."<br>Address : " . $row["address"]. " <br>City : " . $row["city"]. "<br> Pin : " . $row["pin"]. "</td><td>" . $row["phone"]. "</td>

<td> <center><button style='background: dodgerblue;color:white; height:30px; border:none; ' ><a style='color:white; test-decoration:none;' href='editprocess1.php?id=".$row["id"]."&email=".$_GET["email"]."'>ACCEPT</a> </td></tr>";
    }
    echo "</table></center>";
} else {
    echo "0 results";
}

$mysqli->close();


?>

<br><br><br>
</div>
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
</body>
</html>