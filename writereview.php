<?php
include("config.php");
session_start();
$id = $_GET['ID'];
if(!isset($_SESSION['EMAIL'])) {
	$destination = "writereview";
	echo "<script language='JavaScript'>
         window.location.href='login.php?DESTINATION=$destination&ID=$id';
         window.alert('Login Require For Writing Review.');
       </script>";
}
if(isset($_POST['submit'])) 
{
	$id = $_GET['ID'];
	$money = $_POST['MONEY'];
	$manager = $_POST['MANAGER'];
	$food = $_POST['FOOD'];
	$environment = $_POST['ENVIRONMENT'];
	$house = $_POST['HOUSE'];
	$hospitality = $_POST['HOSPITALITY'];
	$location = $_POST['LOCATION'];
	$hygine = $_POST['HYGINE'];
	$pricing = $_POST['PRICING'];
	$security = $_POST['SECURITY'];
    
	$sql = "SELECT MONEY,MANAGER,FOODREVIEW,ENVIRONMENT,HOUSE,HOSPITALITY,LOCATIONREVIEW,HYGINE,PRICING,SECURITY,REVIEWCOUNT FROM addcard WHERE ID = $id";
	$result = mysqli_query($conn, $sql) or die("Query not running");
	$row = mysqli_fetch_assoc($result);
	if($row['MONEY'] != 0) {
	$money = ($money+$row['MONEY']) / 2;
	$money = substr($money, 0, 3);
	$manager = ($manager+$row['MANAGER']) / 2;
	$manager = substr($manager, 0, 3);
	$food = ($food+$row['FOODREVIEW']) / 2;
	$food = substr($food, 0, 3);
	$environment = ($environment+$row['ENVIRONMENT']) / 2;
	$environment = substr($environment, 0, 3);
	$house = ($house+$row['HOUSE']) / 2;
	$house = substr($house, 0, 3);
	$hospitality = ($hospitality+$row['HOSPITALITY']) / 2;
	$hospitality = substr($hospitality, 0, 3);
	$location = ($location+$row['LOCATIONREVIEW']) / 2;
	$location = substr($location, 0, 3);
	$hygine = ($hygine+$row['HYGINE']) / 2;
	$hygine = substr($hygine, 0, 3);
	$pricing = ($pricing+$row['PRICING']) / 2;
	$pricing = substr($pricing, 0, 3);
	$security = ($security+$row['SECURITY']) / 2;
	$security = substr($security, 0, 3);
	} 
	
	    $tablename = "pointuser_".$id;
		$username = $_SESSION['NAME'];
		$sql = "SELECT POINTUSER FROM $tablename WHERE POINTUSER = '{$username}'";
		$result = mysqli_query($conn, $sql) or die("First Review select query is not running");
		if(mysqli_num_rows($result) > 0) {
			$reviewcount = $row['REVIEWCOUNT'];
		} else if(mysqli_num_rows($result) == 0) {
			$reviewcount = $row['REVIEWCOUNT'];
			$reviewcount++;
			$sql = "INSERT INTO $tablename(POINTUSER) VALUES('{$username}')";
	        mysqli_query($conn, $sql) or die("INSERT POINTER QUERY NOT RUNNING");
		}
			
	
	$sql = "UPDATE addcard SET MONEY = $money,MANAGER = $manager,FOODREVIEW = $food,ENVIRONMENT = $environment,HOUSE = $house,HOSPITALITY = $hospitality,LOCATIONREVIEW = $location,HYGINE = $hygine,PRICING = $pricing,SECURITY = $security,REVIEWCOUNT = $reviewcount WHERE ID = $id";
	$result = mysqli_query($conn, $sql) or die("UPDATE Query not running");
	
	$rating = ($money+$manager+$food+$environment+$house+$hospitality+$location+$hygine+$pricing+$security) / 10;
	$rating = substr($rating, 0, 3);
	$sql = "UPDATE addcard SET RATING = $rating WHERE ID = $id";
	mysqli_query($conn,$sql) or die("Rating update query not running");
	
	if(!empty($_POST['REVIEW']))  {
		$tablename = "reviews_".$id;
		$username = $_SESSION['NAME'];
		$sql = "SELECT * FROM $tablename WHERE USERNAME = '{$username}'";
		$result = mysqli_query($conn, $sql) or die("Review select query is not running");
		if(mysqli_num_rows($result)>0) {
			$review = $_POST['REVIEW'];
			$sql = "UPDATE $tablename SET REVIEW = '{$review}' WHERE USERNAME = '{$username}'";
			mysqli_query($conn, $sql) or die("Update review query not running");
		} else if(mysqli_num_rows($result) == 0) {
		    $review = $_POST['REVIEW'];
		    $sql = "INSERT INTO $tablename(REVIEW,USERNAME) VALUES('{$review}','{$_SESSION['NAME']}')";
		    $result = mysqli_query($conn, $sql) or die("Insert review query not running");
		}
	}
	
	echo '<script> alert("Your Feedback is Submitted");
	      window.location = "pg.php" </script>';
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
    .title {
        font-size: 30px;
        font-weidth: 450;
        margin-bottom: 0;
    }
	hr {
		background-color: #FFED46;
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
		    <p class="text-center title">Give Feedback</p>
			<hr class="bg-yellow" style="height: 2px; margin-bottom:10px; margin-top: 5px;">
			<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
			  <div class="row">
			    <div class="col-lg-4 col-md-4 col-sm-12 col-12">
				    <div class="form-group">
					    <label>Does this PG provide good value for money? *</label>
						<select class="form-control" name="MONEY" required>
						    <option selected disabled value="">Select</option>
						    <?php 
							    for($i=1; $i<=10; $i++) {
						    ?>
						    <option value="<?php echo $i;?>"><?php echo $i;?></option>
							<?php }?>
						</select>
					</div>	
					<div class="form-group">
						<label>How is the manager interface in this PG? *</label>
						<select class="form-control" name="MANAGER" required>
						    <option selected disabled value="">Select</option>
						    <?php 
							    for($i=1; $i<=10; $i++) {
						    ?>
						    <option value="<?php echo $i;?>"><?php echo $i;?></option>
							<?php }?>
						</select>
					</div>
					<div class="form-group">
						<label>How is the food quality in this PG? *</label>
						<select class="form-control" name="FOOD" required>
						    <option selected disabled value="">Select</option>
						    <?php 
							    for($i=1; $i<=10; $i++) {
						    ?>
						    <option value="<?php echo $i;?>"><?php echo $i;?></option>
							<?php }?>
						</select>
					</div>
					<div class="form-group">
						<label>How is the Study environment of this PG*</label>
						<select class="form-control" name="ENVIRONMENT" required>
						    <option selected disabled value="">Select</option>
						    <?php 
							    for($i=1; $i<=10; $i++) {
						    ?>
						    <option value="<?php echo $i;?>"><?php echo $i;?></option>
							<?php }?>
						</select>
					</div>
					<div class="form-group">
						<label>How is the house keeping in this PG*</label>
						<select class="form-control" name="HOUSE" required>
						    <option selected disabled value="">Select</option>
						    <?php 
							    for($i=1; $i<=10; $i++) {
						    ?>
						    <option value="<?php echo $i;?>"><?php echo $i;?></option>
							<?php }?>
						</select>
					</div>
				</div> <!-- col-div -->
				<div class="col-lg-4 col-md-4 col-sm-12 col-12">
				    <div class="form-group">
						<label>How is the Space in Room? *</label>
						<select class="form-control" name="HOSPITALITY" required>
						    <option selected disabled value="">Select</option>
						    <?php 
							    for($i=1; $i<=10; $i++) {
						    ?>
						    <option value="<?php echo $i;?>"><?php echo $i;?></option>
							<?php }?>
						</select>
					</div>
					
					<div class="form-group">
						<label>How is the Locality?  *</label>
						<select class="form-control" name="LOCATION" required>
						    <option selected disabled value="">Select</option>
						    <?php 
							    for($i=1; $i<=10; $i++) {
						    ?>
						    <option value="<?php echo $i;?>"><?php echo $i;?></option>
							<?php }?>
						</select>
					</div>
					
					<div class="form-group">
						<label>How is the Internet/WIFI? *</label>
						<select class="form-control" name="HYGINE" required>
						    <option selected disabled value="">Select</option>
						    <?php 
							    for($i=1; $i<=10; $i++) {
						    ?>
						    <option value="<?php echo $i;?>"><?php echo $i;?></option>
							<?php }?>
						</select>
					</div>
					
					<div class="form-group">
						<label>How is the pricing of this PG? *</label>
						<select class="form-control" name="PRICING" required>
						    <option selected disabled value="">Select</option>
						    <?php 
							    for($i=1; $i<=10; $i++) {
						    ?>
						    <option value="<?php echo $i;?>"><?php echo $i;?></option>
							<?php }?>
						</select>
					</div>
					
					<div class="form-group">
						<label>How is the security/privacy of this PG? *</label>
						<select class="form-control" name="SECURITY" required>
						    <option selected disabled value="">Select</option>
						    <?php 
							    for($i=1; $i<=10; $i++) {
						    ?>
						    <option value="<?php echo $i;?>"><?php echo $i;?></option>
							<?php }?>
						</select>
					</div>
				</div>  <!-- col-div -->
				
				<div class="col-lg-4 col-md-4 col-sm-12 col-12">
				    <p>Write Your Review</p>
					<div class="form-group">
                        <textarea rows="10" class="form-control" name="REVIEW" placeholder="Help us to making it better by giving suggestions"></textarea>
                    </div>
				</div>   <!-- col-lg-4 div -->
			  </div> <!-- row div -->
			    <div align="center">
				    <input type="submit" class="btn bg-yellow" value="Submit" name="submit" />
				</div>
			</form>
        </div>  <!-- container div -->
		  <br><br>
		  <!-- footer -->
        <?php include('footer.php');?>
  </body>
</html>			