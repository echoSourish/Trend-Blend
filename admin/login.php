<?php
session_start();
if(!empty($_SESSION['username'])){

    echo "<script>
    window.location = 'index.php';
    </script>";
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login || Admin</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
	html,body { 
	height: 100%; 
}

.global-container{
	height:100%;
	display: flex;
	align-items: center;
	justify-content: center;
	background-color: #f5f5f5;
}

form{
	padding-top: 10px;
	font-size: 14px;
	margin-top: 30px;
}

.card-title{ font-weight:300; }

.btn{
	font-size: 14px;
	margin-top:20px;
}


.login-form{ 
	width:330px;
	margin:20px;
}

.sign-up{
	text-align:center;
	padding:20px 0 0;
}

.alert{
	margin-bottom:-30px;
	font-size: 13px;
	margin-top:20px;
}
</style>
<body>
	<div class="global-container">
	<div class="card login-form">
	<div class="card-body">
		<h3 class="card-title text-center">Admin Login</h3>
		<div class="card-text">
			<form action="" method="POST">
				<div class="form-group">
					<label for="exampleInputEmail1">Username</label>
					<input type="text" name="username" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Username">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" name="password" placeholder="Enter Your Password" class="form-control form-control-sm" id="exampleInputPassword1">
				</div>
				<button type="submit" class="btn btn-primary btn-block">LogIn</button>

				<div class="sign-up">
					<a href="#">Forgot password?</a>
				</div>
			</form>
		</div>
	</div>
</div>
</div>
</body>
</html>


<?php

if(isset($_POST['username'])){
    include 'sql/co.php';

    $query = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$_POST[username]' AND password = '$_POST[password]'");

    if(mysqli_num_rows($query)>0){

        $_SESSION['username'] = $_POST['username'];

        echo "<script>
        window.location = index.php;
        </script>";
        header('location = index.php');
    }else{
        echo "<script>
            alert('Wrong Information Provided);
        </script>";
    }
}


?>