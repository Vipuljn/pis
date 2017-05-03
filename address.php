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
                    <li class="active-link">
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
					<li>
                        <a href="acrdetail.html"><i class="fa fa-th "></i>Employee ACR</a>
                    </li>
                </ul>
                            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                                  
                 <!-- /. ROW  -->
   <legend>Present Address Details</legend>
<form method="post" enctype="multipart/form-data" action="#">
 <table style="margin-left:auto;margin-right:auto;">
<tbody>
<tr>
<td>Present Address<label style="color:#FF0000;"></label></td>
<td><input type="text" name="PresentAddress"></td>
</tr>
<tr>
<td>State<label style="color:#FF0000;"></label></td>
<td><input type="text" name="State"></td>
</tr>
<tr>
<td>District<label style="color:#FF0000;"></label></td>
<td><input type="text" name="District"></td>
</tr>
<tr>
<td>Block<label style="color:#FF0000;"></label></td>
<td><input type="text" name="Block"></td>
</tr>
<tr>
<td>Panchayat<label style="color:#FF0000;"></label></td>
<td><input type="text" name="Panchayat"></td>
</tr>
<tr>
<td>PinCode<label style="color:#FF0000;"></label></td>
<td><input type="text" name="PinCode"></td>
</tr>
<tr>
<td>Phone Number<label style="color:#FF0000;"></label></td>
<td><input type="text" name="phone_no"></td>
</tr>
<tr>
<td>Email(If any)&nbsp;<label style="color:#FF0000;"></label></td>
<td><input type="text" name="email"></td>
</tr>
<tr>
<td>Mobile Number&nbsp;&nbsp;<label style="color:#FF0000;"></label></td>
<td><input type="text" name="mobile_no"></td>
</tr>
<th>Permanent Address Details</th>
<tr>
<td>Permanent Address<label style="color:#FF0000;"></label></td>
<td><input type="text" name="PermanentAddress"></td>
</tr>
<tr>
<td>State<label style="color:#FF0000;"></label></td>
<td><input type="text" name="State"></td>
</tr>
<tr>
<td>District<label style="color:#FF0000;"></label></td>
<td><input type="text" name="District"></td>
</tr>
<tr>
<td>Block<label style="color:#FF0000;"></label></td>
<td><input type="text" name="Block"></td>
</tr>
<tr>
<td>Panchayat<label style="color:#FF0000;"></label></td>
<td><input type="text" name="Panchayat"></td>
</tr>
<tr>
<td>PinCode<label style="color:#FF0000;"></label></td>
<td><input type="text" name="PinCode"></td>
</tr>
<tr>
<td>Phone Number<label style="color:#FF0000;"></label></td>
<td><input type="text" name="phone_no"></td>
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
		$PresentAddress=$_POST['PresentAddress'];
        $State1=$_POST['State'];
        $District1=$_POST['District'];
		$Block1=$_POST['Block'];
		$Panchayat1=$_POST['Panchayat'];
		$PinCode1=$_POST['PinCode'];
		$phone_no1=$_POST['phone_no'];
		$email=$_POST['email'];
		$mobile_no=$_POST['mobile_no'];
		$PermanentAddress=$_POST['PermanentAddress'];
		$State2=$_POST['State'];
		$District2=$_POST['District'];
		$Block2=$_POST['Block'];
		$Panchayat2=$_POST['Panchayat'];
		$PinCode2=$_POST['PinCode'];
		$phone_no2=$_POST['phone_no'];
		 mysqli_query($con,"insert into address  values ('$PresentAddress','$State1','$District1','$Block1','$Panchayat1','$PinCode1','$phone_no1','$email','$mobile_no','$PermanentAddress','$State2','$District2','$Block2','$Panchayat2','$PinCode2','$phone_no2')")or die(mysqli_error());
   
    }


?>

