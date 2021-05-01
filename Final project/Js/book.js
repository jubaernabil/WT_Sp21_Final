function get(id)
{
	return document.getElementById(id);
}

				function valid(){
					cleanUp();
					var hasError=false;
					
					if(get("ds1").selected == false && get("ds2").selected == false && get("ds3").selected == false && get("ds4").selected == false){
						get("err_DoctorSpecialization").innerHTML="Doctor Specialization Required";
						get("err_DoctorSpecialization").style.color="red";
						hasError=true;
					}
					if(get("d1").selected == false && get("d2").selected == false && get("d3").selected == false && get("d4").selected == false){
						get("err_doctor").innerHTML="Doctor Specialization Required";
						get("err_doctor").style.color="red";
						hasError=true;
					}
					if(get("appoint_date").value == ""){
						get("err_appoint_date").innerHTML="appoint date Required";
						get("err_appoint_date").style.color="red";
						hasError=true;
					}
					if(get("reason").value == ""){
						get("err_reason").innerHTML="reason Required";
						get("err_reason").style.color="red";
						hasError=true;
					}
					if(!hasError){
						return true;
					}
					return false;
					
				}
				function cleanUp(){
				
				    get("err_DoctorSpecialization").innerHTML="";
				    get("err_doctor").innerHTML="";
                    get("err_appoint_date").innerHTML="";  	
                    get("err_reason").innerHTML="";			
				}				
