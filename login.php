<?php
 include 'eno2.php';
//include 'connection.php';
session_start();

error_reporting(0);

 if (isset($_POST['login'])) {
	$username = ($_POST['dmail']);
	$password = ($_POST['password']);

	$sql = "SELECT * FROM register WHERE password='$password'";
	$result = mysqli_query($con, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['dmail'] = $row['dmail'];
		$_SESSION['dname'] = $row['dname'];
		header("Location: index.html");
	} else {
		echo "<script>alert('Oh my god! username or Password is Wrong.')</script>";
	}
 }
?>


<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="loginfile.css">
  <link rel="stylesheet" href="sub.css">

	<title>Log in</title>
  <style media="screen">
    @import url('https://fonts.googleapis.com/css2?family=Lora&display=swap');
  </style>

</head>

<body class="bg">
	<div class="container">
		<form action=""  class="login-email"  method="POST"  >
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>

			<div class="input-group">
				<input type="text" style="height:25px; width:250px;" placeholder="Enter your username" name="username" id="username" required>
			</div>

			<div class="input-group">
				<input type="password" style="height:25px; width:250px;" placeholder="Password" name="password" id="password" required >

			</div>

      <div class="btn-group">
				 <input type="submit" name="login" class="btn" value="Login">
			</div>


			<p class="login-register-text">Don't have an account ??? <a href="register.php">Register Here</a>.</p>
		</form>

	</div>

</body>

</html>
