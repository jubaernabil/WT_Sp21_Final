
<?php
  require_once "controllers/Patient_Controller.php" ;
	
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" href="style.css"> 
</head>
<body>

		<center>
		<form action="" method="post" onsubmit="return valid()" class="one">
		<fieldset>
<!--		<legend align="center">Patient Registration</legend>-->
            <h1>Patient Registration</h1>
			<table>
				<tr>
					<td><lebel>Name</lebel></td>
					<td>:</td>
					<td><input type="text" name="name" id="name" value="<?php echo $name;?>" placeholder="Enter your name"><td><lebel id="err_name"><?php echo $err_name;?></lebel></td>
				</tr>
				
				<tr>
					<td><lebel >Username</lebel></td>
					<td>:</td>
					<td><input type="text" name="username" id="username" value="<?php echo $username;?>" placeholder="Enter your username"> </td><td><lebel id="err_username"><?php echo $err_username;?></lebel></td>
				</tr>
				<tr>
					<td><lebel>Password</lebel></td>
					<td>:</td>
					<td><input type="password" name="password" id="password" value="<?php echo $password;?>" placeholder="Enter your password"> </td><td><lebel id="err_password"><?php echo $err_password;?></lebel></td>
				</tr>
				<tr>
					
				<tr>
					<td><span>Age</span></td>
					<td>:</td>
					<td><input type="text" name="age" id="age" value="<?php echo $age;?>" placeholder="age" size="2"> </td>
					<td><span id="err_age"><?php echo $err_age;?></span>
				</tr>
				<tr>
					<td><label>Blood Group</label></td>
					<td>:</td>
					<td><select name="bGrp">
										<option disabled selected>Select</option>
										<option id="b1">O+</option>
										<option id="b2">O-</option>
										<option id="b3">AB+</option>
										<option id="b4">AB-</option>
										<option id="b5">A+</option>
										<option id="b6">A-</option>
										<option id="b7">B+</option>
										<option id="b8">B-</option>
									</select>
						
					</select>
					<td><label id="err_bGrp"><?php echo $err_bGrp;?></label></td>
				</td>
				</tr>
				<tr>
					<td><lebel>Email</lebel></td>
					<td>:</td>
					<td><input type="text" name="email" id="email" value="<?php echo $email;?>" placeholder="Enter your Email"> </td><td><lebel id="err_email"><?php echo $err_email;?></lebel></td>
				</tr>
				<tr>
					           <td><span><b>Phone Number:</b></span></td>
							   <td><input type="text" size=""  name="number" id="number" value="<?php echo $number;?>" placeholder="Contect Number"><br>
							    <span id="err_number"><?php echo $err_number;?></span></td>
			   </tr>
			   <tr>
					        <td><span><b>Address:</b></span></td>
					        <td><input type="text" id="address" name="address" value="<?php echo $address;?>" placeholder="Address"><br>
					        <span id="err_address"><?php echo $err_address;?></span></td>
					
				       </tr>

				
				<tr>
					           <td><span><b>Birthday:</b></span></td>
							   <td><input type="datetime-local"  size="" id="birthday" name="birthday" value="<?php echo $birthday;?>" placeholder="Time"><br>
							    <span id="err_birthday"><?php echo $err_birthday;?></span></td>
				</tr>

				<tr>
				<td><lebel>Gender</lebel></td>
				<td>:</td>
				<td><input type="radio" name="gender" id="Male" value="Male"><lebel>Male</lebel>
				<input type="radio" name="gender" id="Female" value="Female"><lebel>Female</lebel></td><td><lebel id="err_gender"><?php echo $err_gender;?></lebel></td><br>
				</tr>
				
				<tr>
				<td><lebel>Bio</lebel></td>
				<td>:</td>
				<td><textarea name="bio" id="bio" ></textarea></td>
				<td><lebel id="err_bio"><?php echo $err_bio;?></lebel></td>
				</tr>
				<tr>
				<td><br></td>
				</tr>
				<tr>
				<td colspan="2" align="center">
				<input type="Submit" name="add_patient" value="Register" class="btton"><br>
				</td>
				</tr>
				<tr>
					<td>
						<span>Already have an account?
							<a href="user-login.php">
										Log-in
									</a>
						</span>
					</td>
				</tr>

			</table>
	    </fieldset>
		</form>
		</center>
	</body>

	<script>
		function get(id){
					return document.getElementById(id);
				}
				function valid(){
					cleanUp();
					var hasError=false;
					if(get("name").value == ""){
						get("err_name").innerHTML="Name Required";
						get("err_name").style.color="red";
						hasError=true;
					}
					if(get("username").value == ""){
                   		get("err_username").innerHTML="Username Required";
						get("err_username").style.color="red";
						hasError=true;
					}
					if(get("password").value == ""){
						get("err_password").innerHTML="Password Required";
						get("err_password").style.color="red";
						hasError=true;
					}
					if(get("age").value == ""){
						get("err_age").innerHTML="Password Required";
						get("err_age").style.color="red";
						hasError=true;
					}
				    if(get("Male").checked == false && get("Female").checked == false){
						get("err_gender").innerHTML="Gender Required";
						get("err_gender").style.color="red";
						hasError=true;
					}
					if(get("email").value == ""){
						get("err_email").innerHTML="Email Required";
						get("err_email").style.color="red";
						hasError=true;
					}
					if(get("address").value == ""){
						get("err_address").innerHTML="Address Required";
						get("err_address").style.color="red";
						hasError=true;
					}
					if(get("number").value == ""){
						get("err_number").innerHTML="Number Required";
						get("err_number").style.color="red";
						hasError=true;
					}
					if(get("birthday").value == ""){
						get("err_birthday").innerHTML="birthday Required";
						get("err_birthday").style.color="red";
						hasError=true;
					}
					if(get("b1").selected == false && get("b2").selected == false && get("b3").selected == false && get("b4").selected == false && get("b5").selected == false && get("b6").selected == false && get("b7").selected == false && get("b8").selected == false){
						get("err_bGrp").innerHTML="Role Required";
						get("err_bGrp").style.color="red";
						hasError=true;
					}
					if(get("bio").value == ""){
						get("err_bio").innerHTML="Bio Required";
						get("err_bio").style.color="red";
						hasError=true;
					}
					if(!hasError){
						return true;
					}
					return false;
					
				}
				function cleanUp(){
				
				    get("err_name").innerHTML="";
					get("err_username").innerHTML="";
					get("err_age").innerHTML="";
					get("err_password").innerHTML="";
					get("err_gender").innerHTML="";
					get("err_email").innerHTML="";
					get("err_address").innerHTML="";
					get("err_number").innerHTML="";
					get("err_bGrp").innerHTML="";
					get("err_birthday").innerHTML="";
					get("err_bio").innerHTML="";
				}

	</script>
</html>