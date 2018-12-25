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
							<h1>LOCA RESIDENT CONTACT</h1>
							<p>CONTACT US</p>
						</div>
					</div>
				</div>
			</div>
			
			<style media="screen">
#content .address .box-img-text1{background-color: #EE4036;display: flex; overflow: hidden;width: 100%;}
#content .address .box-img-text2{background-color: #F05A28;display: flex; overflow: hidden;width: 100%;}
#content .address .box-img-text3{background-color: #FAAD1D;display: flex; overflow: hidden;width: 100%;}
#content .address .box-img{flex-grow: 1;padding: 20px 20px 0 20px;color: #fff;}
#content .address .box-img img{width: 20%;}
#content .address .box-img .box-text{padding-top: 15px;padding-bottom: 15px;text-align: center;}
#content .address .box-img .box-text p{padding-right: 30px;padding-left: 30px;}

/*Contact Form*/
#content .form{}
#content .form .group-form{padding-top: 50px;padding-bottom: 50px;}
#content .form h2{text-align: center;padding-bottom: 10px;}
#content .form .button button{
    width: 140px;
    height: 35px;
    font-size: 14px;
    border: 1px solid #FAAD1D;
    color: #FAAD1D;
    background-color: #ffffff;
    /* border-radius: 20px; */
    margin-top: 10px;
    float: right;
}

#content .form .box-form {display: flex;width: 100%;}
#content .form .box-form .form-inline{width: 90%;margin-left: 4%;}
#content .form .box-form .form-inline .box-input{padding: 10px 0;}
#content .form .box-form .form-inline .box-input input{width: 100%;height: 40px;padding-left: 5px;border: 1px solid #FAAD1D;}
#content .form .box-form .form-inline .box-input textarea{width: 100%;height: 300px;padding-left: 5px;border: 1px solid #FAAD1D;padding-top: 8px;}
#content .form .button{display: flex;width: 100%;justify-content: flex-end;margin-left: -4%;}
</style>
      <!-- address -->
			<div class="address">
				<div class="group-address">
					<div class="box-img-text1" style="">
						<div class="box-img" style="" align="center">
							<img src="<?php echo $BATH_URL;?>assets/images/icon/KhmerAdsZone-Contact-Address-80x80.svg">
							<div class="box-text" style="">
								<p>45Z, 371, Trapeang Chhuk, Teuk Thla,</p>
								<p>Sen Sok, Phnom Penh, Cambodia</p>
							</div>
						</div>
					</div>

					<div class="box-img-text2" style="">
						<div class="box-img" align="center">
							<img src="<?php echo $BATH_URL;?>assets/images/icon/KhmerAdsZone-Contact-Phone80x80.svg">
							<div class="box-text" style="">
								<p>+855 93 855 512 </p>
								<p>+855 78855512 / +855 313333201</p>
							</div>

						</div>
					</div>

					<div class="box-img-text3">
						<div class="box-img" align="center">
							<img src="<?php echo $BATH_URL;?>assets/images/icon/KhmerAdsZone-Contact-Email80x80.svg">
							<div class="box-text">
								<p>gm.adszone@gmail.com</p>
								<p>www.khmeradszone.com</p>
							</div>

						</div>
					</div>
				</div>
			</div>

      <!-- Contact Form -->
			<div class="form">
				<div class="group-form">
					<h2>Contact <span>Form</span></h2>
					<p style="padding: 5px 30px 10px 30px;text-align: center;">TELL US YOUR TARGET. WE'LL GROW YOUR BUSINESS.</p>

					<div class="box-form" style="">
						<form class="form-inline" style="" align="center">
						    <div class="box-input" style="">
						      <input type="Name" class="form-control media-width" id="name" placeholder="Name*" style="">
						    </div>
						</form>
					</div>

					<div class="box-form">
						<form class="form-inline" align="center">
						    <div class="box-input">
						      <input type="email" class="form-control media-width" id="email" placeholder="Email*" >
						    </div>
						</form>
					</div>

					<div class="box-form">
						<form class="form-inline" align="center">
						    <div class="box-input">
						      <input type="Phone" class="form-control media-width" id="Phone" placeholder="Phone*">
						    </div>
						</form>
					</div>

					<div class="box-form">
						<form class="form-inline" align="center">
							<div class="box-input">
								<textarea class="form-control" placeholder="Message*"></textarea>
							</div>
						</form>
					</div>

					<style type="text/css">

					</style>
					<div class="button" style="">
						<button>Submit</button>
					</div>
				</div>
			</div>
