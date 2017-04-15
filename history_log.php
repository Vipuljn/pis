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
	<link href="assets/css/datatable/demo_table_jui.css" rel="stylesheet" />
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
                   <li> <a href="history.php"><i class=" icon-table icon-large "></i>History Log</a>
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
                     <h2>History</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                    
   
                  <!-- /. ROW  --> 
                            <div class="wrapper">
 <div id="element" class="hero-body">
	<table class="users-table">


<div class="demo_jui">
		<table cellpadding="0" cellspacing="0" border="0" class="display" id="log" class="jtable">
			<thead>
				<tr>
				<th>Date/Time</th>
				<th>Action</th>
				<th>Data</th>
				<th>User</th>
				</tr>
			</thead>
			<tbody>

<?php $history_query=mysql_query("select * from history");
while($row=mysql_fetch_array($history_query)){  ?>

<tr class="">
	<td><?php echo $row['date']; ?></td>
	<td><?php echo $row['action']; ?></td>
	<td><?php  echo $row['data']?></td>
	<td><?php echo $row['user'] ?></td>
	




	
	</tr>
<?php }?>
			</tbody>
		</table>


	</div>	

</div>
              </div>   
                 
                   
               
    
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
  
    
   
</body>
</html>
