<?php 
 
 $id = $_GET['id']; 
 $dman = $_GET['email'];
 include_once("config.php"); 
 $result1 = mysqli_query($mysqli, "SELECT * FROM service WHERE id=$id");
  while($res = mysqli_fetch_array($result1))
  
   { 
  	$product = $res['product']; 	
  	$productname = $res['product_name'];
 	$productmodel = $res['product_model'];
  	$address = $res['address']; 
  	$city = $res['city'];
  	$pin = $res['pin'];
  	$phone = $res['phone'];
  	$email = $res['email'];
  	}
        
  	 $result1 = mysqli_query($mysqli, "INSERT INTO service3 (id,product,product_name,address,city,pin,phone,email,dman,updates)
VALUES ('$id','$product','$productname','$address','$city','$pin','$phone','$email','$dman','approved')"); 


  	 $result = mysqli_query($mysqli, "INSERT INTO service2 (id,product,product_name,address,city,pin,phone,email,dman,updates)
VALUES ('$id','$product','$productname','$address','$city','$pin','$phone','$email','$dman','approved')"); 
if($id=="$id") {
  $asq = mysqli_query($mysqli, "DELETE FROM service WHERE id='$id'" );
  
  /*echo '<script>';
  echo 'alert("recorded")
  window.location="emppage.php?email='$dman'";';
  echo '</script>';
  */
 header("Location: productpage.php?email=$dman"); 
 
 }
 
 
?> 


