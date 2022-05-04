<?php
include('../config.php');
$id = $_GET['ID'];
$tablename = $_GET['TABLENAME'];
$returnid = $_GET['RETURNID'];
$sql = "DELETE FROM $tablename WHERE ID = $id";
mysqli_query($conn, $sql) or die("Query not running");
header("location: viewcard.php?ID=".$returnid);
?>