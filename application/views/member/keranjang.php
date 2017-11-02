<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>JuwitaShop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	
<!-- Bootstrap style --> 
    <link id="callCss" rel="stylesheet" href="<?php echo base_url('assets/bootshop/bootstrap.min.css');?>" media="screen"/>
    <link href="<?php echo base_url('assets/css/base.css');?>" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive -->	
	<link href="<?php echo base_url('assets/css/bootstrap-responsive.min.css')?>" rel="stylesheet"/>
	<link href="<?php echo base_url('assets/css/font-awesome.css')?>" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->	
	<link href="<?php echo base_url('assets/js/google-code-prettify/prettify.css');?>" rel="stylesheet"/>
<!-- fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/ico/favicon.ico');?>">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url('assets/images/ico/apple-touch-icon-144-precomposed.png');?>">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url('assets/images/ico/apple-touch-icon-114-precomposed.png');?>">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url('assets/images/ico/apple-touch-icon-72-precomposed.png');?>">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url('assets/images/ico/apple-touch-icon-72-precomposed.png');?>">
	<style type="text/css" id="enject"></style>
  </head>
<body>
<div id="header">
<div class="container">
<div id="welcomeLine" class="row">
	<div class="span6">Welcome!<strong> User</strong></div>
	<div class="span6">
	<div class="pull-right">
		<a href="product_summary.html"><span class="">Fr</span></a>
		<a href="product_summary.html"><span class="">Es</span></a>
		<span class="btn btn-mini">En</span>
		<a href="product_summary.html"><span>&pound;</span></a>
		<span class="btn btn-mini">$155.00</span>
		<a href="product_summary.html"><span class="">$</span></a>
		<a href="product_summary.html"><span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i> [ 3 ] Itemes in your cart </span> </a> 
	</div>
	</div>
</div>
<!-- Navbar ================================================== -->
<div id="logoArea" class="navbar">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>
  <div class="navbar-inner">
    <a class="brand" href="index.html"><img src="<?php echo base_url('assets/images/logo1.png');?>" alt="Bootsshop"/></a>
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
	 <a href="#login" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-success">Login</span></a>
	</li>
    </ul>
  </div>
</div>
</div>
</div>
<!-- Header End====================================================================== -->
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
	<div id="sidebar" class="span3">
		<div class="well well-small"><a id="myCart" href="product_summary.html"><img src="<?php echo base_url('assets/images/ico-cart.png');?>" alt="cart">3 Items in your cart  <span class="badge badge-warning pull-right">$155.00</span></a></div>
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
			<img src="<?php echo base_url('assetss/images/products/panasonic.jpg');?>" alt="Bootshop panasonoc New camera"/>
			<div class="caption">
			  <h5>Panasonic</h5>
				<h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
			</div>
		  </div><br/>
			<div class="thumbnail">
				<img src="<?php echo base_url('assets/images/products/kindle.png');?>" title="Bootshop New Kindel" alt="Bootshop Kindel">
				<div class="caption">
				  <h5>Kindle</h5>
				    <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
				</div>
			  </div><br/>
			<div class="thumbnail">
				<img src="<?php echo base_url('assets/images/payment_methods.png');?>" title="Bootshop Payment Methods" alt="Payments Methods">
				<div class="caption">
				  <h5>Payment Methods</h5>
				</div>
			  </div>
	</div>
