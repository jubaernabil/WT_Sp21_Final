<?php
    require "controllers/Book_Controller.php" ;
?>
<script src="js/book.js"></script>>
<html>
      <head>
	  <title></title>
	      
	  <head>
	  
	     <body>
		 <div>
		<fieldset>
        <legend align="center"><h1>ADD Apointment</h1></legend>
		 
		    <form action="" method="post" onsubmit="return valid()">
			   <table align="center">

			   <tr>
		            	<td><span>Doctor Specialization</span></td>
						<td>:<select name="DoctorSpecialization">
							<option disabled selected>Select a Department</option>
							<option id="ds1">Cardiology</option>
							<option id="ds2">Urology</option>
							<option id="ds3">Neurology</option>
							<option id="ds4">Psychiatry</option>
						</select>
						</td><td><span id="err_DoctorSpecialization"><?php echo $err_DoctorSpecialization;?></span></td>
					</tr>
					<tr>
						<td><span>Doctor</span></td>
						<td>:<select name="doctor">
							<option disabled selected>Select a Doctor</option>
							<option id="d1">Dr. Zahid Hossain</option>
							<option id="d2">Dr. Salahuddin</option>
							<option id="d3">Dr. Shahin Zaman</option>
							<option id="d4">Dr. Nargis</option>
						</select>
						</td>
						<td><span id="err_doctor"><?php echo $err_doctor;?></span></td>
					</tr>
					<tr>
						<td><span><b>Appoinment:</b></span></td>
						<td><input type="datetime-local" id="appoint_date" size="" name="appoint_date" value="<?php echo $appoint_date;?>" placeholder="Time"><br>
						<span id="err_appoint_date"><?php echo $err_appoint_date;?></span></td>
					</tr>

					<tr>
						<td><label>Reason</label></td>
						<td>:<textarea id="reason" name="reason" value="<?php echo $reason;?>;"></textarea></td>
						<td><span id="err_reason"><?php echo $err_reason;?></span></td>
					</tr>
					<tr>
				             <td><input type="submit" name="book_appo" value="Book"></td>
				    </tr>    
							
					       
				</table>
             </form>
			 <div>
		 </fieldset>
		 
		 </body>
		 
</html>