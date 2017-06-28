<?php
ob_start();
//error_reporting(0);
session_start();
include 'myconnection.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <title>SchoolApp</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI -->
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="vendors/form-helpers/css/bootstrap-formhelpers.min.css" rel="stylesheet">
    <link href="vendors/select/bootstrap-select.min.css" rel="stylesheet">
    <link href="vendors/tags/css/bootstrap-tags.css" rel="stylesheet">

    <link href="css/forms.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="login-bg">
    <div class="header">
       <div class="container">
          <div class="row">
             <div class="col-md-12">
                <!-- Logo -->
                <div class="logo">
                   <h1><a href="index.html">SchoolApp_Admin</a></h1>
                </div>
             </div>
          </div>
       </div>
  </div>

	           </div>

	        </div>
	     </div>
	</div>

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li><a href="index.html"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                    <li><a href="calendar.html"><i class="glyphicon glyphicon-calendar"></i> Calendar</a></li>
                    <li><a href="stats.html"><i class="glyphicon glyphicon-stats"></i> Statistics (Charts)</a></li>
                      <li><a href="tables.html"><i class="glyphicon glyphicon-stats"></i> Tables</a></li>



                    <li><a href="buttons.html"><i class="glyphicon glyphicon-record"></i> Buttons</a></li>
                    <li><a href="editors.html"><i class="glyphicon glyphicon-pencil"></i> Editors</a></li>
                    <li class="current"><a href="signup.html"><i class="glyphicon glyphicon-tasks"></i> Pages</a></li>
                    <li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-list"></i> Forms
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                           <li><a href="userdata_insert.php">UserData_Insert</a></li>
                           <li><a href="time_table.php">TimeTable_Insert</a></li>
                           <li><a href="notification.php">notification_Insert</a></li>
                           <li><a href="event.php">Event_Insert</a></li>
                        </ul>
                    </li>
                </ul>
             </div>
		  </div>


      <div class="page-content container">
        <div class="row">
          <div class="col-md-7 col-md-offset-3">

		  <!-- <div class="col-md-10">

	  			<div class="row">
	  				<div class="col-md-6"> -->
	  					<div class="content-box-large">
			  				<div class="panel-heading">
					            <div class="panel-title">User Details</div>

					            <div class="panel-options">
					              <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
					              <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
					            </div>
					        </div>
			  				<div class="panel-body">



                  <form  action="#" method='post' class="form-horizontal" role="form">
								  <div class="form-group">
								    <!-- <label for="inputEmail3" class="col-sm-2 control-label">Student Name</label> -->

                    <!-- <label for="inputEmail3" class="col-sm-2 control-label">Class</label> -->

                  </div>


                  <div class="form-group">
                    <!-- <label for="inputPassword3" class="col-sm-2 control-label">Parent Name</label> -->
                    <div class="col-sm-10">
                      <input type="text"   name="eventdata" class="form-control" id="inputPassword3" placeholder="eventdata">
                    </div>
                  </div>

                  <div class="form-group">
                    <!-- <label for="inputPassword3" class="col-sm-2 control-label">Parent Password</label> -->
                    <div class="col-sm-10">

                      <input type="text"   name="timeing" class="form-control" id="inputPassword3" placeholder="Event Timimg">
                    </div>
                  </div>
                  <div class="form-group">
                   <!-- <label for="inputPassword3" class="col-sm-2 control-label">StudentPassword</label> -->
                   <div class="col-sm-10">
                     <input type="text"   name="Eventiloc" class="form-control" id="inputPassword3" placeholder="Event location">
                   </div>
                 </div>

                 <div class="form-group">
                  <!-- <label for="inputPassword3" class="col-sm-2 control-label">StudentPassword</label> -->
                  <div class="col-sm-10">
                    <input type="text"   name="Eventdate" class="form-control" id="inputPassword3" placeholder="Event date">
                  </div>
                </div

								  <div class="form-group">
								    <div >
								      <div class="checkbox">
								        <label>
								          <input type="checkbox"> I Agree that the details furnished above are true and correct.
								        </label>
								      </div>


								    </div>
								  </div>
								  <div class="form-group">
								    <div class="col-sm-offset-2 col-sm-10">
								      <button type="submit" name="submit" class="btn btn-primary">Sign in</button>
								    </div>
								  </div>
								</form>



                <?php

              if(isset($_POST['submit']))
               {

                                   $dssds=mysqli_real_escape_string($con,$_POST['eventdata']);
                                 $bdsd=mysqli_real_escape_string($con,$_POST['timeing']);
                                   $bdsd1=mysqli_real_escape_string($con,$_POST['Eventiloc']);
                                     $dssds3=mysqli_real_escape_string($con,$_POST['Eventdate']);

                                     $uuid = uniqid('', true);

   $mmk="INSERT INTO events (event_id,event_time,event_date,event_location,event_data)
                      values ('$uuid','$dssds','$bdsd','$bdsd1','$dssds3')";
   $hhby=mysqli_query($con,$mmk);

                 header("location:event.php?yes=1");
                     ob_end_flush();
                   exit;
               }

             ?>

	</div>
			  			</div>
	  				</div>

	  			</div>









		  </div>
		</div>
    </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script src="vendors/form-helpers/js/bootstrap-formhelpers.min.js"></script>

    <script src="vendors/select/bootstrap-select.min.js"></script>

    <script src="vendors/tags/js/bootstrap-tags.min.js"></script>

    <script src="vendors/mask/jquery.maskedinput.min.js"></script>

    <script src="vendors/moment/moment.min.js"></script>

    <script src="vendors/wizard/jquery.bootstrap.wizard.min.js"></script>

     <!-- bootstrap-datetimepicker -->
     <link href="vendors/bootstrap-datetimepicker/datetimepicker.css" rel="stylesheet">
     <script src="vendors/bootstrap-datetimepicker/bootstrap-datetimepicker.js"></script>


    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
	<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>

    <script src="js/custom.js"></script>
    <script src="js/forms.js"></script>
  </body>
</html>
