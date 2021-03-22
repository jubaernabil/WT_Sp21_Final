<!DOCTYPE html>
<html>
<?php
	session_start();
	if(!isset($_SESSION["user"])  && !isset($_SESSION["pass"]))
		header ("Location: Log_in.php");
	else
	echo $_SESSION["user"]." You can change password here. Old pass is: ".$_SESSION["pass"];
?>
<body>

</body>
</html>