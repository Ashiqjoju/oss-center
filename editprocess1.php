<?php 
 
 $id = $_GET['id']; 
 $dman = $_GET['email'];
 include_once("config.php"); 
 $result1 = mysqli_query($mysqli, "SELECT * FROM service3 WHERE id=$id");
  while($res = mysqli_fetch_array($result1))
  
   { 
  	$product = $res['product']; 	
  	$productname = $res['product_name']; 	
  	$address = $res['address']; 
  	$city = $res['city'];
  	$pin = $res['pin'];
  	$phone = $res['phone'];
  	$email = $res['email'];
  	}
        
  	 $result1 = mysqli_query($mysqli, "INSERT INTO service4 (id,product,product_name,address,city,pin,phone,email,dman,updates)
VALUES ('$id','$product','$productname','$address','$city','$pin','$phone','$email','$dman','approved')"); 


  	 $result = mysqli_query($mysqli, "UPDATE service2 SET dman='$email', updates='Pick-up Generated' WHERE id='$id' "); 
if($id=="$id") {
  $asq = mysqli_query($mysqli, "DELETE FROM service3 WHERE id='$id'" );
  
  /*echo '<script>';
  echo 'alert("recorded")
  window.location="emppage.php?email='$dman'";';
  echo '</script>';
  */
 header("Location: emppage.php?email=$dman"); 
 
 }
 
 
?> 


