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
          ('Ogburu', 'Jude', 'ogburuj@gmail.com', '2023-01-20'),
          ('Mary', 'Jane', 'maryjane@example.com', '2023-02-10'),
          ('John', 'Doe', 'johndoe@example.com', '2023-02-20'),
          ('AKin', 'OLumuyide', 'akin@gmail.com', '2023-04-24')";   
if (mysqli_query($connection, $query)) {
    echo "New records inserted successfully";
  } else {
    echo "Error: " . $query . "<br>" . mysqli_error($connection);
  }
  
  mysqli_close($connection);    
?>