<?php
if(isset($_POST['add'])){
	
	include 'config.php';


	$pname = $_POST['pname'];
	$category = $_POST['category'];
	$gender = $_POST['gender'];
	$brand = $_POST['brand'];
	$price = $_POST['price'];
	$descrp = $_POST['descrp'];
	$image = $_FILES['image']['name'];
	$psize = $_POST['psize'];
	$uploaddate = $_POST['uploaddate'];

	move_uploaded_file($_FILES['image']['tmp_name'], '../img/' .$_FILES['image']['name']);

	$sql = "INSERT INTO  product(pname,category,gender,brand,price,	descrip,image, psize,date)VALUES('$pname', '$category', '$gender', '$brand', '$price', '$descrp', '$image', '$psize', '$uploaddate')";
	
	if(mysqli_query($conn , $sql)){
		echo "<script>
				alert('Product Added');
				window.location = 'http://localhost/fsphpb74/product.php';
		</script>";
	}else{
		echo "error" .mysqli_error($conn);
	}


}








?>