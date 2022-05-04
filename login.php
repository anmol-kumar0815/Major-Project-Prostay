<?php 
include("config.php");
if(isset($_POST['login']))
{
	$loginid = $_POST['LOGINID'];
	$password = $_POST['PASSWORD'];
	
	$sql = "SELECT * FROM normaluser WHERE EMAIL = '{$loginid}' && PASSWORD = '{$password}'";
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result)==0)
	{
		$sql = "SELECT * FROM normaluser WHERE CONTACT = '{$loginid}' && PASSWORD = '{$password}'";
	    $result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result)==0)
		{
			 echo "<script>alert('Invalid Id or Password');
                window.location='login.php'</script>";
				
		}
		else
		{
			while($row = mysqli_fetch_assoc($result)) {
				session_start();
				$_SESSION['EMAIL'] = $row['EMAIL'];
				$_SESSION['NAME'] = $row['NAME'];
				}
			if(isset($_GET['DESTINATION'])) {
				$destination = $_GET['DESTINATION'];
				$id = $_GET['ID'];
				if($destination == "schedulevisit"){
					header('location: schedulevisit.php?ID='.$id);
				} else if($destination == "writereview"){
					header('location: writereview.php?ID='.$id);
				}
			}
			echo "<script>alert('Successful Login');
                window.location='pg.php'</script>";
		}
	}
	else
	{
		while($row = mysqli_fetch_assoc($result)) {
				session_start();
				$_SESSION['EMAIL'] = $row['EMAIL'];
				$_SESSION['NAME'] = $row['NAME'];
				}
			if(isset($_GET['DESTINATION'])) {
				$destination = $_GET['DESTINATION'];
				$id = $_GET['ID'];
				if($destination == "schedulevisit"){
					header('location: schedulevisit.php?ID='.$id);
				} else if($destination == "writereview"){
					header('location: writereview.php?ID='.$id);
				}
			}
		echo "<script>alert('Successful Login');
                window.location='pg.php'</script>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=No">
	<link rel="stylesheet" type="text/css" href="files/css/bootstrap.css">
	<script type="text/javascript" src="files/js/bootstrap.js"></script>
	<script type="text/javascript" src="files/js/bootstrap.bundle.js"></script>
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="navbar.css">
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
        .title {   
		    font-size: 30px;
		    font-weight: 500;
		    margin-bottom: 0;
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
            <a href="index.php"><img class="navbar-brand logo-shift" src="images/logo-black.png" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
               <li class="nav-item">
                  <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
               </li>
			   <li class="nav-item">
                  <a class="nav-link" href="pg.php">PG's</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="partners.php">PARTNER WITH US</a>
               </li>
			   <li class="nav-item">
                  <a class="nav-link" href="about.php">ABOUT</a>
               </li>
			   <li class="nav-item">
                  <a class="nav-link" href="contact.php">CONTACT</a>
               </li>
			   <li class="nav-item">
                  <a class="nav-link" href="blogs.php">BLOG</a>
               </li>
			   <?php
			    if(isset($_SESSION['EMAIL'])) {
			   ?>
			   <li class="nav-item">
                  <a class="nav-link" href="logout.php">LOGOUT</a>
               </li>
			   <?php } else { ?>
			   <li class="nav-item">
                  <a class="nav-link" href="signup.php">SIGNUP</a>
               </li>
			   <li class="nav-item">
                  <a class="nav-link active" href="login.php">LOGIN</a>
               </li>
			   <?php } ?>
            </ul>
            </div>
          </nav>
		
		<div class="container" style="margin-top: 85px;">
		  <p class="text-center title">Login to Your Account</p>
		  <hr class="bg-yellow" style="height: 2px; margin: 3px;">
		   <form class="shadow" action="<?php $_SERVER['PHP_SELF'];?>" method="post">
		     <div class="form-group">
			    <label>Email or Contact *</label>
				<input type="text" class="form-control" placeholder="Enter Your Email-id or Phone number" name="LOGINID" required />
			 </div>
	
			 
			 <div class="form-group">
			    <label>Password *</label>
				<input type="password" class="form-control" placeholder="Enter Password" name="PASSWORD" required />
                <span style="margin-bottom: 0;"><a href="forgotpassword.php">Forgot Password?</a></span>
			 </div>
	
			 <div align="center" style="margin-top: -10px;">
			   <input type="submit" class="btn bg-yellow" value="Login" name="login"/> 
			   <p style="padding-top: 5px;">Don't have an account?<a href="signup.php" style="padding-left: 13px">Create Account</a></p>
			 </div>
		   </form>
		</div> <!-- container div -->
		<br>
<!-- footer -->
<?php include("footer.php"); ?>
  </body>
</html>