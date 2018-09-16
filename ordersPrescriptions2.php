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
					<div class="panel panel-info">
						<div class="panel-heading" style="font-size: 200%;text-align: center;"> 
						Orders & Prescriptions</div>
					</div>

				    <div class="panel panel-default" style="font-size: 120%;color:purple">
						<div class="panel-heading" style="font-size: 200%;height: 30px;"></div>						
						<div class="panel-body">
							<div>
								<ul>
									<li>
										Written orders by medical providers are included in the medical record.
									</li>
									<hr>
									<li>
										These detail the instructions given to other members of the health care team by the primary providers.
									</li>
									<hr>
									<li>
										Written orders by medical providers are included in the medical record.
									</li>
									<hr>
									<li>
										These detail the instructions given to other members of the health care team by the primary providers.
									</li>
								</ul>
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
