<?php
	session_start();
	if(!isset($_SESSION["user"])  && !isset($_SESSION["pass"]))
		header ("Location: Log_in.php");
?>
<html>
	<body>
		<h3>Welcome <?php echo $_SESSION["user"];?><h3>
		<a href = "Change_Password.php">Change Password</a>
	</body>
</html>