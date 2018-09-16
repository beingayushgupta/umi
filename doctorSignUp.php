<?php include('include/serverDoctorSignUp.php');
			include('include/header.php');
?>

<!DOCTYPE html>
<html lang="en-US">
<head>

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
	<title>Doctor Registration</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<div class="header">
       <h2>Doctor Registration</h2>
	</div>

	<form method="POST">
		<div class="input-group">
		<label>UMI ID / Aadhar Number</label>
			<input type="text" name="umiId" required pattern="^[1-9][0-9]{11}$" title="Twelve digit Aadhar Number is required and it can't start with 0." >		</div>
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name" required pattern="^[a-zA-Z\s]+$" title="Only alphabetic characters are allowed.">
		</div>
		<div class="input-group">
			<label>Desgination</label>
			<input type="text" name="designation" required>
		</div>

		<div class="input-group">
			<label>Speciality</label>
			<input type="text" name="speciality" required>
		</div>
		<div class="input-group">
			<label>Hospital Name</label>
			<input type="text" name="hospitalName" required>
		</div>
		<div class="input-group">
			<label>Hospital City</label>
			<input type="text" name="hospitalCity" required>
		</div>
		<div class="input-group">
			<label>Email ID</label>
			<input type="text" name="email">
		</div>

		<div class="input-group">
			<label>Date of Birth(mm/dd/yyyy)</label>
			<input type="text" name="dob" id="datepicker" required >
		</div>

		<div class="input-group">
			<label>Mobile Number</label>
			<input type="text" name="mobile" required pattern="^[1-9][0-9]{9}$" title="Ten digit mobile number is required and can't start with 0.">
		</div>
		<div class="input-group">
			<button type="submit" name="dsignup" class="btn">SignUp
			<button style="margin-left:20px;" type="reset" class="btn">Reset
		</div>
		<p>Already registered? <a href="index.php">Click here for login</p>
	</form>
</body>
</html>
