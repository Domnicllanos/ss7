<?php

	session_start();
	if(isset($_SESSION['user'])) header('location: dashboard.php');
	$errror_message = '';
	if($_POST){
		include('database/connection.php');


		$username = $_POST['username'];
		$password = $_POST['password'];

		$query = 'SELECT * FROM users WHERE users.email="'. $username .'" AND users.password="'. $password .'"';
		$stmt = $conn->prepare($query);
		$stmt->execute();


		if($stmt->rowCount() > 0){
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$user = $stmt->fetchAll()[0];
			$_SESSION['user'] = $user;

			header('location: dashboard.php');

		}else $errror_message = 'Please Input Correct Email or Password.';

	}

?>



<!DOCTYPE html>
<html>
<head>
	<title>RAD Fitness Gym</title>

	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body id="loginBody">
	<?php
		if(!empty($errror_message)) {
	?>			

	<div id="errorMessage">
		<strong>ERROR:</strong> </p> <?= $errror_message ?></p>
	</div>
<?php } ?>
	<div class="container">
		<div class="loginHeader">
			<h1>RAD</h1>
			<p>Fitness Gym Membership System</p>
		</div>
		<div class="loginBody">
			<form action="login.php" method="POST">
				<div class="loginInputsContainer">
					<label for="">username</label>
					<input placeholder="Username" name="username" type="text" />	
				</div>	
				<div class="loginInputsContainer">
					<label for="">password</label>
					<input placeholder="Password" name="password" type="password" />	
				</div>
				<div class="loginButtonContainer">
					<button>Login</button>
				</div>				
			</form>
		</div>
	</div>
</body>
</html>