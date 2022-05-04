<?php
    include("../config.php");
	$id = $_GET['ID'];
	//OLD IMAGE DELETE
	$sql = "SELECT IMAGE FROM blogs WHERE ID = $id";
	$result = mysqli_query($conn,$sql) or die("select query not running");
	$row = mysqli_fetch_assoc($result);
	unlink("../images/".$row['IMAGE']);
	//DELETE 
	$sql = "DELETE FROM blogs WHERE ID = $id";
	mysqli_query($conn, $sql) or die("delete query not running");
	header("location: blogs-admin.php");
?>