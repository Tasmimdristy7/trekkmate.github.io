<?php
	include 'config.php';
	
	if(isset($_POST['signBtn']))
	{
        $uemail = $_POST['uemail'];
        $pass = $_POST['pass'];

		$sql = "SELECT `ID`, `NAME`, `EMAIL`, `PASSWORD` FROM `login_details` WHERE EMAIL = '$uemail' ";
        
        $query_result = mysqli_query($conn,$sql) or die(mysql_error());
			if(mysqli_num_rows($query_result) > 0)
			{ 					
				$row = mysqli_fetch_array($query_result);
                
                if( strcmp($pass,$row['PASSWORD'])==0 )
                {
                    header('Location:begin.html');
                    exit;
				}
				else{
					echo "Wrong password!!!!";
					header('Location:signIn.php');
                    exit;
				}				
			}
		
	}
	
	
	
?>