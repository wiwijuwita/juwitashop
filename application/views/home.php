<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>JuwitaShop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	
<!-- Bootstrap style --> 
    <link id="callCss" rel="stylesheet" href="<?php echo base_url('assets/bootshop/bootstrap.min.css'); ?>" media="screen"/>
    <link href="<?php echo base_url('assets/css/base.css'); ?>" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive -->	
	<link href="<?php echo base_url('assets/css/bootstrap-responsive.min.css'); ?>" rel="stylesheet"/>
	<link href="<?php echo base_url('assets/css/font-awesome.css'); ?>" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->	
	<link href="<?php echo base_url('assets/js/google-code-prettify/prettify.css'); ?>" rel="stylesheet"/>
<!-- fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/ico/favicon.ico'); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url('assets/images/ico/apple-touch-icon-144-precomposed.png'); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url('assets/images/ico/apple-touch-icon-114-precomposed.png'); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url('assets/images/ico/apple-touch-icon-72-precomposed.png'); ?>">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url('assets/images/ico/apple-touch-icon-57-precomposed.png'); ?>">
	<style type="text/css" id="enject"></style>
  </head>
<body>
<div id="header">
<div class="container">
<!-- Navbar ================================================== -->
<div id="logoArea" class="navbar">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>
  <div class="navbar-inner">
    <a class="brand" href="index.html"><img src="<?php echo base_url('assets/images/logo1.png'); ?>" alt="Bootsshop"/></a>
		<form class="form-inline navbar-search" method="post" action="products.html" >
		<input id="srchFld" class="srchTxt" type="text" />
		  <select class="srchTxt">
			<option>All</option>
			<option>CLOTHES </option>
			<option>FOOD AND BEVERAGES </option>
			<option>HEALTH & BEAUTY </option>
			<option>SPORTS & LEISURE </option>
			<option>BOOKS & ENTERTAINMENTS </option>
		</select> 
		  <button type="submit" id="submitButton" class="btn btn-primary">Go</button>
    </form>
    <ul id="topMenu" class="nav pull-right">
	 <li class=""><a href="special_offer.html">Specials Offer</a></li>
	 <li class=""><a href="normal.html">Delivery</a></li>
	 <li class=""><a href="contact.html">Contact</a></li>
	 <li class="">
	 <a href="<?php echo base_url('#login');?>" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-success">Login</span></a>
	<div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3>Login Member</h3>
		  </div>
		  <div class="modal-body">
			<?php echo form_open('MemberLogin/prosesLogin');?>
			  <div class="control-group">								
				<input type="text" id="inputEmail" placeholder="Email" name="email_member">
			  </div>
			  <div class="control-group">
				<input type="password" id="inputPassword" placeholder="Password" name="password_member">
			  </div>
			  <div class="control-group">
				<label class="checkbox">
				<input type="checkbox"> Remember me
				</label>
			  </div>
			<input type="submit" class="btn btn-success" name="submit" value="Submit">
			<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
			</form>		
		  </div>
	</div>
	</li>
    </ul>
  </div>
</div>
</div>
</div>
<!-- Header End====================================================================== -->
<div id="carouselBlk">
	<div id="myCarousel" class="carousel slide">
		<div class="carousel-inner">
		  <div class="item active">
		  <div class="container">
			<a href="register.html"><img style="width:100%" src="<?php echo base_url('assets/images/carousel/5.png'); ?>" alt="special offers"/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
		  </div>
		  </div>
		  <div class="item">
		  <div class="container">
			<a href="register.html"><img style="width:100%" src="<?php echo base_url('assets/images/carousel/2.png'); ?>" alt=""/></a>
				<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
		  </div>
		  </div>
		  <div class="item">
		  <div class="container">
			<a href="register.html"><img src="<?php echo base_url('assets/images/carousel/3.png'); ?>" alt=""/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
			
		  </div>
		  </div>
		   <div class="item">
		   <div class="container">
			<a href="register.html"><img src="<?php echo base_url('assets/images/carousel/4.png'); ?>" alt=""/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
		   
		  </div>
		  </div>
		   
		  
		</div>
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
	  </div> 
