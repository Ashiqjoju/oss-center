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
    
  }
  }
  
  $sql1 = "SELECT * FROM states where state_id='$productnameid'";
$result1 = $mysqli->query($sql1);
if ($result1->num_rows > 0) 
{
  while($row1 = $result1->fetch_assoc()) {
   $productname= $row1['state_name'];
    
   
  }
  }
  
  
  $sql2 = "SELECT * FROM cities where city_id='$productmodel'";
$result2 = $mysqli->query($sql2);
if ($result2->num_rows > 0) 
{
  while($row2 = $result2->fetch_assoc()) {
   $productmodel= $row2['city_name'];
    
    
  }
  
  }
  
  
  
	
	
	

	
        
        
        $address= strtoupper($_POST['address']);
        $city= strtoupper($_POST['city']);
        $pin= $_POST['pin'];
        
$phone= $_POST['phone'];
$email= $_POST['email'];

				// Insert into Database
				$sql = "INSERT INTO service (product,product_name, product_model,address,city,pin,phone,email) 
				        VALUES('$product','$productname','$productmodel','$address','$city','$pin','$phone','$email')";
				mysqli_query($mysqli, $sql);
                                header("location: servicelog.php?email=$email");
                               }
			



?>


<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
  </head>
    <style>
      body {
        text-align: center;
        padding: 40px 0;
        background: #EBF0F5;
      }
        h1 {
          color: #88B04B;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        p {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
        }
      i {
        color: #9ABC66;
        
        font-size: 200px;
        line-height: 300px;
        
        margin-left:-10px;
      }
      .card {
        background: white;
        
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
      }
    </style>
    <body>
      <div class="card">
      <div style="border-radius:200px; height:500px; width:500px; background: #F8FAF5; margin:0 auto;">
       <br><br><br> <i class="checkmark">✓</i>
      </div>
        <h1>Success</h1> 
        <p>We received your Sevice request;<br/> we'll be in touch shortly!</p>
        <br>
        
        <a <?php echo "href='servicelog.php?email=$email'"; ?>>Click here to track your order.</a>
        <br>
        <a <?php echo "href='main.php?email=$email'"; ?>>Home page</a>
      </div>
    </body>
</html>