<style type="text/css">
	#content .faq{}
#content .faq h2{text-align: center;padding-bottom: 10px;}
#content .faq .box-text{width: 91%;}
#content .answer{
    text-align: left;
    padding: 10px 20px;
}
#content .answer p{padding-right: 10px;}
#content .question {
    color: var(--maincolor);
    padding: 18px;
    width: 100%;
    color: #333;
    border-top: 1px solid #e0e0e0;
    text-align: left;
    font-size: 16px;
    font-weight: bold;
}
.sSign-show{right: -22px !important;top: 14px !important;}
</style>
			<!-- Frequently Asked Questions -->
			<div class="faq padding-0">
				<div class="group-faq padding-50-0" style="padding-bottom: -30px;">
					<h2>Frequently Asked<span> Questions</span></h2>
					<p style="padding-left: 30px;padding-right: 30px;">You can find some answers to most frequently asked questions from customers. If you haven’t yet found the answer to your question, please contact our staff through phone number, email above.</p>


					<div style="margin-top: 30px;">
						<div data-parent="boxStyle" class="box-text">
								<div class="question" data-clickshow="dropdown" data-sign="+,-">
									What is Loca Resident?
								</div>
								<div class="answer" data-boxcontent="slideToggle">
							  		<p>
							  			Event management is the application of project management to the creation and development of large-scale events such as festivals, conferences, ceremonies, weddings, formal parties, concerts, or conventions. It involves studying the brand, identifying its target audience, devising the event concept, and coordinating the technical aspects before actually launching the event.[1]
							  		</p>
							  		<p>
							  			The process of planning and coordinating the event is usually referred to as event planning and which can include budgeting, scheduling, site selection, acquiring necessary permits, coordinating transportation and parking, arranging for speakers or entertainers, arranging decor, event security, catering, coordinating with third party vendors, and emergency plans. Each event is different in its nature so process of planning & execution of each event differs on basis of type of event.
							  		</p>
								</div>
						</div>

						<div data-parent="boxStyle" class="box-text">
								<div class="question" data-clickshow="dropdown" data-sign="+,-">
									What exactly is a Condo?
								</div>
								<div class="answer" data-boxcontent="slideToggle">
							  		<p>
							  			Lorem ipsum dolor sit amet, consectetur adipisicing.Lorem ipsum dolor sit amet, consectetur adipisicing
							  		</p>
							  		
								</div>
						</div>

						<div data-parent="boxStyle" class="box-text">
								<div class="question" data-clickshow="dropdown" data-sign="+,-">
									What are the duties of the Condominium Association/Board?
								</div>
								<div class="answer" data-boxcontent="slideToggle">
							  		<p>
							  			Lorem ipsum dolor sit amet, consectetur adipisicing.Lorem ipsum dolor sit amet, consectetur adipisicing
							  		</p>
							  		
								</div>
						</div>

						<div data-parent="boxStyle" class="box-text">
								<div class="question" data-clickshow="dropdown" data-sign="+,-">
									What is the benefit as the Khmer AdsZone’s Customer?
								</div>
								<div class="answer" data-boxcontent="slideToggle">
							  		<p>
							  			Lorem ipsum dolor sit amet, consectetur adipisicing.Lorem ipsum dolor sit amet, consectetur adipisicing
							  		</p>
							  		
								</div>
						</div>

						<div data-parent="boxStyle" class="box-text">
								<div class="question" data-clickshow="dropdown" data-sign="+,-">
									Do I need to purchase insurance?
								</div>
								<div class="answer" data-boxcontent="slideToggle">
							  		<p>
							  			Lorem ipsum dolor sit amet, consectetur adipisicing.Lorem ipsum dolor sit amet, consectetur adipisicing
							  		</p>
							  		
								</div>
						</div>

						<div data-parent="boxStyle" class="box-text">
								<div class="question" data-clickshow="dropdown" data-sign="+,-">
									What are Common Elements?
								</div>
								<div class="answer" data-boxcontent="slideToggle">
							  		<p>
							  			Lorem ipsum dolor sit amet, consectetur adipisicing.Lorem ipsum dolor sit amet, consectetur adipisicing
							  		</p>
							  		
								</div>
						</div>

						<div data-parent="boxStyle" class="box-text">
								<div class="question" data-clickshow="dropdown" data-sign="+,-">
									What is a reserve fund?
								</div>
								<div class="answer" data-boxcontent="slideToggle">
							  		<p>
							  			Lorem ipsum dolor sit amet, consectetur adipisicing.Lorem ipsum dolor sit amet, consectetur adipisicing
							  		</p>
							  		
								</div>
						</div>

						<div data-parent="boxStyle" class="box-text">
								<div class="question" data-clickshow="dropdown" data-sign="+,-">
									How are fees determined?
								</div>
								<div class="answer" data-boxcontent="slideToggle">
							  		<p>
							  			Lorem ipsum dolor sit amet, consectetur adipisicing.Lorem ipsum dolor sit amet, consectetur adipisicing
							  		</p>
							  		
								</div>
						</div>

						<div data-parent="boxStyle" class="box-text">
								<div class="question" data-clickshow="dropdown" data-sign="+,-">
									What restrictions exist on the leasing of my unit?
								</div>
								<div class="answer" data-boxcontent="slideToggle">
							  		<p>
							  			Lorem ipsum dolor sit amet, consectetur adipisicing.Lorem ipsum dolor sit amet, consectetur adipisicing
							  		</p>
							  		
								</div>
						</div>

						<div data-parent="boxStyle" class="box-text">
								<div class="question" data-clickshow="dropdown" data-sign="+,-">
									Where can an owner's vehicle be parked?
								</div>
								<div class="answer" data-boxcontent="slideToggle">
							  		<p>
							  			Lorem ipsum dolor sit amet, consectetur adipisicing.Lorem ipsum dolor sit amet, consectetur adipisicing
							  		</p>
							  		
								</div>
						</div>

						<div data-parent="boxStyle" class="box-text">
								<div class="question" data-clickshow="dropdown" data-sign="+,-">
									How much is the monthly assessment for my unit and when is it due?
								</div>
								<div class="answer" data-boxcontent="slideToggle">
							  		<p>
							  			Lorem ipsum dolor sit amet, consectetur adipisicing.Lorem ipsum dolor sit amet, consectetur adipisicing
							  		</p>
							  		
								</div>
						</div>

						<div data-parent="boxStyle" class="box-text">
								<div class="question" data-clickshow="dropdown" data-sign="+,-">
									Is there a policy regarding the presence of renters (60 days or more) and overnight guests in the building?
								</div>
								<div class="answer" data-boxcontent="slideToggle">
							  		<p>
							  			Lorem ipsum dolor sit amet, consectetur adipisicing.Lorem ipsum dolor sit amet, consectetur adipisicing
							  		</p>
							  		
								</div>
						</div>

						<div class="question" class="box-text"></div>
					</div>

				</div>
			</div>

 		</div>
 	</div>
 </div>

 <?php
	include_once('../footer-mobile.php');
 ?>