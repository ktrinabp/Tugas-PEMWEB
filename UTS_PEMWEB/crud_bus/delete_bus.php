<?php
// include database connection file
include_once("config.php");
 
// Get id from URL to delete that user
$id_bus = $_GET['id_bus'];
 
// Delete user row from table based on given id
$ambildata = mysqli_query($mysqli, "DELETE FROM bus WHERE id_bus=$id_bus");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index_bus.php");
?>