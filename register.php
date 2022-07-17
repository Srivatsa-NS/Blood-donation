<?php

include 'eno2.php';
session_start();


if (isset($_POST['login'])) {
	$username = ($_POST['dmail']);
	$fullname = ($_POST['dname']);
	$password =($_POST['password']) ;

	$sql = "SELECT * FROM register WHERE dmail='$username'  ";
	$result = mysqli_query($con, $sql);
	$num=mysqli_num_rows($result);

		if ($num==1) {
			echo "<script>alert('Oh my god! Choose Other mail. Already Exists.')</script>";
		}
		else{
			$s="INSERT INTO register( dmail,dname, password)
					VALUES (lower('$username'),'$fullname', '$password')";
			$result=mysqli_query($con, $s);
			if($result){
			echo "<script>alert('Wow! User Registration Completed.')</script>";

			header("Location: login.php");
			}
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='Register.css'>
    <link rel="icon" href='./Images/bb_logo(black).png' type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<title>Start Saving Lives </title>
<body>
<header>
    <nav>
    <div class="header-logo" ><img src="./images/icon.png"></div>
    <div class="header-list">
        <ul>
            <li><a href="help.html">Get Help</li></a>
            <li><a href="donate.html">Donate</li></a>
            <li><a href="index.html#vol-sect">Volunteer</li></a>
            <li><a href="index.html#about-us">About Us</a></li>
            </ul>
    </div>
    </nav>
</header>

<div class="inner">
    <div class="photo">
        <img src="./Images/regphoto.png">
    </div>
    <div class="user-form">
        <h1>Start Saving Lives</h1>
        <form method="POST">
            <i class="fas fa-user icon"></i>
            <input type="text" placeholder="Name">
            <br>
            <i class="fas fa-envelope-square"></i>
            <input type="email" placeholder="E-mail">
            <br>
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" id="password_data">
            <div class="safety" style="font-family: sans-serif; font-size: 20px;">
                Enter Password
            </div>
            <div class="action-btn">
                <button class="btn primary">Create Account</button>
                <button class="btn">Skip</button>
            </div>
        </form>
    </div>
</div>
<script src="./Register.js"></script>
</body>
</html>
