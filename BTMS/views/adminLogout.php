<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Logout - BTMS</title>
    <link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body>
<header>
      <h1>BTMS</h1>
      <nav>
        <ul>
          
          <li><a href="./ticketsAdmin.php">Bookings</a></li>
          <li><a href="./busesAdmin.php">Buses</a></li>
          <li><a href="./customersAdmin.php">Customers</a></li>
          <li><a href="./paymentsAdmin.php">Payments</a></li>
          <li><a href="./adminLogout.php">Logout</a></li>
          
        </ul>
      </nav>
    </header>
    <div class="confirmation-box">
        <p>Are you sure you want to log out?</p>
        <form method="post" action="../controllers/adminLogoutCheck.php">
            <input type="submit" name="logout" value="Yes">
            <a href="./admin.php">No</a>
        </form>
    </div>
</body>
</html>
