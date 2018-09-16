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

<body style="background-color: lightblue;" >
    <div class="content-wrapper">
        <div class="container">
			<div class="row">
			    <div class="col-md-12" style="background-color: gray">
					<div class="panel panel-danger">
						<div class="panel-heading" style="font-size: 200%;text-align: center;"> Medical History</div>
					</div>
				    <div class="panel panel-warning">
					    <div class="panel-heading">Surgical History</div>
						<div class="panel-body">
							<div>
							<ul>
								<li>The surgical history is a chronicle of surgery performed for the 	patient. It may have dates of operations, operative reports, and/	or the detailed narrative of what the surgeon did.
								</li>
							</ul>
							</div>
					    </div>
					</div>
				    <div class="panel panel-warning">
					    <div class="panel-heading">Obstetric History</div>
						<div class="panel-body">
							<div>
							<ul>
								<li>The obstetric history lists prior pregnancies and their outcomes. It also includes any complications of these pregnancies.
								</li>
							</ul>
							</div>
					    </div>
					</div>
				    <div class="panel panel-warning">
					    <div class="panel-heading">Medications and medical allergies</div>
						<div class="panel-body">
							<div>
							<ul>
								<li>
									The medical record may contain a summary of the patient's current and previous medications as well as any medical allergies.
								</li>
							</ul>
							</div>
					    </div>
					</div>
				    <div class="panel panel-warning">
					    <div class="panel-heading"> Family history</div>
						<div class="panel-body">
							<div>
							<ul>
								<li>
							The family history lists the health status of immediate family members as well as their causes of death (if known). It may also list diseases common in the family or found only in one sex or the other. It may also include a pedigree chart. It is a valuable asset in predicting some outcomes for the patient.
								</li>
							</ul>
							</div>
					    </div>
					</div>
				    <div class="panel panel-warning">
					    <div class="panel-heading">Social history</div>
						<div class="panel-body">
							<div>
							<ul>
								<li>
								The social history is a chronicle of human interactions. It tells of the relationships of the patient, his/her careers and trainings, and religious training. It is helpful for the physician to know what sorts of community support the patient might expect during a major illness. It may explain the behavior of the patient in relation to illness or loss. It may also give clues as to the cause of an illness (e.g. occupational exposure to asbestos).
								</li>
							</ul>
							</div>
					    </div>
					</div>

				    <div class="panel panel-warning">
					    <div class="panel-heading">Habits</div>
						<div class="panel-body">
							<div>
							<ul>
								<li>
								Various habits which impact health, such as tobacco use, alcohol intake, exercise, and diet are chronicled, often as part of the social history. This section may also include more intimate details such as sexual habits and sexual orientation.
								</li>
							</ul>
							</div>
					    </div>
					</div>

				    <div class="panel panel-warning">
					    <div class="panel-heading">Immunization history</div>
						<div class="panel-body">
							<div>
							<ul>
								<li>
								The history of vaccination is included. Any blood tests proving immunity will also be included in this section.
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
