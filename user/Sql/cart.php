<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Shopping Cart</title>
</head>
<body>
	<?php

if(isset($_POST['add_to_cart'])){

include '../config.php';

$image = $_POST['image'];
$pname = $_POST['pname'];
$price = $_POST['price'];


$sql = "SELECT * FROM `cart` WHERE pname = '$pname'";
$table = mysqli_query($conn, $sql);

if(mysqli_num_rows($table)>0){
	echo"
    <script>
	alert( 'product already added to cart!');
	window.location ='http://localhost/fsphpb74/user/productcard.php';		
	</script>";
}

else{
	$sql = "INSERT INTO cart(image , pname, price)VALUES('$image', '$pname', '$price')";



// $sql = "ALTER TABLE add_product AUTO_INCREMENT = 1;"

if(mysqli_query($conn ,$sql)){
	echo"
	<script>

	alert('Product Added to Cart');

	window.location ='http://localhost/fsphpb74/user/productcard.php';			

</script>";

}else{
	echo "error" .mysqli_error($conn);
	}
}

}

?>	
</body>
</html>