<?php include 'header.php' ?>
	<!-- Start Contact -->
	<!DOCTYPE html>
<html lang="en">
<head>
   <style>
    .p,li
    {
        text-align:left;
    }
    h3
    {
        text-align:left;
        font-size:18px;
        font-weight:bold;
        font-family:  Bookman, URW Bookman L, serif;
    }
   </style>
   <script src="js/only_number.js"  language="javascript"></script>
      <script src="js/only_text.js"  language="javascript"></script>
      <script src="js/only_email.js"  language="javascript"></script>

</head>
	<div class="contact-box"  style="overflow: hidden;">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<br>
						<h2 >Contact Us</h2>
						<br>
						<p class="txt2">Let's Plan Your Perfect Birthday Party!</p>
						<p class="txt2">Please fill out the form below and our team will be in touch soon!</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-sm-12 col-xs-12">
				  <div class="contact-block">
					<form id="contactForm" action="send-email.php" method="post">
					  <div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name" required data-error="Please enter your name" oninput="validateText(event)">
								<div class="help-block with-errors"></div>
							</div>                                 
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input type="text" class="form-control" id="email" name="email" placeholder="Enter Your Email" required data-error="Please enter your email" onchange=" validateEmail(event);">
								<div class="help-block with-errors"></div>
							</div> 
						</div>
						<div class="col-md-12">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Enter Your Phone" id="phone" name="phone" required data-error="Please enter a valid mobile number." maxlength="10" onkeypress="return validate1(event);"/>
							<div class="help-block with-errors"></div>
						</div> 
						</div>

						<div class="col-md-12">
							<div class="form-group"> 
								<textarea class="form-control" id="message" name="message" placeholder="Type Your Message Here" rows="8" data-error="Write your message" required></textarea>
								<div class="help-block with-errors"></div>
							</div>
							<div class="submit-button text-center">
								<button class="btn btn-common" type="submit" name="submit" id="submit" value="Submit">Send Message</button><br><br>
								<div id="msgSubmit" class="h3 text-center hidden"></div> 
								<div class="clearfix"></div> 
							</div>
						</div>
					  </div>            
					</form>
				  </div>
				</div>
			</div>
			<p class="txt2 p-1" > Thank You for Your Interest!</p>
	</div>
	
	<!-- End Contact -->
	<footer class="footer-box">
  <div class="container">
    <div class="row">
    <div class="col-md-4">
        <p class="txt3">Contact Information</p>
        <p class="txtp"><span class="symbol">	&#x1F3E0;</span> D-206, Ganshyam Nagar, Nobal Nagar,
        Airport Road, Sardarnagar, Ahmedabad, Gujarat </p>
        <!-- <p class="p">PINCODE: 382340</p> -->
        <p class="txtp"><span class="symbol">&#9742;&nbsp;&nbsp;</span>Phone: 9714445772</p>
        <p class="txtp"><span class="symbol">&#9993;&nbsp;&nbsp;</span>E-mail: shindedev1425@gmail.com</p>
      </div> 
      
     
      <div class="col-md-1"></div>
      <div class="col-md-3">
      <p class="txt3">Quick Links</p>
       
	  <ul class="list-unstyled ">
          <li ><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="event.php">Events</a></li>
          <li><a href="contact.php">Contact Us</a></li>
		  <li></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-bottom mt-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p class="text-center">&copy; 2023 hellyevents.com. All rights reserved.</p>
        </div>
      </div>
    </div>
  </div>
</footer>


	<!-- ALL JS FILES -->
	<!-- <script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script> -->
	<script src="js/bootstrap.min.js"></script>
	<!-- <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.pogo-slider.min.js"></script>  
 <script src="js/slider-index.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/form-validator.min.js"></script>
    
    <script src="js/custom.js"></script> -->
    <footer>
  <div class="container">
    <div class="row">
    
    </div>
  </div>
</footer>