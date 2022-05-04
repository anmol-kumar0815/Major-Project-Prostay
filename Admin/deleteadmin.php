<?php
include("../config.php");
$id = $_GET['ID'];
if($id == 2)
{
	echo'<script>alert("Super Admin cannot be delete");
	     window.location="admins.php"</script>';
}
else {
$sql = "DELETE FROM adminuser WHERE ID = $id";
mysqli_query($conn, $sql) or die("delete query not running");
header("location: admins.php");
}
?>