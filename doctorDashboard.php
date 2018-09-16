<?php
include('include/serverThreadSubmit.php');
include 'headLinks.php';
include 'header2.php';

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
				<div class="col-md-2">
					<div class="panel panel-warning">
						<div class="panel-heading">Recent Appointments</div>
						<div class="panel-body">
							<div class="col-mod-4">
							    <table class="table">
                                    <tbody>
                                    	<tr>
                                            <td>Abhishek Rajput</td>
                                        </tr>

                                    	<tr>
                                            <td>Ayush Gupta</td>
                                        </tr>

                                    	<tr>
                                            <td>Sunil Pundir</td>
                                        </tr>
                                    </tbody>
                                </table>
							</div>
							<label><a href="#">See More</a></label>
						</div>
					</div>
				</div>
			    <div class="col-md-8">
					<div class="panel panel-default">
						<div class="panel-heading" style="font-size: 200%; text-align: center; color: black">Welcome,
							<?php
             					$query="SELECT * from doctor WHERE umiId='$_SESSION[umiId]'";
								$result=$db->query($query);
								$row=$result->fetch_assoc();
             		 			echo "Dr. ".$row['doctorName'];
            				?>

						</div>
					</div>
				    <div class="panel panel-info">
					    <div class="panel-heading">Today's Appointments</div>
						<div class="panel-body">
							<div>
							<ol>
							<li>
								<b>Patient Name : Abhishek Rajput</b>
								<a href="patientDetails.php" class="btn btn-primary" style="float: right">View Details</a>
							</li>
							<hr>
							<li>
								<b>Patient Name : Ayush Gupta</b>
								<a href="patientDetails.php" class="btn btn-primary" style="float: right">View Details</a>
							</li>
							<hr>
							<li>
								<b>Patient Name : Sunil Pundir</b>
								<a href="patientDetails.php" class="btn btn-primary" style="float: right">View Details</a>
							</li>
							<hr>

							</ol>
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
