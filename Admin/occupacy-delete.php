<?php
include('../config.php');
$id = $_GET['ID'];
$returnid = $_GET['RETURNID'];
$tablename = "occupacy_".$returnid;
$sql = "DELETE FROM $tablename WHERE ID = $id";
mysqli_query($conn, $sql) or die("DELETE QUERY NOT RUNNING");

header('location: viewcard.php?ID='.$returnid);
?>