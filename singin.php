<!DOCTYPE html>
<html>

<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="css/sign.css">
</head>

<body>
	<form action="sql/signup.php" method="POST">
		<div class="form-structor">
			<div class="signup">
				<h2 class="form-title" id="signup"><span>or</span>Sign up</h2>
				<div class="form-holder">
					<input type="text" name="pname" class="input" placeholder="Name" />
					<input type="email" name="smail" class="input" placeholder="Email" />
					<input type="password" name="password" class="input" placeholder="Password" />
				</div>
				<input type = "submit" class="submit-btn" name ="signup">
			</div>
	</form>
	<form action="sql/signup.php" method="POST">
		<div class="login slide-up">
			<div class="center">
				<h2 class="form-title" id="login"><span>or</span>Log in</h2>
				<div class="form-holder">
					<input type="email" name="email" class="input" placeholder="Email" />
					<input type="password" name="password" class="input" placeholder="Password" />
				</div>
				<input type="submit" name="login" class="submit-btn">
			</div>
		</div>
	</form>
</div>

	<script src="js/sig.js"></script>
</body>

</html>