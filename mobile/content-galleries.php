<?php
	include_once('../header-mobile.php');
 ?>

<!-- main container -->
 <div id="wrapper">
 	<div id="content">
 		<div class="container-content">

 			<!-- banner-about -->
			<div class="sub-banner">
				<div class="group-banner-about">
					<div class="box-img-text">
						<div class="box-img">
							<div class="gradientb"></div>
							<img src="<?php echo $BATH_URL;?>assets/images/Condo-option31-Location-banner-01.jpg">
						</div>
						<div class="box-text">
							<h1>MANY PICTURES OF OUR LOCA RESIDENT</h1>
							<p>OUR GALLERIES</p>
						</div>
					</div>
				</div>
			</div>
<style type="text/css">
	#content .grallery{}
	#content .grallery .group-gallery{padding-bottom: 50px;padding-top: 50px;}
	#content .grallery .group-gallery h2{margin: 0; padding: 0 20px;font-size: 18px;text-transform: uppercase;text-align: center;}
	#content .grallery .box{padding-top: 20px;display: flex;flex-wrap: wrap;}
	#content .grallery .box .items{overflow: hidden;width: 200px;flex-grow: 1;flex-basis: calc(100% / 2);padding-top: 5px;position: relative;display: flex;justify-content: center;align-items: center;}
	#content .grallery .box .items .img{height: 220px;margin: 10px;}
	#content .grallery .box .items .img img{width: 100%;height: 100%;object-fit: cover;}
	#content .grallery .box .items .text{position: absolute;width: 100%;text-align: center;color: #fff;}
	#content .grallery .box .items .text h3{font-size: 18px;font-weight: bolder;}
</style>
			<!-- LOCA RESIDENT’S GALLERIES -->
			<div class="grallery">
				<div class="group-gallery">
					<h2>LOCA RESIDENT’S GALLERIES</h2>
					<div class="box">
						<div class="items">
							<div class="img">
								<img src="<?php echo $BATH_URL;?>assets/images/Condo-option31-GALLERIES-01.jpg">
							</div>
							<div class="text">
								<h3>building</h3>
							</div>
						</div>

						<div class="items">
							<div class="img">
								<img src="<?php echo $BATH_URL;?>assets/images/Condo-option31-GALLERIES-02.jpg">
							</div>
							<div class="text">
								<h3>building</h3>
							</div>
						</div>

						<div class="items">
							<div class="img">
								<img src="<?php echo $BATH_URL;?>assets/images/Condo-option31-GALLERIES-03.jpg">
							</div>
							<div class="text">
								<h3>building</h3>
							</div>
						</div>

						<div class="items">
							<div class="img">
								<img src="<?php echo $BATH_URL;?>assets/images/Condo-option31-GALLERIES-04.jpg">
							</div>
							<div class="text">
								<h3>building</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
			
 		</div>
 	</div>
 </div>

 <?php
	include_once('../footer-mobile.php');
 ?>