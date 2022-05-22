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
			padding-right: 20px;
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
		    <p style="font-size: 30px; font-weight: 400;">Prostay</p>
			<p>D-50 South Extension, New Delhi, India.</p>
			<hr style="height:2px; background-color:#FFED46;padding:0;">
			<p class="text-center" style="font-size: 18px;">TERMS AND CONDITION</p>
			<p style="font-size: 16px;">A. USE OF PROSTAYLIFE PLATFORM & INTELLECTUAL PROPERTY during the Term of the Agreement and subject to the terms and conditions herein:</p>
			<ol>
			    <li class="list"><b>Acceptance of Terms for Usage of PROSTAY Platforms:</b> a) By accessing or using PROSTAY Platforms in any manner, including, but not limited to, visiting or browsing or registering on PROSTAY, the Partner agrees that it has read, understood and agreed to be legally bound by the terms and conditions of the Agreement and those set forth below. If PROSTAY do not agree to be bound by these Terms of Use, please do not access or use the PROSTAY Platform. The terms and conditions may be modified, changed or altered by PROSTAY at any time without prior notice. By agreeing to these terms and conditions, the Partner hereby accept that it shall be responsible for periodically checking the changes and/or updates herein. It is agreed that the Partner’s continued access to the PROSTAY Platform after such changes are made, shall conclusively demonstrate the due acceptance of them.</li>
				<li class="list"><b>Permitted License:</b> Prostay grants to the Partner a revocable, non-assignable, non-transferable, limited permission to: (i) utilize the know-how; and (ii) be listed on PROSTAY Platform or any other online website/mobile application, as may be expressly permitted by PROSTAY in writing and market or promote bookings at the Partner’s Property by associating with the trademark “PROSTAY”.</li>
				<li class="list"><b>Listing by the Partner:</b> The Partner undertakes that it will accurately and correctly list 100% of its total beds inventory and actual status on the PROSTAY Platform.</li>
				<li class="list"><b>Listing by PROSTAY:</b> The Partner acknowledges that in order to facilitate the completion of PROSTAY’s obligations under this Agreement and other similar agreements, PROSTAY has the right to list all Partners within the network of PROSTAY as “PROSTAY” on the PROSTAY Platform; this is irrespective of the fact that the Partner provides its services to customers (whether attracted through PROSTAY Platform or in any other manner) independently, under its own brand name. However, each Partner shall be solely responsible for providing the accommodation services to its customers.</li>
				<li class="list"><b>Transformation Audit Report:</b> PROSTAY may advise the Partner in modifying the Property to meet PROSTAY standards and agree on alterations or modification that may be required at the Property through a mutually agreed “Transformation Audit Report”. The Partner shall ensure that the Property is maintained and operated as per the standards set out in the Transformation Audit Report and/or the operating, brand and PROSTAY’s standards as may be amended from time to time and informed to the Partner. PROSTAY shall have the right to amend these standards unilaterally and shall keep the Partner notified of any alterations and/or improvements in or to the operating, brand or PROSTAY standards.</li>
				<li class="list"><b>Maintenance of PROSTAY Standards:</b> The operating, brand and PROSTAY standards which exist as on date have been provided to the Partner and the Partner undertakes to make all such modifications/ alterations at its own cost and expenses.</li>
				<li class="list"><b>Know-How, Brand and Operating Standards:</b> PROSTAY may assist the Partner by providing the knowhow which shall at all times remain the property of PROSTAY. It may also train the Partner’s staff in the operation of the Property as per the PROSTAY’s standards. Partner shall keep itself aware and up to date of any alterations and/or improvements in or to the brand or operating or standards. All operating costs, including the cost of employees, manpower, consumables, utilities rents, taxes etc. shall be the sole responsibility of the Partner.</li>
				<li class="list"><b>Performance by Partner:</b> The Partner acknowledges that it may be entitled to incentives or may be subject to penalties based on its performance ranked and measured in accordance with the PROSTAY’s scoring mechanism mutually agreed between the parties. The Partner agrees that the ranking and performance rating shall be as per the sole opinion of PROSTAY and the same shall not be subject to dispute by the Partner. PROSTAY shall have the sole discretion to change the terms of the said policy from time to time.</li>
				<li class="list"><b>Title of The Property:</b> The Partner shall, at all times maintain full ownership of the Property and the Business now or hereafter conducted therein or there from (or, if Partner’s right and interest in the Property is derived through a lease, concession or other agreement, the Partner shall keep and maintain such lease, concession or other agreement in full force and effect at all times throughout the term of the contract) free and clear of any lien, mortgage, charge or any other encumbrance. PROSTAY reserves the full right to undertake any modifications to the Property. The Partner shall, at its own cost and expense, pay and discharge when due any property rents (including lease rents) and other rental payments, concession charges and any other charges payable in respect of the Property and undertake and prosecute all actions including appropriate actions, judicial or otherwise, required to assure quiet and peaceful possession and management of operations of the hotel during the term of the contract.</li>
				<li class="list"><b>Confidentiality:</b> All documents, instructions, details collected under this Agreement including the customer/guests’ personal data, brand standards, operating standards, technology, systems, training manuals, financial details, terms of this Agreement, account and sales information etc. shall be considered as secret and confidential information and Partner undertakes not to copy or disclose any of its contents or concepts to any other party and not to make any direct or indirect use thereof except as required for due performance under this Agreement. This Agreement is confidential in nature and shall not be disclosed by the Parties to any other third person except as otherwise required by law. During the performance of its obligations under this Agreement, the Partner and its employees, officers, agents, proprietors, directors, shareholders, stakeholders (“Representatives”) may have access to Confidential Information of PROSTAY, which shall be kept fully confidential by the Partner and its Representatives. The Partner shall execute necessary non-disclosure agreement with its Representatives and take any other steps that it would reasonably take to protect such confidential information. The obligation under this provision shall survive termination or expiration of this Agreement.</li>
				<li class="list"><b>Termination Rights by PROSTAY:</b> Notwithstanding anything contained in the Agreements or otherwise, PROSTAY shall be entitled to terminate the Agreement anytime (including within the lock-in period of the Agreement, if any) in the event that: (a) there is a breach of the Agreement by the Partner or or there has been a misrepresentation by Partner and Partner fails to remedy the said breach within a period of 30 (thirty) days from the date on which it is notified of the said breach; or (b) the Partner files for bankruptcy or becomes or is declared insolvent or has a receiver or manager appointed over all or substantially all of its assets; or (c) a proposal of land acquisition in respect of any material part of or all of the Property being effected by any governmental body; or (d) there being a dispute or threat of a dispute concerning title of the Property; or (e) if any agreement vesting possession of the Property on the Partner terminates; or (g) if any act or omission of the Partner causes disruption in the operation of/customer experience in the Property</li>
				<li class="list"><b>Right to Inspect:</b> To ensure consistent PROSTAY’s standards and quality of the Property, PROSTAY reserves the right to undertake periodic audits/ surprise checks to ensure that the Partner is adhering to the standards of PROSTAY from time to time. PROSTAY shall have a right to conduct such audit without prior notice and through mystery customers. The Partner shall not object to such audits and challenge the findings based on the fact that no prior notice was given for such audit. PROSTAY shall have a right to review the Guest records of the Partner. The Partner shall co-operate during such audit and provide necessary and correct information.</li>
				<li class="list"><b>Prostay Commission</b> - To ensure consistent PROSTAY’s standards and quality of the Property The Partner shall assign this Agreement as rent offer for Prostay.</li>
				<li class="list"><b>Assignment:</b> The Partner shall not assign this Agreement to any third party without PROSTAY’s prior written consent. In the event there is a change in the control or management of the Partner, the Partner shall inform PROSTAY in writing and PROSTAY shall be entitled to terminate the Agreement with immediate notice in such case. In case of sale of business or transfer of ownership, the Partner shall ensure that the intended purchaser of the business agrees to adhere to the terms of this Agreement. PROSTAY shall not be under any obligation to abide by this Agreement, unless the Agreement is novated. If the Partner intends to change the ownership structure of his trading style to a partnership or to a limited company or in any other manner it is agreed that any such intended change shall be deemed to be an assignment of this Agreement. PROSTAY shall be entitled to assign the benefit of this Agreement to any other party at any time and shall inform the Partner thereof within a reasonable time thereafter.</li>
				<li class="list"><b>Governing Law and Jurisdiction:</b> This terms and conditions and the Agreement shall be governed by the laws of India. Any and all dispute arising out or in connection the terms of this Agreement shall be finally settled solely through arbitration by a single arbitrator to be mutually appointed by the parties. The arbitration shall be conducted in accordance with Arbitration and Conciliation Act, 1996. The arbitration shall be conducted in New Delhi. The decision by the arbitrator shall be final and binding upon both parties. The courts in New Delhi shall have exclusive jurisdiction to settle any disputes between the Parties under this Agreement.</li>
			</ol>
		</div><!--container div -->
	<br>
<!-- footer -->
    <?php include('footer.php');?>
  </body>
</html>