<?php
include("config.php");
session_start();
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
	.first-div {
		margin-top: 85px;
	}
	.container {
		padding-top: 10px;
		padding-bottom: 20px;
	}
	.form-group {
		padding-right: 50px;
	}
	.form-control {
		padding-left: 20px;
	}
	.btn-yellow {
		background-color: #FFED46;
		border: 1px solid white;
	}
	.btn:hover {
		border: 1px solid black;
	}
	.btn-div {
		border-radius: 24px;
	}
	.title {
		font-size: 25px;
		font-weight: 500;
		margin-bottom: 0;
		font-family: serif;
	}
	.filter-title {
		font-size: 20px;
		font-weight: 400;
		margin-bottom: 0;
		font-family: serif;
	}
	.city-title {
		font-size: 16px;
		font-weight: 450;
		margin-bottom: 0;
	}
	.location-title {
		font-size: 16px;
		font-weight: 450;
		margin-bottom: 0;
	}
	.category-title {
		font-size: 18px;
		font-weight: 450;
		margin-bottom: 0;
	}
	.card {
		max-width: 400px;
		max-height: 600px;
	}
	.card-img-top {
		max-height: 35vh;
		min-height: 35vh;
	}
	.rating {
		padding: 7px;
	}
	.address1 {
		font-size: 20px;
		font-weight: 450;
		margin-bottom: 0;
		padding-bottom: 0;
	}
	.address2 {
		font-size: 17px;
		font-weight: 425;
		margin-bottom: 0;
		padding-bottom: 0;
	}
	.address3 {
		font-size: 16px;
		font-weight: 425;
		margin-bottom: 0;
		padding-bottom: 0;
	}
	.rate {
		font-width: 500;
		padding: 10px;
	}
	
    @media (max-width: 992px)  {
		
    } 
	@media (max-width: 756px) {
	    
	}
	@media (max-width: 425px) {
	    .navbar-brand {
		   max-height: 9vh;
		}
		.first-div {
		   margin-top: 85px;
	    }
		.card-img-top {
		    max-height: auto;
		    min-height: 35vh;
	    }
	}
    @media (max-width: 361px) {
        
    }
	@media (max-width: 345px) {
	    .navbar-brand {
		   max-height: 8vh;
		}
		.first-div {
		   margin-top: 80px;
	    }
	}
	@media (max-width: 256px)  {
        .navbar-brand {
		   max-height: 5vh;
		}
        .first-div {
		   margin-top: 70px;
	    }		
	}
  </style>
 </head>
  <body class="bg-light">
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
		  <div class="container shadow" style="background-color: white;">
		    <p class="text-center title" style="margin-top: 90px;">Available PG's</p>
			<hr style="height: 2px; margin: 3px;">
			<!-- filter -->
			<!-- city -->
			    <p class="text-dark city-title"><i class="fas fa-city"></i>&nbsp Search By City</p>
				<div class="row">
				    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
					    <div class="mr-2" role="group" aria-label="First group">
				            <div class="col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top: -10px;">
					    <?php 
				            $sql1 = "SELECT DISTINCT(CITY) FROM addcard";
					        $result1 = mysqli_query($conn, $sql1) or die("SELECT DISTINCT QUERY NOT RUNNING");
					        while($row1 = mysqli_fetch_assoc($result1)) {
				        ?>
						    <?php 
							    if(isset($_GET['CITY']) && $row1['CITY'] == $_GET['CITY']) {
									$active = "1px solid black";
								} else {
									$active = "none";
								}	
							?>
					            <a href="pg.php?CITY=<?php echo $row1['CITY'];?>" class="btn bg-yellow" style="border-radius: 25px; font-size: 14px; border: <?php echo $active; ?>; text-align: center; margin-top: 8px;"><?php echo $row1['CITY'];?></a>
					    <?php }?>
					        </div>
				        </div>
				    </div>	    
				</div>    
			
			<!-- Locations -->
			<?php 
			    if(isset($_GET['CITY'])) {
			?>
			<p class="text-dark location-title"><i class="fa fa-map-marker"></i>&nbsp Available Locations</p>
			<div class="row">
			    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
					<div class="mr-2" role="group" aria-label="First group">
				        <div class="col-lg-12 col-md-12 col-sm-12 col-12"style="margin-top: -6px;">
						<?php 
				            $city = $_GET['CITY'];
					        $sql2 = "SELECT DISTINCT(LOCATION) FROM addcard WHERE CITY = '{$city}'";
					        $result2 = mysqli_query($conn, $sql2) or die("DISTINCT LOCATION QUERY NOT RUNNING");
					        while($row2 = mysqli_fetch_assoc($result2)) {
				        ?>
						    <?php 
							    if(isset($_GET['LOCATION']) && $row2['LOCATION'] == $_GET['LOCATION']) {
									$active = "1px solid black";
								} else {
									$active = "none";
								}	
							?>
				            <a href="pg.php?CITY=<?php echo $city;?>&LOCATION=<?php echo $row2['LOCATION'];?>" class="btn bg-yellow my-1" style="border-radius: 25px; font-size: 14px; border: <?php echo $active;?>; margin-top: 8px;"><?php echo $row2['LOCATION'];?></a>
						<?php }?>
				        </div>
				    </div>
				</div>
			</div>
			
			<?php } ?>
			<!-- category -->
			<p class="text-dark category-title"><i class="fas fa-male"></i><i class="fas fa-female"></i>&nbsp Search By Category</p>
			<div class="row">
			    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
					<div class="mr-2" role="group" aria-label="First group">
			            <div class="col-lg-12 col-md-12 col-sm-12 col-12" style="margin-bottom: 10px;">
			  <?php
				    if(isset($_GET['CATEGORY'])) {
						if($_GET['CATEGORY'] == "boys") {
							$activeboys = "1px solid black";
						} else {
							$activeboys = " ";
						}
						if($_GET['CATEGORY'] == "girls") {
							$activegirls = "1px solid black";
						} else {
							$activegirls = " ";
						}
					}
			  ?>
			  <?php
			    if(isset($_GET['CITY']) && isset($_GET['LOCATION']))
				{
					$city = $_GET['CITY'];
					$location = $_GET['LOCATION'];
			  ?>
				    <a href="pg.php?CITY=<?php echo $city;?>&LOCATION=<?php echo $location;?>&CATEGORY=<?php echo"boys";?>" class="btn bg-yellow" style="border-radius: 25px; border: <?php echo $activeboys; ?>">Boys PG's</a>
				    <a href="pg.php?CITY=<?php echo $city;?>&LOCATION=<?php echo $location;?>&CATEGORY=<?php echo"girls";?>" class="btn bg-yellow" style="border-radius: 25px; border: <?php echo $activegirls; ?>">Girls PG's</a>
			  <?php } else if(isset($_GET['CITY'])) { ?>
				    <a href="pg.php?CITY=<?php echo $city;?>&CATEGORY=<?php echo"boys";?>" class="btn bg-yellow" style="border-radius: 25px; font-size: 14px; border: <?php echo $activeboys; ?>">Boys PG's</a>
				    <a href="pg.php?CITY=<?php echo $city;?>&CATEGORY=<?php echo"girls";?>" class="btn bg-yellow" style="border-radius: 25px; font-size: 14px;">Girls PG's</a>
			  <?php } else { ?>
				    <a href="pg.php?CATEGORY=<?php echo"boys";?>" class="btn bg-yellow" style="border-radius: 25px; font-size: 14px; border: <?php echo $activeboys; ?>">Boys PG's</a>
				    <a href="pg.php?CATEGORY=<?php echo"girls";?>" class="btn bg-yellow" style="border-radius: 25px; font-size: 14px; border: <?php echo $activegirls; ?>">Girls PG's</a>
			  <?php } ?>
			            </div>
			        </div>
			    </div>
			</div>
			
			<!-- Cards -->
			<div class="row">
			<?php
			if(isset($_GET['CITY']) && isset($_GET['LOCATION']) && isset($_GET['CATEGORY'])) {
				$city = $_GET['CITY'];
				$location = $_GET['LOCATION'];
				$category = $_GET['CATEGORY'];
				$sql = "SELECT * FROM addcard WHERE CITY = '{$city}' && LOCATION = '{$location}' && CATEGORY = '{$category}' ORDER BY RATING DESC";
			}
			else if(isset($_GET['CITY']) && isset($_GET['LOCATION'])) {
				$city = $_GET['CITY'];
				$location = $_GET['LOCATION'];
				$sql = "SELECT * FROM addcard WHERE CITY = '{$city}' && LOCATION = '{$location}' ORDER BY RATING DESC";
			}
			else if(isset($_GET['CITY']) && isset($_GET['CATEGORY'])) {
				$city = $_GET['CITY'];
				$category = $_GET['CATEGORY'];
				$sql = "SELECT * FROM addcard WHERE CITY = '{$city}' && CATEGORY = '{$category}' ORDER BY RATING DESC";
			}
			else if(isset($_GET['LOCATION']) && isset($_GET['CATEGORY'])) {
				$location = $_GET['LOCATION'];
				$category = $_GET['CATEGORY'];
				$sql = "SELECT * FROM addcard WHERE LOCATION = '{$location}' && CATEGORY = '{$category}' ORDER BY RATING DESC";
			}
			else if(isset($_GET['CITY'])) {
				$city = $_GET['CITY'];
				$sql = "SELECT * FROM addcard WHERE CITY = '{$city}' ORDER BY RATING DESC";
			}
			else if(isset($_GET['CATEGORY'])) {
				$category = $_GET['CATEGORY'];
				$sql = "SELECT * FROM addcard WHERE CATEGORY = '{$category}' ORDER BY RATING DESC";
			}
			else {
				$sql = "SELECT * FROM addcard ORDER BY RATING DESC";
			}
			$result = mysqli_query($conn, $sql) or die("Filter QUERY NOT RUNNING");
			if(mysqli_num_rows($result) == 0) {
				echo $category." pg's are not available in this location";
			} else {
			while($row = mysqli_fetch_assoc($result)) {
			?>
			  <div class="col-lg-4 col-md-4 col-sm-12 col-12" style="margin-bottom: 20px">
			    <div class="card mx-auto" style="border: 3px solid #FFED46;">
                    <a href="pg-details.php?ID=<?php echo $row['ID'];?>&RATING=<?php echo $row['RATING'];?>"><img class="card-img-top" src="images/<?php echo $row['IMAGE'];?>" alt="Card image"/></a>
                    <div class="card-body bg-light">
					    <?php if(strlen($row['PGNAME']) > 21){?>
					    <p class="card-text  address1" style="margin-bottom: 3px;"><?php echo substr($row['PGNAME'],0,20)."...."; ?></p><span class="bg-yellow" style="float:right; padding: 5px 6px; margin-top: -35px;"><i class="fas fa-star"><?php echo $row['RATING'];?></i></span>
						<?php } else {?>
						<p class="card-text  address1" style="margin-bottom: 3px;"><?php echo $row['PGNAME']; ?></p><span class="bg-yellow" style="float:right; padding: 5px 6px; margin-top: -35px;"><i class="fas fa-star"><?php echo $row['RATING'];?></i></span>
						<?php }?>
						<?php if(strlen($row['ADDRESS3']) > 25){?>
                        <p class="card-text text-muted address2" style="margin-bottom: 3px;"><?php echo substr($row['ADDRESS3'],0,25)."...."; ?></p>
						<?php } else {?>
						<p class="card-text text-muted address2" style="margin-bottom: 3px;"><?php echo $row['ADDRESS3']; ?></p>
						<?php }?>
						<p class="card-text text-muted address3" style="margin-bottom: 3px;"><?php echo $row['CITY']; ?></p>
						<h4 class="card-text bg-dark text-light text-center" style="font-size: 19px; font-width: 500; padding: 3px 5px;">STARTING RENT <i class="fas fa-rupee-sign"></i><span class="text-yellow"><?php echo $row['PRICE']; ?></span></h4>
						<div align="right">
						    <a href="pg-details.php?ID=<?php echo $row['ID'];?>&RATING=<?php echo $row['RATING'];?>" class="btn btn-warning">Check PG Reviews</a>
						</div>
                    </div> <!-- card body div -->
                </div>  <!-- card div -->
			  </div>
			<?php }  }?>
			</div> <!-- row div -->
		  </div>  <!-- container div -->
		  <br><br>
		  <!-- footer -->
        <?php include('footer.php');?>
  </body>
</html>			