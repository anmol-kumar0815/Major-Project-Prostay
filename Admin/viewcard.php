<?php
include("../config.php");
session_start();
if(!isset($_SESSION['EMAIL'])) {
	header("location: login.php");
}
$id = $_GET['ID'];
$tablename = "carousel_".$id;
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
			text-align: center;
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
		   <div class="row">
		      <div class="col-lg-12 col-md-12 col-sm-12 col-12">
			    <h1 class="text-center">Details of PG Card</h1>
			  </div>
		   </div>
		   <hr class="bg-yellow" style="height: 2px;">
		        <div class="row">
				    <div class="col-lg-9 col-md-9 col-sm-12 col-12">
					    <h2>Carousel Section</h2>
					</div>
					<div align="right" class="col-lg-3 col-md-3 col-sm-12 col-12">
					    <a href="carousel-add.php?ID=<?php echo $id; ?>&TABLENAME=<?php echo $tablename;?>" class="btn bg-yellow">Add Carousel</a>
					</div>
				</div>
				<div class="row">
				    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
					    <table class="table table-hover table-responsive-sm">
						    <thead>
							    <th>ID</th>
								<th>IMAGE</th>
								<th>EDIT</th>
								<th>DELETE</th>
							</thead>
							<tbody>
								<?php 
								    $id = $_GET['ID'];
								    $tablename = "carousel_".$id;
								    $sql = "SELECT * FROM $tablename";
									$result = mysqli_query($conn,$sql) or die("Carousel Select query not running");
									while($row = mysqli_fetch_assoc($result)) {
								?>
								<tr>
								    <td><?php echo $row['ID'];?></td>
									<td><?php echo $row['IMAGE'];?></td>
									<td><a href="carousel-edit.php?ID=<?php echo $row['ID'];?>&TABLENAME=<?php echo $tablename; ?>&RETURNID=<?php echo $id; ?>"><i class="fa fa-pencil-alt"></i></a></td>
									<td><a href="carousel-delete.php?ID=<?php echo $row['ID'];?>&TABLENAME=<?php echo $tablename; ?>&RETURNID=<?php echo $id; ?>"><i class="fa fa-trash-alt"></i></a></td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>  <!-- row div -->
				
				<!-- Food section -->
				<h2>Food Section</h2>
				<div class="row">
				    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
					    <table class="table table-hover table-responsive-sm">
						    <thead>
							    <th>ID</th>	
								<th>DESCRIPTION</th>
								<th>EDIT</th>
							</thead>
							<tbody>
								<?php 
								    $id = $_GET['ID'];
								    $sql = "SELECT FOOD FROM addcard WHERE ID = $id";
									$result = mysqli_query($conn,$sql) or die("FOOD Select query not running");
									$row = mysqli_fetch_assoc($result);
								?>
								<tr>
								    <td><?php echo $id;?></td>
									<td><?php echo $row['FOOD'];?></td>
									<td><a href="food-edit.php?ID=<?php echo $id;?>&RETURNID=<?php echo $id; ?>"><i class="fa fa-pencil-alt"></i></a></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>  <!-- row div -->
				
				<!-- Facility provided by partner -->
				<?php
				    $id = $_GET['ID'];
					$tablename = "facility_".$id;
				?>
				<div class="row">
				    <div class="col-lg-9 col-md-9 col-sm-12 col-12">
					    <h2>Facility Provided by Partner In PG Section</h2>
					</div>
					<div align="right" class="col-lg-3 col-md-3 col-sm-12 col-12">
					    <a href="facility-add.php?RETURNID=<?php echo $id; ?>&TABLENAME=<?php echo $tablename;?>" class="btn bg-yellow">Add Facility</a>
					</div>
				</div>
				<div class="row">
				    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
					    <table class="table table-hover table-responsive-sm">
						    <thead>
							    <th>ID</th>	
								<th>DESCRIPTION</th>
								<th>DELETE</th>
							</thead>
							<tbody>
								<?php 
								    $id = $_GET['ID'];
									$tablename = "facility_".$id;
								    $sql = "SELECT * FROM $tablename";
									$result = mysqli_query($conn,$sql) or die("Facility Select query not running");
									while($row = mysqli_fetch_assoc($result)) {
								?>
								<tr>
								    <td><?php echo $row['ID'];?></td>
									<td><?php echo $row['FACILITY'];?></td>
									<td><a href="facility-delete.php?ID=<?php echo $row['ID'];?>&TABLENAME=<?php echo $tablename; ?>&RETURNID=<?php echo $id; ?>"><i class="fa fa-trash-alt"></i></a></td>
								</tr>
								<?php }?>
							</tbody>
						</table>
					</div>
				</div>  <!-- row div -->
				
				<!-- Facility not included in rent -->
				<?php
				    $id = $_GET['ID'];
					$tablename = "facility_not_".$id;
				?>
				<div class="row">
				    <div class="col-lg-9 col-md-9 col-sm-12 col-12">
					    <h2>Facility Not Included in Rent Section</h2>
					</div>
					<div align="right" class="col-lg-3 col-md-3 col-sm-12 col-12">
					    <a href="facilitynot-add.php?RETURNID=<?php echo $id; ?>&TABLENAME=<?php echo $tablename;?>" class="btn bg-yellow">Add Facility</a>
					</div>
				</div>
				<div class="row">
				    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
					    <table class="table table-hover table-responsive-sm">
						    <thead>
							    <th>ID</th>	
								<th>DESCRIPTION</th>
								<th>DELETE</th>
							</thead>
							<tbody>
								<?php 
								    $id = $_GET['ID'];
									$tablename = "facility_not_".$id;
								    $sql = "SELECT * FROM $tablename";
									$result = mysqli_query($conn,$sql) or die("Facility Not Select query not running");
									while($row = mysqli_fetch_assoc($result)) {
								?>
								<tr>
								    <td><?php echo $row['ID'];?></td>
									<td><?php echo $row['FACILITY'];?></td>
									<td><a href="facilitynot-delete.php?ID=<?php echo $row['ID'];?>&TABLENAME=<?php echo $tablename; ?>&RETURNID=<?php echo $id; ?>"><i class="fa fa-trash-alt"></i></a></td>
								</tr>
								<?php }?>
							</tbody>
						</table>
					</div>
				</div>  <!-- row div -->
				
	            <!-- Occupacy section -->
				<?php
				    $id = $_GET['ID'];
					$tablename = "occupacy_".$id;
				?>
				<div class="row">
				    <div class="col-lg-9 col-md-9 col-sm-12 col-12">
					    <h2>Occupacy Section</h2>
					</div>
					<div align="right" class="col-lg-3 col-md-3 col-sm-12 col-12">
					    <a href="occupacy-add.php?RETURNID=<?php echo $id; ?>&TABLENAME=<?php echo $tablename;?>" class="btn bg-yellow">Add Occupacy</a>
					</div>
				</div>
				<div class="row">
				    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
					    <table class="table table-hover table-responsive-sm">
						    <thead>
							    <th>ID</th>	
								<th>OCCUPACY</th>
								<th>PRICE</th>
								<th>EDIT</th>
								<th>DELETE</th>
							</thead>
							<tbody>
								<?php 
								    $id = $_GET['ID'];
									$tablename = "occupacy_".$id;
								    $sql = "SELECT * FROM $tablename";
									$result = mysqli_query($conn,$sql) or die("Occupacy Select query not running");
									while($row = mysqli_fetch_assoc($result)) {
								?>
								<tr>
								    <td><?php echo $row['ID'];?></td>
									<td><?php echo $row['OCCUPACY'];?></td>
									<td><?php echo $row['PRICE'];?></td>
									<td><a href="occupacy-edit.php?ID=<?php echo $row['ID'];?>&RETURNID=<?php echo $id; ?>"><i class="fa fa-pencil-alt"></i></a></td>
									<td><a href="occupacy-delete.php?ID=<?php echo $row['ID'];?>&RETURNID=<?php echo $id; ?>"><i class="fa fa-trash-alt"></i></a></td>
								</tr>
								<?php }?>
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