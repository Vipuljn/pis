<!DOCTYPE html>
<?php include('dbcon.php'); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simple Responsive Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="../assets/css/custom.css" rel="stylesheet" />
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
                    <a class="navbar-brand" href="#">
                       
                    </a>
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
                 

 <li >
                        <a href="../index.html" ><i class="fa fa-desktop "></i>Home </a>
                    </li>
                   

                    <li>
                        <a href="personalinfo.html"><i class="fa fa-user "></i>Personal Information</a>
                    </li>
                    <li>
                        <a href="address.html"><i class="fa fa-th "></i>Address Information </a>
                    </li>



                 <li>
                        <a href="education.html"><i class="fa fa-graduation-cap "></i>Education</a>
                    </li>
                    <li>
                        <a href="professional.html"><i class="fa fa-table"></i>Professional Information</a>
                    </li>

                    <li>
                        <a href="nomination.html"><i class="fa fa-sliders "></i>Nomination </a>
                    </li>
                    <li>
                        <a href="dependent.html"><i class="fa fa-sliders "></i>Family Detail</a>
                    </li>
                     <li>
                        <a href="loan.html"><i class="fa fa-shield "></i>Loan </a>
                    </li>
					 <li>
                        <a href="servicehistory.html"><i class="fa fa-th "></i>Service History </a>
                    </li>
					<li class="active-link">
                        <a href="acrdetail.html"><i class="fa fa-th "></i>Employee ACR</a>
                    </li>
                </ul>
                            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                                  
                 <!-- /. ROW  -->

   <legend>ACR Details</legend>
<form method="post" enctype="multipart/form-data" action="#">
 <table style="margin-left:auto;margin-right:auto;">
<tbody>
<tr>
<td>ACR Submitted By(Name of the officer)<label style="color:#FF0000;"></label></td>
<td><input type="text" name="ACR_Submitted"></td>
</tr>
<tr>
<td>Assessment Year<label style="color:#FF0000;"></label></td>
<td><input type="text" name="Assessment_Year"></td>
</tr>
<tr>
<td>Assest & Liabilities<label style="color:#FF0000;"></label></td>
<td><input type="radio"  name="Assest_Liabilities"   value="Filed">Filed
	<input type="radio"  name="Assest_Liabilities"   value="Not-Filed">Not-Filed</td>
</tr>
<tr>
<td>Assessment Period(From)<label style="color:#FF0000;"></label></td>
<td><input type="date" name="From_Date"></td>
</tr>
<td>Assessment Period(TO)<label style="color:#FF0000;"></label></td>
<td><input type="date" name="To_Date"></td>
</tr>
<tr>
<td>Remarks<label style="color:#FF0000;"></label></td>
<td><input type="text" name="Remarks"></td>
</tr>

</tbody>
</table>
<br> <center> <button type="submit" name="save" class="btn btn-success">Save</button>

			<button type="reset" class="btn btn-default">Clear</button></center>
 </form>
			  
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
   <style>
	
table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    
}	

th, td {
    border: none;
    padding: 4px;
}

	</style>       

     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="../assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="../assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="../assets/js/custom.js"></script>
	 
   
</body>
</html>
<?php

    if (isset($_POST['save'])){
		$ACR_Submitted=$_POST['ACR_Submitted'];
        $Assessment_Year=$_POST['Assessment_Year'];
        $Assest_Liabilities=$_POST['Assest_Liabilities'];
		$From_Date=$_POST['From_Date'];
		$To_Date=$_POST['To_Date'];
		$Remarks=$_POST['Remarks'];
		
		 mysqli_query($con,"insert into acr  values ('$ACR_Submitted','$Assessment_Year','$Assest_Liabilities','$From_Date','$To_Date','$Remarks')")or die(mysqli_error());
   
    }


?>
