<?php
include("config.php");
session_start();
$id = $_GET['ID'];
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
        font-weight: 450;
        margin: 0;
    }
	.username {
		font-size: 16px;
		font-weigth: 450;
		margin-bottom: 0;
	}
	.review {
		font-size: 17px;
	}
	.customer-card {
	    background-color: #ebebeb;
	    padding: 20px 10px;
	    margin-bottom: 10px;
	    min-height: 100px;
	}	
    .customer-description {
	   padding: 0 0 0 20px;
	}	
    @media (max-width: 992px)  {
		
    } 
	@media (max-width: 756px) {
	    .customer-card {
		   min-height: auto;
		}
	}
	@media (max-width: 425px) {
	    .navbar-brand {
		   max-height: 9vh;
		}
        .title {
           font-size: 25px;
           font-weight: 450;
           margin: 0;
        }
        .review {
		   font-size: 16px;
	    }
	}
    @media (max-width: 361px) {
        .title {
           font-size: 22px;
           font-weight: 450;
           margin: 0;
        }
         .review {
		   font-size: 15px;
	    }
    }
	@media (max-width: 345px) {
	    .navbar-brand {
		   max-height: 8vh;
		}
        .title {
           font-size: 21px;
           font-weight: 450;
           margin: 0;
        }
         .review {
		   font-size: 14px;
	    }
	}
	@media (max-width: 256px)  {
        .navbar-brand {
		   max-height: 5vh;
		}	
        .title {
           font-size: 20px;
           font-weight: 450;
           margin: 0;
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
          
		    <div class="container" style="margin-top: 86px;">
		        <p class="text-center title">Read Reviews</p>
				<hr class="bg-yellow" style="height: 2px; margin-bottom:10px; margin-top: 5px;">
				<div class="row">
				<?php
				    $id = $_GET['ID'];
					$tablename = "reviews_".$id;
					$sql = "SELECT DISTINCT USERNAME,REVIEW FROM $tablename";
					$result = mysqli_query($conn,$sql) or die("Select query not running");
					while($row = mysqli_fetch_assoc($result)) {
				?>
				    <div class="col-lg-3 col-md-3 col-sm-12 col-12">
			            <div class="customer-card">
				            <p class="customer-description review"><i><q><?php echo $row['REVIEW'];?></q></i></p>
				            <p class="text-right username text-info"><?php echo $row['USERNAME'];?></p>
			            </div>
					</div>
				<?php } ?>
				
				</div> <!-- row div -->
		    </div>  <!-- container -->
		  
		  <br><br>
		  <!-- footer -->
        <?php include('footer.php');?>
  </body>
</html>			