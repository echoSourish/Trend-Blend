<?php 
if(isset($_POST['edit'])){

	include 'co.php';

	$id = $_POST['id'];
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

	$sql = "UPDATE product SET pname='$pname', category	='$category', gender='$gender', brand='$brand',
	price='$price', description='$description', 	image='$image', psize='$psize', uploaddate='$uploaddate' WHERE id= '$id'";

	if(mysqli_query($conn , $sql)){
		echo "<script>
				alert('data Update Successfully');
				window.location = 'http://localhost/fsphpb74/admin/productview.php';
		</script>";
	}else{
		echo "error" .mysqli_error($conn);
	}
}

?>