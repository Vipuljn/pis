<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"pis");
if(isset($_POST['submit']))
{
	$family_memeber_name=$_POST['m_name'];
	$relation=$_POST['relation'];
	$dependent=$_POST['dependent'];
	$whether_employed=$_POST['employed'];
	$whether_in_same_deptt=$_POST['sdepartment'];
	$employee_code=$_POST['ecode'];
	$dept_name=$_POST['ndeptt'];
	$salary_code=$_POST['esalary'];
	$q=mysqli_query($con,"insert into family_details(member_name,Relation,Dependent,Whether_employed,same_dept,e_code,Name_of_dept,salary_code)values('$family_memeber_name','$relation','$dependent','$whether_employed','$whether_in_same_deptt','$employee_code','$dept_name','$salary_code')");
	if($q)
	{
		echo "";
	}
	else{
		
	}
}

?>

<html>
<head> 
<hr>
</head>
<style>
body {
    background-color: lightblue;
}
</style>
<body>
<img src="family-icon.png" width="150" height="100"/>
<form action="" method="post">

<table style="margin-left:auto;margin-right:auto;width:500px;">
<tbody>
<tr style="text-align:center">
<td colspan="2"><h2 style="color:#00008b;">FAMILY DETAILS</h2>(<label style="color:#FF0000;">*</label>Fields are required)</td>
</tr>
<tr>
<td>Family member name<label style="color:#FF0000;">*</label></td>
<td><input type="text" name="m_name" required></td>
</tr>
<tr>
<td>Relation<label style="color:#FF0000;">*</label></td>
<td><input type="text" name="relation" required></td>
</tr>
<tr>
<td>Dependent<label style="color:#FF0000;">*</label></td>
<td><input type ="radio" name="dependent" value="YES" required > YES <input type="radio" name="dependent" value="NO" required > NO</td>
</tr>
<tr>
<td>Whether Employed<label style="color:#FF0000;">*</label></td>
<td><input type ="radio" name="employed" value="State" required > State <input type="radio" name="employed" value="Centre" required > Centre <input type="radio" name="employed" value="Unemployed" required> Unemployed</td>
</tr>
<tr>
<td>Whether in same Deptt.<label style="color:#FF0000;">*</label></td>
<td><input type="radio" name="sdepartment" value="YES" required > YES <input type="radio" name="sdepartment" value="NO" required>NO</td>
</tr>
<tr>
<td>Employee Code(if in the same deptt.)<label style="color:#FF0000;">*</label></td>
<td><input type="text" name="ecode" required></td>
</tr>
<td>Name of Department(if other than same deptt.)<label style="color:#FF0000;">*</label></td>
<td><input type="text" name="ndeptt"required></td>
</tr>
<tr>
<td>Member E-salary code<label style="color:#FF0000;">*</label></td>
<td><input type="text" name="esalary"required></td>
</tr>
<tr style="text-align:center">
<td colspan="2"><input type="submit" name="submit" value="submit"></td>
</tr>
</tbody>
</form>
</body>
</html>
