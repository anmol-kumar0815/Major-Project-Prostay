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
                  <a class="nav-link active" href="admins.php">Admins</a>
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
		   <?php 
		    if($_SESSION['EMAIL'] == 'anmolshrivastav.08@gmail.com' || $_SESSION['EMAIL'] == 'rohit06102000@gmail.com' || $_SESSION['EMAIL'] == 'umangaggrwal631@gmail.com') {
		   ?>
		      <div class="col-lg-12 col-md-12 col-sm-12 col-12">
			    <h1 class="text-center">Data of All Admins 
				<span style="float: right;padding-right: 50px"><a href="addadmin.php" class="btn bg-yellow">Add Admin</a></span></h1>
			  </div>
		   <?php } else {?>
		      <div class="col-lg-12 col-md-12 col-sm-12 col-12">
			    <h1 class="text-center">Data of All Admins</h1>
			  </div>
		   <?php } ?>
		   </div>
		   <hr class="bg-yellow" style="height: 2px;">
		   <div class="row">
		      <div class="col-lg-12 col-md-12 col-sm-12 col-12">
			    <table class="table table-hover table-responsive-sm">
				   <thead>
				     <tr class="text-center">
					   <th>ID</th>
					   <th>NAME</th>
					   <th>EMAIL</th>
					   <th>CONTACT</th>
					   <?php 
		                  if($_SESSION['EMAIL'] == 'anmolshrivastav.08@gmail.com' || $_SESSION['EMAIL'] == 'rohit06102000@gmail.com' || $_SESSION['EMAIL'] == 'umangaggrwal631@gmail.com') {
		               ?>
					   <th>PASSWORD</th>
					   <th>DELETE</th>
					   <?php }?>
					 </tr>
				   </thead>
				   <tbody>
				   <?php
				   $sql = "SELECT * FROM adminuser";
				   $result = mysqli_query($conn, $sql) or die("SELECT QUERY NOT RUNNING");
				   while($row = mysqli_fetch_assoc($result))  {
				   ?>
				     <tr>
					   <td><?php echo $row['ID'];?></td>
					   <td><?php echo $row['NAME'];?></td>
					   <td><?php echo $row['EMAIL'];?></td>
					   <td><?php echo $row['CONTACT'];?></td>
					   <?php 
		                  if($_SESSION['EMAIL'] == 'anmolshrivastav.08@gmail.com' || $_SESSION['EMAIL'] == 'rohit06102000@gmail.com' || $_SESSION['EMAIL'] == 'umangaggrwal631@gmail.com') {
		               ?>
					   <td><?php echo $row['PASSWORD'];?></td>
					   <td><a href="deleteadmin.php?ID=<?php echo $row['ID'];?>"><i class="fa fa-trash-alt"></i></a></td>
					   <?php }?>
					 </tr>
				   <?php } ?>
				   </tbody>
				</table>
			  </div>
		   </div>  <!-- row div -->
		</div> <!-- container div -->
		<br>
<!-- footer -->
<?php include("footer.php"); ?>

  </body>
</html>