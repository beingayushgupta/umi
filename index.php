<?php
  include ('include/serverlogin.php');
  include ('include/header.php');
  if(isset($_SESSION['admin_logged_in']))
  {
    header("Location: admin.php");
  }
?>


<!DOCTYPE html>
<html>
<head>
  <title>Sign In</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>

  <form method="POST">
	  <input type="radio" name="user" value="patient" checked> Patient &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	  <input type="radio" name="user" value="doctor"> Doctor &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

	<div class="input-group">
		<label>UMI ID / Aadhar Number</label>
		<input type="text" name="umiId" required pattern="^[1-9][0-9]{11}$" title="Twelve digit Aadhar Number is required and it can't start with 0.">
	</div>

	<div class="input-group">
  		<label>Name</label>
  		<input type="text" name="name">
  	</div>

	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>

	<p>New User? <a href="patientSignUp.php">Register Here</a></p>
  </form>
</body>
</html>
