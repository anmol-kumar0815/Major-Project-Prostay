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
  <style>
    body {
	  padding: 0;
	  margin: 0;
	  
	}
	header {
	  background-image: -webkit-gradient(linear,left top, left bottom,from(rgba(0, 0, 0, 0.7)),to(rgba(0, 0, 0, 0.7))),url(images/first.jpeg);
      background-image: linear-gradient(rgba(0, 0, 0, 0.7),rgba(0, 0, 0, 0.7)),url(images/first.jpeg);
	  background-position:center;
	  background-repeat:no-repeat;
	  background-size:cover;
	  background-attachment:fixed; 
	  height: 100vh;
	  width: 100%;
	  overflow:hidden;
	}
	.text-yellow {
	   color: #FFED46;
	}
	.bg-yellow  {
	   background-color: #FFED46;
	}
	.box {
	   text-align:left;
	   margin-top: 200px;
	   padding-left: 20px;
       padding-right: 20px;
	}
	.title {
	   font-size: 40px;
	   font-width: 200;
       padding-top: 25px;	   
	}
	.reviews-p {
	   font-size: 19px;
	   font-weight: 450;
	}
	.app {
		max-height: 500px;
	}
	.card {
	   min-height: 40vh;
	}
	.mybtn:hover {
		font-size: 18px;
		border: 2px solid black;
	}
	section {
	   background-image: -webkit-gradient(linear,left top, left bottom,from(rgba(0, 0, 0, 0.7)),to(rgba(0, 0, 0, 0.7))),url(images/v6_2.jpeg);
       background-image: linear-gradient(rgba(0, 0, 0, 0.7),rgba(0, 0, 0, 0.7)),url(images/v6_2.jpeg);
	   background-position:center;
	   background-repeat:no-repeat;
	   background-size:cover;
	   background-attachment:fixed; 
	   height: auto;
	   width: 100%;
	   overflow:hidden;
	}
	.section-heading {
	   padding: 80px 20px 0 20px;
	   font-size: 50px;
	   font-weight: 600;
	}
	.section-text {
	   padding: 10px 200px 80px 200px;
	   font-size: 18px;
	   font-weight: 500;
	} 
	.offer-text {
	   font-size:20px; 
	   padding: 0 120px 0 0;
	}
	.customer-card {
	   background-color: #ebebeb;
	   padding: 20px 10px;
	   margin-top: 20px;
	   min-height: 390px;
	}
    .customer-card-img	{
	   border-radius: 50%;
	   max-height: 15vh;
	   padding: 0 10px 5px 0;
	}
	.customer-description {
	   padding: 0 0 0 20px;
	}
	q {
	   font-size: 15px;
	   font-weight: 500px;
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
		.box {
	       text-align:left;
	       margin-top: 200px;
	       padding-left: 20px;
	    }	 
        .section-heading {
	       padding: 60px 5px 0 5px;
	       font-size: 35px;
	       font-weight: 500;
	    }
	    .section-text {
	       padding: 10px 10px 80px 10px;
	       font-size: 18px;
	       font-weight: 450;
	    } 	
        .offer-text {
	       font-size:16px; 
	       padding: 0 0 0 0;
	    }
        .customer-card {
	       background-color: #ebebeb;
	       padding: 20px 10px;
	       margin-top: 20px;
	       min-height: 150px;
	    }		
		.footer-nav {
		   padding-top: 15px;
		   float: left;
		}
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
	}
    @media (max-width: 361px) {
        .box {
            margin-top: 100px;
        }
    }
	@media (max-width: 345px) {
	    .navbar-brand {
		   max-height: 8vh;
		}
		.box {
	       text-align:left;
	       margin-top: 80px;
	       padding-left: 20px;
	    }	
        .line-1 {
            font-size: 20px;
            font-weight: 500;
        }
        .line-2 {
            font-size: 24px;
            font-weight: 500;
        }
        .line-3 {
            font-size: 17px;
            font-weight: 350;
        }
        .box {
            margin-top: 165px;
        }
	}
	@media (max-width: 256px)  {
	    .box {
		   text-align:left;
	       margin-top: 59px;
	       padding-left: 20px;
        }		
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
                  <a class="nav-link active" href="index.php">HOME <span class="sr-only">(current)</span></a>
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
		  
		  <div align="center" class="box">
                <h1 style="color:white" class="line-1 text-center">Get inside<br>  Information about any PG/Co-Living.</h1>
                <h4 class="line-3 text-center" style="color:white">Prostay recommend you top rated PGs</h4>
                <div align="center">
				<a href="pg.php" class="btn btn-warning" style="font-size: 19px;">Check PG's</a>
                <a class="textcenter" href="https://play.google.com/store/apps/details?id=com.sanjay.prostay">
                    <img src="images/android.png" class="img-fluid" style="height:10vh;"/> </a> 
                    <p style="color:white">or contact at <span class="text-yellow"><b>9571141862</b></span></p>
                </div>
          </div>
			
	   </header>
	   <div class="container">
	      <p class="title text-center">User Reviews And Rating<p>
		  <hr style="height:2px; background-color:#FFED46;padding:0;">
		    <h4 class="text-center">Check Reviews Before Shifting To Any PG | Room</h4>
		    <div align="center"> 
			 <div style="max-width:600px;" class="row">
			    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
				    <p class="reviews-p">Red - Bad Experience <i class="fas fa-square" style="color: #be0000;"></i></p>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-12">
				    <p class="reviews-p">Yellow - Okay Experience  <i class="fas fa-square" style="color: #ffff00;"></i></p>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-12">
				    <p class="reviews-p">Green - Great Experience  <i class="fas fa-square" style="color: #40ff00;"></i></p>
				</div>
			 </div> <!-- row div -->
			</div>
		  <br>
		  
		  <div class="row">
		     <div class="col-lg-6 col-md-6 col-sm-12 col-12">
			    <h5>Value for Money</h5>
			    <div class="progress mb-3" style="height: 25px;">
			       <div class="progress-bar" style="width:99%; background-color: #40ff00;">
				     9.9
				   </div>
				</div>
				
				<h5>Study Environment</h5>
			    <div class="progress mb-3" style="height: 25px;">
			       <div class="progress-bar" style="width:82%; background-color: #40ff00;">
				     8.2
				   </div>
				</div>
				
				<h5>Space in Room</h5>
			    <div class="progress mb-3" style="height: 25px;">
			       <div class="progress-bar" style="width:69%; background-color: #ffff00; color: black;">
				     6.9
				   </div>
				</div>
				
				<h5>Housekeeping</h5>
			    <div class="progress mb-3" style="height: 25px;">
			       <div class="progress-bar" style="width:40%; background-color:#be0000;">
				     4
				   </div>
				</div>
				
				<h5>Pricing</h5>
			    <div class="progress mb-3" style="height: 25px;">
			       <div class="progress-bar" style="width:33%; background-color:#be0000">
				     3.3
				   </div>
				</div>
				
				
				
				
			 </div>
			 <div class="col-lg-6 col-md-6 col-sm-12 col-12">
			    
				<h5>Food Quality</h5>
			    <div class="progress mb-3" style="height: 25px;">
			       <div class="progress-bar" style="width:70%; background-color: #ffff00; color: black;">
				     7
				   </div>
				</div>
				
				<h5>Locality</h5>
			    <div class="progress mb-3" style="height: 25px;">
			       <div class="progress-bar" style="width:43%; background-color: #ffff00; color: black;">
				     4.3
				   </div>
				</div>
				<h5>Internet/WIFI</h5>
			    <div class="progress mb-3" style="height: 25px;">
			       <div class="progress-bar" style="width:42%; background-color: #be0000">
				     4.2
				   </div>
				</div>
				
				<h5>Privacy/Security</h5>
			    <div class="progress mb-3" style="height: 25px;">
			       <div class="progress-bar" style="width:100%; background-color: #40ff00">
				     10
				   </div>
				</div>
				<h5>Manager Interface</h5>
			    <div class="progress mb-3" style="height: 25px;">
			       <div class="progress-bar" style="width:92%; background-color:#40ff00">
				     9.2
				   </div>
				</div>
				
			 </div>
		  </div>  <!-- row -->
		  
		  <p class="title text-center">Prostay Application<p>
		  <hr style="height:2px; background-color:#FFED46;padding:0;">
		  
		  <div class="row">
		    <div class="col-lg-4 col-md-4 col-sm-12 col-12 order-1 order-lg-1" style="margin-bottom: 20px;">
			    <div align="center">
				    <img src="images/screenshot-1.jpeg" class="img-fluid app"/>
				</div> 
			</div>
			
			<div class="col-lg-4 col-md-4 col-sm-12 col-12 order-lg-3 order-2" style="margin-bottom: 20px;">
			    <div align="center">
				    <img src="images/screenshot-2.jpeg" class="img-fluid app"/>
				</div> 
			</div>
			
			<div class="col-lg-4 col-md-4 col-sm-12 col-12 order-lg-2 order-3" style="margin-bottom: 20px;">
			   <div align="center">
				    <img src="images/screenshot-3.jpeg" class="img-fluid app"/>
				</div> 
			</div>
		  </div> <!-- row div -->
		  <br>
		  <div align="center">
		     <h5><i>User Reviews and Ratings</i></h5>
		     <a href="https://play.google.com/store/apps/details?id=com.sanjay.prostay"><img src="images/android.png" class="img-fluid" style="height:15vh;"/></a>
		  </div>
	   </div>  <!-- container div -->
	   <br><br>
	   
		     <section class="text-center">
			    <h1 class="section-heading" style="color: white;">Solving the BIGGEST issue of India is living.</h1>
				<p class="text-yellow section-text">Prostay helps students to find best rooms in cities with all the facilities they need.We also focus in personal growth of students by organizing different programmes in particular time frames.</p>
			 </section>
	   <br><br>
	   
	   <div class="container">
	      <div class="row">
		     <div class="col-lg-6 col-md-6 col-sm-12 col-12" style="padding: 20px;">
			    <h1>Prostay Check Points For PG</h1>
				<p class="offer-text">
				     If you are looking for a PG for rent, look no further. Prostay Recommends you PG based on specific checkpoint rating. We offer honest and transparent reviews given by previous tenants and recommend top-rated PGs in localities based on the specific ratings entered by the user.
				</p>
			 </div>
			 <div class="col-lg-6 col-md-6 col-sm-12 col-12 bg-yellow">
			    <p style="font-size:20px; padding: 30px 20px;">
				    ✔ Space in the Room<br><br>
                    ✔ Study Environment<br><br>
                    ✔ Hygienic<br><br>
                    ✔ Wifi Speed<br><br>
                    ✔ Privacy<br><br>
                    ✔ Locality<br><br>
                    ✔ Manager Behaviour<br><br>
					✔ Value for Money<br><br>				
				</p>
			 </div>
		  </div> <!-- row div -->
		  
		  <p class="title text-center">Prostay Customers<p>
		  <hr style="height:2px; background-color:#FFED46;padding:0;">
		  
		<div class="row">
		    <div class="col-lg-3 col-md-12 col-sm-12 col-12">
			  <div class="customer-card">
			    <img src="images/v6_25.png" class="customer-card-img img-fluid" style="float:left;"/>
				  <p class="customer-description"><i><q>It has been a great experience at Prostay. They have surely made living away from home easier than ever and the facilities they provide are something to look forward to.</q></i></p>
				  <h3 class="text-right">Vishal</h3>
			  </div>
			</div>
			<div class="col-lg-3 col-md-12 col-sm-12 col-12">
			   <div class="customer-card">
			    <img src="images/v8_10.png" class="customer-card-img img-fluid" style="float:left;"/>
				  <p class="customer-description"><i><q>I was looking for some
				     good PG in Jaipur around Sanganer and some of my friends
				     suggested to prostay app  to be the ultimate destination
				     that I was looking for. They offer honest review given by
				     previous tenants. I am  very thankful to my friends who
				     told me about this app.
				     This app is quite user friendly.</q></i></p>
				  <h3 class="text-right">Deeksha</h3>
			  </div>
			</div>
			<div class="col-lg-3 col-md-12 col-sm-12 col-12">
			   <div class="customer-card">
			    <img src="images/v8_19.png" class="customer-card-img img-fluid" style="float:left;"/>
				  <p class="customer-description"><i><q>Prostay recommend you home away from home. With all the facilities from a 24*7 open kitchen where I perform all my culinary experiments to the common lounges with foosball and TVs.</q></i></p>
				  <h3 class="text-right">Simar</h3>
			  </div>
			</div>
			<div class="col-lg-3 col-md-12 col-sm-12 col-12">
			   <div class="customer-card">
			    <img src="images/v8_20.jpg" class="customer-card-img img-fluid" style="float:left;"/>
				  <p class="customer-description"><i><q>I got to know the real condition of PG  from this prostay website
                      Hardly any such website happened in the market. Nice interface.</q></i></p>
				  <h3 class="text-right">Ravi</h3>
			  </div>
			</div>
		</div>
		  
		  <br>
	   </div> <!-- container div-->
	   <br>
	   <!-- footer -->
    <?php include('footer.php');?>
  </body>
</html>			