<?php
	require '../models/customerData.php';

	if (isset($_REQUEST['regSubmit'])) {
		$name = $_POST['Name'];
		$email = $_POST['Email'];
        $age = $_POST['Age'];
		$contact = $_POST['Contact'];
		$password = $_POST['Password'];
		$profession = $_POST['Profession'];
		if (isset($_POST['Gender'])) {
			$gender = $_POST['Gender'];
		}

		if ($name != null && $email != null && $age != null &&  $password != null && $gender != null && $profession != null && $contact != null ) {
			
			if (!preg_match('/^[a-zA-Z ]+$/', $name)) {
				echo "Invalid Name Format!";
				exit;
			}
	
			// Validate Email format
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				echo "Invalid Email Format!";
				exit;
			}
	
			// Validate Age (Greater than or equal to 18)
			if ($age < 18) {
				echo "Age must be 18 or older!";
				exit;
			}
	
			// Validate Contact (11 digits starting with 017, 016, 018, 019)
			if (!preg_match('/^(017|016|018|019)[0-9]{8}$/', $contact)) {
				echo "Invalid Contact Number!";
				exit;
			}
	
			// Validate Password (Letters and numbers)
			if (!preg_match('/^[a-zA-Z0-9]+$/', $password)) {
				echo "Invalid Password Format!";
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
			
	
				$status = reg($name, $email, $contact, $age, $gender, $profession, $password);
				
				if ($status) {
                    //echo"Registration Successful";
					
					header('location: ../views/customerLogin.php');
                } else {
                    header('location: ../views/customerReg.php');
                }
        } else {
            echo "Null Submission!";
        }
    }

?>