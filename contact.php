<?php
include('config.php');
if(isset($_POST['SEND'])) {
	$name = $_POST['NAME'];
	$email = $_POST['EMAIL'];
	$phone = $_POST['PHONE'];
	$message = addslashes($_POST['MESSAGE']);
	
	$sql = "INSERT INTO contact(NAME,EMAIL,PHONE,MESSAGE) VALUES('{$name}','{$email}','{$phone}','{$message}')";
	mysqli_query($conn, $sql) or die("insert query not running");
	echo '<script>alert("Your Message is Recorded");
                window.location="index.php"</script>';
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=No">
	<link rel="stylesheet" type="text/css" href="mycss/file.css">
	<link rel="stylesheet" type="text/css" href="files/css/bootstrap.css">
	<script type="text/javascript" src="files/js/jquery.js"></script>
	<script type="text/javascript" src="files/js/bootstrap.js"></script>
	<script type="text/javascript" src="files/js/bootstrap.bundle.js"></script>
	<script type="text/javascript" src="files/js/popper.min.js"></script>
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="navbar.css">
	<link rel="icon" href="images/logo1.png"> 
	<title>Prostay</title>
     <style>
        body {
	    padding: 0;
	    margin: 0; 
	   }
	   .bg-yellow  {
	      background-color: #FFED46;
	    }
	   .text-yellow {
		   color: #FFED46;
	    }
		.location {
           color: white;
		   font-size: 45px;
		   font-weight: 500;
		}
		form {
		   height: 100vh;
		   padding: 20px;
		}
		.btn {
		   padding: 10px 80px;
		   border-radius: 25px;
		}
		@media(max-width: 992px) {
		  form {
		     height: auto;
		     padding: 20px;
		  }
		  .location {
             color: white;
		     padding-top: 20px;
			 font-size: 35px;
		     font-weight: 500;
			}
		}
		
	   
     </style>
  </head>
  <body class="bg-dark">
<div class="container-fluid">
<div class="row">
  
  <div class="col-lg-6 col-md-6 col-sm-12 col-12 order-lg-1 order-2">
    <p class="location">Google Map Location</p>
    <p><iframe class="xl-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3559.35612873351!2d75.80640061504378!3d26.860424183150162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db677b9ba08dd%3A0x9b21339e8464953b!2sMnit%20Innovation%20And%20Incubation%20Center!5e0!3m2!1sen!2sin!4v1604994897743!5m2!1sen!2sin" width="100%" height="550" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></p>
  </div>
  <div class="col-lg-6 col-md-6 col-sm-12 col-12 bg-yellow order-lg-2 order-1">
	<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
      <h1>Contact Us</h1>
	  <div class="form-group">
        <label><b>Name *</b></label>
        <input type="text" class="form-control" placeholder="Your Name" name="NAME" required style="background-color: #FFED46; border: 2px solid black;">
	  </div>
      
	  <div class="form-group">
        <label><b>Email *</b></label>
        <input type="email" class="form-control" placeholder="eg:abc123@gmail.com" name="EMAIL" required style="background-color: #FFED46; border: 2px solid black;">
	  </div>

      <div class="form-group">
        <label><b>Phone Number *</b></label>
        <input type="text" class="form-control" placeholder="Your Phone Number" name="PHONE" required style="background-color: #FFED46; border: 2px solid black;">
	  </div>

      <p><strong>Message *</strong></p>
     <div class="form-group">
       <textarea rows="5" class="form-control" name="MESSAGE" placeholder="Enter Your Message Here ...." style="background-color: #FFED46; border: 2px solid black;"></textarea>
     </div>
      
	  <div align="center">
	    <input type="submit" class="btn btn-danger" value="Send"  name="SEND"/>
	  </div>
    </form>
  </div> <!-- col-lg-6 div -->
</div> <!-- row -->
</div>  <!-- container-fluid -->
  </body>
</html>  