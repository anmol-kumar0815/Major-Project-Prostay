<!-- about page -->
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
	.title {
	   font-size: 40px;
	   font-width: 200;
       padding-top: 25px;	   
	}
	.first-container {
	   margin-top: 100px;
	}
	.heading-1 {
	   font-size: 60px;
	   font-weight: 500;
	}
	.bg-yellow {
	     background-color: #FFED46;
	}
	.text-yellow  {
	     color: #FFED46;
	}
	.btn-first {
	    padding: 15px 20px;
	}
	hr {
	   height: 2px;
	   background-color: #FFED46;
	   padding: 0;
	}
	.about-text {
	   font-size: 19px;
	}
	.shift {
	   padding: 20px 100px 20px 110px;
	}
	.second-title {
	   font-size: 55px;
	   font-weight: 500;
	}
	.benefits-img {
	   max-height: 200px;
	   min-width: 100%;
	}
	.benefits-text {
	    font-size: 25px;
		font-weight: 500;
	}
	footer {
	     background-color:#FFED46;
         padding-bottom:60px;
		 padding-top:40px;
		 padding-left:40px;
		 padding-right:20px;
	}
	.footer-nav {
		 float: right;
    }
	.footer-list {
	     display: inline-block;
		 padding-right: 10px;
    }
	.social {
         display: inline-block;
         padding-right: 10px;
    }
	
	@media (max-width: 992px)  {
		.shift {
	        padding: 20px 20px 20px 20px;
	    }
		.benefits-text {
	        font-size: 22px;
		    font-weight: 500;
	    }
		.about-text {
	        font-size: 17px;
	    }
		.btn-first {
	        padding: 12px 15px;
	    }
		.second-title {
	        font-size: 40px;
	        font-weight: 500;
	    }
		.footer-nav {
		   padding-top: 15px;
		   float: left;
		}
	}
	@media (max-width: 425px) {
	    .navbar-brand {
		   max-height: 9vh;
		}
		.heading-1 {
	       font-size: 55px;
	       font-weight: 500;
           padding-top: 20px;
	    }
		.first-container {
	       margin-top: 80px;
	    }
	}
	@media (max-width: 345px) {
	    .navbar-brand {
		   max-height: 8vh;
		}
		.heading-1 {
	       font-size: 42px;
	       font-weight: 500;
           padding-top: 10px;
	    }
		.first-container {
	       margin-top: 65px;
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
	   <header>
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
                  <a class="nav-link active" href="about.php">ABOUT</a>
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
	   </header>
	   <div class="container first-container">
	     <div class="container">
	        <h1 class="heading-1">About Us</h1>
			<hr>
		 </div> <!-- container div-->
	      <div class="row">
		      <div class="col-lg-6 col-md-4 col-sm-12 col-12 shift order-lg-1 order-2">
				 <p class="about-text">
				    Prostay is India's largest and fastest growing automated technology-driven review and rating platfrom for PG and rooms. 
					It is a new age PG search online company that aims to provide best accomodation experience in possible affordable price range. 
					It is an end-to-end platform performed with advanced technology. 
					The core theme of PROSTAY is to provide the best user experience in an easiest way.
				 </p>
				 <!-- <a href="comingSoon.php" class="btn btn-first bg-yellow" style="font-size: 18px;">DOWNLOAD OUR APP</a> -->
			  </div>
			  <div class="col-lg-6 col-md-6 col-sm-12 col-12 order-lg-2 order-1">
			        <img src="images/v5_13.png" class="img-fluid" style="width:100%; height: 100%;"/>
			  </div>
		  </div> <!-- row div -->
		 <br> 
		 <div class="container">
	        <h1 class="second-title">Feel Free to Connect</h1>
			<hr>
		 </div> <!-- container div-->
		 </div>  <!-- container-fluid div -->
		 <div class="container">
	      <div class="row">
		      <div class="col-lg-6 col-md-6 col-sm-12 col-12" style="margin-bottom: 20px;">
			    <div align="center">
			       <i class="fas fa-people-arrows" style="font-size: 170px; color: #FFED46;"></i>
			    </div>
			  </div>
		      <div class="col-lg-6 col-md-4 col-sm-12 col-12">
				 <p class="about-text">
				    Having a vision to create the best stay experience, we aim to build the strongest relationships with both customers as well as PG owners with consistent services. 
					We aim to become the benchmark in providing the best values to our customers, PG owners and our team members.
				 </p>
				 <a href="contact.php" class="btn btn-first bg-yellow">CONTACT US</a>
			  </div>
		  </div> <!-- row div -->
	     </div> <!--container div --> 
		 <br><br><br>
	   <div class="container">
	        <div class="row">
		     <div class="col-lg-4 col-md-4 col-sm-12 col-12" style="margin-bottom: 20px;">
			  <div align="center">
			    <i class="fas fa-bed" style="font-size: 100px; color: #FFED46;"></i>
				<p class="text-center benefits-text">300+ PG Owners</p>
			  </div>
			 </div>
			 <div class="col-lg-4 col-md-4 col-sm-12 col-12" style="margin-bottom: 20px;">
			  <div align="center">
			    <i class="fas fa-users" style="font-size: 100px; color: #FFED46;"></i>
				<p class="text-center benefits-text">3000+ Customers</p>
			  </div>
			 </div>
			 <div class="col-lg-4 col-md-4 col-sm-12 col-12" style="margin-bottom: 20px;">
			  <div align="center">
			    <i class="fas fa-couch" style="font-size: 100px; color: #FFED46;"></i>
				<p class="text-center benefits-text">500+ Rooms</p>
			  </div>
			 </div>
			</div> <!--row div -->
	   </div> <!--container div -->
	   
	   <br>
	   <!-- footer -->
    <?php include('footer.php');?>
  </body>
</html>