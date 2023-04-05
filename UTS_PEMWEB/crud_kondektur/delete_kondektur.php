<?php
// include database connection file
include_once("config.php");
 
// Get id from URL to delete that user
$id_kondektur = $_GET['id_kondektur'];
 
// Delete user row from table based on given id
$ambildata = mysqli_query($mysqli, "DELETE FROM kondektur WHERE id_kondektur=$id_kondektur");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index_kondektur.php");
?>