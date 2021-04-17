<?php
$uname="";
$pass="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$uname=$_POST["uname"];
	$pass=$_POST["pass"];
	if($uname=="Nabil" && $pass=="12345")
	{
		session_start();
		$_SESSION["user"]=$uname;
		$_SESSION["pass"]=$pass;
		header("Location: Dashboard.php");
	}
}
?>
<html>
	<head></head>
	<body>
		<center>
		<h2>User Registration</h2>
		<form method="post">
			<table>
				<tr>
					<td><input type="text" name="uname" placeholder="Username"></td>
				</tr>
				<tr>
					<td><input type="password" name="pass" placeholder="Password"></td>
				</tr>
				<tr>
					<td align = "center"> <input type="submit" name="login" value="log in"></td>
				</tr>
			</table>
		</form>
	<body>
<html