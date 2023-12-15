<?php 
include_once("config.php"); 

if (isset($_GET['submit'])) {

$id= $_GET['idm'];
$email=$_GET['email'];
$update= $_GET['update'];

$asq = mysqli_query($mysqli, "UPDATE service2 SET updates='$update' WHERE id='$id'" );



$result1 = mysqli_query($mysqli, "SELECT * FROM service2 WHERE id='$id'");
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

if($update=="Your product id OSS459$id has reached the service center."){




$result = mysqli_query($mysqli, "INSERT INTO service5 (id,product,product_name,address,city,pin,phone,email,dman,updates)
VALUES ('$id','$product','$productname','$address','$city','$pin','$phone','$email','$dman','approvedys')");

$asq = mysqli_query($mysqli, "DELETE FROM service4 WHERE id='$id'" );


header ("location: emppage.php?email=$email");

}

}
?>