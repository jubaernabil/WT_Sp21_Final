
/*if(strlen($_POST["pass"])<8)
			{
				$pass=$_POST["pass"];
			if ((!strpos($_POST["pass"],"#"))||(!strpos($_POST["u_pass"],"?")))
				{
				$err_pass="Password should be minimum 1 character like '?'or'#'";
				}
				for ($i=0;$i<strlen($_POST["pass"]);$i++)
				{
					if (ctype_lower($_POST["pass"][$i]))
					{
						break;
					}
					else
					{
						$err_pass="Password should be minimum 1 lower case ";
					}
				}
				for ($j=0;$j<strlen($_POST["pass"]);$j++)
				{
					if (ctype_upper($_POST["pass"][$j]))
					{
						break;
					}
					else
					{
						$err_pass="Password should be minimum 1 upper case ";
					}
				}
				for($k=0;$k<strlen($_POST["pass"]);$k++)
				{
					if(is_numeric($_POST["pass"][$k]))
					{
						break;
					}
					else
					{
						$err_pass="Password should be minimum 1 numeric character";
					}
				}
			}
			else
			{
				$err_pass="Password length must be 8 or longer";
			}*	
			
			
			if($_POST["conpass"]!=$_POST["pass"])
			{
				$err_conpass="Password didn't matched";
			}
			else
			{
				$conpass=$_POST["conpass"];

			}*/
