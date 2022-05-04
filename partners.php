<?php 
include('config.php');
session_start();
if(isset($_POST['submit'])) {
	$name = $_POST['NAME'];
	$email = $_POST['EMAIL'];
	$propertyname = $_POST['PROPERTYNAME'];
	$propertycity = $_POST['PROPERTYCITY'];
	$phone = $_POST['PHONE'];
	if(!empty($_POST['LINK'])) {
	    $link = $_POST['LINK'];
	} else {
		$link = "Not Given";
	}
	$sql = "INSERT INTO property(NAME,EMAIL,PROPERTYNAME,PROPERTYCITY,PHONE,LINK) VALUES('{$name}','{$email}','{$propertyname}','{$propertycity}','{$phone}','{$link}')";
	mysqli_query($conn, $sql) or die("Insert query not running");
	echo "<script language='JavaScript'>
         window.location.href='index.php';
         window.alert('We will contact you soon');
       </script>";
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
	.bg-yellow {
	     background-color: #FFED46;
    }
	.btn-first {
	    padding: 15px 20px 15px 20px;
	}
	.title {
	   font-size: 40px;
	   font-width: 200;
       padding-top: 25px;	   
	}
	.first-container {
	   margin-top: 100px;
	}
	.title-1 {
	   padding: 20px;
	}
	.heading-1 {
	   font-size: 60px;
	   font-weight: 500;
	}
	hr {
	   height: 2px;
	   background-color: #FFED46;
	   padding: 0;
	}
	.step {
	   font-size: 16px;
	   font-weight: 500;
	}
	.benefits-text {
	    font-size: 20px;
		font-weight: 700;
		padding-top: 15px;
	}
	section {
	  background-image: -webkit-gradient(linear,left top, left bottom,from(rgba(0, 0, 0, 0.7)),to(rgba(0, 0, 0, 0.7))),url(images/v6_2.png);
      background-image: linear-gradient(rgba(0, 0, 0, 0.7),rgba(0, 0, 0, 0.7)),url(images/v6_2.png);
	  background-position:center;
	  background-repeat:no-repeat;
	  background-size:cover;
	  background-attachment:fixed; 
	  height: auto;
	  width: 100%;
	  overflow:hidden;
	  padding: 15px 20px 30px 20px;
	}
	.form-padding  {
	  padding: 30px;
	}
	.box {
	   border: 4px solid #FFED46;
	   padding: 5px;
	   min-height: 300px;
	}
	.faq-title {
	   font-size: 45px;
	   font-weight: 450;
	}
	.faq-text {
	   font-size: 25px;
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
		.form-padding  {
	       padding: 20px;
	    }
		.box {
	      min-height: auto;
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
		.title-1 {
		   padding: 0px 20px 20px 20px;
		}
		.heading-1 {
	       font-size: 55px;
	       font-weight: 500;
	    }
		.first-container {
	       margin-top: 90px;
	    }
	}
	@media (max-width: 345px) {
	    .navbar-brand {
		   max-height: 8vh;
		}
		.title-1 {
		   padding: 0px 20px 20px 20px;
		}
		.heading-1 {
	       font-size: 38px;
	       font-weight: 500;
	    }
		.first-container {
	       margin-top: 65px;
	    }
        .btn-first {
	       padding: 12px 15px;
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
                  <a class="nav-link active" href="partners.php">PARTNER WITH US</a>
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
	   </header>
	   <div class="container first-container">
	      <div class="row">
		      <div class="col-lg-6 col-md-4 col-sm-12 col-12" style="margin-bottom: 20px;">
			     <h1 class="heading-1">Be a part of Prostay</h1>
				 <p class="prostay-text">
				    Prostay is a platform that welfares both PG owners as well as customers. 
					Being a part of our brand network, PG owners get a chance to modernize their business and monetize their properties and also increase their revenues.
				 </p>
				 <a href="#propertyform" class="btn btn-first bg-yellow" style="font-size: 18px;">LIST YOUR PROPERTY</a>
			  </div>
			  <div class="col-lg-6 col-md-6 col-sm-12 col-12">
			     <img src="images/partner.jpg" class="img-fluid" />
			  </div>
		  </div> <!-- row div -->
		  
		  <p class="title text-center">How it works</p>
		  <hr>
		  <div class="row">
		     <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                <div align="center">	
                  <i class="fas fa-caret-right" style="font-size:140px; color: #FFED46; margin-top: -20px;"></i>
                  <p class="step">Submit your Details</p>	
                </div>				
			 </div>
			 <div class="col-lg-3 col-md-3 col-sm-6 col-6">
				<div align="center">		
                  <i class="fas fa-caret-right" style="font-size:140px; color: aquamarine; margin-top: -20px;"></i>
                  <p class="step">Our Account Manager will get in touch</p>
				</div>  
			 </div>
			 <div class="col-lg-3 col-md-3 col-sm-6 col-6">
			    <div align="center">
			      <h1 style="float:left; vertical-align: center; display: none;">1</h1>			
                  <i class="fas fa-caret-right" style="font-size:140px; color: #FFED46; margin-top: -20px;"></i>
                  <p class="step">Sign Agreement</p>
                </div>				  
			 </div>
			 <div class="col-lg-3 col-md-3 col-sm-6 col-6">
			    <div align="center">
			      <i class="fas fa-caret-right" style="font-size:140px; color: aquamarine; margin-top: -20px;"></i>			
                  <p class="step">Start getting paid</p>	
				</div>
			 </div>
		  </div>  <!-- row div -->
		  
		  <p class="title text-center">Benefits of using Prostay</p>
		  <hr>
		  <div class="row">
		     <div class="col-lg-4 col-md-4 col-sm-12 col-12" style="margin-top: 20px;">
			  <div align="center">
			    <i class="fas fa-mobile-alt" style="color: #FFED46; font-size: 100px;"></i>
				<p class="text-center benefits-text">Everything is Online</p>
			  </div>
			 </div>
			 <div class="col-lg-4 col-md-4 col-sm-12 col-12" style="margin-top: 20px;">
			   <div align="center">
			     <i class="fas fa-hand-holding-heart" style="color: aquamarine; font-size: 100px;"></i>
			     <p class="text-center benefits-text">Quality Ensured</p>
			   </div>
			 </div>
			 <div class="col-lg-4 col-md-4 col-sm-12 col-12" style="margin-top: 20px;">
			   <div align="center">
			    <i class="fas fa-desktop" style="color: #FFED46; font-size: 100px;"></i>
				<p class="text-center benefits-text">Easy to Use</p>
			  </div>
			 </div>
			 <div class="col-lg-4 col-md-4 col-sm-12 col-12" style="margin-top: 20px;">
			   <div align="center">
			    <i class="fas fa-hotel" style="color: aquamarine; font-size: 100px;"></i>
				<p class="text-center benefits-text">Focus on location</p>
			   </div>
			 </div>
			 <div class="col-lg-4 col-md-4 col-sm-12 col-12" style="margin-top: 20px;">
			   <div align="center">
			    <i class="fas fa-couch" style="color: #FFED46; font-size: 100px;"></i>
				<p class="text-center benefits-text">Well Maintained</p>
			   </div>
			 </div>
			 <div class="col-lg-4 col-md-4 col-sm-12 col-12" style="margin-top: 20px;">
			   <div align="center">
			    <i class="fas fa-people-arrows" style="color: aquamarine; font-size: 100px;"></i>
				<p class="text-center benefits-text">24x7 Support</p>
			   </div>
			 </div>
		  </div> <!-- row div -->
        </div>  <!-- container div -->
		<br>
	<section id="propertyform">	
        <p class="title text-center text-light">Are You Interested?</p>
		  <hr>
		<p class="text-yellow text-center" style="font-size:18px ;font-size:700; margin-top: -5px;">Please complete the form and we'll get in touch</p>
	    <div class="container-fluid form-padding" style="max-width: 950px; background-color: #cecece"> 
		        <form action="<?php $_SERVER['PHP_SELF'];?>" method="post" class="text-left">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Name *</label>
                        <div class="col-sm-10">
                         <input type="text" class="form-control" placeholder="Your Name" name="NAME" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Email *</label>
                        <div class="col-sm-10">
                           <input type="email" class="form-control" placeholder="Eg: abc123@gmail.com" name="EMAIL" required>
                        </div>
                    </div>
					<div class="form-group row">
                        <label class="col-sm-2 col-form-label">Property Name *</label>
                        <div class="col-sm-10">
                           <input type="text" class="form-control" placeholder="Your Property Name" name="PROPERTYNAME"  required>
                        </div>
                    </div>
					<div class="form-group row">
                        <label class="col-sm-2 col-form-label">Property City *</label>
                        <div class="col-sm-10">
                           <input type="text" class="form-control" placeholder="Your Property City" name="PROPERTYCITY"  required>
                        </div>
                    </div>
					<div class="form-group row">
                        <label class="col-sm-2 col-form-label">Phone Number *</label>
                        <div class="col-sm-10">
                           <input type="text" class="form-control" placeholder="Your Phone Number" name="PHONE" required>
                        </div>
                    </div>
					<div class="form-group row">
                        <label class="col-sm-2 col-form-label">Google Maps Link</label>
                        <div class="col-sm-10">
                           <input type="url" class="form-control" placeholder="Your Location Maps Link" name="LINK">
                        </div>
                    </div>
					
					<div align="center">
					<input type="submit" class="btn bg-yellow" value="Send it" name="submit" />
					</div>
                </form>
		  
	    </div> <!-- container-fluid div-->
	</section>
	<br>
	<p class="text-center" style="font-size: 50px; font-weight: 600;">FAQs</p>
	<div class="container">
	  <div class="row">
	    <div class="col-lg-6 col-md-6 col-sm-12 col-12" style="margin-bottom: 20px;">
		  <div class="box">
		    <p class="faq-title">Who are we?</p>
			<p class="faq-text">PROSTAY is India's largest and fastest growing automated technology driven Review and rating platfrom for PG and rooms.</p>
		  </div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 col-12" style="margin-bottom: 20px;">
		  <div class="box">
		    <p class="faq-title">What Do We Do?</p>
			<p class="faq-text">PROSTAY is a platform that welfares both PG owners as well as customers. With 100% transparency, customers who prefer our platform get an overall greater experience.</p>
		   </div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 col-12" style="margin-bottom: 20px;">
		   <div class="box">
		    <p class="faq-title">Our Mission</p>
			<p class="faq-text">With more than ........ We are on a mission to enable people find their comfort space using prostay review and rating system which feel like home at budget friendly price.</p>
		   </div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 col-12" style="margin-bottom: 20px;">
		   <div class="box">
		    <p class="faq-title">Our Vision</p>
			<p class="faq-text">Having a vision to create the best stay experience, we aim to build the strongest relationships with both customers as well as PG owners.</p>
		   </div>
		</div>
	  </div>
	</div> <!-- container div -->
	   <br>
	   <!-- footer -->
    <?php include('footer.php');?>
  </body>
</html>