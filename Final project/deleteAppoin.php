<?php
    require "controllers/Book_Controller.php" ;
	$id = $_GET["id"];
	$book = viewbooks($id);
?>

<html>
      <head>
	  <title></title>
	      <style>
	
		  
	       </style>
	  <head>
	  
	     <body>
		 <div>
		 <fieldset>
        
                <center>><h2>Are you sure remove this doctor</h2></center>		 
		    <form action="" method="post">
			   <table align="center">
			   <tr>
			         <td><input type="hidden" name="id" value="<?php echo $book["id"];?>"></td>
				    
					    <tr>
				             <td><input type="submit" name="delete_appt" value="Remove"></td>
				        </tr>    
							
					       
				</table>
             </form>
			 <div>
		  </fieldset>
		 </body>
		 
</html>