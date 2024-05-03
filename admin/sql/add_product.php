<?php
if(isset($_POST['add'])){
	
	include 'co.php';


	$pname = $_POST['pname'];
	$category = $_POST['category'];
	$gender = $_POST['gender'];
	$brand = $_POST['brand'];
	$price = $_POST['price'];
	$description = $_POST['description'];
	$image = $_FILES['image']['name'];
	$psize = $_POST['psize'];
	$uploaddate = $_POST['uploaddate'];

	move_uploaded_file($_FILES['image']['tmp_name'], '../img/' .$_FILES['image']['name']);

	$sql = "INSERT INTO  product(pname,category,gender,brand,price,	description,image, psize,uploaddate)VALUES('$pname', '$category', '$gender', '$brand', '$price', '$description', '$image', '$psize', '$uploaddate')";
	
	if(mysqli_query($conn , $sql)){
		echo "<script>
				alert('Product Added');
				window.location = 'http://localhost/fsphpb74/admin/product.php';
		</script>";
	}else{
		echo "error" .mysqli_error($conn);
	}


}

?>