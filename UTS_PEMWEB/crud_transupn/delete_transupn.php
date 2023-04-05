<?php
// include database connection file
include_once("config.php");
 
// Get id from URL to delete that user
$id_trans_upn = $_GET['id_trans_upn'];
 
// Delete user row from table based on given id
$ambildata = mysqli_query($mysqli, "DELETE FROM trans_upn WHERE id_trans_upn=$id_trans_upn");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index_transupn.php");
?>