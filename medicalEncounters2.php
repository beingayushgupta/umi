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

<body style="background-color: #115544;" >
    <div class="content-wrapper">
        <div class="container">
			<div class="row">
			    <div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading" style="font-size: 200%;text-align: center;"> Medical Encounters</div>
					</div>
				    <div class="panel panel-info">
					    <div class="panel-heading">Dated : 24/06/2018</div>
						<div class="panel-body">
							<div>
								<dl>
									<dt>Chief Complaint : </dt>
									<dd style="margin-left: 20px;">Vomiting.</dd>
									<dt>History of the present illness:</dt>
									<dd style="margin-left: 20px;">
										A detailed exploration of the symptoms the patient is experiencing that have caused the patient to seek medical attention.
									</dd>
									<dt>Physical examination : </dt>
									<dd style="margin-left: 20px;">
										<ul>
											<li>Weight : 65 KG </li>
											<li>Temp : 98 F </li>
											<li>Blood Pressure : 130/70</li>
										</ul>
									</dd>
									<dt>Assessment and plan : </dt>
									<dd style="margin-left: 20px;">
										The assessment is a written summation of what are the most likely causes of the patient's current set of symptoms. The plan documents the expected course of action to address the symptoms (diagnosis, treatment, etc.).
									</dd>
									<dt>Prescription : </dt>
									<dd style="margin-left: 20px;">Medicines suggested by doctor</dd>

								</dl>
							</div>
					    </div>
					</div>
				    <div class="panel panel-warning">
					    <div class="panel-heading">Dated : 2/08/2017</div>
						<div class="panel-body">
							<div>
								<dl>
									<dt>Chief Complaint : </dt>
									<dd style="margin-left: 20px;">High Fever with cold.</dd>
									<dt>History of the present illness:</dt>
									<dd style="margin-left: 20px;">
										A detailed exploration of the symptoms the patient is experiencing that have caused the patient to seek medical attention.
									</dd>
									<dt>Physical examination : </dt>
									<dd style="margin-left: 20px;">
										<ul>
											<li>Weight : 62 KG </li>
											<li>Temp : 105 F </li>
											<li>Blood Pressure : 150/70</li>
										</ul>
									</dd>
									<dt>Assessment and plan : </dt>
									<dd style="margin-left: 20px;">
										The assessment is a written summation of what are the most likely causes of the patient's current set of symptoms. The plan documents the expected course of action to address the symptoms (diagnosis, treatment, etc.).
									</dd>
									<dt>Prescription : </dt>
									<dd style="margin-left: 20px;">Medicines suggested by doctor</dd>

								</dl>
							</div>
					    </div>
					</div>
				    <div class="panel panel-info">
					    <div class="panel-heading">Dated : 6/6/2016</div>
						<div class="panel-body">
							<div>
								<dl>
									<dt>Chief Complaint : </dt>
									<dd style="margin-left: 20px;">Lungs Infection.</dd>
									<dt>History of the present illness:</dt>
									<dd style="margin-left: 20px;">
										A detailed exploration of the symptoms the patient is experiencing that have caused the patient to seek medical attention.
									</dd>
									<dt>Physical examination : </dt>
									<dd style="margin-left: 20px;">
										<ul>
											<li>Weight : 70 KG </li>
											<li>Temp : 99 F </li>
											<li>Blood Pressure : 120/70</li>
										</ul>
									</dd>
									<dt>Assessment and plan : </dt>
									<dd style="margin-left: 20px;">
										The assessment is a written summation of what are the most likely causes of the patient's current set of symptoms. The plan documents the expected course of action to address the symptoms (diagnosis, treatment, etc.).
									</dd>
									<dt>Prescription : </dt>
									<dd style="margin-left: 20px;">Medicines suggested by doctor</dd>

								</dl>
							</div>
					    </div>
					</div>

				</div>

		</div>
	</div>
	</div>
    <!-- CONTENT-WRAPPER SECTION END-->
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- Upcoming Events JQUERY  -->
    <script src="assets/js/upcoming_events_marquee.js"></script>    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
</body>
</html>
