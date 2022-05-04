<?php
include("config.php");
session_start();
$id = $_GET['ID'];
if(!isset($_SESSION['EMAIL'])) {
	$destination = "schedulevisit";
	echo "<script language='JavaScript'>
         window.location.href='login.php?DESTINATION=$destination&ID=$id';
         window.alert('Login Require For Scheduling Visit.')
       </script>";
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
  <style>
    body {
	  padding: 0;
	  margin: 0;
	  
	}
	.text-yellow {
	   color: #FFED46;
	}
	.bg-yellow  {
	   background-color: #FFED46;
	}
	hr {
		background-color: #FFED46;
	}
    .title {
		font-size: 30px;
		font-weight: 500;
        margin-bottom: 0;
	}
	.title1 {
		font-size: 18px;
        margin-bottom: 2px;
	}
    @media (max-width: 992px)  {

    } 
	@media (max-width: 756px) {
	    
	}
	@media (max-width: 425px) {
	    .navbar-brand {
		   max-height: 9vh;
		}
	}
    @media (max-width: 361px) {
        
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
                  <a class="nav-link active" href="pg.php">PG's</a>
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
                  <a class="nav-link" href="login.php">LOGIN</a>
               </li>
			   <?php } ?>
            </ul>
            </div>
          </nav>
		  
		    <div class="container" style="margin-top: 90px;">
		        <p class="text-center title">Manager Details</p>
				<hr style="height: 2px; margin: 3px;">
				<div class="row">
				  <?php 
				    $id = $_GET['ID'];
				    $sql = "SELECT ADDRESS1,ADDRESS2,ADDRESS3,CITY,PINCODE,MANAGERNAME,MANAGERCONTACT,LINK,MAP FROM addcard WHERE ID = $id";
					$result = mysqli_query($conn, $sql) or die("Select query not running");
					while($row = mysqli_fetch_assoc($result)) {
				  ?>
					<div class="col-lg-6 col-md-6 col-sm-12 col-12">
						<p class="title1"><strong>Name:</strong> <?php echo $row['MANAGERNAME'];?></p>
						<p class="title1"><strong>Contact Number:</strong> <?php echo $row['MANAGERCONTACT'];?></p>
						<p class="title1"><strong>PG Address:</strong> <?php echo $row['ADDRESS1']." ".$row['ADDRESS2']." ".$row['ADDRESS3']." ".$row['CITY']." ".$row['PINCODE'];?></p>
						<?php if(!empty($row['LINK'])) { ?>
						<p class="title1"><strong>Address Link:</strong> <a href="<?php echo $row['LINK'];?>"><?php echo $row['LINK'];?></a></p>
						<?php }?>
					</div>
		            <?php if(!empty($row['MAP'])) { ?>
					<div class="col-lg-6 col-md-6 col-sm-12 col-12">
					    <p><iframe class="xl-12" src="<?php echo $row['MAP'];?>" width="100%" height="550" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></p>
					</div>
					<?php } } ?>
				</div>
		    </div>
		  
		  <br><br>
		  <!-- footer -->
        <?php include('footer.php');?>
  </body>
</html>			