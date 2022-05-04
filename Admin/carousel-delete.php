<?php
include('../config.php');
$id = $_GET['ID'];
$tablename = $_GET['TABLENAME'];
$returnid = $_GET['RETURNID'];
$sql = "SELECT IMAGE FROM $tablename WHERE ID = $id";
$result = mysqli_query($conn, $sql) or die("First Query not running");
$row = mysqli_fetch_assoc($result);
unlink("..images/".$row['IMAGE']);
$sql = "DELETE FROM $tablename WHERE ID = $id";
mysqli_query($conn,$sql) or die("Query not running");
header('location: viewcard.php?ID='.$returnid);
?>