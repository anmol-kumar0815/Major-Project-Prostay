<?php
include('../config.php');
$id = $_GET['ID'];
//Carousel section
$tablename = "carousel_".$_GET['ID'];
$sql = "SELECT * FROM $tablename";
$result = mysqli_query($conn, $sql) or die("Carousel select query not running");
if(mysqli_num_rows($result)>0) {
	while($row = mysqli_fetch_assoc($result)) {
		unlink("../images/".$row['IMAGE']);
	}
}
$sql = "DROP table $tablename";
mysqli_query($conn, $sql) or die("Carousel delete query not running");

//Facility section
$tablename = "facility_".$_GET['ID'];
$sql = "DROP table $tablename";
mysqli_query($conn, $sql) or die("facility delete query not running");

//Facility not section 
$tablename = "facility_not_".$_GET['ID'];
$sql = "DROP table $tablename";
mysqli_query($conn, $sql) or die("facility not delete query not running");

//Occupacy table
$tablename = "occupacy_".$_GET['ID'];
$sql = "DROP table $tablename";
mysqli_query($conn, $sql) or die("Occupacy delete query not running");

//reviews table
$tablename = "reviews_".$_GET['ID'];
$sql = "DROP table $tablename";
mysqli_query($conn, $sql) or die("Reviews delete query not running");

//point review table data
$tablename = "pointuser_".$_GET['ID'];
$sql = "DROP table $tablename";
mysqli_query($conn, $sql) or die("point review table data delete query not running");


$sql = "SELECT IMAGE FROM addcard WHERE ID = $id";
$result = mysqli_query($conn, $sql) or die("First Query not running");
$row = mysqli_fetch_assoc($result);
unlink("../images/".$row['IMAGE']);
$sql = "DELETE FROM addcard WHERE ID =$id";
mysqli_query($conn,$sql) or die("Query not running");
header('location: post.php');
?>