<?php 
    include("../config.php");
	$id = $_POST['ID'];
	if(!empty($_FILES['image']['name'])) {
		$error = array();
	    $file_name = $_FILES['image']['name'];
	    $file_size = $_FILES['image']['size'];
	    $file_tmp = $_FILES['image']['tmp_name'];
	    $file_type = $_FILES['image']['type'];
	    $temp = explode('.',$file_name);
	    $file_ext = strtolower(end($temp));
	    $extension = array("jpeg","jpg","png");
	
	    if(in_array($file_ext,$extension) === false)  {
		    $error[] = "This file extension is not valid, please upload jpg or png file";
	    }
	    if($file_size>1000097152)  {
	        $error[] = "File size must be 50mb or Lower";
	    }
	    if(empty($error)=== true)  {
	        move_uploaded_file($file_tmp,"../images/".$file_name);	
	    }  else {
		    echo"<pre>";
		    print_r($error);
		    echo"</pre>";
	    	die();
	    }
		//DELETE STORED IMAGE
		$sql = "SELECT IMAGE FROM addcard WHERE ID = $id";
        $result = mysqli_query($conn, $sql) or die("First Query not running");
        $row = mysqli_fetch_assoc($result);
        unlink("../images/".$row['IMAGE']);
		//UPDATE NEW IMAGE 
		$sql = "UPDATE addcard SET IMAGE = '{$file_name}' WHERE ID = $id";
		mysqli_query($conn, $sql) or die("Image Update query not running");
	}
	$pgname = $_POST['PGNAME'];
	$address1 = $_POST['ADDRESS1'];
	$address2 = $_POST['ADDRESS2'];
	$address3 = $_POST['ADDRESS3'];
	$pincode = $_POST['PINCODE'];
	$category = $_POST['CATEGORY'];
	$price = $_POST['PRICE'];
	$city = $_POST['CITY'];
	$location = $_POST['LOCATION'];
	$managername = $_POST['MANAGERNAME'];
	$managercontact = $_POST['MANAGERCONTACT'];
	$link = $_POST['LINK'];
	$map = $_POST['MAP'];
	
    $sql = "UPDATE addcard SET PGNAME='{$pgname}',ADDRESS1='{$address1}',ADDRESS2='{$address2}',ADDRESS3='{$address3}',PINCODE='{$pincode}',CATEGORY='{$category}',PRICE='{$price}',CITY='{$city}',LOCATION='{$location}',MANAGERNAME='{$managername}',MANAGERCONTACT='{$managercontact}',LINK='{$link}',MAP='{$map}' WHERE ID = $id";
    mysqli_query($conn, $sql) or die("UPDATE Query not running");
    header('location: post.php');