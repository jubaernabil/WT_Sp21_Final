<?php
    require_once 'models/db_config.php' ;
	$name="";
	$err_name="";
	$age="";
	$err_age="";
	$mail="";
	$err_mail="";
	$code="";
	$err_code="";
	$number="";
	$err_number="";
	$day="";
	$err_day="";
	$birthday="";
	$err_birthday="";
	$month="";
	$err_month="";
	$year="";
	$err_year="";
	$bGrp="";
	$err_bGrp="";


		if	($_SERVER["REQUEST_METHOD"]=="POST")
		{
			if (empty($_POST["name"]))
			{
				$err_name="**Name Required";
			}
			else
			{
				$name=htmlspecialchars ($_POST["name"]);
			}
			if(!is_numeric($_POST["age"]))
			{
				$err_age="Age should be numeric";
			}
			else
			{
				$age=$_POST["age"];
			}

			
			if(strpos($_POST["mail"],"@"))
			{
				if(strpos($_POST["mail"],"."))
				 {$mail=$_POST["mail"];}
			}
			else
			{
			 	$err_mail="Email should be contain '@' and '.' sequentially";
			}
			if(!is_numeric($_POST["number"]))
			{
				$err_number="Number should be numeric";
			}
			else
			{
				$number = $_POST["number"];
			}
			if (!isset($_POST["day"]))
			{
				$err_day="Day must be selected";
			}
			else
			{
				$day=$_POST["day"];
			}
			if (!isset($_POST["month"]))
			{
				$err_month="Month must be selected";
			}
			else
			{
				$month=$_POST["month"];
			}
			if (!isset($_POST["year"]))
			{
				$err_year="Year must be selected";
			}
			else
			{
				$year=$_POST["year"];
			}
			if(!isset($_POST["bGrp"]))
			{
				$err_bGrp="You have to select a Blood Group";
			}
			else
			{
				$bGrp=$_POST["bGrp"];
			}
		}			

?>


<!DOCTYPE html>
<html>
<head>
	<title>My Information</title>
	 <link rel="stylesheet" href="style.css"> 
</head>
<body>

		<center>
		<form action="" method="post" class="one">
		<fieldset>
		<legend align="center">Edit Your Information</legend>
            
			<table>
				<tr>
					<td><lebel>Name</lebel></td>
					<td>:</td>
					<td><input type="text" name="name" value="<?php echo $name;?>" placeholder="Enter your name"><td><lebel><?php echo $err_name;?></lebel></td>
				</tr>				
				<tr>
					<td><span>Age</span></td>
					<td>:</td>
					<td><input type="text" name="age" value="<?php echo $age;?>" placeholder="age" size="2"> </td>
					<td><span><?php echo $err_age;?></span>
				</tr>
				<tr>
					<td><label>Blood Group</label></td>
					<td>:</td>
					<td><select name="bGrp">
										<option disabled selected>Select</option>
										<option>O+</option>
										<option>O-</option>
										<option>AB+</option>
										<option>AB-</option>
										<option>A+</option>
										<option>A-</option>
										<option>B+</option>
										<option>B-</option>
									</select>
						
					</select>
					<td><label><?php echo $err_bGrp;?></label></td>
				</td>
				</tr>
				<tr>
					<td><lebel>Email</lebel></td>
					<td>:</td>
					<td><input type="text" name="mail" value="<?php echo $mail;?>" placeholder="Enter your Email"> </td><td><lebel><?php echo $err_mail;?></lebel></td>
				</tr>
				<tr>
					<td><span>Phone</span></td>
					<td>:</td>
					<td><input type="text" name="code" value="<?php echo $code;?>" placeholder="Code" size="4">-<input type="text" name="number" value="<?php echo $number;?>" placeholder = "Number" size="10"> </td><td><lebel><?php echo $err_code;?></lebel><lebel><?php echo $err_number;?></lebel></td>
				</tr>
				<tr>
					<td><lebel>Address</lebel></td>
					<td>:</td>
					<td><input type="text" name="sa" placeholder="Street Address"></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input type="text" name="city" placeholder = "City" size="6">-<input type="text" name="state" placeholder = "State" size="8"></td>
				</tr>
				<tr>
					<td></td>
					<td><td>
					<input type="text" name="Pocode" placeholder = "Postal/Zip Code">
				</tr>
				
				<tr>
					           <td><span><b>Working Time:</b></span></td>
							   <td><input type="datetime-local"  size="" name="working_time" value="<?php echo $working_time;?>" placeholder="Time"><br>
							    <span id="err_working_time"><?php echo $err_working_time;?></span></td>
					</tr>

				<!--<tr>
				<td><lebel>Birth Date</lebel></td>
				<td>:</td>
				<td>
				<select name="day">
					<option disabled selected>Day</option>
					<?php
						for($i=1;$i<=31;$i++)
						{
							echo "<option>$i</option>";
						}
					?>
					</select>
					<select name="month">
					<option disabled selected>Month</option>
					<?php
						$mont= array("January","February","March","April","May","June","July","August","September","October","November","December");
						for($j=0;$j<count($mont);$j++)
						{
							echo "<option>$mont[$j]</option>";
						}
					?>
				</select>
				<select name="year">
					<option disabled selected>Year</option>
					<?php
						for($k=1971;$k<=2040;$k++)
						{
							echo "<option>$k</option>";
						}
					?>
				</select>
				</td>
				<td><?php echo "$err_day"."  "."$err_month"."  "."$err_year"?></td>
				</tr>---->				
				<td><br></td>
				</tr>
				<tr>
				<td colspan="2" align="center">
				<input type="Submit" name="add_info" value="Add" class="btton"><br>
				</td>
				</tr>
				<tr>
					<td>
						<span>Do you want to change your password?
							<a href="ChangePassword.php">
										Click here
									</a>
						</span>
					</td>
				</tr>

			</table>
	</fieldset>
		</form>
		</center>
	</body>
</html>