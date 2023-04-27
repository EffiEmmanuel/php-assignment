<?php
include 'connect.php';

$sql = "CREATE DATABASE myDB";
if($connection){
    if(mysqli_query($connection, $sql)){
        echo "Database is created successfully";
    }
    else{
        echo "error connecting database: ".mysqli_error($connection);
    }
    mysqli_close($connection);
}

?>