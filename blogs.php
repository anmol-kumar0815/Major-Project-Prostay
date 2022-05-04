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
		margin: 0;
		padding: 0;
	}
	p {
		margin: 0;
		padding: 0;
	}
	.container {
		padding-bottom: 35px;
	}
	.row {
		padding: 0px 0px;
	}
    .title {
		font-size: 30px;
		font-weight: 500;
        margin-bottom: 0;
		font-family: sanif;
	}
	.blog-heading {
		margin: 5px 0 0 0;
		padding: 0;
		font-size: 19px;
		font-weight: 450;
	}
	.date {
		font-size: 14px;
	}
	.admin {
		font-size: 14px;
	}
	.blog-content {
		font-family: sanif;
		font-size: 17px;
	}
    @media (max-width: 992px)  {

    } 
	@media (max-width: 756px) {
	    
	}
	@media (max-width: 425px) {
	    .navbar-brand {
		   max-height: 9vh;
		}
		.blog-heading {
		    font-size: 19px;
		    font-weight: 450;
	    }
		.date , .admin {
			font-size: 12px;
		}
		.blog-content {
			font-size: 18px;
		}
		.btn {
			font-size: 12px;
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
                  <a class="nav-link active" href="blogs.php">BLOG</a>
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
		  
		    <div class="container shadow" style="margin-top: 90px; background-color: white;">
		        <p class="text-center title">Blogs</p>
				<hr style="height: 2px; margin: 4px;">
				<div class="row">
				<?php
				    $sql = "SELECT * FROM blogs ORDER BY ID DESC";
					$result = mysqli_query($conn, $sql) or die("SELECT QUERY not running");
					if(mysqli_num_rows($result) > 0) {
						while($row = mysqli_fetch_assoc($result)) {
				?>
				    <div class="col-lg-4 col-md-4 col-sm-12 col-12 shadow" style="padding-bottom: 10px; margin-bottom: 20px;">
					   <div class="card" style="margin: 0; padding: 0;">
					    <a href="viewblog.php?ID=<?php echo $row['ID'];?>"><img src="images/<?php echo $row['IMAGE'];?>" class="img-fluid card-img-top" style="width: 100% ;max-height: 35vh; min-height: 35vh; margin: 0; padding: 0;">
					   </div>
					   <hr style="margin: 3; padding: 0;">
					    <a href="viewblog.php?ID=<?php echo $row['ID'];?>" style="text-decoration: none;" class="text-dark"><p class="blog-heading text-left"><strong><?php echo $row['TITLE'];?></strong></p></a>
						<div class="row" style="margin: 0; padding: 0;">
						    <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-left" style="margin: 0; padding: 0;">
							   <i class="fas fa-calendar-alt text-muted date bg-yellow"> <?php echo $row['DATE'];?></i> 
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-6 text-right" style="margin: 0; padding: 0;">
							   <i class="text-muted admin fa fa-eye bg-yellow"> Read By <?php echo $row['READCOUNT'];?> </i>
							</div>
						</div>
						<div class="row" style="margin: 0; padding: 0;">
						    <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-left" style="margin: 0; padding: 0;">
							   <i class="fas fa-pencil-alt text-muted date bg-yellow"> <?php echo $row['AUTHOR'];?></i> 
							</div>
						</div>
						<?php if(strlen($row['DESCRIPTION']) > 200) { ?>
						    <p class="blog-content"><?php echo substr($row['DESCRIPTION'],0,200)."....";?></p>
						<?php } else { ?>
						    <p class="blog-content"><?php echo $row['DESCRIPTION'];?></p>
						<?php } ?>
						<div align="right">
						    <a href="viewblog.php?ID=<?php echo $row['ID'];?>" class="btn btn-warning" style="font-size: 14px;">Read More!!</a>
						</div>
				    </div> 
					<?php } }?>
				</div> <!-- row div -->
		    </div> <!-- container div -->
		  
		  <br><br>
		  <!-- footer -->
        <?php include('footer.php');?>
  </body>
</html>			