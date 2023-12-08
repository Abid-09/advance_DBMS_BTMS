<?php
    session_start();
    require '../models/adminData.php';

	if (isset($_REQUEST['loginSubmit'])) 
    {
		$email = $_POST['adminEmail'];
		$password = $_POST['adminPassword'];

		if ($email != null && $password != null) 
        {
			if (!filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                echo "Invalid Email Formate!";
                exit;
            }
			else if (!preg_match('/^[a-zA-Z0-9]{1,20}$/', $password)) {
                echo "Invalid password only contain number";
                exit;
            }
			
			$status = login($email, $password);

			if ($status) {
				$_SESSION['adminEmail'] = $email;
				setcookie('status','ture',time()+3600,'/');
				header('location: ../views/admin.php');
			} else {
				header('location: ../views/adminLogin.php?msg=error');
			}
			
		} else {
			echo "Null Submission!";
		}
	}
?>