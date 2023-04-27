<?php
include 'connect.php';
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'myDB';

$connection=mysqli_connect($db_host, $db_user, $db_pass, $db_name);
mysqli_select_db($connection, 'myDB');

$query = "INSERT INTO MyGuest (firstname, lastname, email, reg_date)
          VALUES
          ('Effi', 'Emmanuel', 'effiemmanuel.n@gmail.com', '2023-04-24')";   
if (mysqli_query($connection, $query)) {
    echo "New records inserted successfully";
  } else {
    echo "Error: " . $query . "<br>" . mysqli_error($connection);
  }
  
  mysqli_close($connection);    
?>