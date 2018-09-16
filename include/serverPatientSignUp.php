<?php
	session_start();
	include('connection.php');
	if(isset($_SESSION['logged_in']))
	{
		header("Location: patientDashboard.php");
	}
	else
	if (isset($_POST['ptsignup'])){
	// receive all input values from the form
	$aadhar = mysqli_real_escape_string($db, $_POST['aadhar']);
	$name = mysqli_real_escape_string($db, $_POST['name']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$dob = mysqli_real_escape_string($db, $_POST['dob']);
	$bloodGroup = mysqli_real_escape_string($db, $_POST['bloodGroup']);
	$mobile = mysqli_real_escape_string($db, $_POST['mobile']);
	$dob = substr($dob, 6, 4).'-'.substr($dob, 0, 2).'-'.substr($dob, 3, 2);

  	$query = "INSERT INTO patient(umiId,patientName,emailID,dob,bloodGroup,mobileNo) VALUES ('$aadhar','$name','$email','$dob','$bloodGroup','$mobile')";
  	if(mysqli_query($db, $query)){
				echo "<script type=\"text/javascript\">
     	alert('You have been registered !!!');
      </script>";
		}
	else{
				echo "<script type=\"text/javascript\">
     	alert('Sorry, You have not been registered !!!');
      </script>";
	}
}
?>
