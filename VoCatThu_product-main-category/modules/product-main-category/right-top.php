<style type="text/css">
/*	
.block-content{
  color: white;
  padding-left: 50px;
  padding-top: 60px;
  padding-right: 40px;
} 
.block-right-banner {
  background-color: #3494FF; 
  height: 340px; 
  width: 313px; 
  float: right;
  margin-right: 30px;
}
.block-left-banner img{
  width: 570px; 
  height: 340px; 
}
.block-left-banner {
  float:left; 
  margin-left: 15px;
}
.button-banner:hover {
  text-decoration: none;
  cursor: pointer;
  color: blue;
  background-color: white;
}
.button-banner {
  color: white; 
  border: 1px white solid; 
  padding: 10px 15px; 
  font-size: 15px;
}    
.block-heading span{
  font-size: 30px;
}
.highlight-banner span{
  color: yellow;
  font-size: 40px;
}
.highlight-banner {
  font-size: 40px;
  margin-bottom: 3px;
}
.block-body {
  font-size: 15px;
  margin-bottom: 5px;
}
.background img{
	width: 430px; 
    height: 220px;
}
.background {
	width: 430px; 
    height: 220px;
    background-color: black;
}
.layout-text a p, .layout-text a h2{
color: white;
white-space: nowrap;
}
.layout-text a:hover {
font-weight: bold;
}
.layout-color .layout-text{
  text-align: left;
  position: absolute; 
  top: 14%;
  left: 5%;
  color: white;
  font-size: 12px;
} 
.background .layout-color{
  position: absolute;
  background: black;
  opacity: 0;
  height: 0;
  transition: .5s ease;     
}
.background:hover .layout-color{
  opacity: 0.7;
  height: 65px;
  top: 70%;
  width: 430px;
}

.block-right-banner {
  animation: bounceInDown 2s ease-in-out  1s;
}
.block-content {
  animation: bounceInRight 2s ease-in-out  1s 2 alternate;
}*/
</style>
<style type="text/css">
	* {box-sizing:border-box}
	.mySlides {display:none}

	/* Slideshow container */
	.slideshow-container {
	  max-width: 570px;
	  position: relative;
	  margin: auto;
	}

	/* Caption text */
	.caption-text {
	  color: #f2f2f2;
	  font-size: 15px;
	  padding: 8px 12px;
	  position: absolute;
	  bottom: 8px;
	  width: 100%;
	  text-align: center;
	}

	/* Number text (1/3 etc) */
	.numbertext {
	  color: #f2f2f2;
	  font-size: 12px;
	  padding: 8px 12px;
	  position: absolute;
	  top: 0;
	}

	/* The dots/bullets/indicators */
	.dot {
	  height: 13px;
	  width: 13px;
	  margin: 0 2px;
	  background-color: #bbb;
	  border-radius: 50%;
	  display: inline-block;
	  transition: background-color 0.6s ease;
	}

	.active {
	  background-color: #717171;
	}

	/* Fading animation */
	.fade {
	  -webkit-animation-name: fade;
	  -webkit-animation-duration: 1.5s;
	  animation-name: fade;
	  animation-duration: 1.5s;
	}

	@-webkit-keyframes fade {
	  from {opacity: .4} 
	  to {opacity: 1}
	}

	@keyframes fade {
	  from {opacity: .4} 
	  to {opacity: 1}
	}

	/* On smaller screens, decrease text size */
	@media only screen and (max-width: 300px) {
	  .text {font-size: 11px}
	}
</style>
<section class="sec-adv">	
	<div class="row"><article>
		<div class="block-left-banner">
			<div class="slideshow-container">
				<div class="mySlides fade">
				  <div class="numbertext">1 / 3</div>
				  <img src="web/images/product-main-category/banner1-left.png">
				  <div class="caption-text">Caption Text</div>
				</div>

				<div class="mySlides fade">
				  <div class="numbertext">2 / 3</div>
				  <img src="web/images/product-main-category/banner2-left.png">
				  <div class="caption-text">Caption Two</div>
				</div>

				<div class="mySlides fade">
				  <div class="numbertext">3 / 3</div>
				  <img src="web/images/product-main-category/banner3-left.png">
				  <div class="caption-text">Caption Three</div>
				</div>

			</div>
			<br>

			<div style="text-align:center">
			  <span class="dot"></span> 
			  <span class="dot"></span> 
			  <span class="dot"></span> 
			</div>
			<!-- <a href="#"><img src="web/images/product-main-category/banner1-left.png" /></a> -->
		</div>
		<div class="block-right-banner">
			<div class="block-content">
				<div class="block-heading">
					<span>Focus evolves</span>
					<div class="highlight-banner">with <span>a touch</span></div>
				</div>
				<div class="block-body">Minimize camera shake, even using various lenses</div><br />
				<a href="#"><span class="button-banner">View More</span></a>
			</div>
		</div></article>
	</div>
	<div class="row"><article>
		<div class="col-md-6 col-xs-12 col-sm-12 ">
			<div class="background"><figure>
				<img src="web/images/product-main-category/img01.png">
				<div class="layout-color">
					<figcaption class="layout-text">				
						<a href="#">
							<h2>Feel the beat!</h2>
							<p>Uncompromising sound, runway looks</p>
						</a>
					</figcaption>
				</div>
			</figure></div>
		</div>
		<div class="col-md-6 col-xs-12 col-sm-12">
			<div class="background"><figure>
				<img src="web/images/product-main-category/img02.png">
				<div class="layout-color">
					<figcaption class="layout-text">				
						<a href="#">
							<h2>The New Smart Wristbands</h2>
							<p>Find hot, new products and the tired and true here</p>
						</a>
					</figcaption>
				</div>
			</figure></div>
		</div>
		</article>
	</div>
</section>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
