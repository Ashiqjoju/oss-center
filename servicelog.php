

<?php include_once("config.php");
 
 
  
   $email = $_GET['email']; 

      $sql1=mysqli_query($mysqli,"SELECT * FROM cust_login where email='$email' ");
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
<script type = "text/javascript" >  
    function preventBack() { window.history.forward(); }  
    setTimeout("preventBack()", 0);  
    window.onunload = function () { null };  
</script> 
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
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}
td{background:white}


th {
  background-color: dodgerblue;
  color: white;
}
hr{
 border-top: 3px solid white;
}
td, th
{
 border: 3px solid #ddd;
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
            <a class="navbar-brand logo" <?php echo "href='main.php?email=$email'"; ?>><img src="assets/img/logo.png" alt=""></a>
          </div>
          <!-- brand and toggle menu for mobile End -->

          <!-- Navbar Start -->
          <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav navbar-right">
             
              <li><a href="index.php"><i class="fa fa-sign-out"></i> Logout</a></li>
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
      <h2 style="color:	#383838; Font-family: Monospace;">SERVICE LOG</h2>
      </center>
<br><hr>





<!-- New added -->

<?php 

if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
	include "config.php";
	
	$productid = mysqli_real_escape_string($mysqli,$_POST['product']);
  $productnameid = mysqli_real_escape_string($mysqli,$_POST['productname']);
  $productmodel = mysqli_real_escape_string($mysqli,$_POST['productmodel']);
     
     
     
     
     
     $sql = "SELECT * FROM countries where country_id='$productid'";
$result = $mysqli->query($sql);
if ($result->num_rows > 0) 
{
  while($row = $result->fetch_assoc()) {
   $product= $row['country_name'];
    
    echo $product ;
    echo "<br>";
  }
  }
  
  $sql1 = "SELECT * FROM states where state_id='$productnameid'";
$result1 = $mysqli->query($sql1);
if ($result1->num_rows > 0) 
{
  while($row1 = $result1->fetch_assoc()) {
   $productname= $row1['state_name'];
    
    echo $productname;
    echo "<br>";
  }
  }
  
  
  $sql2 = "SELECT * FROM cities where city_id='$productmodel'";
$result2 = $mysqli->query($sql2);
if ($result2->num_rows > 0) 
{
  while($row2 = $result2->fetch_assoc()) {
   $productmodel= $row2['city_name'];
    
    echo $productmodel;
    echo "<br>";
  }
  
  }
  
  
  
	
	
	

	
        
        
        $address= strtoupper($_POST['address']);
        $city= strtoupper($_POST['city']);
        $pin= $_POST['pin'];
        
$phone= $_POST['phone'];
$email= $_POST['email'];
	/*$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];

	if ($error === 0) {
		if ($img_size > 209152) {
			$em = "Sorry, your file is too large.";
		    
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png","JPG", "JPEG", "PNG"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'uploads/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);
                                echo $product ,$productname, $phone, $email;
*/
				// Insert into Database
				$sql = "INSERT INTO service (product,product_name, product_model,address,city,pin,phone,email) 
				        VALUES('$product','$productname','$productmodel','$address','$city','$pin','$phone','$email')";
				mysqli_query($mysqli, $sql);
                                //header("location: servicelog.php?email=$email");



			        echo '<script>';
                                
                                echo '</script>';
                               }
			/* }else {
				$em = "You can't upload files of this type";
		       
			}
		}
	}else {
		$em = "unknown error occurred!";
	
	}

}else {
	header("Location: index.php");
}*/



?>












<!-- new end -->
<?php
include "config.php";

$id =strval( $_GET['id']);
$id2 = strval($_GET['id']);
$sql1 = "DELETE FROM service WHERE id='$id'";

if ($mysqli->query($sql1) === TRUE) {
 
} 
error_reporting(0);
if(strpos($id, $id2) !== false){




?>
<style>
.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>


<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Cancelled !</strong> Order id OSS459<?php echo $id; ?> has been cancelled
</div>







<?php

} 


if ($mysqli->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM service where email='$email' Order by id desc";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {







    echo "<center><table ><tr><th colspan='3'><center>WAITING FOR APPROVAL</th></tr><tr><th>ORDER ID</th><th>PRODUCT DETAILS</th><th>CANCEL ORDER</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>OSS459" . $row["id"]. "</td>
<td>DATE : ".$row['date']."<br>PRODUCT : <b>" . $row["product"]. "</b>
<br>PRODUCT NAME :<b> ".$row['product_name']."</b>
<br>PRODUCT MODEL :<b> ".$row['product_model']."<b>
</td><td><center><button style='background: dodgerblue;color:white; height:30px; border:none; ' ><a style='color:white; test-decoration:none;'href='servicelog.php?email=$email&id=".$row['id']."'>CANCEL</a> </td></tr>";
    }
    echo "</table></center>";
} else {
    
    echo "<center><button style='background: dodgerblue; color: white; height:40px; border:none;' ><a style='color: white; test-decoration:none;' href='main.php?email=$email'>HOME PAGE</a></button></center>";
}

$mysqli->close();
?>
<br>
<hr>
<br>


<?php
include "config.php";
if ($mysqli->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM service2 where email='$email' order by id desc";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    echo "<center><table ><tr><th colspan='3'><center>TRACK YOUR ORDER</th></tr><tr><th>ORDER ID</th><th>PRODUCT</th><th>UPDATES</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>OSS459" . $row["id"]. "</td>
<td>" . $row["product"]. "</td>";
echo "<td style='height:100px;' colspan='2'> <b><I>" . $row["updates"]. "<I><b></td></tr>";


    }
    echo "</table><br><br></center>";
} else {
    
}

$mysqli->close();
?>
<br><hr>
<br>
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
