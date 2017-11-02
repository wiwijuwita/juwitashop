<?php 
    if(!isset($_SESSION['loggedin'])){
        redirect(site_url(''));
    }
 ?>
<div id="mainBody">
<div class="container">
    <hr class="soften">
    <h1>Visit us</h1>
    <hr class="soften"/>    
    <div class="row">
        <div class="span4">
        <h4>Contact Details</h4>
        <p> Subang,<br/> Jawa Barat, Indonesia
            <br/><br/>
            ﻿Tel 0823-1555-4361<br/>
            Fax 123-456-5679<br/>
            email : wijuwita@gmail.com<br/>
            web:JuwitaShop.com
        </p>        
        </div>
            
        <div class="span4">
        <h4>Opening Hours</h4>
            <h5> Monday - Friday</h5>
            <p>09:00am - 09:00pm<br/><br/></p>
            <h5>Saturday</h5>
            <p>09:00am - 07:00pm<br/><br/></p>
            <h5>Sunday</h5>
            <p>12:30pm - 06:00pm<br/><br/></p>
        </div>
        <div class="span4">
        
        </div>
    </div>
</div>
</div>
<!-- MainBody End ============================= -->