</div>
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
	<div id="sidebar" class="span3">
		<ul id="sideManu" class="nav nav-tabs nav-stacked">
			<li class="subMenu open"><a> ELECTRONICS [230]</a>
				<ul>
				<li><a class="active" href="products.html"><i class="icon-chevron-right"></i>Cameras (100) </a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>Computers, Tablets & laptop (30)</a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>Mobile Phone (80)</a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>Sound & Vision (15)</a></li>
				</ul>
			</li>
			<li class="subMenu"><a> CLOTHES [840] </a>
			<ul style="display:none">
				<li><a href="products.html"><i class="icon-chevron-right"></i>Women's Clothing (45)</a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>Women's Shoes (8)</a></li>												
				<li><a href="products.html"><i class="icon-chevron-right"></i>Women's Hand Bags (5)</a></li>	
				<li><a href="products.html"><i class="icon-chevron-right"></i>Men's Clothings  (45)</a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>Men's Shoes (6)</a></li>												
				<li><a href="products.html"><i class="icon-chevron-right"></i>Kids Clothing (5)</a></li>												
				<li><a href="products.html"><i class="icon-chevron-right"></i>Kids Shoes (3)</a></li>												
			</ul>
			</li>
			<li class="subMenu"><a>FOOD AND BEVERAGES [1000]</a>
				<ul style="display:none">
				<li><a href="products.html"><i class="icon-chevron-right"></i>Angoves  (35)</a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>Bouchard Aine & Fils (8)</a></li>												
				<li><a href="products.html"><i class="icon-chevron-right"></i>French Rabbit (5)</a></li>	
				<li><a href="products.html"><i class="icon-chevron-right"></i>Louis Bernard  (45)</a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>BIB Wine (Bag in Box) (8)</a></li>												
				<li><a href="products.html"><i class="icon-chevron-right"></i>Other Liquors & Wine (5)</a></li>												
				<li><a href="products.html"><i class="icon-chevron-right"></i>Garden (3)</a></li>												
				<li><a href="products.html"><i class="icon-chevron-right"></i>Khao Shong (11)</a></li>												
			</ul>
			</li>
			<li><a href="products.html">HEALTH & BEAUTY [18]</a></li>
			<li><a href="products.html">SPORTS & LEISURE [58]</a></li>
			<li><a href="products.html">BOOKS & ENTERTAINMENTS [14]</a></li>
		</ul>
		<br/>
			<div class="thumbnail">
				<img src="<?php echo base_url('assets/images/payment_methods.png'); ?>" title="Juwitashop Payment Methods" alt="Payments Methods">
				<div class="caption">
				  <h5>Payment Methods</h5>
				</div>
			  </div>
	</div>
<!-- Sidebar end=============================================== -->
		<div class="span9">		
		<h4>New Products </h4>
			  <ul class="thumbnails">
				<li class="span3">
				  <div class="thumbnail">
					<a  href="product_details.html"><img src="<?php echo base_url('assets/images/products/6.jpg'); ?>" alt=""/></a>
					<div class="caption">
					  <h5>Product name</h5>
					  <p> 
						Lorem Ipsum is simply dummy text. 
					  </p>
					 
					  <h4 style="text-align:center"><a class="btn" href="product_details.html">view</a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a  href="product_details.html"><img src="<?php echo base_url('assets/images/products/7.jpg'); ?>" alt=""/></a>
					<div class="caption">
					  <h5>Product name</h5>
					  <p> 
						Lorem Ipsum is simply dummy text. 
					  </p>
					 <h4 style="text-align:center"><a class="btn" href="product_details.html">view</a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a  href="product_details.html"><img src="<?php echo base_url('assets/images/products/8.jpg'); ?>" alt=""/></a>
					<div class="caption">
					  <h5>Product name</h5>
					  <p> 
						Lorem Ipsum is simply dummy text. 
					  </p>
					   <h4 style="text-align:center"><a class="btn" href="product_details.html">view</a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a  href="product_details.html"><img src="<?php echo base_url('assets/images/products/9.jpg'); ?>" alt=""/></a>
					<div class="caption">
					  <h5>Product name</h5>
					  <p> 
						Lorem Ipsum is simply dummy text. 
					  </p>
					  <h4 style="text-align:center"><a class="btn" href="product_details.html">view</i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a  href="product_details.html"><img src="<?php echo base_url('assets/images/products/10.jpg'); ?>" alt=""/></a>
					<div class="caption">
					  <h5>Product name</h5>
					  <p> 
						Lorem Ipsum is simply dummy text. 
					  </p>
					  <h4 style="text-align:center"><a class="btn" href="product_details.html">view</a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a  href="product_details.html"><img src="<?php echo base_url('assets/images/products/11.jpg'); ?>" alt=""/></a>
					<div class="caption">
					  <h5>Product name</h5>
					  <p> 
						Lorem Ipsum is simply dummy text. 
					  </p>
					   <h4 style="text-align:center"><a class="btn" href="product_details.html">view</a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
					</div>
				  </div>
				</li>
			  </ul>	

		</div>
		</div>
	</div>
