<?php
include_once 'connection.php';
?>
<!DOCTYPE html>
<html lan="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
body {
 font: 400 15px/1.8 Lato, sans-serif;
      color: #777;   
   background-color: #FFFFFF;
}
 .form-control {
      border-radius: 0;
  }
  textarea {
      resize: none;
  }
</style>
</head>
<body>
<div class="container">
  <h2>Basic Information</h2>
<form action="" method="post" onsubmit="return valid()" autocomplete="on" name="data" >
 <div class="form-group">                              
                <b> First Name </b><font color="red">*</font> <input type="text" name="fname" class="form-control" placeholder="First Name" required>
                  <b> Middle Name </b> <input type="text" name="mname" class="form-control" placeholder="Middle Name"> 
                  <b> Last Name </b><font color="red">*</font> <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
                  </div>
<div class="form-group">
<b> Date OF Birth </b><font color="red">*</font> <input type="date" name="birthdate" class="form-control" placeholder="Date OF Birth" required>
</div>
<div class="form-group">
<b> Father/Husband/Mother Name </b><font color="red">*</font> <input type="text" name="sname" class="form-control" placeholder="father/mother/husband name" required>
<div>
<div class="form-group">
                  <b> Gender </b><font color="red">*</font><br>
                  <select name="gender" class="form-control" required >
                  <option value="1">Male</option>
                  <option value="female">Female</option>                                                        
                  </select>
</div>
<div class="form-group">
                  <b> Martial Status </b><font color="red">*</font><br>
                  <select name="mstatus" class="form-control" required >
                  <option value="1">Married</option>
                  <option value="female">UnMarried</option>                                                        
                  </select>
</div>
<div class="form-group">
<b>Identity Mark</b><font color="red">*</font> <input type="text" name="idmark" class="form-control" placeholder="Identity Mark" required>
</div>
<div class="form-group">
<b>Height(in cms)</b><font color="red">*</font> <input type="number" name="height" class="form-control" placeholder="Height" required>
</div>
<div class="form-group">
             <b> CATEGORY</b><font color="red">*</font> <br>
			 <select name="category" class="form-control" required >
			 <option value="notselected">Select Value</option>
			 <option value="general">General</option>
			 <option value="sc">SC</option>
			 <option value="st">ST</option>  
			 <option value="others">Others</option>
			 </select>
</div>
<div class="form-group">
<b>Religion</b><font color="red">*</font> <input type="text" name="religion" class="form-control" placeholder="Religion" required>
</div>
<div class="form-group">
<b>Blood Group</b><font color="red">*</font> <input type="text" name="bloodgroup" class="form-control" placeholder="Blood Group" required>
</div>
<div class="form-group">                              
                  <b> Home State </b><font color="red">*</font> <input type="text" name="state" class="form-control" placeholder="State" required>
                  <b>Home District </b> <input type="text" name="district" class="form-control" placeholder="District"> 
                  <b>Home Office Type </b><font color="red">*</font> <input type="text" name="officetyp" class="form-control" placeholder="Office Type" required>
				  <b>Home Office Name </b><font color="red">*</font> <input type="text" name="offname" class="form-control" placeholder="Office Name" required>
				  <b>LTC HomeTown </b><font color="red">*</font> <input type="text" name="ltc" class="form-control" placeholder="LTC HomeTown" required>
</div>
<div class="form-group">            
			<b> Mobile No. </b><font color="red">*</font><input type="tel" name="mobileno"  class="form-control" pattern="[0-9]{10}"  title="Ten digits code" placeholder="Mobile No." required/>
</div>
<h3>Employee Office Details</h3>
 <div class="form-group">
			<b> Designation</b><font color="red">*</font> <input type="text" name="designation" class="form-control" placeholder="Designation" required/>
</div>
<div class="form-group">
<b>Current Office</b><font color="red">*</font> <input type="text" name="curr_office" class="form-control" placeholder="Current Office" required>
</div>
 <div class="form-group">
			<b> Cadre</b><font color="red">*</font> <input type="text" name="cadre" class="form-control" placeholder="Cadre" required/>
 </div>
								<input type="submit" class="btn btn-block" name="submit" value="Submit">
								<button type="reset" class="btn btn-block">Clear</button>
</form>
</body>
 <script src="js/jquery.js"></script>
 <script src="js/bootstrap.min.js"></script>
  <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
</html>