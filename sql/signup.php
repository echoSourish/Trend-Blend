<?php

if (isset($_POST['signup'])) {

	include 'config.php';
	$pname = $_POST['pname'];
	$smail = $_POST['smail'];
	$password = $_POST['password'];

	$sql = "INSERT INTO  signin(pname,smail,password) VALUES('$pname','$smail','$password')";



	if (mysqli_query($conn, $sql)) {
		echo "<script>
				alert('registration succesfully....');
				window.location = 'http://localhost/fsphpb74/singin.php';
		</script>";
	} else {
		echo "error" . mysqli_error($conn);
	}
}
if (isset($_POST['login'])) {

	include 'config.php';

	$sql = "SELECT * FROM signin WHERE smail = '$_POST[email]' AND password = '$_POST[password]'";


	$query = (mysqli_query($conn, $sql));

	if (mysqli_num_rows($query) > 0) {

		$_SESSION['email'] = $_POST['email'];

		echo "<script>
		window.location = 'http://localhost/fsphpb74/index.php';
		</script>";
		header('location = index.php');
	} else {
		echo "<script>
			alert('Wrong Information Provided);
		</script>";
	}

}

?>