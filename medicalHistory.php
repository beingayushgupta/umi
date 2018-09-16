<?php

include('include/serverThreadSubmit.php');
include 'headLinks.php';
include 'header.php';

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
				<div class="col-md-2">
					<div class="panel panel-info">
						<div class="panel-heading">Links</div>
						<div class="panel-body">
							<div class="col-mod-4">
							    <table class="table">
                                    <tbody>

                                      <?php
                                        $sql = "SELECT * FROM links ORDER BY Link_ID desc LIMIT 2;";
                                        $result = mysqli_query($db, $sql);
                                        while($row = mysqli_fetch_assoc($result))
                                        {
                                                  echo "<tr>
                                                      <td><a href='".$row['Link_Path']."' target='_blank'>".$row['Link_Title']."</a></td>
                                                  </tr>";
                                        }
                                      ?>                                    </tbody>
                                </table>
							</div>
							<label><a href="allLinks.php">See More</a></label>
						</div>
					</div>
				</div>
			    <div class="col-md-8" style="background-color: gray">
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
				<div class="col-md-2 col-sm-4 col-xs-12">
					<div class="panel panel-default">
					    <div class="panel-heading">
							Upcoming Events
						</div>
						<div class="panel-body">
						    <div class="col-mod-4">

                  <script >
                                  $(function () {
                                    $('.marquee').marquee({

                                    });
                                  });
                                  </script>

                  <!--                     -->

                  <div class="marquee ver" data-direction='up' data-duration='6000' data-pauseOnHover="true">

                                    <div style="height:100px; width:205x;">
                                      <?php
                                        $sql = "SELECT * FROM upcoming_event ORDER BY Event_ID desc;";
                                        $result = mysqli_query($db, $sql);
                                        while($row = mysqli_fetch_assoc($result))
                                        {
                                                  echo "<div><b>".$row['Date'].":</b>&nbsp;".$row['Event_Title']."<hr></div>";
                                        }
                                      ?>
                                    </div>
                                  </div>
						   </div>
                    </div>
                </div>
			</div>
			<br>
		</div>
	</div>
	</div>
    <!-- CONTENT-WRAPPER SECTION END-->

    <?php include('footer.php'); ?>

    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- Upcoming Events JQUERY  -->
    <script src="assets/js/upcoming_events_marquee.js"></script>    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
</body>
</html>
