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

<body style="background-color: #115544;" >
    <div class="content-wrapper">
        <div class="container">
			<div class="row">
				<div class="col-md-2">
					<div class="panel panel-danger">
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
			    <div class="col-md-8">
					<div class="panel panel-info">
						<div class="panel-heading" style="font-size: 200%;text-align: center;"> 
						Progress Notes</div>
						<div class="panel-body">
							When a patient is hospitalized, daily updates are entered into the medical record documenting clinical changes, new information, etc. 
						</div>
					</div>
				    <div class="panel panel-info">
					    <div class="panel-heading">Dated : 24/06/2018</div>
						<div class="panel-body">
							<div>
								<dl>
									<dt> Condition : </dt>
									<dd style="margin-left: 20px;">
										Patient is in normal condition.
									</dd>
								</dl>
							</div>
					    </div>
					</div>

				    <div class="panel panel-info">
					    <div class="panel-heading">Dated : 22/06/2018</div>
						<div class="panel-body">
							<div>
								<dl>
									<dt> Condition : </dt>
									<dd style="margin-left: 20px;">
										Patient's Codition is improving.
									</dd>
								</dl>
							</div>
					    </div>
					</div>

				    <div class="panel panel-info">
					    <div class="panel-heading">Dated : 20/06/2018</div>
						<div class="panel-body">
							<div>
								<dl>
									<dt> Condition : </dt>
									<dd style="margin-left: 20px;">
										Patient is in Critical condition.
									</dd>
								</dl>
							</div>
					    </div>
					</div>

				    <div class="panel panel-info">
					    <div class="panel-heading">Dated : 19/06/2018</div>
						<div class="panel-body">
							<div>
								<dl>
									<dt> Condition : </dt>
									<dd style="margin-left: 20px;">
										Patient is in ICU.
									</dd>
								</dl>
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
