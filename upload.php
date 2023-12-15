<?php 

if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
	include "config.php";

	echo "<pre>";
	print_r($_FILES['my_image']);
	echo "</pre>";
        $product = $_POST['product'];
        $productname= $_POST['productname'];
$phone= $_POST['phone'];
$email= $_POST['email'];
	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];

	if ($error === 0) {
		if ($img_size > 5509152) {
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

				// Insert into Database
				$sql = "INSERT INTO advertisement (product,product_name,phone,email,image_url) 
				        VALUES('$product','$productname','$phone','$email','$new_img_name')";
				mysqli_query($mysqli, $sql);
			        
                                
     
                               
			}else {
				$em = "You can't upload files of this type";
		       
			}
		}
	}else {
		$em = "unknown error occurred!";
		header("Location: index.php?error=$em");
	}

}else {
	header("Location: index.php");
}
?>
<a href="view.php"> View images</a>