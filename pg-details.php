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
	.carousel-inner img {
        width: 100%;
	    height:70vh;
    }
    .title {
        font-size: 22px;
        font-weight: 450;
        margin: 0;
		font-family: serif;
    }
    .rating-title {
        font-size: 22px;
        font-weight: 300;
        margin: 0;
    }
	.reviews-p {
	   font-size: 19px;
	   font-weight: 450;
	   margin-bottom: 2px;
	}
	.img-icon {
		max-height: 4vh;
	}
	.facility {
		font-size: 17px;
	}
	p {
		padding-bottom: 0;
	}
	.rating {
        font-family: cursive;
    }
	.rating1 {
		text-align: center;
	}
	.address1 {
		font-size: 20px;
		font-weight: 450;
		margin-bottom:0;
	}
	.address2 {
		font-size: 19px;
		font-weight: 4000;
		margin-bottom: 2px;
	}
	.address3 {
		font-size: 18px;
		font-weight: 400;
		margin-bottom: 0;
	}
	.visit-btn:hover {
        font-size: 20px;		
	}
	.colorchange  {
		 color:black;
		 animation:myanimation 5s infinite;
	}
    @keyframes myanimation {
        0% {color: black;}
        50% {color: #be0000;}
        100% {color: #40ff00;}
    }
    @media (max-width: 992px)  {
		
    } 
	@media (max-width: 768px) {
	    
	}
	@media (max-width: 425px) {
	    .navbar-brand {
		   max-height: 9vh;
		}
		.carousel-inner img {
            width:100%;
	        height:35vh;
        }
		.carousel-div {
			margin-top: -10px;
		}
        .title {
            font-size: 19px;
            font-weight: 400;
            margin-top: 3px;
        }
        .rating {
            font-famility: cursive;
        }
		.rating1 {
		    text-align: left;
	    }
        .rating-title {
            font-size: 18px;
            font-weight: 300;
            margin: 0;
        }
        .facility {
            font-size: 18px;
        }
        .address1 {
		    font-size: 20px;
		    font-weight: 300;
		    margin-bottom:0;
	    }
	    .address2 {
		    font-size: 19px;
		    font-weight: 300;
		    margin-bottom: 2px;
	    }
	    .address3 {
		    font-size: 18px;
		    font-weight: 300;
		    margin-bottom: 0;
	    }
	}
    @media (max-width: 361px) {
        .carousel-inner img {
            width:100%;
	        height:35vh;
        }
		.carousel-div {
			margin-top: -10px;
		}
        .address1 {
		    font-size: 18px;
		    font-weight: 300;
		    margin-bottom:0;
	    }
	    .address2 {
		    font-size: 17px;
		    font-weight: 300;
		    margin-bottom: 2px;
	    }
	    .address3 {
		    font-size: 16px;
		    font-weight: 300;
		    margin-bottom: 0;
	    }
        .title {
            font-size: 22px;
            font-weight: 400;
            margin-top: 3px;
        }
        .rating-title {
            font-size: 18px;
            font-weight: 300;
            margin: 0;
        }
        .facility {
            font-size: 16px;
        }
    }
	@media (max-width: 345px) {
	    .navbar-brand {
		   max-height: 8vh;
		}
        .rating-title {
            font-size: 16px;
            font-weight: 300;
            margin: 0;
        }
         .carousel-div {
			margin-top: -13px;
		}
        .carousel-inner img {
            width:100%;
	        height:35vh;
            margin-top: 0;
        }
	}
    @media (max-width: 322px) {
         .carousel-inner img {
            width:100%;
	        height:35vh;
        }
        .carousel-div {
			margin-top: -24px;
		}
    }
	@media (max-width: 256px)  {
        .navbar-brand {
		   max-height: 5vh;
		}	
        .carousel-div {
            margin-top: -29px;
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
		    <!-- starting of carousel -->
            <div id="carouselExampleIndicators" class="carousel carousel-div slide container shadow" data-ride="carousel" style="background-color: white; padding: 0;">
                <?php
				    $id = $_GET['ID'];
					$tablename = "carousel_".$id;
                    $sql1 = "SELECT * FROM $tablename"; 
                    $result1 = mysqli_query($conn,$sql1);
                    $i = 0;
                    while($row1 = mysqli_fetch_assoc($result1)) {
	                if($i ==0) {
		                $actives = 'active';
	                } else {
		                $actives = '';
	                }
	   
                ?>
                <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i; ?>" 
                    class="<?php echo $actives; ?>"></li>
                <?php	   
                    $i++; 
                } ?>
                </ol>
                <div class="carousel-inner" style="margin-top: 38px;">
                <?php 
                    $i = 0;
                    foreach($result1 as $row1) {
	                    if($i ==0) {
		                    $actives = 'active';
	                    } else  {
		                    $actives = '';
	                    }
                ?>
          <div class="carousel-item <?php echo $actives; ?>">
                <img class="image-fluid w-100" src="images/<?php echo $row1['IMAGE'];?>">
          </div>
            <?php
		        $i++;
            } 
            ?>
                </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" 
               data-slide="prev" style="margin-top: 80px;">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" 
  data-slide="next" style="margin-top: 80px;">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- ending of carousel -->
<br>
        <div class="container shadow" style="background-color: white; padding-top: 20px; padding-bottom: 30px;">
		<?php
		    $id = $_GET['ID'];
		    $sql = "SELECT PGNAME,ADDRESS1,FOOD,ADDRESS2,ADDRESS3,REVIEWCOUNT FROM addcard WHERE ID = $id";
			$result = mysqli_query($conn, $sql) or die("select query not running");
			$row = mysqli_fetch_assoc($result) or die("fetch query not running");
		?>
		<div class="row">
		    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
		        <p class="address1 colorchange"><i class="fas fa-home"></i><?php echo $row['PGNAME'];?></p> 
			    <p class="address2 colorchange"><i class="fas fa-hamburger"></i><?php echo $row['FOOD'];?></p>
			    <p class="address3 colorchange"><i class="fa fa-map-marker"></i><?php echo $row['ADDRESS2'];?>,<?php echo $row['ADDRESS3'];?></p>
     		</div>
        </div>
			<p class="text-center title my-1">Customers Review's About PG</p>
			<hr class="bg-yellow" style="height: 2px; margin: 3px;">
			    <p class="rating rating1">Rating Out <?php echo $_GET['RATING'];?>/10</p>
			    <p class="text-right rating" style="margin-top: -42px;">Rated By <?php echo $row['REVIEWCOUNT']; if($row['REVIEWCOUNT']>1) { ?> Users<?php } else { ?> User<?php } ?></p>
			<!-- progress bar section -->
			<div class="row">
			    <?php 
				    $sql = "SELECT MONEY,MANAGER,FOODREVIEW,ENVIRONMENT,HOUSE,HOSPITALITY,LOCATIONREVIEW,HYGINE,PRICING,SECURITY FROM addcard WHERE ID = $id";
					$result = mysqli_query($conn, $sql) or die("SELECT REVIEW query not running");
					$row = mysqli_fetch_assoc($result);
				?>
			    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
			    <p class="rating-title">Value for Money</p>
			    <div class="progress mb-3" style="height: 25px;">
				    <?php 
					    $print = $row['MONEY']*10;
					    if($row['MONEY']>=1 && $row['MONEY']<=4) {
							$background = "#be0000";
							$color = "white";
						} else if($row['MONEY']>4 && $row['MONEY']<=7) {
							$background = "#ffff00";
							$color = "black";
						} else if($row['MONEY']>7 && $row['MONEY']<=10) {
							$background = "#40ff00";
							$color = "white";
						}
					?>
			       <div class="progress-bar" style="width:<?php echo $print; ?>%; background-color: <?php echo $background; ?>; color: <?php echo $color;?>;">
				     <?php echo $row['MONEY'];?>
				   </div>
				</div>
				<p class="rating-title">Study Environment</p>
			    <div class="progress mb-3" style="height: 25px;">
				    <?php 
					   $print = $row['ENVIRONMENT']*10;
					   if($row['ENVIRONMENT']>=1 && $row['ENVIRONMENT']<=4) {
							$background = "#be0000";
							$color = "white";
						} else if($row['ENVIRONMENT']>4 && $row['ENVIRONMENT']<=7) {
							$background = "#ffff00";
							$color = "black";
						} else if($row['ENVIRONMENT']>7 && $row['ENVIRONMENT']<=10) {
							$background = "#40ff00";
							$color = "white";
						}
					?>
			       <div class="progress-bar" style="width:<?php echo $print; ?>%; background-color: <?php echo $background; ?>; color: <?php echo $color;?>;">
				     <?php echo $row['ENVIRONMENT'];?>
				   </div>
				</div>
				<p class="rating-title">Space in Room</p>
			    <div class="progress mb-3" style="height: 25px;">
				    <?php 
					    $print = $row['HOSPITALITY']*10;
						if($row['HOSPITALITY']>=1 && $row['HOSPITALITY']<=4) {
							$background = "#be0000";
							$color = "white";
						} else if($row['HOSPITALITY']>4 && $row['HOSPITALITY']<=7) {
							$background = "#ffff00";
							$color = "black";
						} else if($row['HOSPITALITY']>7 && $row['HOSPITALITY']<=10) {
							$background = "#40ff00";
							$color = "white";
						}
					?>
			       <div class="progress-bar" style="width:<?php echo $print; ?>%; background-color: <?php echo $background; ?>; color: <?php echo $color;?>;">
				     <?php echo $row['HOSPITALITY'];?>
				   </div>
				</div>
				<p class="rating-title">HouseKeeping</p>
			    <div class="progress mb-3" style="height: 25px;">
				    <?php
  					    $print = $row['HOUSE']*10;
						if($row['HOUSE']>=1 && $row['HOUSE']<=4) {
							$background = "#be0000";
							$color = "white";
						} else if($row['HOUSE']>4 && $row['HOUSE']<=7) {
							$background = "#ffff00";
							$color = "black";
						} else if($row['HOUSE']>7 && $row['HOUSE']<=10) {
							$background = "#40ff00";
							$color = "white";
						}
					?>
			       <div class="progress-bar" style="width:<?php echo $print; ?>%; background-color: <?php echo $background; ?>; color: <?php echo $color;?>;">
				     <?php echo $row['HOUSE'];?>
				   </div>
				</div>
				<p class="rating-title">Pricing</p>
			    <div class="progress mb-3" style="height: 25px;">
				    <?php 
					    $print = $row['PRICING']*10;
						if($row['PRICING']>=1 && $row['PRICING']<=4) {
							$background = "#be0000";
							$color = "white";
						} else if($row['PRICING']>4 && $row['PRICING']<=7) {
							$background = "#ffff00";
							$color = "black";
						} else if($row['PRICING']>7 && $row['PRICING']<=10) {
							$background = "#40ff00";
							$color = "white";
						}
					?>
			       <div class="progress-bar" style="width:<?php echo $print; ?>%; background-color: <?php echo $background; ?>; color: <?php echo $color;?>;">
				     <?php 
                        echo $row['PRICING'];
                     ?>
				   </div>
				</div>
			 </div>   <!-- col-lg-6 div -->
			 <div class="col-lg-6 col-md-6 col-sm-6 col-6">
			    <p class="rating-title">Food Quality</p>
			    <div class="progress mb-3" style="height: 25px;">
				    <?php 
					    $print = $row['FOODREVIEW']*10;
						if($row['FOODREVIEW']>=1 && $row['FOODREVIEW']<=4) {
							$background = "#be0000";
							$color = "white";
						} else if($row['FOODREVIEW']>4 && $row['FOODREVIEW']<=7) {
							$background = "#ffff00";
							$color = "black";
						} else if($row['FOODREVIEW']>7 && $row['FOODREVIEW']<=10) {
							$background = "#40ff00";
							$color = "white";
						}
					?>
			       <div class="progress-bar" style="width:<?php echo $print; ?>%; background-color: <?php echo $background; ?>; color: <?php echo $color;?>;">
				     <?php echo $row['FOODREVIEW'];?>
				   </div>
				</div>
				<p class="rating-title">Locality</p>
			    <div class="progress mb-3" style="height: 25px;">
				    <?php 
					    $print = $row['LOCATIONREVIEW']*10;
						if($row['LOCATIONREVIEW']>=1 && $row['LOCATIONREVIEW']<=4) {
							$background = "#be0000";
							$color = "white";
						} else if($row['LOCATIONREVIEW']>4 && $row['LOCATIONREVIEW']<=7) {
							$background = "#ffff00";
							$color = "black";
						} else if($row['LOCATIONREVIEW']>7 && $row['LOCATIONREVIEW']<=10) {
							$background = "#40ff00";
							$color = "white";
						}
					?>
			       <div class="progress-bar" style="width:<?php echo $print; ?>%; background-color: <?php echo $background; ?>; color: <?php echo $color;?>;">
				     <?php echo $row['LOCATIONREVIEW'];?>
				   </div>
				</div>
				
				<p class="rating-title">Internet/WIFI</p>
			    <div class="progress mb-3" style="height: 25px;">
				    <?php 
					    $print = $row['HYGINE']*10;
						if($row['HYGINE']>=1 && $row['HYGINE']<=4) {
							$background = "#be0000";
							$color = "white";
						} else if($row['HYGINE']>4 && $row['HYGINE']<=7) {
							$background = "#ffff00";
							$color = "black";
						} else if($row['HYGINE']>7 && $row['HYGINE']<=10) {
							$background = "#40ff00";
							$color = "white";
						}
					?>
			       <div class="progress-bar" style="width:<?php echo $print; ?>%; background-color: <?php echo $background; ?>; color: <?php echo $color;?>;">
				     <?php echo $row['HYGINE'];?>
				   </div>
				</div>
				<p class="rating-title">Privacy/Security</p>
			    <div class="progress mb-3" style="height: 25px;">
				    <?php 
					    $print = $row['SECURITY']*10;
						if($row['SECURITY']>=1 && $row['SECURITY']<=4) {
							$background = "#be0000";
							$color = "white";
						} else if($row['SECURITY']>4 && $row['SECURITY']<=7) {
							$background = "#ffff00";
							$color = "black";
						} else if($row['SECURITY']>7 && $row['SECURITY']<=10) {
							$background = "#40ff00";
							$color = "white";
						}
					?>
			       <div class="progress-bar" style="width:<?php echo $print; ?>%; background-color: <?php echo $background; ?>; color: <?php echo $color;?>;">
				     <?php 
                        echo $row['SECURITY'];  
                     ?>
				   </div>
				</div>
				<p class="rating-title">Manager Interface</p>
			    <div class="progress mb-3" style="height: 25px;">
				    <?php 
					    $print = $row['MANAGER']*10;
						if($row['MANAGER']>=1 && $row['MANAGER']<=4) {
							$background = "#be0000";
							$color = "white";
						} else if($row['MANAGER']>4 && $row['MANAGER']<=7) {
							$background = "#ffff00";
							$color = "black";
						} else if($row['MANAGER']>7 && $row['MANAGER']<=10) {
							$background = "#40ff00";
							$color = "white";
						}
					?>
			       <div class="progress-bar" style="width:<?php echo $print; ?>%; background-color: <?php echo $background; ?>; color: <?php echo $color;?>;">
				     <?php echo $row['MANAGER'];?>
				   </div>
				</div>
				
			 </div>  <!-- col-div-->
			</div>   <!-- row div -->
			
			<!-- view and write review -->
			<div class="row">
			    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
				    <a href="viewreviews.php?ID=<?php echo $id;?>" class="btn bg-warning" style="font-size: 14px;">View Comments</a>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-6">
				    <a href="writereview.php?ID=<?php echo $id;?>" class="btn bg-warning" style="font-size: 14px;">Write Reviews</a>
				</div>
			</div>  <!-- row div -->
			
			<br>
			
			<!-- facility section -->
			<?php
			        $id = $_GET['ID'];
				    $tablename = "facility_".$id;
				    $sql = "SELECT DISTINCT FACILITY FROM $tablename";
				    $result = mysqli_query($conn, $sql) or die("Facility select query not running");
				    if(mysqli_num_rows($result)==0) {
                        $display = "none";
					}
                    else {
                        $display = "block";	
                    }						
			?>
			<p class="text-center title" style="display: <?php echo $display; ?>;">Facility Provided By PG</p>
			<hr class="bg-yellow" style="height: 2px; margin: 3px; display: <?php echo $display; ?>;">
			
			<div class="row" style="padding-left: 20px; padding-right: 20px;">
				<?php
			        $id = $_GET['ID'];
				    $tablename = "facility_".$id;
				    $sql = "SELECT DISTINCT FACILITY FROM $tablename";
				    $result = mysqli_query($conn, $sql) or die("Facility select query not running");
				    if(mysqli_num_rows($result)>0) { 
					//echo'<p class="text-center title">Facility Provided By Partner In PG</p>';
			        //echo'<hr class="bg-yellow" style="height: 2px; margin: 3px;">';
				    while($row = mysqli_fetch_assoc($result)) {
			    ?>  
				
				    <?php if($row['FACILITY'] === "Bed") { ?>
					<div class="col-lg-3 col-md-3 col-sm-6 col-6">
				        <p class="facility"><i class="fa fa-bed"></i> &nbsp Bed</p>
					</div>
					<?php } else if($row['FACILITY'] === "Fan") { ?>
					<div class="col-lg-3 col-md-3 col-sm-6 col-6">
					    <p class="facility"><i class="fa fa-fan"></i> &nbsp Fan</p>
					</div>
					<?php } else if($row['FACILITY'] === "Lights") { ?>
					<div class="col-lg-3 col-md-3 col-sm-6 col-6">
					    <p class="facility"><i class="fas fa-lightbulb"></i> &nbsp Lights</p>
					</div>
					<?php } else if($row['FACILITY'] === "Fridge") { ?>
					<div class="col-lg-3 col-md-3 col-sm-6 col-6">
					    <p class="facility"><img src="images/fridge.png" class="img-fluid img-icon"/>  Fridge</p>
					</div>
					<?php } else if($row['FACILITY'] === "Modular Kitchen") { ?>
					<div class="col-lg-3 col-md-3 col-sm-6 col-6">
					    <p class="facility"><i class="fas fa-utensils"></i> &nbsp Modular Kitchen</p>
					</div>
					<?php } else if($row['FACILITY'] === "CCTV") { ?>
					<div class="col-lg-3 col-md-3 col-sm-6 col-6">
					    <p class="facility"><img src="images/cctv.png" class="img-fluid img-icon"/> CCTV</p>
					</div>	
					<?php } else if($row['FACILITY'] === "Washing Machine") { ?>	
					<div class="col-lg-3 col-md-3 col-sm-6 col-6">
					    <p class="facility"><img src="images/machine.png" class="img-fluid img-icon"/> Washing Machine</p>
					</div>	
					<?php } else if($row['FACILITY'] === "Balcony") { ?>
					<div class="col-lg-3 col-md-3 col-sm-6 col-6">
					    <p class="facility"><img src="images/balcony.png" class="img-fluid img-icon"/> &nbsp Balcony</p>
					</div>
					<?php } else if($row['FACILITY'] === "AC") { ?>
					<div class="col-lg-3 col-md-3 col-sm-6 col-6">
					    <p class="facility"><img src="images/ac.png" class="img-fluid img-icon"/> Ac</p>
					</div>
					<?php } else if($row['FACILITY'] === "Parking") { ?>
					<div class="col-lg-3 col-md-3 col-sm-6 col-6">
					    <p class="facility"><img src="images/parking.png" class="img-fluid img-icon"/> Parking</p>
					</div>
					<?php } else if($row['FACILITY'] === "Attach Bathroom") { ?>
					<div class="col-lg-3 col-md-3 col-sm-6 col-6">
					    <p class="facility"><i class="fa fa-bath"></i> &nbsp Attach Bathroom</p>
					</div>
					<?php } else if($row['FACILITY'] === "WIFI") { ?>
					<div class="col-lg-3 col-md-3 col-sm-6 col-6">
					    <p class="facility"><i class="fas fa-wifi"></i> &nbsp WIFI</p>
					</div>
				    <?php } } } ?>
			</div> <!-- row div -->
			
			<!-- facility not include in rent section -->
			<?php
			    $id = $_GET['ID'];
				$tablename = "facility_not_".$id;
				$sql = "SELECT DISTINCT FACILITY FROM $tablename";
				$result = mysqli_query($conn, $sql) or die("Facility Not select query not running");
				if(mysqli_num_rows($result)==0) {
                    $display = "none";
				}
                else {
                    $display = "block";	
                }					
			?>
			<p class="text-center title" style="display: <?php echo $display; ?>;">Facility Not Included</p>
			<hr class="bg-yellow" style="height: 2px; margin:3px; display: <?php echo $display; ?>;">
			<div class="row" style="padding-left: 20px; padding-right: 20px;">
			<?php
			    $id = $_GET['ID'];
				$tablename = "facility_not_".$id;
				$sql = "SELECT DISTINCT FACILITY FROM $tablename";
				$result = mysqli_query($conn, $sql) or die("Facility Not select query not running");
				if(mysqli_num_rows($result)>0) {
				    while($row = mysqli_fetch_assoc($result)) {
			?>
			    <?php if($row['FACILITY'] === "Electricity Bill") { ?>
			    <div class="col-lg-3 col-md-3 col-sm-6 col-6">
				    <p class="facility"><i class="fas fa-money-bill"></i> &nbsp Electricity Bill</p>
				</div>
				<?php } else if($row['FACILITY'] === "Guest Room for Parents") { ?>
				<div class="col-lg-3 col-md-3 col-sm-6 col-6">
					<p class="facility"><i class="fas fa-hotel"></i> &nbsp Guest Room for Parents</p>
				</div>
			<?php }  } }?>
			</div>
			
			     <!-- occupacy -->
				    <?php
		                $id = $_GET['ID'];
					    $tablename = "occupacy_".$id;
		                $sql = "SELECT * FROM $tablename";
			            $result = mysqli_query($conn, $sql) or die("Occupacy select query not running");
						if(mysqli_num_rows($result)==0) {
                            $display = "none";
				        }
                        else {
                            $display = "block";	
                        }					
					?>
			        <p class="text-center title" style="display: <?php echo $display; ?>;">Occupacy</p>
			        <hr class="bg-yellow" style="height: 2px; margin:3px; display: <?php echo $display;?>;">
			        <div class="row" style="padding-left: 20px; padding-right: 20px;" >
				            <?php
		                        $id = $_GET['ID'];
					            $tablename = "occupacy_".$id;
		                        $sql = "SELECT * FROM $tablename";
			                    $result = mysqli_query($conn, $sql) or die("Occupacy select query not running");
								if(mysqli_num_rows($result)>0) {
			                        while($row = mysqli_fetch_assoc($result)) {
		                    ?>
							<div class="col-lg-3 col-md-3 col-sm-12 col-12">
				            <p class="facility" style="margin-bottom: 2px;"> <img src="images/occupacy.jpg" class="img-fluid img-icon"/><?php echo $row['OCCUPACY'];?> &nbsp  - &nbsp <?php echo $row['PRICE'];?> INR</p>
							</div>
							<?php } }?>
			        </div>
				<!-- schedule a visit -->   
				    <div align="center" style="margin-top: 45px;">
			            <a href="schedulevisit.php?ID=<?php echo $id;?>" class="btn bg-yellow visit-btn">Contact PG Owner</a>
		            </div>
			
        </div>  <!-- container div -->
		  <br><br>
		  <!-- footer -->
        <?php include('footer.php');?>
  </body>
</html>			