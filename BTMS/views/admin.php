<?php
session_start();
if(!isset($_SESSION['adminEmail']))
{
  header('location:./adminLogin.php');
  exit;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Admin - BTMS</title>
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
    
    <main>
      <?php
      //echo"Welcome".$_SESSION['adminEmail'];
      ?> 
      <h2>Welcome Admin</h2>
      <p>Here, you can manage bookings, bus information and payment.</p>
    </main>
    
    <footer>
      <p>BTMS &copy; 2023</p>
    </footer>
  </body>
</html>