</div>
<!-- Footer ================================================================== -->
	<div  id="footerSection">
	<div class="container">
		<div class="row">
			<div class="span3">
				<h5>ACCOUNT</h5>
				<a href="login.html">YOUR ACCOUNT</a>
				<a href="login.html">PERSONAL INFORMATION</a> 
				<a href="login.html">ADDRESSES</a> 
				<a href="login.html">DISCOUNT</a>  
				<a href="login.html">ORDER HISTORY</a>
			 </div>
			<div class="span3">
				<h5>INFORMATION</h5>
				<a href="contact.html">CONTACT</a>  
				<a href="register.html">REGISTRATION</a>  
				<a href="legal_notice.html">LEGAL NOTICE</a>  
				<a href="tac.html">TERMS AND CONDITIONS</a> 
				<a href="faq.html">FAQ</a>
			 </div>
			<div class="span3">
				<h5>OUR OFFERS</h5>
				<a href="#">NEW PRODUCTS</a> 
				<a href="#">TOP SELLERS</a>  
				<a href="special_offer.html">SPECIAL OFFERS</a>  
				<a href="#">MANUFACTURERS</a> 
				<a href="#">SUPPLIERS</a> 
			 </div>
			<div id="socialMedia" class="span3 pull-right">
				<h5>SOCIAL MEDIA </h5>
				<a href="#"><img width="60" height="60" src="<?php echo base_url('assets/images/facebook.png'); ?>" title="facebook" alt="facebook"/></a>
				<a href="#"><img width="60" height="60" src="<?php echo base_url('assets/images/twitter.png'); ?>" title="twitter" alt="twitter"/></a>
				<a href="#"><img width="60" height="60" src="<?php echo base_url('assets/images/youtube.png'); ?>" title="youtube" alt="youtube"/></a>
			 </div> 
		 </div>
		<p class="pull-right">&copy; JuwitaShop</p>
	</div><!-- Container End -->
	</div>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<script src="<?php echo base_url('assets/js/jquery.js'); ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/js/google-code-prettify/prettify.js"></script>
	
	<script src="<?php echo base_url('assets/js/bootshop.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.lightbox-0.5.js'); ?>"></script>
	
	<!-- Themes switcher section ============================================================================================= -->
