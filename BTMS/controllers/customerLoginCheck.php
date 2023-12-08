<?php
    session_start();
    require '../models/customerData.php';

	if (isset($_REQUEST['loginSubmit'])) 
    {
		$contact = $_POST['Contact'];
		$password = $_POST['Password'];

		if ($contact != null && $password != null) 
        {
			if (!preg_match('/^(017|016|018|019)[0-9]{8}$/', $contact)) {
				echo "Invalid Contact Number!";
				exit;
			}
	
			// Validate Password (Letters and numbers)
			if (!preg_match('/^[a-zA-Z0-9]+$/', $password)) {
				echo "Invalid Password Format!";
				exit;
			}
			$status = login($contact, $password);
			$encoded_contact = urlencode($contact);

			if ($status) {
				$_SESSION['Contact'] = $encoded_contact; 
				setcookie('status', 'true', time()+3600, '/');
				header('location: ../views/customer.php?contact='.$encoded_contact);
			} else {
				header('location: ../views/customerLogin.php?msg=error');
			}
		} else {
			echo "Null Submission!";
		}
	}
?>