<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Logout - BTMS</title>
    <link rel="stylesheet" type="text/css" href="css/customer.css">
</head>
<body>
<header>
      <h1>BTMS</h1>
      <nav>
        <ul>
          
        <li><a href="busesCustomer.php?contact=<?php echo $encoded_contact; ?>">View Buses</a></li>
          <li><a href="bookTickets.php?contact=<?php echo $encoded_contact; ?>">Book Ticket</a></li>
          <li><a href="viewBookings.php?contact=<?php echo $encoded_contact; ?>">View Bookings</a></li>
          <li><a href="feedback.php?contact=<?php echo $encoded_contact; ?>">Feedback</a></li>
          <li><a href="paymentsCustomer.php?contact=<?php echo $encoded_contact; ?>">Payment</a></li>
          <li><a href="CustomerLogout.php?contact=<?php echo $encoded_contact; ?>">Logout</a></li>
        </ul>
      </nav>
    </header>
    <div class="confirmation-box">
        <p>Are you sure you want to log out?</p>
        <form method="post" action="../controllers/customerLogoutCheck.php">
            <input type="submit" name="logout" value="Yes">
            <a href="./customer.php">No</a>
        </form>
    </div>
</body>
</html>