<div id="secectionBox">
<link rel="stylesheet" href="<?php echo base_url('assets/switch/themeswitch.css'); ?>" type="text/css" media="screen" />
<script src="<?php echo base_url('assets/switch/theamswitcher.js'); ?>" type="text/javascript" charset="utf-8"></script>
	<div id="themeContainer">
	<div id="hideme" class="themeTitle">Style Selector</div>
	<div class="themeName">Oregional Skin</div>
	<div class="images style">
	<a href="<?php echo base_url('assets/css/#'); ?>" name="bootshop"><img src="<?php echo base_url('assets/switch/images/clr/bootshop.png'); ?>" alt="bootstrap business templates" class="active"></a>
	<a href="<?php echo base_url('assets/css/#'); ?>" name="businessltd"><img src="<?php echo base_url('assets/switch/images/clr/businessltd.png'); ?>" alt="bootstrap business templates" class="active"></a>
	</div>
	<div class="themeName">Bootswatch Skins (11)</div>
	<div class="images style">
		<a href="<?php echo base_url('assets/css/#'); ?>" name="amelia" title="Amelia"><img src="<?php echo base_url('assets/switch/images/clr/amelia.png'); ?>" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url('assets/css/#'); ?>" name="superhero" title="Superhero"><img src="<?php echo base_url('assets/switch/images/clr/superhero.png'); ?>" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url('assets/css/#'); ?>" name="cyborg"><img src="<?php echo base_url('assets/switch/images/clr/cyborg.png'); ?>" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url('assets/css/#'); ?>" name="cerulean"><img src="<?php echo base_url('assets/switch/images/clr/cerulean.png'); ?>" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url('assets/css/#'); ?>" name="journal"><img src="<?php echo base_url('assets/switch/images/clr/journal.png'); ?>" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url('assets/css/#'); ?>" name="readable"><img src="<?php echo base_url('assets/switch/images/clr/readable.png'); ?>" alt="bootstrap business templates"></a>	
		<a href="<?php echo base_url('assets/css/#'); ?>" name="simplex"><img src="<?php echo base_url('assets/switch/images/clr/simplex.png'); ?>" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url('assets/css/#'); ?>" name="slate"><img src="<?php echo base_url('assets/switch/images/clr/slate.png'); ?>" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url('assets/css/#'); ?>" name="spacelab"><img src="<?php echo base_url('assets/switch/images/clr/spacelab.png'); ?>" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url('assets/css/#'); ?>" name="united"><img src="<?php echo base_url('assets/switch/images/clr/united.png'); ?>" alt="bootstrap business templates"></a>
		<p style="margin:0;line-height:normal;margin-left:-10px;display:none;"><small>These are just examples and you can build your own color scheme in the backend.</small></p>
	</div>
	<div class="themeName">Background Patterns </div>
	<div class="images patterns">
		<a href="<?php echo base_url('assets/css/#'); ?>" name="pattern1"><img src="<?php echo base_url('assets/switch/images/pattern/pattern1.png'); ?>" alt="bootstrap business templates" class="active"></a>
		<a href="<?php echo base_url('assets/css/#'); ?>" name="pattern2"><img src="<?php echo base_url('assets/switch/images/pattern/pattern2.png'); ?>" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url('assets/css/#'); ?>" name="pattern3"><img src="<?php echo base_url('assets/switch/images/pattern/pattern3.png'); ?>" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url('assets/css/#'); ?>" name="pattern4"><img src="<?php echo base_url('assets/switch/images/pattern/pattern4.png'); ?>" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url('assets/css/#'); ?>" name="pattern5"><img src="<?php echo base_url('assets/switch/images/pattern/pattern5.png'); ?>" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url('assets/css/#'); ?>" name="pattern6"><img src="<?php echo base_url('assets/switch/images/pattern/pattern6.png'); ?>" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url('assets/css/#'); ?>" name="pattern7"><img src="<?php echo base_url('assets/switch/images/pattern/pattern7.png'); ?>" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url('assets/css/#'); ?>" name="pattern8"><img src="<?php echo base_url('assets/switch/images/pattern/pattern8.png'); ?>" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url('assets/css/#'); ?>" name="pattern9"><img src="<?php echo base_url('assets/switch/images/pattern/pattern9.png'); ?>" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url('assets/css/#'); ?>" name="pattern10"><img src="<?php echo base_url('assets/switch/images/pattern/pattern10.png'); ?>" alt="bootstrap business templates"></a>
		
		<a href="<?php echo base_url('assets/css/#'); ?>" name="pattern11"><img src="<?php echo base_url('assets/switch/images/pattern/pattern11.png'); ?>" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url('assets/css/#'); ?>" name="pattern12"><img src="<?php echo base_url('assets/switch/images/pattern/pattern12.png'); ?>" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url('assets/css/#'); ?>" name="pattern13"><img src="<?php echo base_url('assets/switch/images/pattern/pattern13.png'); ?>" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url('assets/css/#'); ?>" name="pattern14"><img src="<?php echo base_url('assets/switch/images/pattern/pattern14.png'); ?>" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url('assets/css/#'); ?>" name="pattern15"><img src="<?php echo base_url('assets/switch/images/pattern/pattern15.png'); ?>" alt="bootstrap business templates"></a>
		
		<a href="<?php echo base_url('assets/css/#'); ?>" name="pattern16"><img src="<?php echo base_url('assets/switch/images/pattern/pattern16.png'); ?>" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url('assets/css/#'); ?>" name="pattern17"><img src="<?php echo base_url('assets/switch/images/pattern/pattern17.png'); ?>" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url('assets/css/#'); ?>" name="pattern18"><img src="<?php echo base_url('assets/switch/images/pattern/pattern18.png'); ?>" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url('assets/css/#'); ?>" name="pattern19"><img src="<?php echo base_url('assets/switch/images/pattern/pattern19.png'); ?>" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url('assets/css/#'); ?>" name="pattern20"><img src="<?php echo base_url('assets/switch/images/pattern/pattern20.png'); ?>" alt="bootstrap business templates"></a>
		 
	</div>
	</div>
</div>
<span id="themesBtn"></span>
</body>
</html>