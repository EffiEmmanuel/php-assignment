<?php
include 'connect.php';
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'myDB';

$connection=mysqli_connect($db_host, $db_user, $db_pass, $db_name);
$sql = "CREATE TABLE MyGuest(
    id int(6) unsigned AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date DATE
)";

if($connection){
    mysqli_select_db($connection, "myDB");
    if(mysqli_query($connection, $sql)){
        echo "Table Guest is created successfully";
    }
    else{ 
        echo "Error creating table: ".mysqli_error($connection);
    }
    mysqli_close($connection);
}
?>
