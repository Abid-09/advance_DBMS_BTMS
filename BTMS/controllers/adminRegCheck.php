<?php
    require '../models/adminData.php';

	if (isset($_REQUEST['regSubmit'])) {

		$name = $_POST['adminName'];
		$email = $_POST['adminEmail'];
        $contact = $_POST['adminContact'];
		$username = $_POST['adminUsername'];
		$password = $_POST['adminPassword'];

		if ($name != null && $email != null && $contact != null && $username != null &&  $password != null) 
        {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                echo "Invalid Email Formate!";
                exit;
            }
            if(!preg_match('/^(018|019|017|016)\d{8}$/',$contact))
            {
                echo "Invalid contact number!";
                exit;
            }

            if (!preg_match('/^[a-zA-Z0-9]{1,20}$/', $password)) {
                echo "Invalid password only contain number";
                exit;
            }

            if (!preg_match('/^[a-zA-Z0-9]{1,8}$/', $username)) {
                echo "Invalid username format!";
                exit;
            }
            if(usernameExists($username))
            {
                echo"Username exists";
                exit;
            }
            if(emailExists($email))
            {
                echo"Email Exists";
                exit;
            }
            if(contactExists($contact))
            {
                echo "Contact Exist";
                exit;
            }

            $status = reg($name, $email, $contact, $username, $password);

            if ($status) {
                //echo "registration successful";
                header('location: ../views/adminLogin.php');
            } else {
                header('location: ../views/adminReg.php');
            }			
		} else {
			echo "Null Submission!";
		}
	
	}

?>