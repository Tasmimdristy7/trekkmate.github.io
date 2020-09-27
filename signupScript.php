<?php
	include 'config.php';
	
	if(isset($_POST['submitBtn']))
	{
        $fname = $_POST['fname'];
        $uemail = $_POST['uemail'];
        $pass = $_POST['pass'];

		$sql = "INSERT INTO `login_details`(`NAME`, `EMAIL`, `PASSWORD`) VALUES ('$fname', '$uemail', '$pass')";
        
        if ($conn->query($sql) === TRUE)
        {
            echo "successful";
            header('Location:signIn.php');
            exit;
        }
        else
        {
            echo "Error: ";
        }
		
	}
	
	
	
?>