<!-- Sidebar end=============================================== -->
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.html">Home</a> <span class="divider">/</span></li>
		<li class="active"> SHOPPING CART</li>
    </ul>
	<h3>  SHOPPING CART [ <small>3 Item(s) </small>]<a href="products.html" class="btn btn-large pull-right"><i class="icon-arrow-left"></i> Continue Shopping </a></h3>	
	<hr class="soft"/>
			
			
	<table class="table table-bordered">
              <thead>
                <tr>
                  <th>Product</th>
                  <th>Description</th>
                  <th>Quantity/Update</th>
				  <th>Price</th>
                  <th>Discount</th>
                  <th>Tax</th>
                  <th>Total</th>
				</tr>
              </thead>
              <tbody>
                <tr>
                  <td> <img width="60" src="<?php echo base_url('assets/images/products/4.jpg');?>" alt=""/></td>
                  <td>MASSA AST<br/>Color : black, Material : metal</td>
				  <td>
					<div class="input-append"><input class="span1" style="max-width:34px" placeholder="1" id="appendedInputButtons" size="16" type="text"><button class="btn" type="button"><i class="icon-minus"></i></button><button class="btn" type="button"><i class="icon-plus"></i></button><button class="btn btn-danger" type="button"><i class="icon-remove icon-white"></i></button>				</div>
				  </td>
                  <td>$120.00</td>
                  <td>$25.00</td>
                  <td>$15.00</td>
                  <td>$110.00</td>
                </tr>
				<tr>
                  <td> <img width="60" src="<?php echo base_url('assets/images/products/8.jpg')?>" alt=""/></td>
                  <td>MASSA AST<br/>Color : black, Material : metal</td>
				  <td>
					<div class="input-append"><input class="span1" style="max-width:34px" placeholder="1"  size="16" type="text"><button class="btn" type="button"><i class="icon-minus"></i></button><button class="btn" type="button"><i class="icon-plus"></i></button><button class="btn btn-danger" type="button"><i class="icon-remove icon-white"></i></button>				</div>
				  </td>
                  <td>$7.00</td>
                  <td>--</td>
                  <td>$1.00</td>
                  <td>$8.00</td>
                </tr>
				<tr>
                  <td> <img width="60" src="<?php echo base_url('assets/images/products/3.jpg');?>" alt=""/></td>
                  <td>MASSA AST<br/>Color : black, Material : metal</td>
				  <td>
					<div class="input-append"><input class="span1" style="max-width:34px" placeholder="1"  size="16" type="text"><button class="btn" type="button"><i class="icon-minus"></i></button><button class="btn" type="button"><i class="icon-plus"></i></button><button class="btn btn-danger" type="button"><i class="icon-remove icon-white"></i></button>				</div>
				  </td>
                  <td>$120.00</td>
                  <td>$25.00</td>
                  <td>$15.00</td>
                  <td>$110.00</td>
                </tr>
				
                <tr>
                  <td colspan="6" style="text-align:right">Total Price:	</td>
                  <td> $228.00</td>
                </tr>
				 <tr>
                  <td colspan="6" style="text-align:right">Total Discount:	</td>
                  <td> $50.00</td>
                </tr>
                 <tr>
                  <td colspan="6" style="text-align:right">Total Tax:	</td>
                  <td> $31.00</td>
                </tr>
				 <tr>
                  <td colspan="6" style="text-align:right"><strong>TOTAL ($228 - $50 + $31) =</strong></td>
                  <td class="label label-important" style="display:block"> <strong> $155.00 </strong></td>
                </tr>
				</tbody>
            </table>
		
		
            <table class="table table-bordered">
			<tbody>
				 <tr>
                  <td> 
				<form class="form-horizontal">
				<div class="control-group">
				<label class="control-label"><strong> VOUCHERS CODE: </strong> </label>
				<div class="controls">
				<input type="text" class="input-medium" placeholder="CODE">
				<button type="submit" class="btn"> ADD </button>
				</div>
				</div>
				</form>
				</td>
                </tr>
				
			</tbody>
			</table>
			
			<table class="table table-bordered">
			 <tr><th>ESTIMATE YOUR SHIPPING </th></tr>
			 <tr> 
			 <td>
				<form class="form-horizontal">
				  <div class="control-group">
					<label class="control-label" for="inputCountry">Country </label>
					<div class="controls">
					  <input type="text" id="inputCountry" placeholder="Country">
					</div>
				  </div>
				  <div class="control-group">
					<label class="control-label" for="inputPost">Post Code/ Zipcode </label>
					<div class="controls">
					  <input type="text" id="inputPost" placeholder="Postcode">
					</div>
				  </div>
				  <div class="control-group">
					<div class="controls">
					  <button type="submit" class="btn">ESTIMATE </button>
					</div>
				  </div>
				</form>				  
			  </td>
			  </tr>
            </table>		
	<a href="products.html" class="btn btn-large"><i class="icon-arrow-left"></i> Continue Shopping </a>
	<a href="login.html" class="btn btn-large pull-right">Next <i class="icon-arrow-right"></i></a>
	
</div>
</div></div>
</div>
<!-- MainBody End ============================= -->
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
				<a href="#"><img width="60" height="60" src="<?php echo base_url('assets/images/facebook.png');?>" title="facebook" alt="facebook"/></a>
				<a href="#"><img width="60" height="60" src="<?php echo base_url('assets/images/twitter.png');?>" title="twitter" alt="twitter"/></a>
				<a href="#"><img width="60" height="60" src="<?php echo base_url('assets/images/youtube.png');?>" title="youtube" alt="youtube"/></a>
			 </div> 
		 </div>
		<p class="pull-right">&copy; Bootshop</p>
	</div><!-- Container End -->
	</div>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<script src="<?php echo base_url('assets/js/jquery.js');?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/js/google-code-prettify/prettify.js');?>"></script>
	
	<script src="<?php echo base_url('assets/js/bootshop.js');?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.lightbox-0.5.js');?>"></script>
	
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