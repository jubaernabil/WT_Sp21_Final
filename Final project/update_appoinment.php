<?php
    require "controllers/Book_Controller.php" ;
	$id = $_GET["id"];
	$book = viewbooks($id);
?>

<html>
      <head>
	  <title></title>
	      
	  <head>
	  
	     <body>
		 <div>
		<fieldset>
        <legend align="center"><h1>Update Apointment</h1></legend>
		 
		    <form action="" method="post">
			   <table align="center">
	               <tr>
			         <td><input type="hidden" name="id" value="<?php echo $book["id"];?>"></td> 
					 </tr>
	               <tr>
						<td><span>Doctor Specialization</span></td>
						<td>:<select name="DoctorSpecialization">
							<option disabled selected>Select a Department</option>
							<option>Cardiology</option>
							<option>Urology</option>
							<option>Neurology</option>
							<option>Psychiatry</option>
						</select>
						</td><td><span><?php echo $err_DoctorSpecialization;?></span></td>
					</tr>
					<tr>
						<td><span>Doctor</span></td>
						<td>:<select name="doctor">
							<option disabled selected>Select a Doctor</option>
							<option>Dr. Zahid Hossain</option>
							<option>Dr. Salahuddin</option>
							<option>Dr. Shahin Zaman</option>
							<option>Dr. Nargis</option>
						</select>
						</td>
						<td><span><?php echo $err_doctor;?></span></td>
					</tr>
					<tr>
						<td><span><b>Appoinment:</b></span></td>
						<td><input type="datetime-local"  size="" name="appoint_date" value="<?php echo $book["appoint_date"];?>" placeholder="Time"><br>
						<span><?php echo $err_appoint_date;?></span></td>
					</tr>

					<tr>
						<td><label>Reason</label></td>
						<td>:<textarea name="reason" value="<?php echo $book["reason"];?>;"></textarea></td>
						<td><span><?php echo $err_reason;?></span></td>
					</tr>
					<tr>
				             <td><input type="submit" name="update_book" value="Update Booking"></td>
				    </tr>    
							
					       
				</table>
             </form>
			 <div>
		 </fieldset>
		 
		 </body>
		 
</html>