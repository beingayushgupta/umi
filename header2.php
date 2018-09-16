<div>
  <div class="navbar navbar-inverse set-radius-zero" style="background-color: #462003; 
    font-family: monospace;" >
      <div class="container">
          <div class="navbar-header">
              <a class="img img-responsive" href="doctorDashboard.php" 
                style="margin-left: -100px;margin-top: 5px;">
                  <img src="assets/img/logo.jpg" height="80px" width="400px" />
              </a>
          </div>
          <?php

                  echo "<div class='right-div'>

                  <a href='include/logout.php' class='btn btn-danger pull-right'>LOG ME OUT</a>";
                  echo "</div>";

          ?>
    <div class="right-div">
            <a href="profile.php" style="color: white"> <label>
            <?php
              $query="SELECT * from doctor WHERE umiId='$_SESSION[umiId]'";
							$result=$db->query($query);
							$row=$result->fetch_assoc();
              $first = explode(' ',trim($row['doctorName']));
              echo $first[0];
            ?>
              </label></a>
          </div>
    <div class="chat-widget-name-right" >
              <a href="profile.php"><img class="media-object img-circle2 img-right-chat"
      style="margin-top:1%;margin-bottom:30px" src="assets/img/faces/face-1.jpg" /></a>
    </div>
      </div>
  </div>
  <!-- LOGO HEADER END-->
  <section class="menu-section" style="font-family: monotype;" >
      <div class="container" >
          <div class="row" >
              <div class="col-md-12">
                  <div class="navbar-collapse collapse">
                      <ul id="menu-top" class="nav navbar-nav navbar-left">
                          <li><a href="doctorDashboard.php" class="menu-top-active">HOME</a></li>
                          <li><a href="searchPatient.php">Search Patient</a></li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </section>
</div>
