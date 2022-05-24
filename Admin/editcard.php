<?php
include("../config.php");
session_start();
if(!isset($_SESSION['EMAIL'])) {
	header("location: login.php");
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
	<link rel="stylesheet" type="text/css" href="mystyle.css">
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
                  <a class="nav-link active" href="post.php">Posts</a>
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
		<div class="container" style="margin-top: 85px;">
		    <h1 class="text-dark text-center title">Edit Pg Card</h1>
			<hr class="bg-yellow" style="height: 2px; margin: 3px;">
			<form class="shadow" action="editingcard.php" method="post" enctype="multipart/form-data">
			    <?php
				    $id = $_GET['ID'];
				    $sql = "SELECT ID,IMAGE,PGNAME,ADDRESS1,ADDRESS2,ADDRESS3,PINCODE,CATEGORY,PRICE,CITY,LOCATION,MANAGERNAME,MANAGERCONTACT,LINK,MAP FROM addcard WHERE ID = $id";
					$result = mysqli_query($conn, $sql) or die("SELECT QUERY NOT RUNNING");
					$row = mysqli_fetch_assoc($result);
				?>
			    <div class="form-group">
					<input type="hidden" class="form-control" value="<?php echo $row['ID'];?>" name="ID" />
				</div>
				
				<div class="form-group">
				    <label>Image *</label>
					<img src="../images/<?php echo $row['IMAGE'];?>" class="img-fluid" style="max-height: 35vh;"/>
					<input type="file" class="form-control" name="image" />
					<input type="hidden" class="form-control" value="<?php echo $row['IMAGE'];?>" name="oldimage" />
				</div>
				
				<div class="form-group">
				    <label>Pg Name *</label>
					<input type="text" class="form-control" value="<?php echo $row['PGNAME'];?>" name="PGNAME" placeholder="PG Code and Name" required />
				</div>
				
				<div class="form-group">
				    <label>Ploat No. *</label>
					<input type="text" class="form-control" value="<?php echo $row['ADDRESS1'];?>" name="ADDRESS1" placeholder="Enter Ploat Number" required />
				</div>
				
				<div class="form-group">
				    <label>Address *</label>
					<input type="text" class="form-control" value="<?php echo $row['ADDRESS2'];?>" name="ADDRESS2" placeholder="Enter Address" required />
				</div>
				
				<div class="form-group">
				    <label>Landmark *</label>
					<input type="text" class="form-control" value="<?php echo $row['ADDRESS3'];?>" name="ADDRESS3" placeholder="Enter Landmark" required />
				</div>
				
				<div class="form-group">
				    <label>Pincode *</label>
					<input type="text" class="form-control" value="<?php echo $row['PINCODE'];?>" name="PINCODE" placeholder="Enter Pincode" required />
				</div>
				
				<div class="form-group">
				    <label>Category *</label>
					<select class="form-control" name="CATEGORY" required>
					<?php
					    if($row['CATEGORY'] == "boys") {
					?>
					    <option selected value="boys">Boys</option>
						<option value="girls">Girls</option>
					<?php } else { ?>
					    <option value="boys">Boys</option>
						<option selected value="girls">Girls</option>
					<?php }?>
					</select>
				</div>
				
				<div class="form-group">
				    <label>Price *</label>
					<input type="text" class="form-control" value="<?php echo $row['PRICE'];?>" name="PRICE" placeholder="Enter price" required />
				</div>
				
				<div class="form-group">
				    <label>City *</label>
					<input type="text" class="form-control" value="<?php echo $row['CITY'];?>" name="CITY" placeholder="Enter city" required />
				</div>
				
				<div class="form-group">
				    <label>Location *</label>
					<input type="text" class="form-control" value="<?php echo $row['LOCATION'];?>" name="LOCATION" placeholder="Enter location" required />
				</div>
				
				<div class="form-group">
				    <label>Manager Name *</label>
					<input type="text" class="form-control" value="<?php echo $row['MANAGERNAME'];?>" name="MANAGERNAME" placeholder="Manager Name" required />
				</div>
				
				<div class="form-group">
				    <label>Manager Contact *</label>
					<input type="text" class="form-control" value="<?php echo $row['MANAGERCONTACT'];?>" name="MANAGERCONTACT" placeholder="Manager Phone Number" required />
				</div>
				
				<div class="form-group">
				    <label>Google Map Link *</label>
					<input type="url" class="form-control" value="<?php echo $row['LINK'];?>" name="LINK" placeholder="Google Map Link" />
				</div>
				
				<div class="form-group">
				    <label>Google Map Location *</label>
					<input type="url" class="form-control" value="<?php echo $row['MAP'];?>" name="MAP" placeholder="Google Map iframe Link" />
				</div>
				
				<div align="center">
				    <input type="submit" class="btn bg-yellow" value="UPLOAD" name="upload" style="font-size: 14px;" />
				</div>
			</form>
		</div> <!-- container div -->
		<br>
<!-- footer -->
<?php include("footer.php"); ?>

  </body>
</html>