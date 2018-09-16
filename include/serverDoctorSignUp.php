<?php
include('connection.php');

if (isset($_POST['dsignup']))
{
  // receive all input values from the form
	$umiId = mysqli_real_escape_string($db, $_POST['umiId']);
	$name = mysqli_real_escape_string($db, $_POST['name']);
	$designation = mysqli_real_escape_string($db, $_POST['designation']);
	$speciality = mysqli_real_escape_string($db, $_POST['speciality']);
	$hospitalName = mysqli_real_escape_string($db, $_POST['hospitalName']);
	$hospitalCity = mysqli_real_escape_string($db, $_POST['hospitalCity']);
	$email = mysqli_real_escape_string($db, $_POST['email']); 
	$dob = mysqli_real_escape_string($db, $_POST['dob']);
	$mobile = mysqli_real_escape_string($db, $_POST['mobile']);
	

	$query = "INSERT INTO doctor
		(umiId,doctorName,designation,email,hospitalName,hospitalCity,dob,mobile,speciality)
		VALUES ('$umiId','$name','$designation','$email','$hospitalName','$hospitalCity','$dob',
		'$mobile','$speciality')";

  	if(mysqli_query($db, $query)){
			echo "<script type=\"text/javascript\">
     	alert('You have been registered !!!');</script>";

		}
	else{
				echo "<script type=\"text/javascript\">
     	alert('Sorry, You have not been registered !!!');
      </script>";
	}
  	//header('location: index.php');
}
?>
