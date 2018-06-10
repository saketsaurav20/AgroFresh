<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<body id='back' align='center'>
<form action="res.php" method="post">
<?php
if(isset($_POST['GoBack']))
{
   header("Location: test.php");
}
?>
<center><h1><br />
<br />
<?php
echo "Sucessfully Registered!";
?><br /><br /><br /></h1></center>


<tr id="buttons" align="center">
	<td><input type="submit" name="GoBack" value="GoBack" id="submit"/></td>
	</tr>
</body>
</html>
