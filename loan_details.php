<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"pis");
if(isset($_POST['submit']))
{
	$Loan_type=$_POST['loantype'];
	$Account_no=$_POST['accountno'];
	$Letter_no=$_POST['letterno'];
	$Sanction_date=$_POST['sanctiondate'];
	$Sanction_amount=$_POST['sanctionamount'];
	$Return_date=$_POST['returndate'];
	$Remark=$_POST['remark'];
	$q=mysqli_query($con,"insert into loan_details(loan_type,loan_account_no,letter_no,sanction_date,sanction_amount,return_date,remark)values('$Loan_type','$Account_no','$Letter_no','$Sanction_date','$Sanction_amount','$Return_date','$Remark')");
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
</head>
<style>
body {
    background-color: lightgreen;
}
</style>
<body>
<form action="" method="post">
<table style="margin-left:auto;margin-right:auto;width:500px;">
<tbody>
<link rel="stylesheet" type="text/css" href="style.css">
<tr style="text-align:center">
<td colspan="2"><h1 style="color:#00008b;">EMPLOYEE LOAN DETAILS</h1>(<label style="color:#FF0000;">*</label>Fields are required)</td><br></br>
</tr>
<tr>
<td>Loan Type<label style="color:#FF0000;">*</label></td>
<td><input type="text" name="loantype" required></td>
</tr>
<tr>
<td>Loan A/C no.<label style="color:#FF0000;">*</label></td>
<td><input type="text" name="accountno" required></td>
</tr>
<tr>
<td>Letter No<label style="color:#FF0000;">*</label></td>
<td><input type ="text" name="letterno"  required ></td>
</tr>
<tr>
<td>Sanction Date<label style="color:#FF0000;">*</label></td>
<td><input type ="date" name="sanctiondate" ></td>
</tr>
<tr>
<td>Sanction Amount<label style="color:#FF0000;">*</label></td>
<td><input type="text" name="sanctionamount" required ></td>
</tr>
<tr>
<td>Return Date<label style="color:#FF0000;">*</label></td>
<td><input type="date" name="returndate" ></td>
</tr>
<td>Remark<label style="color:#FF0000;">*</label></td>
<td><input type="text" name="remark"required></td><br></br>
</tr>
<tr style="text-align:center">
<td colspan="2"><input id="button" type="submit" name="submit" value="SUBMIT"></td>
</tr>
</tbody>
</form>
</body>
</html>