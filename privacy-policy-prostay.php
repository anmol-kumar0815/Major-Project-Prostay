<?php 
include('config.php');
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
		.list {
		    padding-bottom: 10px;
		}
		.bottom-line {
		    padding-left: 40px;
			padding-right: 40px;
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
		@media (max-width: 992px) {
		    .footer-nav {
		        padding-top: 15px;
		        float: left;
		    }
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
		<div class="container" style="margin-top: 85px;">
		    <h1 class="text-center">Privacy Policy</h1>
            <hr style="height:2px; background-color:#FFED46;padding:0;">
			<ol>
			    <li class="list">The profile created by the User inclusive of User Information, regarding property, requirement or other content, such as photos may be accessed and viewed by other Users, persons and/or Third Party Service Providers as and when such other Users, persons and/or Third Party Service Providers access the Site.</li>
				<li class="list">Prostay has the right to collect and maintain information associated with any message that the User may send through the Site/app. The information associated with such messages, including the content of the message, phone number and/or e-mail address, shall be used by Prostay for logging in purposes.</li>
				<li class="list">Prostay shall have the right to utilize User Information for the purposes of personalized advertisements and offers or to include it in compilations developed by Prostay.</li>
				<li class="list">Prostay has the right to use User Information for the purposes of sharing such User Information with Third Party Service Providers and to inform the User about the offers to upgrade to premium services as well as promotions in connection with the Services.</li>
				<li class="list">The User and/or any other person accessing the Site may choose to opt out of receiving the notifications or messages in connection with the Services from Prostay by sending Prostay an e-mail at hello@Prostay.in. The User may however still receive a notification from Prostay, if Prostay updates this Agreement, including but not limited to the Terms and Conditions and/or Privacy Policy.</li>
				<li class="list">Prostay shall use the standard industrial measures to protect Personal Information stored in Prostay’s database. Prostay limits the access of Personal Information to only its employees, customer service personnel and contractors who may need such access during the course of their employment for providing the Services</li>
				<li class="list">The User hereby acknowledge that Prostay is not responsible for any intercepted information sent via the internet, and the User hereby releases Prostay from any and all claims arising out of or related to the use of intercepted information in any unauthorized manner.</li>
				<li class="list">Any User grievance relating to the discrepancies or misuse of information so provided to Prostay may be addressed to the grievance officer, whose details are provided below appointed by Prostay for this purpose.<br><strong>Prostay Privacy Controller<br>Email Id: anmolshrivastav.08@gmail.com, umangaggrwal631@gmail.com, rohit06102000@gmail.com</strong><br>The grievance officer shall address the grievance within one month of the date of receipt of such grievance from the User.</li>
			</ol>
		</div> <!-- container div -->
<br>
<!-- footer -->
    <?php include('footer.php');?>
  </body>
</html>