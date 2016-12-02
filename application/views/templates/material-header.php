<!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="shortcut icon" type="image/png" href="<?= base_url();?>img/coffee.png"/>
	
	<title><?php echo $title; ?></title>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      
	  <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/materialize.css"  media="screen,projection"/>
	  <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/custom1.css"  media="screen,projection"/>
	  <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/palette.css"  media="screen,projection"/>	
		<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/style.css"  media="screen,projection"/>	

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
<body>
<header>
 
  <nav>
    <div class="nav-wrapper dark-primary-color">
      <a href="<?php echo base_url();?>login/parallax" class="brand-logo">Logo</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
	  
      <ul class="right hide-on-med-and-down ">
        <li><a href="sass.html">About Us</a></li>
        <li><a href="<?php echo base_url();?>Register/registration2" class="modal-trigger" >Register</a></li>
        <li><a href="<?php echo base_url();?>login/loginform">Log In</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
		<li> <a href="<?php echo base_url();?>login/parallax">Event fortuna</a></li>
        <li><a href="sass.html">About Us</a></li>
        <li><a href="<?php echo base_url();?>Register/registration2" class="modal-trigger" >Register</a></li>
        <li><a href="<?php echo base_url();?>login/loginform">Log In</a></li>
      </ul>
    </div>
  </nav>
          
        
	
</header>


	