<?php
	 		require_once 'models/db_config.php' ;	 
	 		$DoctorSpecialization="";
	 		$err_DoctorSpecialization="";
	 		$doctor="";
	 		$err_doctor="";
	 		$timeslot="";
	 		$err_timeslot="";
	 		$day="";
			$err_day="";
			$month="";
			$err_month="";
			$year="";
			$err_year="";
			$appoint_date="";
			$err_appoint_date=""; 
  			$reason="";
	 		$err_reason="";
	 		$hasError=false;

             if(isset($_POST["book_appo"]))
	 		{
	 			if (empty($_POST["DoctorSpecialization"])) 
	 			{
	 				$err_DoctorSpecialization = "Please Select a Specialization";
	 				$hasError=true;
	 			}	 			
	 			else 
	 			{
	 				$DoctorSpecialization = $_POST["DoctorSpecialization"] ;
	 			}
	 			if (empty($_POST["doctor"])) 
	 			{
	 				$err_doctor = "Please Select a Doctor";
	 				$hasError=true;
	 			}
	 			else 
	 			{
	 				$doctor = $_POST["doctor"] ;
	 			}
	 			if (!isset($_POST["day"]))
				{
				$err_day="Day must be selected";
				$hasError=true;
				}
				else
				{
				$day=$_POST["day"];
				}
				if(!isset($_POST["month"]))
				{
				$err_month="Month must be selected";
				$hasError=true;
				}
				else
				{
				$month=$_POST["month"];
				}
				if(!isset($_POST["appoint_date"])) 
	 			{
	 				$err_appoint_date = "Please Select a Time Slot";
	 				$hasError=true;
	 			}
	 			else 
	 			{
					$appoint_date = $_POST["appoint_date"] ;
				}

				if(empty($_POST["reason"]))
				{
					$err_reason ="You have to fill this field";
					$hasError=true;
				}
				else
				{
					$reason=$_POST["reason"];
				}
				if(!$hasError)
				{
					
				}
				insertBook($DoctorSpecialization,$doctor,$appoint_date,$reason);
                
			}
		
           function insertBook($DoctorSpecialization,$doctor,$appoint_date,$reason)
			{
				$query = "INSERT INTO book VALUES (NULL,'$DoctorSpecialization','$doctor','$appoint_date','$reason')" ;
				execute($query) ;
				header("Location: Dashboard.php");
				
			} 
        


        if(isset($_POST["delete_appt"]))
		{
			delete($_POST["id"]); 
		} 
	    function delete($id)
		{
			$query = "DELETE FROM book WHERE id=$id;";
			echo $query;
			execute($query);
			header("Location: Dashboard.php");
		} 

       if(isset($_POST["update_book"]))
        {
			edit($_POST["id"],$_POST["DoctorSpecialization"],$_POST["doctor"],$_POST["appoint_date"],$_POST["reason"]);
		}
		function edit($id,$DoctorSpecialization,$doctor,$appoint_date,$reason){
			$query = "update book set DoctorSpecialization ='$DoctorSpecialization', doctor ='$doctor', appoint_date ='$appoint_date', reason ='$reason' where id = $id";
			execute($query);
		    header("Location: Dashboard.php");
		}


		function viewbooks($id)
	    {
	        $query = "select * from book where id='$id'" ;
	        $result = get($query) ;
	        if(count($result)){
	            return $result[0] ;
	        }
	        return false ;
	    }
		    function viewallbooks()
		    {
		        $query = "select * from book" ;
		        $result = get($query) ;
		        return $result ;
		    }	 

		        

?>