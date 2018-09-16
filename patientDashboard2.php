<?php
include('include/serverThreadSubmit.php');
include 'headLinks.php';
include 'header3.php';

if(!isset($_SESSION['logged_in']))
  {
    header("Location: index.php");
  }
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<body style="background-color: #554466;" >
    <div class="content-wrapper">
        <div class="container">
			<div class="row">
			    <div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading" style="font-size: 200%; text-align: center; color: black"> Abhishek Rajput</div>
					</div>
				    <div class="panel panel-info">
					    <div class="panel-heading">Recent Activities</div>
						<div class="panel-body">
							<div>
							<ul>
							<li>	
								<dl>
									<dt>25/01/2018 : </dt>
									<dd style="margin-left: 20px;">Consulted Dr. Hajela</dd>
									<dt>Chief Complaint : </dt>
									<dd style="margin-left: 20px;">Repeated Fever with headache.</dd>
									
									<dt>Prescription : </dt>
									<dd style="margin-left: 20px;">Medicines suggested by doctor</dd>
								</dl>
							</li>
							<hr>
							<li>
								<dl>
									<dt>5/12/2017 : </dt>
									<dd style="margin-left: 20px;">Consulted Dr. Praveen Dandekar</dd>
									<dt>Chief Complaint : </dt>
									<dd style="margin-left: 20px;">Red eyes and cold.</dd>
									
									<dt>Prescription : </dt>
									<dd style="margin-left: 20px;">Medicines suggested by doctor</dd>
								</dl>
							</li>
							<hr>
							<li>
								<dl>
									<dt>6/9/2016 : </dt>
									<dd style="margin-left: 20px;">Consulted Dr. Verma</dd>
									<dt>Chief Complaint : </dt>
									<dd style="margin-left: 20px;">Vomiting.</dd>
									
									<dt>Prescription : </dt>
									<dd style="margin-left: 20px;">Medicines suggested by doctor</dd>
								</dl>
							</li>
								
							</ul>
							</div>
					    </div>
					</div>
				</div>
			<br>
		</div>
	</div>
	</div>

    <script src="assets/js/upcoming_events_marquee.js"></script>    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
</body>
</html>
