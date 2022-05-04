<?php 
include("../config.php");
if(isset($_POST['verify'])) {
    $id = $_GET['ID'];
	$otp = $_POST['OTP'];
	
	$sql = "SELECT * FROM adminuser WHERE CODE = $otp";
	$result = mysqli_query($conn, $sql) or die("SELECT query not running");
	if(mysqli_num_rows($result)>0) {
		$sql = "UPDATE adminuser SET CODE = 0 WHERE CODE = '{$otp}'";
		mysqli_query($conn, $sql) or die("Update query not running");
        header('location: outchangepassword.php?ID='.$id);
	} else {
		echo '<script>alert("Wrong OTP");
		window.location="checkcode.php"</script>';
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
                  <a class="nav-link" href="../index.php">HOME <span class="sr-only">(current)</span></a>
               </li>
			   <li class="nav-item">
                  <a class="nav-link" href="../pg.php">PG's</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="../partners.php">PARTNER WITH US</a>
               </li>
			   <li class="nav-item">
                  <a class="nav-link" href="../about.php">ABOUT</a>
               </li>
			   <li class="nav-item">
                  <a class="nav-link" href="../contact.php">CONTACT</a>
               </li>
			   <li class="nav-item">
                  <a class="nav-link" href="../blogs.php">BLOGS</a>
               </li>
			   <?php
			    if(isset($_SESSION['EMAIL'])) {
			   ?>
			   <li class="nav-item">
                  <a class="nav-link" href="../logout.php">LOGOUT</a>
               </li>
			   <?php } else { ?>
			   <li class="nav-item">
                  <a class="nav-link" href="../signup.php">SIGNUP</a>
               </li>
			   <li class="nav-item">
                  <a class="nav-link" href="../login.php">LOGIN</a>
               </li>
			   <?php } ?>
            </ul>
            </div>
          </nav>
		
		<div class="container" style="margin-top: 85px;">
		  <p class="text-center title">Verify OTP</p>
		  <hr class="bg-yellow" style="height: 2px; margin: 3px;">
		   <form class="shadow" action="<?php $_SERVER['PHP_SELF'];?>" method="post">
		     <div class="form-group">
			    <label>Enter OTP *</label>
				<input type="text" class="form-control" placeholder="OTP is sent to your registered Email" name="OTP" required />
			 </div>
	
			 <div align="center">
			   <input type="submit" class="btn bg-yellow" value="Verify" name="verify"/>
			   <p style="padding-top: 5px;">Back to<a href="login.php" style="padding-left: 13px">Login</a></p>
			 </div>
		   </form>
		</div> <!-- container div -->
		<br>
<!-- footer -->
<?php include("../footer.php"); ?>
  </body>
</html>