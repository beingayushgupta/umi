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

<body style="background-color: #856944;" >
    <div class="content-wrapper">
        <div class="container">
			<div class="row">
			    <div class="col-md-12" style="background-color: gray">
					<div class="panel panel-default">
						<div class="panel-heading" style="font-size: 200%;text-align: center;"> Test Results</div>
					</div>
				    <div class="panel panel-info">
					    <div class="panel-heading" style="font-size: 150%;">Blood Test <span style="float: right;">Dated : 24/1/2018</span></div>
						<div class="panel-body">
							<div>
							<dl>
								<dt>Status : Under Observation</dt>
								<dt>Any other information</dt>
							</dl>
							</div>
					    </div>
					</div>
				    <div class="panel panel-info">
					    <div class="panel-heading" style="font-size: 150%;">Maleria Test <span style="float: right">Dated : 1/5/2018</span></div>
						<div class="panel-body">
							<div>
							<dl>
								<dt>Status : Generated</dt>
								<dt>Any other information</dt>
								<a href="uploads/test1.pdf" class="btn btn-info" style="float: right;">Download Report</a>
							</dl>
							</div>
					    </div>
					</div>
				    <div class="panel panel-info">
					    <div class="panel-heading" style="font-size: 150%;">Typhoid Test <span style="float: right">Dated : 5/2/2017</span></div>
						<div class="panel-body">
							<div>
							<dl>
								<dt>Status : Generated</dt>
								<dt>Any other information</dt>
								<a href="uploads/test1.pdf" class="btn btn-info" style="float: right;">Download Report</a>
							</dl>
							</div>
					    </div>
					</div>

				    <div class="panel panel-info">
					    <div class="panel-heading" style="font-size: 150%;">platelets Test <span style="float: right">Dated : 3/10/2016</span></div>
						<div class="panel-body">
							<div>
							<dl>
								<dt>Status : Generated</dt>
								<dt>Any other information</dt>
								<a href="uploads/test1.pdf" class="btn btn-info" style="float: right;">Download Report</a>
							</dl>
							</div>
					    </div>
					</div>

				</div>
		</div>
	</div>
	</div>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- Upcoming Events JQUERY  -->
    <script src="assets/js/upcoming_events_marquee.js"></script>    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
</body>
</html>
