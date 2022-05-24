<?php
    include("../config.php");
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
	   $pgname = $_POST['PGNAME'];
       $add1 = $_POST['ADD1'];
	   $add2 = $_POST['ADD2'];
	   $add3 = $_POST['ADD3'];
	   $pincode = $_POST['PINCODE'];
	   $price = $_POST['PRICE'];
	   $food = $_POST['FOOD'];
	   $category = $_POST['CATEGORY'];
	   $city = $_POST['CITY'];
	   $location = $_POST['LOCATION'];
	   $managername = $_POST['MANAGERNAME'];
	   $managercontact = $_POST['MANAGERCONTACT'];
	   $link = $_POST['LINK'];
	   $map = $_POST['MAP'];
       
       $sql = "INSERT INTO addcard(IMAGE,PGNAME,ADDRESS1,ADDRESS2,ADDRESS3,PINCODE,PRICE,FOOD,CATEGORY,LOCATION,CITY,MANAGERNAME,MANAGERCONTACT,LINK,MAP) values('{$file_name}','{$pgname}','{$add1}','{$add2}','{$add3}','{$pincode}','{$price}','{$food}','{$category}','{$location}','{$city}','{$managername}','{$managercontact}','{$link}','{$map}')";
       mysqli_query($conn, $sql) or die("Insert query not running");
	   
	   $sql = "SELECT ID FROM addcard ORDER BY ID DESC LIMIT 1";
	   $result = mysqli_query($conn, $sql) or die("select id query is not running");
	   $row = mysqli_fetch_assoc($result);
	   
	   //CAROUSEL TABLE
	   $tablename = "carousel_".$row['ID'];
	   $sql = "CREATE TABLE $tablename(ID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,IMAGE VARCHAR(100) NOT NULL)";
	   mysqli_query($conn, $sql) or die("carousel table creation failed");
	   
	   //FACILITY TABLE
	   $tablename = "facility_".$row['ID'];
	   $sql = "CREATE TABLE $tablename(ID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,FACILITY VARCHAR(100) NOT NULL)";
	   mysqli_query($conn, $sql) or die("facility table creation failed");
	   
	   //FACILITY NOT INCLUDED TABLE
	   $tablename = "facility_not_".$row['ID'];
	   $sql = "CREATE TABLE $tablename(ID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,FACILITY VARCHAR(100) NOT NULL)";
	   mysqli_query($conn, $sql) or die("facility not table creation failed");
	   
	   //FACILITY INSERT OPERATIONS
	   $facility = $_POST['facility'];
	   if(!empty($facility)){
	   $tablename = "facility_".$row['ID'];
	   $facility = implode(',', $_POST['facility']);
	   $exploded = explode(',', $facility);
	    for($i=0; $i<sizeof($exploded); $i++) {
		   $sql = "INSERT INTO $tablename(FACILITY) VALUES('{$exploded[$i]}')";
	       mysqli_query($conn, $sql) or die("Facility insert query not running");
	    }
	   }
	   
	   //FACILITY NOT INCLUDE INSERT OPERATIONS
	   $facilitynot = $_POST['facilitynot'];
	   if(!empty($facilitynot)){
	   $tablename = "facility_not_".$row['ID'];
	   $facilitynot = implode(',', $_POST['facilitynot']);
	   $exploded = explode(',', $facilitynot);
	    for($i=0; $i<sizeof($exploded); $i++) {
		   $sql = "INSERT INTO $tablename(FACILITY) VALUES('{$exploded[$i]}')";
	       mysqli_query($conn, $sql) or die("Facility Not insert query not running");
	    }
	   }
	   
	   //REVIEWS TABLE CREATION
	   $tablename = "reviews_".$row['ID'];
	   $sql = "CREATE TABLE $tablename(ID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,USERNAME VARCHAR(100) NOT NULL, REVIEW VARCHAR(1000) NOT NULL)";
	   mysqli_query($conn,$sql) or die("Review table creation failed");
	   
	   //OCCUPACY TABLE CREATION
	   $tablename = "occupacy_".$row['ID'];
	   $sql = "CREATE TABLE $tablename(ID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, OCCUPACY VARCHAR(50) NOT NULL, PRICE VARCHAR(50) NOT NULL)";
	   mysqli_query($conn, $sql) or die("OCCUPACY table creation failed");
	   
	   //poins review user data table
	   $tablename = "pointuser_".$row['ID'];
	   $sql = "CREATE TABLE $tablename(ID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, POINTUSER VARCHAR(100) NOT NULL)";
	   mysqli_query($conn, $sql) or die("Points user review query not running");
	   
       header('location: post.php');