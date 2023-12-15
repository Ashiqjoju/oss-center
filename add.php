<?php 
 include_once("config.php");
 if(isset($_POST['Submit']))
  {	 
  $id = mysqli_real_escape_string($mysqli,$_POST['product']);
  $productname = mysqli_real_escape_string($mysqli,$_POST['productname']);
 $a = strtoupper($productname);
     
     
   if($a=="")
 { 				 
  echo '<font color="red">Product name is empty.</font><br>'; 
  }
 		 else 
 		 {
 		  $result = mysqli_query($mysqli, "INSERT INTO states(country_id,state_name) VALUES('$id','$a')");
                  header("location: add.html");
 		  } 
 		  
 		  }
                  
    
    
 elseif(isset($_POST['Submit1']))
  {	 
  $id = mysqli_real_escape_string($mysqli,$_POST['productid']);
  $productmodel = mysqli_real_escape_string($mysqli,$_POST['productmodel']);
 $ab = strtoupper($productmodel);
     
     
   if($ab=="")
 { 				 
  echo '<font color="red">Wtf name is empty.</font><br>'; 
  }
 		 else 
 		 {
 		  $result = mysqli_query($mysqli, "INSERT INTO cities(state_id,city_name) VALUES('$id','$ab')");
                  header("location: add.html");
 		  } 
 		  
 		  } 
                  
                  
                  
                  elseif(isset($_POST['Submit2']))
  {	 
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
  
  $sql1 = "SELECT * FROM states where state_id='$productnameid'";
$result1 = $mysqli->query($sql1);
if ($result1->num_rows > 0) 
{
  while($row1 = $result1->fetch_assoc()) {
   $productname= $row1['state_name'];
    
    echo $productname;
    echo "<br>";
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








 /*  if($a=="")
 { 				 
  echo '<font color="red">Product name is empty.</font><br>'; 
  }
 		 else 
 		 {
 		  $result = mysqli_query($mysqli, "INSERT INTO cities(state_id,city_name) VALUES('$id','$ab')");
                  header("location: add.html");
 		  } 
 		  
 		  
 */
}
}
}

 ?> 


