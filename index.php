<?php
require_once('inc/header.php');
?>

<style>
.text-white{
	color:white;
}
#vision{
	 background-color:#38aedd; 
	 height: 300px;
}
.vision-text{
	padding:50px;
	font-weight: bold;
}
#mission{
	background-color: white;
	height:300px;
}
.mission-text{
	padding-top:50px;
	color:#38aedd;
	font-weight:bold;
}
.text-blue{
	color: #38aedd;
}



/**********************
/***** Services *******
/*********************/
@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
section{
	padding: 60px 0;
}
section .section-title{
	text-align:center;
	color:#38aedd;
	margin-bottom:50px;
	text-transform:uppercase;
}
#what-we-do{
	background:#ffffff;
}
#what-we-do .card{
	padding: 1rem!important;
	border: none;
	margin-bottom:1rem;
	-webkit-transition: .5s all ease;
	-moz-transition: .5s all ease;
	transition: .5s all ease;
}
#what-we-do .card:hover{
	-webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
	-moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
	box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
}
#what-we-do .card .card-block{
	padding-left: 50px;
    position: relative;
}
#what-we-do .card .card-block a{
	color: #38aedd !important;
	font-weight:700;
	text-decoration:none;
}
#what-we-do .card .card-block a i{
	display:none;
	
}
#what-we-do .card:hover .card-block a i{
	display:inline-block;
	font-weight:700;
	
}
#what-we-do .card .card-block:before{
	font-family: FontAwesome;
    position: absolute;
    font-size: 39px;
    color: #38aedd;
    left: 0;
	-webkit-transition: -webkit-transform .2s ease-in-out;
    transition:transform .2s ease-in-out;
}
#what-we-do .card .block-1:before{
    content: "\f005";
}
#what-we-do .card .block-2:before{
    content: "\f005";
}
#what-we-do .card .block-3:before{
    content: "\f005";
}
#what-we-do .card .block-4:before{
    content: "\f209";
}
#what-we-do .card .block-5:before{
    content: "\f0a1";
}
#what-we-do .card .block-6:before{
    content: "\f218";
}
#what-we-do .card:hover .card-block:before{
	-webkit-transform: rotate(360deg);
	transform: rotate(360deg);	
	-webkit-transition: .5s all ease;
	-moz-transition: .5s all ease;
	transition: .5s all ease;
}






.services-section {
    background: rgba(0, 0, 0, 0) url("https://images.pexels.com/photos/326410/pexels-photo-326410.jpeg?w=940&h=650&auto=compress&cs=tinysrgb") no-repeat scroll left top / cover;
    padding: 104px 0 113px;
    position: relative;
}
.services-section::before {
    opacity: 0.8;
}
.black-trans-bg::before {
    background: #000 none repeat scroll 0 0;
    content: "";
    height: 100%;
    left: 0;
    opacity: 0.3;
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 0;
}
.services-section-banner {
    background-image: url("http://themeinnovation.com/demo2/html/build-up/img/home1/service-banner.png");
    background-position: left bottom;
    background-repeat: no-repeat;
    background-size: contain;
    bottom: 0;
    height: 100%;
    left: 1%;
    position: absolute;
    width: 34%;
}
.services-head {
    margin: 0 0 76px;
}
.services-head .services-title {
    color: #fff;
    font-size: 30px;
    font-weight: 500;
    letter-spacing: 0;
    line-height: 32px;
    position: relative;
    text-transform: uppercase;
    margin: 0 0 5px;
}
.services-title-border {
    background: #dadada none repeat scroll 0 0;
    display: inline-block;
    height: 1px;
    margin-left: 25px;
    position: relative;
    width: 120px;
}
.services-title-border::before {
    background: #fdb801 none repeat scroll 0 0;
    content: "";
    height: 1px;
    left: -25px;
    position: absolute;
    top: 0;
    width: 20px;
}
.services-head .services-text {
    color: #fff;
    font-size: 16px;
    line-height: 22px;
    margin: 7px 0 0;
}
.service-2 .service-box {
    margin: 0 0 72px;
}
.service-2 .service-box .iconset {
    float: left;
    width: 24%;
}
.service-2 .service-box .iconset i {
    color: #fff;
    font-size: 30px;
    height: 70px;
    line-height: 70px;
    position: relative;
    text-align: center;
    width: 82px;
}
.service-2 .service-box .servicesB-content {
    float: left;
    padding-left: 8px;
    width: 76%;
}
.service-2 .service-box .servicesB-content h4 {
    color: #fff;
    font-size: 18px;
    letter-spacing: 0;
    line-height: 22px;
    margin: 0 0 14px;
}
.service-2 .service-box .servicesB-content p {
    color: #fff;
    line-height: 24px;
}
.icon {
    color : #f4b841;
    padding:0px;
    font-size:40px;
    border: 1px solid #fdb801;
    border-radius: 100px;
    color: #fdb801;
    font-size: 28px;
    height: 70px;
    line-height: 70px;
    text-align: center;
    width: 70px;
}

