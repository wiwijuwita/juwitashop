<?php 
    if(!isset($_SESSION['loggedin'])){
        redirect(site_url(''));
    }
 ?>

 <div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
	<div id="sidebar" class="span3">
		<div class="well well-small"><a id="myCart" href="product_summary.html"><img src="<?php echo base_url('assets/images/ico-cart.png');?>" alt="cart">keranjang anda</div>
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
				<img src="<?php echo base_url('assets/images/payment_methods.png');?>" title="Bootshop Payment Methods" alt="Payments Methods">
				<div class="caption">
				  <h5>Payment Methods</h5>
				</div>
			  </div>
	</div>
<!-- Sidebar end=============================================== -->
	<div class="span9" id="mainCol">
    <ul class="breadcrumb">
		<li><a href="<?php echo site_url('MemberLogin/');?>">Home</a> <span class="divider">/</span></li>
		<li class="active">aspirasi</li>
    </ul>
	<h3>Aspirasi</h3>	
	<hr class="soft"/>
	<p>Kirim pesan untuk admin, tentang keluhan atau apa pun.</p>
        <form class="form-horizontal" action="<?php echo site_url('MemberLogin/inputKomentar');?>" method="post">
        <fieldset>
          <div class="control-group">
           
              <input type="hidden" name="id_member" value="<?php echo $_SESSION['id_member'];?>" />
           
          </div>
          <div class="control-group">
              <textarea rows="8" cols="50" id="textarea" class="input-xlarge" name="komentar" required></textarea>
           
          </div>

            <input class="btn btn-large" type="submit" name="submit" value="Send Pesan">

        </fieldset>
      </form>

      <hr class="soft"/>
      <h4>Pesan dan Balasannya</h4>
      	<?php 
      		foreach ($data as $key) {
      			echo "<p>Tanggal : ".$key['tgl_post']."<br/>";
      			echo "Komentar : <br/>";
      			echo $key['isi_komentar']."</p>";
      			echo "<p>Balasan : <br/></p>";
      			foreach ($data2 as $key2) {
      				if($key2['id_komentar']==$key['id_komentar']){
      					echo $key2['tgl_balas']." : ".$key2['isi_balasan']."</br>";
      				}
      			}
      	?>		
      	<hr class="soft"/>
      	<?php
      		}
      	 ?>
      
      </div>
      
</div></div>
</div>
<!-- MainBody End ============================= -->
