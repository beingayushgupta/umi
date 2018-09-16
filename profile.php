<?php
  include('include/connection.php');
  session_start();
  include 'headLinks.php';
  include 'header.php';
  if(!isset($_SESSION['logged_in']))
    {
      header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<body style="background-color: #446655;">
    <div class="content-wrapper">
         <div class="container" style="height: 300px;">
           <div class="col-md-3 col-sm-4 col-xs-12" style="margin-left:-5%" >
                  <div class="alert alert-info text-center">
                      <img class="img-circle1" src="assets/img/faces/face-1.jpg" 
                       style="height: 150px;" />
                      <br>
                      <h4></h4>
                      <h4>
                        UMI ID : 
                          <?php
                              $query="SELECT * from patient WHERE umiId='$_SESSION[umiId]'";
                              $result=$db->query($query);
                              $row=$result->fetch_assoc();
                              $first = explode(' ',trim($row['umiId']));
                              echo $first[0];
                          ?>
                      </h4>
                      <h5>
                          <?php
                              $query="SELECT * from patient WHERE umiId='$_SESSION[umiId]'";
                              $result=$db->query($query);
                              $row=$result->fetch_assoc();
                              $first = explode(' ',trim($row['patientName']));
                              echo $first[0].' '.$first[1];
                          ?>
                      </h5>
                      <h5>Blood Group : 
                          <?php
                              $query="SELECT * from patient WHERE umiId='$_SESSION[umiId]'";
                              $result=$db->query($query);
                              $row=$result->fetch_assoc();
                              $first = explode(' ',trim($row['bloodGroup']));
                              echo $first[0];
                          ?>
                      </h5>
                  </div>
           </div>

           <div class="col-md-10 col-sm-6" style="margin-right:-10%" >
                               <div class="panel panel-default " >
                                   <div class="panel-body " >
                                       <ul class="nav nav-tabs ">
                                           <li class="active"><a href="#details" data-toggle="tab">Personal Details</a>
                                           </li>
                                       </ul>
                                       <div class="tab-content" >
                                           <div class="tab-pane fade active in " id="details" >
                                               <h4>Your Details</h4>
                                <table class="table table-hover">
                                    <tbody>
                                        <tr>
                                            <td><b>Name</b></td>
                                            <td><b>:</b></td>
                                            <td>
                          <?php
                              $query="SELECT * from patient WHERE umiId='$_SESSION[umiId]'";
                              $result=$db->query($query);
                              $row=$result->fetch_assoc();
                              echo $row['patientName'];
                          ?>
                                              

                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>Mobile Number</b></td>
                                            <td><b>:</b></td>
                                            <td>
                          <?php
                              $query="SELECT * from patient WHERE umiId='$_SESSION[umiId]'";
                              $result=$db->query($query);
                              $row=$result->fetch_assoc();
                              echo $row['mobileNo'];
                          ?>

                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td><b>Email Address</b></td>
                                            <td><b>:</b></td>
                                            <td>
                          <?php
                              $query="SELECT * from patient WHERE umiId='$_SESSION[umiId]'";
                              $result=$db->query($query);
                              $row=$result->fetch_assoc();
                              echo $row['emailID'];
                          ?>                                              
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td><b>Blood Group</b></td>
                                            <td><b>:</b></td>
                                            <td>
                          <?php
                              $query="SELECT * from patient WHERE umiId='$_SESSION[umiId]'";
                              $result=$db->query($query);
                              $row=$result->fetch_assoc();
                              echo $row['bloodGroup'];
                          ?>                                              
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><b>Date Of Birth</b></td>
                                            <td><b>:</b></td>
                                            <td>
                          <?php
                              $query="SELECT * from patient WHERE umiId='$_SESSION[umiId]'";
                              $result=$db->query($query);
                              $row=$result->fetch_assoc();
                              echo $row['dob'];
                          ?>
                                              
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>Address</b></td><td><b>:</b></td>
                                            <td>13,Nagarro Campus, Gurgaon, Haryana</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="right-div">
                                          <a href="#" class="btn btn-info pull-right">Edit Profile</a>
                                </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                </div>
         </div>
    </div>

     <!-- CONTENT-WRAPPER SECTION END-->
    <?php include('footer.php'); ?>
      <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
</body>
</html>
