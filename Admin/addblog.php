<?php
include("../config.php");
session_start();
if(!isset($_SESSION['EMAIL'])) {
	header("location: login.php");
}
if(isset($_POST['upload'])) {
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
	
	$title = $_POST['TITLE'];
	$author = $_POST['AUTHOR'];
	$description = addslashes($_POST['DESCRIPTION']);
	$sql = "INSERT INTO blogs(IMAGE,TITLE,AUTHOR,DESCRIPTION,DATE) VALUES('{$file_name}','{$title}','{$author}','{$description}',(now()))";
	mysqli_query($conn,$sql) or die("insert query not running");
	header("location: blogs-admin.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=No">
	<link rel="stylesheet" type="text/css" href="../files/css/bootstrap.css">
	<script type="text/javascript" src="../files/js/bootstrap.js"></script>
	<script type="text/javascript" src="../files/js/bootstrap.bundle.js"></script>
	<link rel="stylesheet" type="text/css" href="../fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="../navbar.css">
	<link rel="icon" href="../images/logo1.png">
	<title>Prostay</title>
	<style type="text/css">
	    body {
	        margin: 0;
		    padding: 0;
	    }
		.text-yellow {
	        color: #FFED46;
	    }
	    .bg-yellow  {
	        background-color: #FFED46;
	    }
		form {
			max-width: 600px;
			margin-right: auto;
			margin-left: auto;
			padding: 20px;
		}
		td {
			text-align: center;
			border: 1px solid black;
		}
		th {
			text-align: center;
			border: 1px solid white;
			background-color: black;
			color: white;
		}
		tr {
			border: 1px solid black;
		}
		@media (max-width: 992px) {
		}
		@media (max-width: 425px) {
	        .navbar-brand {
		        max-height: 9vh;
		    }
	    }
	    @media (max-width: 345px) {
	        .navbar-brand {
		        max-height: 8vh;
		    }
		}
		@media (max-width: 256px)  {
            .navbar-brand {
		        max-height: 5vh;
		}		
	}	
	</style>
  </head>
  <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <a href="index.php"><img class="navbar-brand logo-shift" src="../images/logo-black.png" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
               <li class="nav-item">
                  <a class="nav-link" href="users.php">Users<span class="sr-only">(current)</span></a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="admins.php">Admins</a>
               </li>
			   <li class="nav-item">
                  <a class="nav-link" href="post.php">Posts</a>
               </li>
			   <li class="nav-item">
                  <a class="nav-link active" href="blogs-admin.php">Blogs</a>
               </li>
			   <li class="nav-item">
                  <a class="nav-link" href="message.php">Messages</a>
               </li>
			   <li class="nav-item">
                  <a class="nav-link" href="property.php">Property</a>
               </li>
			   <?php 
			     if(!isset($_SESSION['EMAIL'])) {
			   ?>
			   <li class="nav-item">
                  <a class="nav-link" href="account.php">Account</a>
               </li>
			   <?php } else { ?>
			   <li class="nav-item">
                  <a class="nav-link" href="changepassword.php">Change Password</a>
               </li>
			   <li class="nav-item">
                  <a class="nav-link" href="logout.php">Logout</a>
               </li>
			   <?php } ?>
            </ul>
            </div>
        </nav>
		<div class="container-fluid" style="margin-top: 85px;">
		  <div class="row">
		      <div class="col-lg-12 col-md-12 col-sm-12 col-12">
			    <h1 class="text-center">Add Blogs Section</h1>
			  </div>
		   </div>
		   <hr class="bg-yellow" style="height: 2px;">
		   <form class="shadow" action="<?php $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
		     <div class="form-group">
			    <label>Image *</label>
				<input type="file" class="form-control-file" placeholder="Upload Image" name="image" required />
			 </div>
		     <div class="form-group">
			    <label>Title *</label>
				<input type="text" class="form-control" placeholder="Title of Blog" name="TITLE" required />
			 </div>
			 <div class="form-group">
			    <label>Author *</label>
				<input type="text" class="form-control" placeholder="Writer of Blog" name="AUTHOR" required />
			 </div>
			 <div class="form-group">
			    <label>Blog Content *</label>
				<textarea rows = "7" class="form-control" placeholder="Enter Blog content" name="DESCRIPTION" required></textarea>
			 </div>
			 <div align="center">
			   <input type="submit" class="btn bg-yellow" value="Add Blog" name="upload"/> 
			 </div>
		   </form>
		   <br>
		</div> <!-- container div -->
<!-- footer -->
<?php include("footer.php"); ?>
  </body>
</html>