<?php include ('session.php'); include ('dbcon.php'); ?>
﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simple Responsive Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
     
           
          
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
             <div class="pull-right">
				<font color="white">
                        <?php
                            $Today=date('y:m:d');
                            $new=date('l, F d, Y',strtotime($Today));
                            echo $new; ?>

                        <p>
							<?php

                                $user_query=mysql_query("select *  from user where User_id='$id_session'")or die(mysql_error());
                                $row=mysql_fetch_array($user_query);
                                echo 'Welcome:'." ".$row['User_Type'];
                            ?>
                        </p>
                    </font>      
                    </div>
                </div>
              
                <span class="logout-spn" >
                 
                </span>
               <center>
              <font color= 'white'>
                    <h2>Solid State Physics Laboratory Personnel Information System</h2>
                     </font>
				   </center>                  
               
                    
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 


                    <li class="active-link">
                        <a href="home.php" ><i class="fa fa-desktop "></i>Dashboard </a>
                    </li>
                   <li> <a href="history_log.php"><i class=" icon-table icon-large "></i>History Log</a>
                    </li>
                     <li>
                        <a href="logout.php"><i class="fa fa-edit "></i>Log Out </a>
                    </li>
                    
                </ul>
                            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <h2>ADMIN DASHBOARD</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                    
   
                  <!-- /. ROW  --> 
                            <div class="row text-center pad-top">
                  
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.html" >
 <i class="fa fa-users fa-5x"></i>
                      <h4>See Employees</h4>
                      </a>
                      </div>  
                      </div>      
                     
                     <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="registeruser.html" >
 <i class="fa fa-user fa-5x"></i>
                      <h4>Register Employee</h4>
                      </a>
                      </div>
                     
                     
                  </div> 
              </div>   
                 
                   
               
    
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
  
    
   
</body>
</html>
