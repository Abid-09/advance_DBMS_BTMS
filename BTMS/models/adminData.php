<?php

function showBuses() 
    {
        require 'dbConnection.php';

		$sql = "SELECT * FROM BUSES";
        $rs = oci_parse($conn, $sql);
        oci_execute($rs);

        if (!$rs) 
        {
            exit("Error in SQL");
        }
        $data = array();
        while ($row = oci_fetch_array($rs, OCI_ASSOC+OCI_RETURN_NULLS)) 
        {
            $data[] = $row;
        }

        return $data;
        oci_close($conn);
    }

    function addBus ($busNum, $busRoute, $busType, $busDriverName) 
    {
        require 'dbConnection.php';
        
		$sql = "INSERT INTO BUSES VALUES ({$busNum}, '{$busRoute}', '{$busType}', '{$busDriverName}')";
		$rs = oci_parse($conn, $sql);
        if (oci_execute($rs)) {
            return true;
        }
        return false;
	}

    function removeBus($busNum)
    {
        require 'dbConnection.php';

		$sql = "DELETE FROM BUSES WHERE BUS_NUMBER = {$busNum}";
		$rs = oci_parse($conn, $sql);
        if (oci_execute($rs)) {
            return true;
        } else {
            return false;
        }
        
        oci_close($conn);
    }





function login($email, $password) {
		require 'dbConnection.php';

		$sql = "SELECT COUNT(*) AS RESNUM from ADMIN WHERE EMAIL = '{$email}' AND PASSWORD = '{$password}'";
		$rs = oci_parse($conn, $sql);
        oci_execute($rs);

        //resnum variable stores the number of rows in result.
        while (oci_fetch($rs))
        {
            $resnum = oci_result($rs, "RESNUM");
        }

		if ($resnum > 0) {
			return true;
		} else {
			return false;
		}
	}

    function reg ($name, $email, $contact, $username, $password) 
    {
        require 'dbConnection.php';
        
        
		$sql = "INSERT INTO ADMIN VALUES ('{$name}', '{$email}', '{$username}', {$contact}, '{$password}')";
		$rs = oci_parse($conn, $sql);
        oci_execute($rs);
        

        return true;
	}

    function usernameExists($username)
    {
    require 'dbConnection.php';
    $query = "SELECT COUNT(*) FROM ADMIN WHERE USERNAME = '{$username}'";
    $result = oci_parse($conn, $query);
    oci_execute($result);

    $row = oci_fetch_assoc($result);
    $count = $row['COUNT(*)'];

    return $count > 0; // Return true if the username exists, false otherwise
    }

    function emailExists($email)
    {
    require 'dbConnection.php';
    $query = "SELECT COUNT(*) FROM ADMIN WHERE EMAIL = '{$email}'";
    $result = oci_parse($conn, $query);
    oci_execute($result);

    $row = oci_fetch_assoc($result);
    $count = $row['COUNT(*)'];

    return $count > 0; // Return true if the email exists, false otherwise
    }

    function contactExists($contact)
    {
    require 'dbConnection.php';
    $query = "SELECT COUNT(*) FROM ADMIN WHERE CONTACT = '{$contact}'";
    $result = oci_parse($conn, $query);
    oci_execute($result);

    $row = oci_fetch_assoc($result);
    $count = $row['COUNT(*)'];

    return $count > 0; // Return true if the email exists, false otherwise
    }


    function showCustomers() 
    {
        require 'dbConnection.php';

		$sql = "SELECT * FROM CUSTOMERS";
        $rs = oci_parse($conn, $sql);
        oci_execute($rs);

        if (!$rs) 
        {
            exit("Error in SQL");
        }
        $data = array();
        while ($row = oci_fetch_array($rs, OCI_ASSOC+OCI_RETURN_NULLS)) 
        {
            $data[] = $row;
        }

        return $data;
        oci_close($conn);
    }

    function removeCustomer($customerID)
    {
        require 'dbConnection.php';

		$sql = "DELETE FROM CUSTOMERS WHERE ID = {$customerID}";
		$rs = oci_parse($conn, $sql);
        if (oci_execute($rs)) {
            return true;
        } else {
            return false;
        }
        
        oci_close($conn);
    }

    function showAdminPayments() 
    {
        require 'dbConnection.php';

		$sql = "SELECT * FROM PAYMENTS";
        $rs = oci_parse($conn, $sql);
        oci_execute($rs);

        if (!$rs) 
        {
            exit("Error in SQL");
        }
        $data = array();
        while ($row = oci_fetch_array($rs, OCI_ASSOC+OCI_RETURN_NULLS)) 
        {
            $data[] = $row;
        }

        return $data;
        oci_close($conn);
    }

    function showTickets() 
    {
        require 'dbConnection.php';

		$sql = "SELECT * FROM TICKETS";
        $rs = oci_parse($conn, $sql);
        oci_execute($rs);

        if (!$rs) 
        {
            exit("Error in SQL");
        }
        $data = array();
        while ($row = oci_fetch_array($rs, OCI_ASSOC+OCI_RETURN_NULLS)) 
        {
            $data[] = $row;
        }

        return $data;
        oci_close($conn);
    }
    ?>