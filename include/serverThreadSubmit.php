<?php
include('connection.php');
session_start();
if (isset($_POST['thread_submit'])){
	// receive all input values from the form
	$thread_title = mysqli_real_escape_string($db, $_POST['thread']);
	$thread_description = mysqli_real_escape_string($db, $_POST['thread_description']);
	date_default_timezone_set('Asia/Kolkata');
	$d=date('Y-m-d H:i:s');
  	$query = "INSERT INTO threads(Email, Thread_Title, Description, Date) VALUES ('$_SESSION[email]','$thread_title','$thread_description','$d')";
  	if(mysqli_query($db, $query)){
				echo "<script type=\"text/javascript\">
     	alert('You have created new thread!!!');
      </script>";

		}
	else{
				echo "<script type=\"text/javascript\">
     	alert('Sorry, Your thread has not been created !!!');
      </script>";
	}
  	//header('location: ../studentDashboard.php');
}
?>
