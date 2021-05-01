<?php
	require_once "controllers/Book_Controller.php" ;
	$books = viewallbooks();
?>
<html>
    <head> 
	     <title>Apointment</title></head>
	<body>
		<center><h1>Patient's Apointment</h1></center>
		
		      
	<center>		  	
	<table>
	     
			<thead>
				<th>No</th>
				<th>Doctor Specialization</th>
				<th>Dcotor Name</th>
				<th>Date</th>
				<th>Reson</th>
			</thead>
			<tbody>
				<?php
					foreach($books as $book)
					{
						echo "<tr>" ;
							echo "<td>".$book["id"]."</td>" ;
							echo "<td>".$book["DoctorSpecialization"]."</td>" ;
							echo "<td>".$book["doctor"]."</td>" ;
							echo "<td>".$book["appoint_date"]."</td>" ;
							echo "<td>".$book["reason"]."</td>" ;
							echo '<td><a href="update_appoinment.php?id='.$book["id"].'">Change</a></td>';
							echo '<td><a href="deleteAppoin.php?id='.$book["id"].'">Delete</a></td>';

						echo "</tr>" ;
					}
				?>
		   </tbody>
			
		</table>
	<center>    
    </body>
</html>