<?php 
include("../config.php");
session_start();
if(!isset($_SESSION['EMAIL'])) {
	header('location: login.php');
}
if(isset($_POST['change'])) {
	$id = $_POST['ID'];
	$password = $_POST['PASSWORD'];
	$repassword = $_POST['REPASSWORD'];
	if($password === $repassword) {
		$sql = "UPDATE adminuser SET PASSWORD = '{$password}' WHERE ID = $id";
		mysqli_query($conn, $sql) or die("Update query not running");
		echo '<script>alert("Password Update Successful");
		      window.location="logout.php"</script>';
	}  else {
		echo '<script>alert("Password Does not Matched");
		      window.location="changepassword.php"</script>';
	}
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
	<link rel="icon" href="images/logo1.png"> 
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
            <a href="index.html"><img class="navbar-brand logo-shift" src="../images/logo-black.png" alt="logo"></a>
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
                  <a class="nav-link" href="blogs-admin.php">Blogs</a>
               </li>
			   <li class="nav-item">
                  <a class="nav-link" href="message.php">Messages</a>
               </li>
			   <li class="nav-item">
                  <a class="nav-link" href="property.php">Property</a>
               </li>
			   <li class="nav-item">
                  <a class="nav-link active" href="changepassword.php">Change Password</a>
               </li>
			   <li class="nav-item">
                  <a class="nav-link" href="logout.php">Logout</a>
               </li>
            </ul>
            </div>
        </nav>
		<div class="container" style="margin-top: 85px;">
		  <h1 class="text-center">Change Password</h1>
		  <hr class="bg-yellow" style="height: 2px;">
		   <form class="shadow" action="<?php $_SERVER['PHP_SELF'];?>" method="post">
	         <div class="form-group">
				<input type="hidden" class="form-control" name="ID" value="<?php echo $_SESSION['ID'];?>" required />
			 </div>	   
		   
		     <div class="form-group">
			    <label>New Password *</label>
				<input type="password" class="form-control" placeholder="Create New Password" name="PASSWORD" required />
			 </div>
	
			 
			 <div class="form-group">
			    <label>Confirm Password *</label>
				<input type="password" class="form-control" placeholder="Confirm Password" name="REPASSWORD" required />
			 </div>
	
			 <div align="center">
			   <input type="submit" class="btn bg-yellow" value="Change" name="change"/> 
			 </div>
		   </form>
		</div> <!-- container div -->
		<br>
<!-- footer -->
<?php include("footer.php"); ?>
  </body>
</html>