<?php
$uname="";
$pass="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$uname=$_POST["uname"];
	$pass=$_POST["pass"];
	if($uname=="Ratul" && $pass=="eta password")
	{
		setcookie("user",$uname,time()+60,"/");
		setcookie("pass",$pass,time()+60,"/");
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
<html>