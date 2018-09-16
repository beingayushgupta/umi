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
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		  <link rel="stylesheet" type="text/css" href="search.css">
</head>
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
			    	<div class="panel panel-info">
			    		<div class="panel-heading">Search By UMI ID / Aadhar Number</div>
			    		<div class="panel-body">
							<form class="example" action="#" style="margin:auto;max-width:300px;">
							  <input type="text" placeholder="Search..." name="search"
							  	style="height:40px">
							  <button type="submit" style="height:40px"><i class="fa fa-search"></i></button>
							</form>
			    		</div>
			    	</div>
			    	<div class="panel panel-info">
			    		<div class="panel-heading">Search By Using Biometrics</div>
			    		<div class="panel-body">
							<form class="example" action="#" style="margin:auto;max-width:300px;">
							  <button type="submit" style="height:40px;"><i class="fa fa-search"></i></button>
							</form>
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
