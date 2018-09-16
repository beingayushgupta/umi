<?php
  include('connection.php');
  session_start();
  if(isset($_SESSION['logged_in']))
  {
    header("Location: patientDashboard.php");
  }
  else if (isset($_POST['login_user']))
  {
  	$umiId = mysqli_real_escape_string($db, $_POST['umiId']);
  	$name = mysqli_real_escape_string($db, $_POST['name']);
  	$query = "";
  	if($_POST['user']=="patient")
    {
  		$query = "SELECT * FROM patient WHERE umiId='$umiId' AND patientName='$name'";
  	}
  	else if($_POST['user']=="doctor")
    {
  		$query = "SELECT * FROM doctor WHERE umiId='$umiId' AND doctorName='$name'";
  	}
  	$results = mysqli_query($db, $query);
  	if ($_POST['user']=="patient" && mysqli_num_rows($results) == 1)
    {
  		$_SESSION['umiId'] = $umiId;
  		$_SESSION['logged_in'] = true;
      $_SESSION['user']="patient";
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: patientDashboard.php');
  	}
  	else if($_POST['user']=="doctor" && mysqli_num_rows($results) == 1)
    {
  		$_SESSION['logged_in'] = true;
  		$_SESSION['umiId'] = $umiId;
      $_SESSION['user']="doctor";
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: doctorDashboard.php');
  	}
  	else
    {
  		echo "<script type=\"text/javascript\">
      alert('Sorry, You are not registered... Please register first.!!!');
            </script>";
  	}
  }
?>
