
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome to Fayne's Park!</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- CSS -->
	<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/settings.css" media="screen" />
	<link id="link" rel="stylesheet" type="text/css" media="screen" href="/assets/css/style.css">
	<!-- jQuery -->
	<script type="text/javascript" src="/assets/js/jquery.js"></script>
	<script type="text/javascript" src="/assets/js/modernizr.custom.js"></script>
</head>
<body>
	<div id="style-switcher-container">
		<ul id="style-switcher">
	        <li><a href="#" id="assets/css/style.css" style="background: #4cc3e9"></a></li>
	        <li><a href="#" id="assets/css/style-green.css" style="background: #4eb25c"></a></li>
	        <li><a href="#" id="assets/css/style-green2.css" style="background: #196e76"></a></li>
	        <li><a href="#" id="assets/css/style-redish.css" style="background: #c71c77"></a></li>
	        <li><a href="#" id="assets/css/style-purple.css" style="background: #734ba9"></a></li>
	        <li><a href="#" id="assets/css/style-orange.css" style="background: #e05048"></a></li>
	        <li><a href="#" id="assets/css/style.css" class="button-switcher">Reset style</a></li>
	    </ul>
	    <span class="switcher-toggle"><i class="icon-droplet"></i></span>
	</div>	
	<!-- Info Bar -->
	<div class="info-bar">
		<div class="container">
			<a class="info-adress" href="mailto:fayne.guo@avanquest.cn"><i class="icon-mail"></i> fayne.guo@avanquest.cn</a>
			<div class="social-media pull-right">	
				<ul>
					<li>Follow me on :</li>
					<li><a href="#"><i class="icon-twitter"></i></a></li>
					<li><a href="#"><i class="icon-facebook"></i></a></li>
					<li><a href="#"><i class="icon-gplus"></i></a></li>
				</ul>
			</div>	
		</div>
	</div>
	<!-- Navigation -->
	<div id="header_nav" class=" nav-container">
		<nav  class=" navbar  navbar-default container navigation" role="navigation">
		  	<!-- Brand and toggle get grouped for better mobile display -->
		  	<div class="navbar-header">
		    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		      		<span class="sr-only">Toggle navigation</span>
		      		<span class="icon-bar"></span>
		      		<span class="icon-bar"></span>
		      		<span class="icon-bar"></span>
		    	</button>
		    	<a class="navbar-brand" href="/admin/logout">{{ $name }}</a>
		  	</div>
		 	<!-- Collect the nav links, forms, and other content for toggling -->
		 	<div  class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">	
		    	<ul class="nav navbar-nav navbar-right list-menu dropdown">
			      	<li>
			      		<a class="selected" href="#home.html">HOME<i class="icon-down-open"></i></a>
				        <ul>
				        	<li><a href="/pass"><i class="icon-home"></i>Create Password</a></li>
				        	<li><a href="/customers"><i class="icon-home"></i>Customer</a></li>
				        	<li><a href="home-example3.html"><i class="icon-home"></i>HOME EXAMPLE 3</a></li>
				        	<li>
				        		<a href="#"><i class="icon-star"></i>SUBMENU 2 <i class="icon-right-open-1 more"></i></a>
				        		<ul>
				        			<li><a href="#"><i class="icon-star"></i>SUBMENU 2_1</a></li>
				        			<li><a href="#"><i class="icon-star"></i>SUBMENU 2_1</a></li>
				        			<li><a href="#"><i class="icon-star"></i>SUBMENU 2_1</a></li>
				        		</ul>
				        	</li>
				        	<li><a href="header-1.html"><i class="icon-infinity"></i>HEADER 1</a></li>
				        	<li><a href="header-2.html"><i class="icon-infinity"></i>HEADER 2</a></li>
				        	<li><a href="header-3.html"><i class="icon-infinity"></i>HEADER 3</a></li>
				        	<li><a href="header-4.html"><i class="icon-infinity"></i>HEADER 4</a></li>
				        </ul>
				    </li>
					<li>
						<a href="features.html">FEATURES</a>
					</li>
					<li>
						<a href="#pages">PAGES<i class="icon-down-open"></i></a>
						<ul>
				        	<li><a href="page-404.html"><i class="icon-lock-1"></i>404 PAGE</a></li>
				        	<li><a href="page-about-us.html"><i class="icon-vcard"></i>ABOUT US</a></li>
				        	<li><a href="page-faq.html"><i class="icon-help-circled-1"></i>FAQ</a></li>
				        	<li><a href="page-pricing.html"><i class="icon-tag"></i>PRICING</a></li>
				        	<li><a href="page-services.html"><i class="icon-briefcase"></i>SERVICES</a></li>
				        	<li><a href="portfolio-single.html"><i class="icon-picture"></i>PORTFOLIO</a></li>
				        	<li><a href="blog-home.html"><i class="icon-chat-1"></i>BLOG</a></li>
				        	<li><a href="contact.html"><i class="icon-location-1"></i>CONTACT</a></li>
				        </ul>
					</li>
					<li>
						<a href="#portfolio.html">PORTFOLIO<i class="icon-down-open"></i></a>
						<ul>
							<li><a href="portfolio-two-cols.html"><i class="icon-picture"></i>2 COLUMNS</a></li>
							<li><a href="portfolio-three-cols.html"><i class="icon-picture"></i>3 COLUMNS</a></li>
				        	<li><a href="portfolio-four-cols.html"><i class="icon-picture"></i>4 COLUMNS</a></li>
				        	<li><a href="portfolio-single.html"><i class="icon-picture"></i>SINGLE</a></li>
				        </ul>
					</li>
					<li>
						<a href="#blog.html">BLOG<i class="icon-down-open"></i></a>
						<ul>
				        	<li><a href="blog-home.html"><i class="icon-chat-1"></i>HOME BLOG</a></li>
				        	<li><a href="blog-single.html"><i class="icon-chat-1"></i>SINGLE POST</a></li>
							<li>
					        	<a href="#"><i class="icon-star"></i>SUBMENU 2 <i class="icon-right-open-1 more"></i></a>
					        	<ul class="left">
					        		<li><a href="#"><i class="icon-star"></i>SUBMENU 2_1</a></li>
					        		<li><a href="#"><i class="icon-star"></i>SUBMENU 2_1</a></li>
					        		<li><a href="#"><i class="icon-star"></i>SUBMENU 2_1</a></li>
					        	</ul>
					        </li>
				        </ul>
					</li>
					<li>
						<a href="contact.html">CONTACT</a>
					</li>
		    	</ul>
		  	</div>
		</nav>
	</div>
	<!-- Slider -->
	<div class="tp-banner-container">
		<div class="tp-banner" >
			<ul>
				<!-- SLIDE 1 -->
				<li data-transition="fade"  data-masterspeed="1000" >
					<!-- MAIN IMAGE -->
					<img src="/assets/img/slider/slide1.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
					<!-- LAYERS -->
				   	<div class="caption sfl medium-text-custom" data-start="1200" data-x="900" data-y="185" data-speed="1300" data-easing="easeOutBack">Super clean &#38;</div>
					<div class="caption sfr large-text-custom" data-start="1500" data-x="895" data-y="260" data-speed="800" data-easing="easeOutExpo">Responsive html</div>
				   	<div class="caption sfl medium-text-custom" data-start="1800" data-x="1330" data-y="415" data-speed="1200" data-easing="easeOutBack">design template</div>
				   	<!-- Icons -->
				   	<div class="caption sfb icon-container hidden-xs" data-start="2100" data-x="960" data-y="580" data-speed="1200" data-easing="easeOutBack">
				   	<div class="icon-sr color-1"><i class="icon-mobile"></i></div>
				   	<div class="text-sr">HTML&amp;CSS</div>
				   	</div>

				   	<div class="caption sfb icon-container hidden-xs" data-start="2400" data-x="1140" data-y="580" data-speed="1200" data-easing="easeOutBack">
				   	<div class="icon-sr color-2"><i class="icon-heart"></i></div>
				   	<div class="text-sr">Wordpress</div>
				   	</div>

				   	<div class="caption sfb icon-container hidden-xs" data-start="2700" data-x="1320" data-y="580" data-speed="1200" data-easing="easeOutBack">
				   	<div class="icon-sr color-3"><i class="icon-brush"></i></div>
				   	<div class="text-sr">Graphic Design</div>
				   	</div>

				   	<div class="caption sfb icon-container hidden-xs" data-start="3000" data-x="1500" data-y="580" data-speed="1200" data-easing="easeOutBack">
				   	<div class="icon-sr color-4"><i class="icon-hourglass"></i></div>
				   	<div class="text-sr">Performance</div>
				   	</div>
				</li>
				<!-- SLIDE 2 -->
				<li data-transition="fade"  data-masterspeed="1000" >
					<!-- MAIN IMAGE -->
					<img src="/assets/img/slider/slide2.jpg"  alt="slidebg2"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
					<!-- LAYERS -->
				   	<div class="caption sfl medium-text-custom" data-start="1200" data-x="900" data-y="185" data-speed="1300" data-easing="easeOutBack">Everything you</div>
					<div class="caption sfr large-text-custom" data-start="1500" data-x="895" data-y="260" data-speed="800" data-easing="easeOutExpo">Need for a quality</div>
				   	<div class="caption sfl medium-text-custom" data-start="1800" data-x="1330" data-y="415" data-speed="1200" data-easing="easeOutBack">site in HTML</div>
				   	<!-- Icons -->
				   	<div class="caption sfb icon-container hidden-xs" data-start="2100" data-x="960" data-y="580" data-speed="1200" data-easing="easeOutBack">
				   	<div class="icon-sr color-1"><i class="icon-mobile"></i></div>
				   	<div class="text-sr">HTML&amp;CSS</div>
				   	</div>

				   	<div class="caption sfb icon-container hidden-xs" data-start="2400" data-x="1140" data-y="580" data-speed="1200" data-easing="easeOutBack">
				   	<div class="icon-sr color-2"><i class="icon-heart"></i></div>
				   	<div class="text-sr">Wordpress</div>
				   	</div>

				   	<div class="caption sfb icon-container hidden-xs" data-start="2700" data-x="1320" data-y="580" data-speed="1200" data-easing="easeOutBack">
				   	<div class="icon-sr color-3"><i class="icon-brush"></i></div>
				   	<div class="text-sr">Graphic Design</div>
				   	</div>

				   	<div class="caption sfb icon-container hidden-xs" data-start="3000" data-x="1500" data-y="580" data-speed="1200" data-easing="easeOutBack">
				   	<div class="icon-sr color-4"><i class="icon-hourglass"></i></div>
				   	<div class="text-sr">Performance</div>
				   	</div>
				</li>
				<!-- SLIDE 3 -->
				<li data-transition="fade"  data-masterspeed="1000" >
					<!-- MAIN IMAGE -->
					<img src="/assets/img/slider/slide3.jpg"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
					<!-- LAYERS -->
				   	<div class="caption sfr medium-text-custom" data-start="1200" data-x="180" data-y="215" data-speed="1000" data-easing="easeOutBack">Elegant &amp; multipurpose</div>
					<div class="caption sfl large-text-custom-min" data-start="1500" data-x="175" data-y="310" data-speed="800" data-easing="easeOutExpo">Business or corporate</div>
				   	<div class="caption sfr medium-text-custom" data-start="1800" data-x="760" data-y="465" data-speed="1200" data-easing="easeOutBack">site in HTML</div>
				   	<!-- Icons -->
				   	<div class="caption sfb icon-container hidden-xs" data-start="2100" data-x="250" data-y="620" data-speed="1200" data-easing="easeOutBack">
				   	<div class="icon-sr color-1"><i class="icon-mobile"></i></div>
				   	<div class="text-sr">HTML&amp;CSS</div>
				   	</div>

				   	<div class="caption sfb icon-container hidden-xs" data-start="2400" data-x="440" data-y="620" data-speed="1200" data-easing="easeOutBack">
				   	<div class="icon-sr color-2"><i class="icon-heart"></i></div>
				   	<div class="text-sr">Wordpress</div>
				   	</div>

				   	<div class="caption sfb icon-container hidden-xs" data-start="2700" data-x="630" data-y="620" data-speed="1200" data-easing="easeOutBack">
				   	<div class="icon-sr color-3"><i class="icon-brush"></i></div>
				   	<div class="text-sr">Graphic Design</div>
				   	</div>

				   	<div class="caption sfb icon-container hidden-xs" data-start="3000" data-x="820" data-y="620" data-speed="1200" data-easing="easeOutBack">
				   	<div class="icon-sr color-4"><i class="icon-hourglass"></i></div>
				   	<div class="text-sr">Performance</div>
				   	</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- Spacing Block -->
	<div class="spacing-block clearfix" style="height: 30px"></div>
	<!-- Boxes -->
	<div class="container boxes">
		<div class="row">
			<div class="media col-sm-4 scaleIn">
				<div class="boxes-icon pull-left">
					<img src="/assets/img/elements/icon-1.png" alt="Icon">
				</div>
				<div class="media-body">
					<h4 class="media-heading">Very Easy To Customize</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae ipsum nibh. Nunc eget gravida.</p>
				</div>
			</div>
			<div class="media col-sm-4 scaleIn">
				<div class="boxes-icon pull-left">
					<img src="/assets/img/elements/icon-2.png" alt="Icon">
				</div>
				<div class="media-body">
					<h4 class="media-heading">Super responsive design</h4>
					<p>Lorem ipsum dolor sit amet, 
					consectetur adipiscing elit. Ut vitae
					ipsum nibh. Nunc eget gravida</p>
				</div>
			</div>
			<div class="media col-sm-4 scaleIn">
				<div class="boxes-icon pull-left">
					<img src="/assets/img/elements/icon-3.png" alt="Icon">
				</div>
				<div class="media-body">
					<h4 class="media-heading">Bootstrap 3 &#38; HTML 5 + CSS3</h4>
					<p>Lorem ipsum dolor sit amet, 
					consectetur adipiscing elit. Ut vitae
					ipsum nibh. Nunc eget gravida</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="media col-sm-4 scaleIn">
				<div class="boxes-icon pull-left">
					<img src="/assets/img/elements/icon-4.png" alt="Icon">
				</div>
				<div class="media-body">
					<h4 class="media-heading">Dedicated Support</h4>
					<p>Lorem ipsum dolor sit amet, 
					consectetur adipiscing elit. Ut vitae
					ipsum nibh. Nunc eget gravida</p>
				</div>
			</div>
			<div class="media col-sm-4 scaleIn">
				<div class="boxes-icon pull-left">
					<img src="/assets/img/elements/icon-5.png" alt="Icon">
				</div>
				<div class="media-body">
					<h4 class="media-heading">Powerful Elements</h4>
					<p>Lorem ipsum dolor sit amet, 
					consectetur adipiscing elit. Ut vitae
					ipsum nibh. Nunc eget gravida</p>
				</div>
			</div>
			<div class="media col-sm-4 scaleIn">
				<div class="boxes-icon pull-left">
					<img src="/assets/img/elements/icon-6.png" alt="Icon">
				</div>
				<div class="media-body">
					<h4 class="media-heading">Aweseome Design Concept</h4>
					<p>Lorem ipsum dolor sit amet, 
					consectetur adipiscing elit. Ut vitae
					ipsum nibh. Nunc eget gravida</p>
				</div>
			</div>
		</div>
	</div>
	<!-- Spacing Block -->
	<div class="spacing-block clearfix" style="height: 120px"></div>
	<!-- Portfolio -->
	<div class="portfolio-bg">
		<div class="container">
			<div class="row portfolio">
				<h2 class="fadeL-Big">Our latest work in portfolio</h2>
				<p class="fadeR-Big">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lacus nibh, vulputate eu diam non, sodales tincidunt ligula. Pellentesque molestie nisl in dolor gravida commodo. Donec et faucibus sapien.</p>
				<nav class="categories-portfolio  fadeInUp">
					<ul data-option-key="filter" class="option-set">
						<li>
							<a class="selected" data-option-value=".web-design">Web-Design <span class="arrow"></span></a>
						</li>
						<li>
							<a data-option-value=".ilustration">Ilustration <span class="arrow"></span></a>
						</li>
						<li>
							<a data-option-value=".creative">Creative <span class="arrow"></span></a>
						</li>
					</ul>
				</nav>
			</div>	
		</div>
		<nav id="container" class="posts-list container fadeInUp-Big">
			<ul>
				<li class="element web-design creative post-li col-xs-6 col-sm-3">
					<div class="view">
						<img class="img-responsive" src="/assets/img/portfolio/pic1.jpg" alt="post-img">
						<div class="mask"> 
						    <a href="portfolio-single.html" class="link"><i class="icon-plus"></i></a>
					    </div>  
					</div>
					<div class="info-block">
						<i class="icon-camera"></i>
						<h4>Super clean design</h4>
						<p>HTML Templates</p>
					</div>
				</li>
				<li class="element web-design ilustration post-li col-xs-6 col-sm-3">
					<div class="view">
						<img class="img-responsive" src="/assets/img/portfolio/pic2.jpg" alt="post-img">
						<div class="mask"> 
						    <a href="portfolio-single.html" class="link"><i class="icon-plus"></i></a>
					    </div>  
					</div>
					<div class="info-block">
						<i class="icon-chart-pie yellow"></i>
						<h4>Bootstrap 3.0</h4>
						<p>Graphic Design</p>
					</div>
				</li>
				<li class="element web-design ilustration  post-li col-xs-6 col-sm-3">
					<div class="view">
						<img class="img-responsive" src="/assets/img/portfolio/pic3.jpg" alt="post-img">
						<div class="mask"> 
						    <a href="portfolio-single.html" class="link"><i class="icon-plus"></i></a>
					    </div>  
					</div>
					<div class="info-block">
						<i class="icon-trash orange"></i>
						<h4>HTML5 Template</h4>
						<p>Responsive html</p>
					</div>
				</li>
				<li class="element  web-design creative post-li col-xs-6 col-sm-3">
					<div class="view">
						<img class="img-responsive" src="/assets/img/portfolio/pic4.jpg" alt="post-img">
						<div class="mask"> 
						    <a href="portfolio-single.html" class="link"><i class="icon-plus"></i></a>
					    </div>  
					</div>
					<div class="info-block">
						<i class="icon-chat-1 red"></i>
						<h4>Slider Revolution</h4>
						<p>Clean design</p>
					</div>
				</li>
				<!-- Second row -->
				<li class="element web-design ilustration  post-li col-xs-6 col-sm-3">
					<div class="view">
						<img class="img-responsive" src="/assets/img/portfolio/pic5.jpg" alt="post-img">
						<div class="mask"> 
						    <a href="portfolio-single.html" class="link"><i class="icon-plus"></i></a>
					    </div>  
					</div>
					<div class="info-block">
						<i class="icon-chat-1 orange"></i>
						<h4>Two layout blog</h4>
						<p>HTML Templates</p>
					</div>
				</li>
				<li class="element web-design creative  post-li col-xs-6 col-sm-3">
					<div class="view">
						<img class="img-responsive" src="/assets/img/portfolio/pic6.jpg" alt="post-img">
						<div class="mask"> 
						    <a href="portfolio-single.html" class="link"><i class="icon-plus"></i></a>
					    </div>  
					</div>
					<div class="info-block">
						<i class="icon-trash yellow"></i>
						<h4>Features</h4>
						<p>Graphic Design</p>
					</div>
				</li>
				<li class="element web-design creative  post-li col-xs-6 col-sm-3">
					<div class="view">
						<img class="img-responsive" src="/assets/img/portfolio/pic7.jpg" alt="post-img">
						<div class="mask"> 
						    <a href="portfolio-single.html" class="link"><i class="icon-plus"></i></a>
					    </div>  
					</div>
					<div class="info-block">
						<i class="icon-chart-pie green"></i>
						<h4>Two models header</h4>
						<p>Responsive html</p>
					</div>
				</li>
				<li class="element web-design ilustration  post-li col-xs-6 col-sm-3">
					<div class="view">
						<img class="img-responsive" src="/assets/img/portfolio/pic8.jpg" alt="post-img">
						<div class="mask"> 
						    <a href="portfolio-single.html" class="link"><i class="icon-plus"></i></a>
					    </div>  
					</div>
					<div class="info-block">
						<i class="icon-camera red"></i>
						<h4>6 custom colors</h4>
						<p>Clean design</p>
					</div>
				</li>
			</ul>
		</nav>	
	</div>
	<!-- Product presentation -->
	<div class="product-presentation">
		<div class="container">
			<div class="col-md-5 product-image fadeInUp-Big">
				<img src="/assets/img/home/macbook-1.png" alt="Image" class="img-responsive product-macbook">
			</div>
			<div class="col-md-7 description-product fadeInDown">
				<div class="media">
					<div class="boxes-icon pull-left">
						<img src="/assets/img/home/presentation-icon-1.png" alt="Icon">
					</div>
					<div class="media-body">
						<h4 class="media-heading">Easily customized and personalized for your website</h4>
						<p>Donec luctus porttitor justo eget gravida. Duis dignissim ultrices ipsum, non sollicitudin tortor ultrices nec. Phasellus posuere arcu vestibulum, malesuada est eget, rutrum tortor.</p>
					</div>
				</div>
				<div class="media">
					<div class="boxes-icon pull-left">
						<img src="/assets/img/home/presentation-icon-2.png" alt="Icon">
					</div>
					<div class="media-body">
						<h4 class="media-heading">Include 6 custom colors variant and two models of header</h4>
						<p>Donec luctus porttitor justo eget gravida. Duis dignissim ultrices ipsum, non sollicitudin tortor ultrices nec. Phasellus posuere arcu vestibulum, malesuada est eget, rutrum tortor.</p>
					</div>
				</div>
				<div class="media">
					<div class="boxes-icon pull-left">
						<img src="/assets/img/home/presentation-icon-3.png" alt="Icon">
					</div>
					<div class="media-body">
						<h4 class="media-heading">Bootstrap 3.0 &#38; slider revolution (12$)</h4>
						<p>Donec luctus porttitor justo eget gravida. Duis dignissim ultrices ipsum, non sollicitudin tortor ultrices nec. Phasellus posuere arcu vestibulum, malesuada est eget, rutrum tortor.</p>
					</div>
				</div>
				<div class="media">
					<div class="boxes-icon pull-left">
						<img src="/assets/img/home/presentation-icon-4.png" alt="Icon">
					</div>
					<div class="media-body">
						<h4 class="media-heading">Best quality support, available 7/24 hours</h4>
						<p>Donec luctus porttitor justo eget gravida. Duis dignissim ultrices ipsum, non sollicitudin tortor ultrices nec. Phasellus posuere arcu vestibulum, malesuada est eget, rutrum tortor.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Spacing Block -->
	<div class="spacing-block clearfix" style="height: 130px"></div>
	<!-- Services -->
	<div class="container services">
		<div class="row heading-category fadeInUp">
			<h2>Our Services</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lacus nibh, vulputate eu diam non, sodales tincidunt ligula. Pellentesque molestie nisl in dolor gravida commodo. Donec et faucibus sapien.</p>
		</div>
		<div class="row circles-services">
			<div class="col-sm-3 circle-container scaleIn">
				<div class="circle">
					<i class="icon-globe"></i>
				</div>
				<div class="info">
					<h4>Web Development</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
					<a href="#" class="read-more btn btn-primary btn-sm"><i class="icon-right-circled"></i>Read more</a>
				</div>
			</div>
			<div class="col-sm-3 circle-container scaleIn">
				<div class="circle yellow">
					<i class="icon-rocket"></i>
				</div>
				<div class="info">
					<h4>Business Consulting</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
					<a href="#" class="read-more btn btn-primary btn-sm"><i class="icon-right-circled"></i>Read more</a>
				</div>
			</div>
			<div class="col-sm-3 circle-container scaleIn">
				<div class="circle orange">
					<i class="icon-user-add"></i>
				</div>
				<div class="info">
					<h4>Brand Building</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
					<a href="#" class="read-more btn btn-primary btn-sm"><i class="icon-right-circled"></i>Read more</a>
				</div>
			</div>
			<div class="col-sm-3 circle-container scaleIn">
				<div class="circle red">
					<i class="icon-brush"></i>
				</div>
				<div class="info">
					<h4>Social Marketing</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
					<a href="#" class="read-more btn btn-primary btn-sm"><i class="icon-right-circled"></i>Read more</a>
				</div>
			</div>
		</div>
	</div>
	<!-- Spacing Block -->
	<div class="spacing-block clearfix" style="height: 130px"></div>
	<!-- Video Parallax -->
	<div class="video-parallax ">
		<div class="video-container clearfix">
			<video class="videolarge" autoplay loop poster="assets/video/poster.jpg">
				<source src="/assets/video/genesis_720.mp4" type="video/mp4" />
				<source src="/assets/video/genesis_480.webm" type="video/webm" />  
			</video>
			<video class="videosmall" autoplay loop poster="assets/video/poster.jpg">
				<source src="/assets/video/genesis_480.mp4" type="video/mp4" />
				<source src="/assets/video/genesis_480.webm" type="video/webm" />  
			</video>
		</div>
		<div class="description-container container rotateInX">
			<h1>Integer elementum pellentesque <br> mauris sed interdum vitae</h1>
			<p>Pellentesque sit amet orci et massa consequat id sed neque</p>
			<div class="row">
				<a href="#" class="btn btn-gradient-blue first btn-lg">View More</a>
				<a href="#" class="btn btn-gradient-green ">Buy Now</a>
			</div>
		</div>
	</div>
	<!-- Team -->
	<div class="team">
		<div class="container">
			<div class="row heading-category fadeR">
				<h2>Our team with the best members</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lacus nibh, vulputate eu diam non, sodales tincidunt ligula. Pellentesque molestie nisl in dolor gravida commodo. Donec et faucibus sapien.</p>
			</div>
			<div class="row members">
				<div class="member col-sm-3 col-xs-6 fadeInUp">
					<i class="icon-brush icon"></i>
					<img class="img-responsive" src="/assets/img/home/member-1.jpg" alt="member">
					<div class="info">
						<h5>Tilvar Claudiu</h5>
						<span class="skills">Graphic web-designer</span>
						<p>Lorem ipsum dolor sit rhoncus nisi id felis fringilla, eget lobortis augue at nibh scelerisque nisi varius egestas.</p>
						<ul class="social">
							<li><a href="#" class="icon-facebook"></a></li>
							<li><a href="#" class="icon-twitter"></a></li>
							<li><a href="#" class="icon-gplus"></a></li>
							<li><a href="#" class="icon-dribbble"></a></li>
							<li><a href="#" class="icon-vimeo"></a></li>
						</ul>
					</div>
				</div>
				<div class="member col-sm-3 col-xs-6 fadeInDown">
					<i class="icon-mail icon yellow"></i>
					<img class="img-responsive" src="/assets/img/home/member-2.jpg" alt="member">
					<div class="info">
						<h5>Alex Velea</h5>
						<span class="skills">Coder HTML5&amp;CSS3</span>
						<p>Lorem ipsum dolor sit rhoncus nisi id felis fringilla, eget lobortis augue at nibh scelerisque nisi varius egestas.</p>
						<ul class="social">
							<li><a href="#" class="icon-facebook"></a></li>
							<li><a href="#" class="icon-twitter"></a></li>
							<li><a href="#" class="icon-gplus"></a></li>
							<li><a href="#" class="icon-dribbble"></a></li>
							<li><a href="#" class="icon-vimeo"></a></li>
						</ul>
					</div>
				</div>
				<div class="member col-sm-3 col-xs-6 fadeInUp">
					<i class="icon-cog icon orange"></i>
					<img class="img-responsive" src="/assets/img/home/member-3.jpg" alt="member">
					<div class="info">
						<h5>GG Mitrescu</h5>
						<span class="skills">Graphic web-designer</span>
						<p>Lorem ipsum dolor sit rhoncus nisi id felis fringilla, eget lobortis augue at nibh scelerisque nisi varius egestas.</p>
						<ul class="social">
							<li><a href="#" class="icon-facebook"></a></li>
							<li><a href="#" class="icon-twitter"></a></li>
							<li><a href="#" class="icon-gplus"></a></li>
							<li><a href="#" class="icon-dribbble"></a></li>
							<li><a href="#" class="icon-vimeo"></a></li>
						</ul>
					</div>
				</div>
				<div class="member col-sm-3 col-xs-6 fadeInDown">
					<i class="icon-heart icon blue"></i>
					<img class="img-responsive" src="/assets/img/home/member-5.jpg" alt="member">
					<div class="info">
						<h5>Boier Bibescu</h5>
						<span class="skills">Coder HTML5&amp;CSS3</span>
						<p>Lorem ipsum dolor sit rhoncus nisi id felis fringilla, eget lobortis augue at nibh scelerisque nisi varius egestas.</p>
						<ul class="social">
							<li><a href="#" class="icon-facebook"></a></li>
							<li><a href="#" class="icon-twitter"></a></li>
							<li><a href="#" class="icon-gplus"></a></li>
							<li><a href="#" class="icon-dribbble"></a></li>
							<li><a href="#" class="icon-vimeo"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Spacing Block -->
	<div class="spacing-block clearfix" style="height: 130px"></div>
	<!-- Testimonials -->
	<div class="container testimonials">
			<h2 class="fadeInDown">WHAT OUR CLIENTS SAY ABOUT US</h2>
			<div class="media col-sm-6 testimonial-1 scaleIn">
				<div class="testimonial-box pull-left">
					<img src="/assets/img/home/avatar4.jpg" alt="Avatar IMG">
				</div>
				<div class="media-body">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam placerat, enim molestie sagittis sagittis, ligula mauris hendrerit leo, rhoncus varius  tellus ante ac augue. Quisque eu varius urna.</p>
					<h5 class="media-heading">Tilvar Claudiu</h5>
					<p>Web Designer - <a href="#">RocketDesign</a></p>
				</div>
			</div>
			<div class="media col-sm-6 testimonial-2 scaleIn">
				<div class="testimonial-box pull-left">
					<img src="/assets/img/home/avatar2.jpg" alt="Avatar IMG">
				</div>
				<div class="media-body">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam placerat, enim molestie sagittis sagittis, ligula mauris hendrerit leo, rhoncus varius  tellus ante ac augue. Quisque eu varius urna.</p>
					<h5 class="media-heading">Anda Adam</h5>
					<p>Marketing - <a href="#">PixelTutorial</a></p>
				</div>
			</div>
			<div class="media col-sm-6 testimonial-3 scaleIn">
				<div class="testimonial-box pull-left">
					<img src="/assets/img/home/avatar3.jpg" alt="Avatar IMG">
				</div>
				<div class="media-body">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam placerat, enim molestie sagittis sagittis, ligula mauris hendrerit leo, rhoncus varius  tellus ante ac augue. Quisque eu varius urna.</p>
					<h5 class="media-heading">GG Mitrescu</h5>
					<p>Web Developer - <a href="#">TutiTuts</a></p>
				</div>
			</div>
			<div class="media col-sm-6 scaleIn">
				<div class="testimonial-box pull-left">
					<img src="/assets/img/home/avatar1.jpg" alt="Avatar IMG">
				</div>
				<div class="media-body">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam placerat, enim molestie sagittis sagittis, ligula mauris hendrerit leo, rhoncus varius  tellus ante ac augue. Quisque eu varius urna.</p>
					<h5 class="media-heading">Andreea Balan</h5>
					<p>Graphic Designer - <a href="#">Zoom Doc</a></p>
				</div>
			</div>
	</div>
	<!-- Spacing Block -->
	<div class="spacing-block clearfix" style="height: 130px"></div>
	<!-- Footer -->
	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-3 contact">
					<h5>Contact</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquam tellus et gravida imperdiet. Etiam eget congue mauris. Pellentesque eu congue elit nunc.</p>
					<ul>
						<li><i class="icon-compass"></i>477582 Street Name, Country</li>
						<li><i class="icon-phone"></i>+012 385 732</li>
						<li><i class="icon-mail"></i>office@rocket-design.net</li>
						<li><i class="icon-globe"></i>www.rocket-design.net</li>
					</ul>
				</div>
				<div class="col-sm-4 blog-news">
					<h5>Latest news from blog</h5>
					<div class="media post-blog-1">
						<a href="#" class="pull-left">
							<img src="/assets/img/home/img-blog-news-1.jpg" alt="img" class="media-object img-responsive">
						</a>
						<div class="media-body">
							<p>Lorem ipsum dolor sit amet, consectetur 
							adipiscing elit. Aenean aliquam tellus et 
							gravida imperdiet. Etiam eget congue 
							mauris. Pellentesque eu congue elit nunc. <a href="#" class="icon-right-open-big"></a></p>
						</div>
					</div>
					<div class="media post-blog-1">
						<a href="#" class="pull-left">
							<img src="/assets/img/home/img-blog-news-2.jpg" alt="img" class="media-object img-responsive">
						</a>
						<div class="media-body">
							<p>Lorem ipsum dolor sit amet, consectetur 
							adipiscing elit. Aenean aliquam tellus et 
							gravida imperdiet. Etiam eget congue 
							mauris. Pellentesque eu congue elit nunc. <a href="#" class="icon-right-open-big"></a></p>
						</div>
					</div>
				</div>
				<div class="col-sm-2 flicker">
					<h5>Photos of flicker</h5>
					<ul class="clearfix">
						<li><a href="#"><img src="/assets/img/elements/flicker-1.jpg" alt="flicker"></a></li>
						<li><a href="#"><img src="/assets/img/elements/flicker-2.jpg" alt="flicker"></a></li>
						<li><a href="#"><img src="/assets/img/elements/flicker-3.jpg" alt="flicker"></a></li>
						<li><a href="#"><img src="/assets/img/elements/flicker-4.jpg" alt="flicker"></a></li>
						<li><a href="#"><img src="/assets/img/elements/flicker-5.jpg" alt="flicker"></a></li>
						<li><a href="#"><img src="/assets/img/elements/flicker-6.jpg" alt="flicker"></a></li>
						<li><a href="#"><img src="/assets/img/elements/flicker-7.jpg" alt="flicker"></a></li>
						<li><a href="#"><img src="/assets/img/elements/flicker-8.jpg" alt="flicker"></a></li>
						<li><a href="#"><img src="/assets/img/elements/flicker-9.jpg" alt="flicker"></a></li>
						<li><a href="#"><img src="/assets/img/elements/flicker-10.jpg" alt="flicker"></a></li>
						<li><a href="#"><img src="/assets/img/elements/flicker-11.jpg" alt="flicker"></a></li>
						<li><a href="#"><img src="/assets/img/elements/flicker-12.jpg" alt="flicker"></a></li>
						<li><a href="#"><img src="/assets/img/elements/flicker-13.jpg" alt="flicker"></a></li>
						<li><a href="#"><img src="/assets/img/elements/flicker-14.jpg" alt="flicker"></a></li>
						<li><a href="#"><img src="/assets/img/elements/flicker-15.jpg" alt="flicker"></a></li>
						<li><a href="#"><img src="/assets/img/elements/flicker-16.jpg" alt="flicker"></a></li>
					</ul>
				</div>
				<div class="col-sm-3 about-footer">
					<div class="about-footer-container">
						<h5>About our company</h5>
						<a href="#"><img src="/assets/img/home/about-footer-pic.jpg" alt="About pic"></a>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas egestas semper magna, sed tincidunt leo id sed.</p>
						<p class="second">Sed consectetur nulla in ante semper, id nisi eleifend. Nunc eget tempor purus. Morbi id consectetur congue elit ac tempor sed vel laoreet nunc, non cursus lorem donec.  Morbi id consectetur congue .</p>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="col-sm-12 border"></div>
				<p>&copy; Copyright 2014 Genesis by www.rocket-design.net. All Rights Reserved.</p>
				<div class="social-media pull-right">	
					<ul>
						<li><a href="#"><i class="icon-twitter"></i></a></li>
						<li><a href="#"><i class="icon-facebook"></i></a></li>
						<li><a href="#"><i class="icon-gplus"></i></a></li>
						<li><a href="#"><i class="icon-dribbble"></i></a></li>
						<li><a href="#"><i class="icon-vimeo"></i></a></li>
					</ul>
				</div>	
			</div>
		</div>
	</div>
	<!-- Go to top button -->
	<div class="back-to-top icon-up-open"></div>
	<!--  jQuery -->
	<script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/assets/js/respond.min.js"></script>
	<script type="text/javascript" src="/assets/js/jquery.inview.js"></script>
	<script type="text/javascript" src="/assets/js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="/assets/js/js.js"></script>
	<!-- jQuery REVOLUTION Slider  -->
	<script type="text/javascript" src="/assets/js/jquery.themepunch.plugins.min.js"></script>
	<script type="text/javascript" src="/assets/js/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript"> 
		jQuery(document).ready(function($) {
			"use strict";
			jQuery('.tp-banner').revolution(
			{
				delay:5000,
				startwidth:1920,
				startheight:870,
				hideThumbs:10,
				fullWidth:"on",
				fullScreen:"off",
				fullScreenOffsetContainer: "",
				navigationStyle: "off",
				shadow: 0,
			});
		});
	</script>
	<!-- NiceScroll -->
	<script type="text/javascript" src="/assets/js/jquery.nicescroll.min.js"></script>
	<script>
		jQuery(document).ready(function($) {
			"use strict";
		      	$("html").niceScroll({
		      		zindex:"25000",
			      	cursoropacitymin:0.2,
			      	cursoropacitymax:0.3,
			      	cursorcolor:"#000",
			      	cursorwidth:"10px",
			      	cursorborder:"none",
			      	cursorborderradius:"4px",
			      	autohidemode:true,
		      	});
		    }
		);
	</script>
	<!-- ======== style switcher ======== -->
	<script type="text/javascript" src="/assets/js/jquery.cookie.js"></script>
	<script>
	    if($.cookie("genesis2")) {
	        $("link#link").attr("href",$.cookie("genesis2"));
	    }
	    $(document).ready(function() { 
	      	$("#style-switcher li a").click(function() { 
		        $("link#link").attr("href",$(this).attr('id'));
		        $.cookie("genesis2",$(this).attr('id'), { path: '/'});
		        return false;
	      	});
	      	// show-hide color pallete
	      	$('#style-switcher-container span.switcher-toggle').click(function(e){
				e.preventDefault();
				var div = $('#style-switcher-container');
				console.log(div.css('left'));
				if (div.css('left') === '-120px') {
					$('#style-switcher-container').animate({
						left: '0px'
					}); 
				} else {
					$('#style-switcher-container').animate({
						left: '-120px'
					});
				}
			})
	   	});
	</script>
</body>
</html>