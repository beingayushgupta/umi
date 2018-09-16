<?php
	include('include/serverPatientSignUp.php');
	include('include/header.php');
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>Patient Registration</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="css/new1.css">
	<script src="include/new2.js"></script>
	<script src="include/new3.js"></script>
	<script>
	   $( function() {
	   $( "#datepicker" ).datepicker();
		   } );
	</script>
	<style>
		select{
			height: 30px;
			width: 93%;
			padding: 5px 10px;
			font-size: 16px;
			border-radius: 5px;
			border: 1px solid gray;
		}
	</style>
</head>

<body>
	<div class="header">
       <h2>Patient Registration</h2>
	</div>

	<form method="POST">
		<div class="input-group">
			<label>UMI ID / Aadhar Number</label>
			<input type="text" name="aadhar" required pattern="^[1-9][0-9]{11}$" title="Twelve digit Aadhar Number is required and it can't start with 0." >
		</div>
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name" required pattern="^[a-zA-Z\s]+$" title="Only alphabetic characters are allowed." >
		</div>
		<div class="input-group">
			<label>Email ID</label>
			<input type="text" name="email">
		</div>
		<div class="input-group">
			<label>Date of Birth(mm/dd/yyyy)</label>
			<input type="text" name="dob" id="datepicker" required >
		</div>

		<div class='input-group'>
		<label>Blood Group</label>
		<select name='bloodGroup' required >
			<option value=''>Select Blood Group</option>
			<option value='A+'>A+</option>
			<option value='A-'>A-</option>
			<option value='B+'>B+</option>
			<option value='B-'>B-</option>
			<option value='AB+'>AB+</option>
			<option value='AB-'>AB-</option>
			<option value='O+'>O+</option>
			<option value='O-'>O-</option>
			<option value="NA">NA</option>
			</select>
		</div>

		<div class="input-group">
			<label>Mobile Number</label>
			<input type="text" name="mobile" required pattern="^[1-9][0-9]{9}$" title="Ten digit mobile number is required and can't start with 0." >
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="ptsignup">SignUp
			<button style="margin-left:20px;" type="reset" class="btn"> Reset
		</div>
		<p>Already registered? <a href="index.php">Click here for login</p>
	</form>
</body>
</html>
