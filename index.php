<?php include 'header.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
	

<style>

.main-container {
	background-image: url(images/bg62.jpg); 
  /* background-color:black */
  /* border:1px solid black; */

}


/* CSS */
.button-84 {
  align-items: center;
  background-color: initial;
  background-image: linear-gradient(#464d55, #25292e);
  border-radius: 8px;
  border-width: 0;
  box-shadow: 0 10px 20px rgba(0, 0, 0, .1),0 3px 6px rgba(0, 0, 0, .05);
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  display: inline-flex;
  flex-direction: column;
  font-family: expo-brand-demi,system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
  font-size: 18px;
  height: 52px;
  justify-content: center;
  line-height: 1;
  margin: 0;
  outline: none;
  overflow: hidden;
  padding: 0 32px;
  text-align: center;
  text-decoration: none;
  transform: translate3d(0, 0, 0);
  transition: all 150ms;
  vertical-align: baseline;
  white-space: nowrap;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-84:hover {
  box-shadow: rgba(0, 1, 0, .2) 0 2px 8px;
  opacity: .85;
}

.button-84:active {
  outline: 0;
}

.button-84:focus {
  box-shadow: rgba(0, 0, 0, .5) 0 0 0 3px;
}

  

.my-section {
  display: flex;
}
@media (max-width: 500px) {
  .my-section {
    display: grid;
    margin-left:20px;
  }

  .button-84 {
    width: 200px;
  }
}
.my-section .left-side {
  flex: 1;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  /* background-image: url(images/bg6.jpg);  */
}

.my-section .left-side p {
	/* margin-top:70px; */
  /* margin-bottom: 6rem; Adjust the desired spacing */
}

.my-section .right-side {
  flex: 1;
  /* margin-left:100px; */
  background-image: url(images/bg6.jpg); 
}

.my-section .responsive-button {
  width: 100%;
  max-width: 200px; /* Adjust the maximum width as needed */
}
.right-side {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  grid-template-rows: repeat(2, 1fr);
  /* margin-top:30px;
  margin-left:30px; */
  
}

.right-side img {
  width: 85%;
  height: 80%;
  object-fit: cover;
  margin-top:30px;
 
}
@media only screen and (max-width: 600px) {
	.mysection {
		/* width: 100%; */
    display: grid;
	}
  }
.txt
{
	margin-top:35px;
	font-size:33px;
	font-family: Bookman, URW Bookman L, serif;
}
.responsive-button {
  /* Button size and padding */
  width: 100%;
  padding: 10px 20px;

  /* Button border and background */
  border: 1px solid #ccc;
  background-color: #fff;

  /* Button text */
  font-size: 16px;
  font-weight: bold;
  color: #000;

  /* Button transition */
  transition: all 0.2s ease-in-out;
}

.responsive-button:hover {
  /* Button background color on hover */
  background-color: #ccc;
}

.responsive-button:active {
  /* Button background color on click */
  background-color: #eee;
}
.imgfluid
{
  width: 600px;
  height: 1000px;
}

</style>
</head>


	<!-- Start Banner -->
		<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
		<div id="wowslider-container1">
	<div class="ws_images"><ul>
		<li><img src="data1/images/background1.jpg" alt="background2" title="" id="wows1_0" class="imgfluid"></li>
		<li><a href="http://wowslider.net"><img src="data1/images/background3.jpg" alt="css slideshow" title="" id="wows1_1" class="imgfluid"></a></li>
		<li><img src="data1/images/background2.jpg" alt="background5" title="" id="wows1_2" class="imgfluid"></li>
	</ul></div>
	<!-- <div class="ws_bullets"><div>
		<a href="#" title="background1"><span><img src="data1/tooltips/background1.jpg" alt="background1"/>1</span></a>
		<a href="#" title="background3"><span><img src="data1/tooltips/background3.jpg" alt="background3"/>2</span></a>
		<a href="#" title="background5"><span><img src="data1/tooltips/background2.jpg" alt="background2"/>3</span></a>
	</div> -->
  </div>
	</div>	
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
	
	<!-- end Banner -->
	<!-- Start Story -->
	<div id="story" class="story-box main-timeline-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>How to organise a special birthday celebration!</h2><br>
						<p class="txt2">Come & Celebrate your birthday with us at an unforgettable event created and crafted by Helly Events specifically for you on  Date. </p>
					<br></div>
				</div>
			</div>
			<div class="row timeline-element separline">
				<div class="timeline-date-panel col-xs-12 col-md-6  align-left">         
                    <div class="time-line-date-content">
                        <p class="mbr-timeline-date mbr-fonts-style display-font">
                            1<sup>st</sup> step
                        </p>
                    </div>
				</div>
				<span class="iconBackground"></span>
				<div class="col-xs-12 col-md-6 align-left">
					<div class="timeline-text-content">
						<h4 class="txt2" style="text-align:left">How to Plan the birthday party!</h4>
						<p class="mbr-timeline-text mbr-fonts-style display-7">
						Save the date! We have carefully selected Date for your unforgettable birthday party. Mark your calendar and get ready for a day filled with celebration, laughter, and cherished memories.
						
						</p>
					 </div>
				</div>
			</div>
			<div class="row timeline-element reverse separline">
				<div class="timeline-date-panel col-xs-12 col-md-6  align-left">         
                    <div class="time-line-date-content">
                        <p class="mbr-timeline-date mbr-fonts-style display-font">
                            2<sup>nd</sup> step
                        </p>
                    </div>
				</div>
				<span class="iconBackground"></span>
				<div class="col-xs-12 col-md-6 align-right">
					<div class="timeline-text-content">
						<h4 class="txt2" style="text-align:left">Select a Birthday Party Theme  </h4>
						<p class="mbr-timeline-text mbr-fonts-style display-7" style="text-align:left">
						Our experienced team collaborates closely with you to develop a cohesive theme, brainstorm creative ideas, and provide inspiration for a visually appealing and personalized birthday party atmosphere.
						</p>
					 </div>
				</div>
			</div>
			<div class="row timeline-element separline">
				<div class="timeline-date-panel col-xs-12 col-md-6  align-left">         
                    <div class="time-line-date-content">
                        <p class="mbr-timeline-date mbr-fonts-style display-font">
						3<sup>rd</sup> step
                        </p>
                    </div>
				</div>
				<span class="iconBackground"></span>
				<div class="col-xs-12 col-md-6 align-left">
					<div class="timeline-text-content">
						<h4 class="txt2"> Space Avaalible & rooms needed for Decoration</h4>
						<p class="mbr-timeline-text mbr-fonts-style display-7">
						Our detailed proposal for your birthday party decorations includes carefully curated backdrops, table centerpieces, balloons, lighting, signage, and other embellishments. These elements are designed to enhance your chosen theme and create a visually stunning impact.
						</p>
					 </div>
				</div>
			</div>
			<div class="row timeline-element reverse separline">
				<div class="timeline-date-panel col-xs-12 col-md-6  align-left">         
                    <div class="time-line-date-content">
                        <p class="mbr-timeline-date mbr-fonts-style display-font">
						4<sup>th</sup> step
                        </p>
                    </div>
				</div>
				<span class="iconBackground"></span>
				<div class="col-xs-12 col-md-6 align-right">
					<div class="timeline-text-content">
						<h4 class="txt2" style="text-align:left"> Setup</h4>
						<p class="mbr-timeline-text mbr-fonts-style display-7" style="text-align:left">
						On the day of the event, our dedicated team takes care of the delivery, setup, and installation of the decorations.
						 We ensure that every element is arranged according to the approved proposal.
						</p>
					 </div>
				</div>
			</div>
			
		</div>
	</div>
	<!-- End Story -->
	<br><br>
	<div class="container"  >
	<div class="main-container">
  <div class="my-section">
    <div class="left-side">
	<p class=txt>Creating Unforgettable 
Birthday Memories With Us.....</p>
<a href="services.php">
<button class="button-84" >Explore Our Services</button></a>
    </div>
	<!-- <img src="images/family-05.jpg" alt="Image" width="490px"  height="500px"> -->
	<div class="right-side">
  <img src="images/ex1.jpg">
  <img src="images/ex2.jpg">
  <img src="images/ex4.jpg">
  <img src="images/ex3.jpg">
</div>

  </div>
  <!-- <button class="responsive-button">Explore Our Services</button> -->
</div>
</div>
	<br><br>

</body>
</html>
<?php include 'footer.php' ?>
