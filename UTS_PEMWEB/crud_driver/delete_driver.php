<?php
// include database connection file
include_once("config.php");
 
// Get id from URL to delete that user
$id_driver = $_GET['id_driver'];
 
// Delete user row from table based on given id
$ambildata = mysqli_query($mysqli, "DELETE FROM driver WHERE id_driver=$id_driver");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index_driver.php");
?>