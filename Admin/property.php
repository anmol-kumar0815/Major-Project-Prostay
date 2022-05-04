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
			   <li class="nav-item active">
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
		   <h1 class="text-center">Property From Data</h1>
		   <hr class="bg-yellow" style="height: 2px;">
		   <div class="row">
		      <div class="col-lg-12 col-md-12 col-sm-12 col-12">
			    <table class="table table-hover table-responsive-sm">
				   <thead>
				     <tr>
					   <th>ID</th>
					   <th>NAME</th>
					   <th>EMAIL</th>
					   <th>PROPERTY NAME</th>
					   <th>PROPERTY CITY</th>
					   <th>PHONE</th>
					   <th>LINK</th>
					   <th>DATE & TIME</th>
					 </tr>
				   </thead>
				   <tbody>
				   <?php
				   $sql = "SELECT * FROM property ORDER BY ID DESC";
				   $result = mysqli_query($conn, $sql) or die("SELECT QUERY NOT RUNNING");
				   while($row = mysqli_fetch_assoc($result))  {
				   ?>
				     <tr>
					   <td><?php echo $row['ID'];?></td>
					   <td><?php echo $row['NAME'];?></td>
					   <td><?php echo $row['EMAIL'];?></td>
					   <td><?php echo $row['PROPERTYNAME'];?></td>
					   <td><?php echo $row['PROPERTYCITY'];?></td>
					   <td><?php echo $row['PHONE'];?></td>
					   <?php 
					       if($row['LINK'] == "Not Given") {
					   ?>
					   <td><?php echo $row['LINK'];?></td>
					   <?php } else { ?>
					   <td><a href="<?php echo $row['LINK'];?>">Click Here</a></td>
					   <?php } ?>
					   <td><?php echo $row['DATE'];?></td>
					 </tr>
				   <?php } ?>
				   </tbody>
				</table>
			  </div>
		   </div>  <!-- row div -->
		</div> <!-- container div -->
<!-- footer -->
<?php include("footer.php"); ?>
  </body>
</html>