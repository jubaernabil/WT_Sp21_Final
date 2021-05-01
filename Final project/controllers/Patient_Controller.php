<?php
    require_once 'models/db_config.php' ;	 
    $name="";
	$err_name="";
	$username="";
	$err_username="";
	$password="";
	$err_password="";
	$age="";
	$err_age="";
	$email="";
	$err_email="";
	$code="";
	$err_code="";
	$address="";
	$err_address ="" ;
	$number="";
	$err_number="";
	$gender="";
	$err_gender="";
	$birthday="";
	$err_birthday="";
	$bio="";
	$err_bio="";
	$bGrp="";
	$err_bGrp="";
	$hasError=false;



	
	function validEmail($email)
	 {
		 $pos_at=strpos($email,"@");
		 $pos_dot=strpos($email,".",$pos_at+1);
		   if($pos_at < $pos_dot)
		   {
			   return true;
		   }	 
	}
	
		if(isset($_POST["add_patient"]))
		{
			
			if (empty($_POST["name"]))
			{
				$err_name="**Name Required";
				$hasError=true;
			}
			else
			{
				$name=htmlspecialchars ($_POST["name"]);
			}
			
			if (empty($_POST["username"])){
				$err_username="Username Required";
				$hasError=true;
			}
			elseif (strlen($_POST["username"])<6){
				$err_username="Username must contain at least 6 characters ";
				$hasError=true;
			}
            elseif (strpos($_POST["username"]," ")) {
				$err_username="space is not allowed";
				$hasError=true;
			}
			else
			{
				$username=htmlspecialchars($_POST["username"]);
				
			}
			if (empty($_POST["password"]))
			{
				$err_password="**Password Required";
			}
			else
			{
				$password= $_POST["password"];
			}
			
			if(!is_numeric($_POST["age"]))
			{
				$err_age="Age should be numeric";
			}
			else if(empty($_POST["age"]))
			{
				$err_age="Age Required";
			}
			else
			{
				$age=$_POST["age"];
			}
			if(empty($_POST["email"]))
		    {
			 $err_email="Email Required";
			 $hasError=true;
		    }
		     elseif(!validEmail($_POST["email"]))
		    {
			 $err_email="Not a valid Email";
			 $hasError=true;
		    }
            else
		   {
			$email=htmlspecialchars($_POST["email"]);
		   }
			if(empty($_POST["address"]))
			{
				$err_address="Address Required";
			}
			else
			{
				$address=$_POST["address"];
			}

			if(!is_numeric($_POST["number"]))
			{
				$err_number="Number should be numeric";
			}
			else if(empty($_POST["number"]))
			{
				$err_number="Number should be required";
			}
			else
			{
				$number = $_POST["number"];
			}
			if(!isset($_POST["birthday"]))
			 {
				$err_birthday="working time Required";
				$hasError=true;
			 }
			else
			{
				$birthday=htmlspecialchars($_POST["birthday"]);
			 }
			if (empty($_POST["bio"]))
			{
				$err_bio="Plase fill the text area";
			}
			else
			{
				$bio=$_POST["bio"];
			}
			if(!isset($_POST["gender"]))
			{
				$err_gender="Please select a gender";
				$hasError=true ;
			}
			else
			{
				$gender=$_POST["gender"];
			}
			
			if(!isset($_POST["bGrp"]))
			{
				$err_bGrp="You have to select a Blood Group";
				$hasError=true;
			}
			else
			{
				$bGrp=$_POST["bGrp"];
			}
			if(!$hasError)
			{
				
			}
            insertPatient($name,$username,$password,$age,$bGrp,$email,$number,$address,$birthday,$gender,$bio);
	    }
		function insertPatient($name,$username,$password,$age,$bGrp,$email,$number,$address,$birthday,$gender,$bio)
			{
				$query = "INSERT INTO patient VALUES (NULL,'$name','$username','$password','$age','$bGrp','$email','$number','$address','$birthday','$gender','$bio')" ;
				echo $query ;
				execute($query) ;
				
			}


			function getCustomers($id)
			{
				$query = "select * from customer where id='$id'" ;
				$result = get($query) ;
				if(count($result)){
					return $result[0] ;
				}
				return false ;
			}
			function getAllcustomers()
			{
				$query = "select * from customer" ;
				$result = get($query) ;
				return $result ;
			}
?>



