<?php
include("../config.php");
session_start();
if(!isset($_SESSION['EMAIL'])){
	header('location: login.php');
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
			max-width: 1000px;
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
		<div class="container" style="margin-top: 88px;">
		  <h1 class="text-center">Upload PG's Card</h1>
		  <hr class="bg-yellow" style="height: 2px;">
		   <form class="shadow" action="addingcard.php" method="post" enctype="multipart/form-data">
		    <div class="row">
			 <div class="col-lg-6 col-md-6 col-sm-12 col-12">
		     <div class="form-group">
			    <label>Card Image *</label>
				<input type="file" class="form-control-file" placeholder="Upload Image" name="image" required />
			 </div>
			 
			 <div class="form-group">
			    <label>PG Name *</label>
				<input type="text" class="form-control" placeholder="PG Code and Pg Name" name="PGNAME" required />
			 </div>
			 
			 <div class="form-group">
			    <label>Ploat No. *</label>
				<input type="text" class="form-control" placeholder="Enter Ploat No." name="ADD1" required />
			 </div>
			 
			 <div class="form-group">
			    <label>Address *</label>
				<input type="text" class="form-control" placeholder="Enter Address" name="ADD3" required />
			 </div>
			 
			 <div class="form-group">
			    <label>Landmark *</label>
				<input type="text" class="form-control" placeholder="Enter Landmark" name="ADD2" required />
			 </div>
			 
			 <div class="form-group">
			    <label>Pin Code *</label>
				<input type="text" class="form-control" placeholder="Enter Pincode" name="PINCODE" required />
			 </div>
			 
			 <div class="form-group">
			    <label>Starting Price *</label>
				<input type="text" class="form-control" placeholder="Enter Starting Price" name="PRICE" required />
			 </div>
			 
			 <div class="form-group">
			    <label>Food *</label>
				<input type="text" class="form-control" placeholder="With Food/Without Food" name="FOOD" required />
			 </div>
			 
			 <div class="form-group">
			    <label>City *</label>
				<input type="text" class="form-control" placeholder="Enter City Name" name="CITY" required />
			 </div>
			 
			 <div class="form-group">
			    <label>Location *</label>
				<input type="text" class="form-control" placeholder="Enter Location" name="LOCATION" required />
			 </div>
			 
			 </div> <!-- col-lg-6 div -->
			 
			 <div class="col-lg-6 col-md-6 col-sm-12 col-12">
			 
			 <div class="form-group">
			    <label>Category *</label>
				<select class="form-control" name="CATEGORY" required>
				    <option selected disabled value="">Select</option>
					<option value="boys">Boys PG</option>
					<option value="girls">Girls PG</option>
				</select>
			 </div>
			 
			 <label>Facility Provided By Partner </label><br>
			 <div class="form-group form-check form-check-inline">
			    <input type="checkbox" class="form-check-input" value="Bed" name="facility[]" />
			    <label class="form-check-label">Bed</label>
			 </div>
			 
			 <div class="form-group form-check form-check-inline">
			    <input type="checkbox" class="form-check-input" value="Fan" name="facility[]" />
			    <label class="form-check-label">Fan</label>
			 </div>
			 
			 <div class="form-group form-check form-check-inline">
			    <input type="checkbox" class="form-check-input" value="Lights" name="facility[]" />
			    <label class="form-check-label">Lights</label>
			 </div>
			 
			 <div class="form-group form-check form-check-inline">
			    <input type="checkbox" class="form-check-input" value="Fridge" name="facility[]" />
			    <label class="form-check-label">Fridge</label>
			 </div>
			 
			 <div class="form-group form-check form-check-inline">
			    <input type="checkbox" class="form-check-input" value="Modular Kitchen" name="facility[]" />
			    <label class="form-check-label">Modular Kitchen</label>
			 </div>
			 
			 <div class="form-group form-check form-check-inline">
			    <input type="checkbox" class="form-check-input" value="CCTV" name="facility[]" />
			    <label class="form-check-label">CCTV</label>
			 </div>
			 
			 <div class="form-group form-check form-check-inline">
			    <input type="checkbox" class="form-check-input" value="Washing Machine" name="facility[]" />
			    <label class="form-check-label">Washing Machine</label>
			 </div>
			 
			 <div class="form-group form-check form-check-inline">
			    <input type="checkbox" class="form-check-input" value="Balcony" name="facility[]" />
			    <label class="form-check-label">Balcony</label>
			 </div>
			 
			 <div class="form-group form-check form-check-inline">
			    <input type="checkbox" class="form-check-input" value="AC" name="facility[]" />
			    <label class="form-check-label">AC</label>
			 </div>
			 
			 <div class="form-group form-check form-check-inline">
			    <input type="checkbox" class="form-check-input" value="Parking" name="facility[]" />
			    <label class="form-check-label">Parking</label>
			 </div>
			 
			 <div class="form-group form-check form-check-inline">
			    <input type="checkbox" class="form-check-input" value="Attach Bathroom" name="facility[]" />
			    <label class="form-check-label">Attach Bathroom</label>
			 </div>
			 
			 <div class="form-group form-check form-check-inline">
			    <input type="checkbox" class="form-check-input" value="WIFI" name="facility[]" />
			    <label class="form-check-label">WIFI</label>
			 </div>
			 <br>
			 <label>Facility Not Included In Rent </label><br>
			 <div class="form-group form-check form-check-inline">
			    <input type="checkbox" class="form-check-input" value="Electricity Bill" name="facilitynot[]" />
			    <label class="form-check-label">Electricity Bill</label>
			 </div>
			 
			 <div class="form-group form-check form-check-inline">
			    <input type="checkbox" class="form-check-input" value="Guest Room for Parents" name="facilitynot[]" />
			    <label class="form-check-label">Guest Room for Parents</label>
			 </div>
			 
			 <div class="form-group">
			    <label>Manager Name *</label>
				<input type="text" class="form-control" placeholder="Enter Manager Name" name="MANAGERNAME" required />
			 </div>
			 
			 <div class="form-group">
			    <label>Manager Contact Number *</label>
				<input type="text" class="form-control" placeholder="Manager Phone Number" name="MANAGERCONTACT" required />
			 </div>
			 
			  <div class="form-group">
			    <label>Google Map Link </label>
				<input type="url" class="form-control" placeholder="Google Map link" name="LINK" />
			 </div>
			 
			 <div class="form-group">
			    <label>Google Map Location </label>
				<input type="url" class="form-control" placeholder="Google Map iframe link" name="MAP" />
			 </div>
			 
			 </div> <!-- col-lg-6 div -->
			 </div> <!-- row div -->
			 <div align="center">
			    <input type="submit" class="btn bg-yellow" value="Upload" name="add" />
			 </div>
		   </form>
		</div> <!-- container div -->
		<br><br>
<!-- footer -->
<?php include("footer.php"); ?>
  </body>
</html>