</style>
<div id="carousel">
    <!--    
            IMPORTANT - This carousel can have a special class for a smooth transition "gsdk-transition". Since javascript cannot be overwritten, if you want to use it, you can use the bootstrap.js or bootstrap.min.js from the GSDKit or you can open your bootstrap.js file, search for "emulateTransitionEnd(600)" and change it with "emulateTransitionEnd(1200)"     
            
    -->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>
    
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="assets/img/oilplatform.jpg" alt="Awesome Image">
        </div>
        <div class="item">
          <img src="assets/img/tanker.jpg" alt="Awesome Image">
        </div>
        <!--div class="item">
          <img src="assets/img/freight.jpg" alt="Awesome Image">
        </div-->
      </div>
    
      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
        <span class="fa fa-angle-left"></span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
        <span class="fa fa-angle-right"></span>
      </a>
    </div>
</div> <!-- end carousel -->



<div class="main">
    <div class="container tim-container" style="max-width:800px; padding-top:100px">
       <h1 class="text-center">Who We Are <br> <br>
       <p>JEMOCONCEPT MEGA INT’L LIMITED is an indigenous Oil and Gas Energy Company fully registered with 
	   the Federal Government of Nigeria and other Regulatory agencies as well as key IOC’s operating in the region.
	   Established in 2017 and registered with the Corporate Affairs Commission. </p>
	   <!--     end extras -->        
    </div>
    <div class="space"></div>
<!-- end container -->
</div>
<!-- end main -->


<!--Begin Vision and Mision-->
<div class="container-fluid">
<div class="col-lg-6" id="vision">
<h1 class="text-center text-white"> Our Vision</h1>
<br>
<p class="text-center text-white vision-text">To become one of the leading indigenous Oil and Gas service companies in Nigeria and West Africa.</p>
</div>

<div class="col-lg-6" id="mission">
<h1 class="text-center text-blue"> Our Mision</h1>
<br>
<p class="text-center mission-text">To provide technology-driven and strong customer focused value adding services for
 the Oil and Gas industry in Nigeria and other West African countries.
</div>

</div>

<section id="what-we-do" style="padding-top:100px">
		<div class="container-fluid">
		<div style="padding-top:100px"></div>
			<h2 class="section-title mb-2 h1">Our Core Values</h2>
			<p class="text-center text-muted h5">Having and managing a correct marketing strategy is crucial in a fast moving market.</p>
			<div class="row mt-5">
			
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<div class="card">
						<div class="card-block block-1">
							<h3 class="card-title">Leadership</h3>
							<p class="card-text">We have taken a leading role and are actively setting the pace.</p>
							
						</div>
					</div>
				</div>
			
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<div class="card">
						<div class="card-block block-1">
							<h3 class="card-title">Innovation</h3>
							<p class="card-text">We leverage on modern technologies for service delivery..</p>
							
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<div class="card">
						<div class="card-block block-2">
							<h3 class="card-title">Collaboration</h3>
							<p class="card-text">Working as a team and with our various partners.</p>
							
						</div>
					</div>
				</div>
				
			</div>
			
				
	
		</div>	
	</section>
	<!-- /Services section -->
	
	
	
	<div class="services-section black-trans-bg">
        <div class="services-section-banner"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-4 col-sm-12 col-xs-12">
                    <div class="services-head">
                        <h2 class="services-title">Our Services</h2>
                        <span class="services-title-border"></span>
                        <p class="services-text">Dramatically maintain clicks and mortar solutions without functional</p>
                    </div>
                    <div class="services-content">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="service-2">
                                    <div class="service-box">
                                        <div class="clearfix">
                                            <div class="iconset">
                                                <span class="glyphicon glyphicon-cog icon"></span>
                                            </div>
                                            <div class="servicesB-content">
                                                <h4>Sales and Supply</h4>
                                                <p>We are the right people to ensure you get oil and gas tools, machinery and products of the highest quality. We don't compromise on that.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="service-box">
                                        <div class="clearfix">
                                            <div class="iconset">
                                                <span class="glyphicon glyphicon-cog icon"></span>
                                            </div>
                                            <div class="servicesB-content">
                                                <h4>Maintenance</h4>
                                                <p>Our highly-skilled personnel would ensure that your generators, pumps, estate utilities and other industrial machinery are in good working condition.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="service-2">
                                    <div class="service-box">
                                        <div class="clearfix">
                                            <div class="iconset">
                                                <span class="glyphicon glyphicon-cog icon"></span>
                                            </div>
                                            <div class="servicesB-content">
                                                <h4>Iportation and Supplies</h4>
                                                <p>With international links to leverage on, importing heavy duty equipment is certainly not a hassle for us. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="service-box">
                                        <div class="clearfix">
                                            <div class="iconset">
                                                <span class="glyphicon glyphicon-cog icon"></span>
                                            </div>
                                            <div class="servicesB-content">
                                                <h4>Manpower Supply</h4>
                                                <p>We supply skilled personnel to undertake the most complex Oil and Gas-related task, including water injection and gas compression tasks.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<section class="call-to-action">
    <div class="container">
        <div class="row">
    	    <div class="col-md-12 col-sm-8 text-center m-text-center">
                <h1 style="color:#38aedd">Need our services?</h1><br>
				<div class="col-md-12 col-sm-4 m-text-center">
                <a class="btn btn-primary">Take the Next Step</a> 
            </div>
            </div>
             
        </div>
    </div>
</section>
<?php
require_once('inc/footer.php');
?>