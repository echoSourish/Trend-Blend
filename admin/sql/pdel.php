<?php

include 'co.php';

$id = $_GET['id'];

$sql = " DELETE FROM product WHERE id = '$id'";

if(mysqli_query($conn , $sql)){
		echo "<script>
				alert('Product Delete Successfully');
				window.location = 'http://localhost/fsphpb74/admin/productview.php';
		</script>";
	}else{
		echo "error" .mysqli_error($conn);
	}






?>