<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
$con=mysqli_connect("localhost","datainfo","datainfo","datainfo");
if(mysqli_connect_errno())
{
	die("Connection Failed-".mysqli_connect_errno());
}
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<?php
$dobErr="";
$check=1;
if(isset($_POST['Submit']))
{
	//$DOB=$_POST['Year']."-".$_POST['Month']."-".$_POST['Date'];
	//$check=1;
	if(empty($_POST['Name'])||empty($_POST['FatherName'])||empty($_POST['Gender'])||empty($_POST['Mobile'])||empty($_POST['Address'])||
	   empty($_POST['Pincode'])||empty($_POST['Password']))//||empty($_POST['Retype Password']))
	{
		$check=0;
		echo "Please fill all the required information!";
	}
	else
	{
		//$ID=$_POST['ID'];
		$Name=$_POST['Name'];
		$FatherName=$_POST['FatherName'];
		$Gender=$_POST['Gender'];
		$Mobile=$_POST['Mobile'];
		$Address=$_POST['Address'];
		$Pincode=$_POST['Pincode'];
		$Password=$_POST['Password'];
	}
	
	if($check==1)
	{
		$sql="INSERT INTO farmer(Name,FatherName,Gender,Mobile,Address,Pincode,Password)
		values('$Name','$FatherName','$Gender','$Mobile','$Address','$Pincode','$Password')";
		//echo $sql;
		if(mysqli_query($con,$sql))
		{
			echo "Data Submitted Successfully!";
			
			 
		}
		else
		{
			echo "Query Failed!";
		}	
	}
}

if(isset($_POST['Submit']))
{
   header("Location: res.php");
}
if(isset($_POST['GoBack']))
{
   header("Location: test.php");
}
?>
<body id="back">

<form action="farmersignup.php" method="post">

<h1 align="center"><font color="blue">Please fill in the following details!!</font></h1>
<table cellspacing="30" align="center">

	
	<div >
	<tr id="Name" >
		<td><strong>Name</strong></td>
		<td>
			<input type="text" name="Name" />
		</td>
	</tr></div>
	
	<tr>
		<td><strong>Father's Name</strong></td>
		<td>
			<input type="text" name="FatherName" />
		</td>
	</tr>
	
	<tr>
		<td><strong>Gender</strong></td>
		<td>
			Male<input type="radio" name="Gender" value="Male" />
			Female<input type="radio" name="Gender" value="Female" />
		</td>
	</tr>
	
	
	<tr>
		<td><strong>Mobile</strong></td>
		<td><input type="text" name="Mobile" /></td>
	</tr>
	
	<tr>
		<td><strong>Address</strong></td>
		<td><input type="text" name="Address" /></td>
	</tr>
	
	<tr>
		<td><strong>Pincode</strong></td>
		<td><input type="text" name="Pincode" /></td>
	</tr>
	
	<tr>
		<td><strong>Password</strong></td>
		<td><input type="text" name="Password" /></td>
	</tr>
	
	
	
	<tr id="buttons">
	<td align="centre"><input type="submit" name="GoBack" value="GoBack" id="submit"/></td>
		<td align="centre"><input type="submit" name="Submit" value="Submit" id="submit"/></td>
		<td align="centre"><input type="submit" name="Cancel" value="Cancel" id="loru"/></td>
		
	</tr>
	
</table>
</form>
</body>
<?php
mysqli_close($con);
?>
</html>
