<?php include ('dbcon.php');?>
<!DOCTYPE html>
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
         
		 <div id="element" class="hero-body-index">
    <div class="alert alert-info">
 	<p><font color=""><h2>Login</h2></font></p>
	Enter the details to login your account
    </div>

	<hr>
	<form method="POST" >
	<table>
    <tr><td><font color="">UserName:</font>&nbsp;&nbsp;</td><td><input type="text"  name="UserName" class="UserName_hover"></td></tr>
	<tr><td>...<td></tr>
    <tr><td><font color="">Password:</font>&nbsp;&nbsp;</td><td><input type="Password" name="Password" class="Password_hover"></td></tr>
	<tr><td>...<td></tr>
	<tr><td></td><td>	<button class="btn btn-primary btn-large" name="Login"><i class="icon-ok-sign icon-large"></i>&nbsp;Login</button></td></tr>
	<tr><td>
	</td><tr>
	</form>
	</table>
	<div class="error">
	<?php

if (isset($_POST['Login'])){

$UserName=$_POST['UserName'];
$Password=$_POST['Password'];

$login_query=mysql_query("select * from user where UserName='$UserName' and Password='$Password' and User_Type='Admin'");
$count=mysql_num_rows($login_query);

$login_query1=mysql_query("select * from user where UserName='$UserName' and Password='$Password' and User_Type='User'");
$count1=mysql_num_rows($login_query1);



$row1=mysql_fetch_array($login_query1);
$f=$row1['FirstName'];
$l=$row1['LastName'];

$row=mysql_fetch_array($login_query);
$f=$row['FirstName'];
$l=$row['LastName'];





if ($count1 == 1){
session_start();
$_SESSION['id']=$row1['User_id'];
$_SESSION['User_Type']=$row1['User_Type'];
$type=$row1['User_Type'];

mysql_query("INSERT INTO history (data,action,date,user)VALUES('$f $l', 'Login', NOW(),'$type')")or die(mysql_error());


header('location:home_user.php');
}

if ($count > 0){
session_start();
$_SESSION['id']=$row['User_id'];
$_SESSION['User_Type']=$row['User_Type'];
$type=$row['User_Type'];

mysql_query("INSERT INTO history (data,action,date,user)VALUES('$f $l', 'Login', NOW(),'$type')")or die(mysql_error());


header('location:home.php');
}else{
?>
    <div class="alert alert-error">
    <button class="close" data-dismiss="alert">×</button>
   Please check your UserName and Password
    </div>
<?php } 

}

?>	
</div>
	</div>
		 
         <!-- /. PAGE WRAPPER  -->
        </div>
    <div class="footer">
      
    
            <div class="row">
                <div class="col-lg-12" >
                  
                </div>
            </div>
        </div>
          

     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
