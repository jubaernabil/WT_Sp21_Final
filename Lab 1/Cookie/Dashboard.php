<?php
	if(!isset($_COOKIE["user"])  && !isset($_COOKIE["pass"]))
		header ("Location: Log_in.php");
?>
<html>
	<body>
		<h3>Welcome <?php echo $_COOKIE["user"];?><h3>
		<a href = "Change_Password.php">Change Password</a>
	</body>
</html>