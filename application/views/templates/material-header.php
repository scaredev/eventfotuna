<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/materialize.min.css"  media="screen,projection"/>
	  <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/materialize.css"  media="screen,projection"/>
	    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/custom-material.css"  media="screen,projection"/>
	  <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/palette.css"  media="screen,projection"/>	

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
<body>
<header>
	<nav class="top-nav default-primary-color ">
        <div class="container center">
          <div class="nav-wrapper">
		  	  <a class="page-title active"><?php echo $title;?></a>
		  </div>
        </div>
    </nav>
	<div class="container">
		<a href="#" data-activates="slide-out" class="button-collapse top-nav full hide-on-large-only">
			<i class="material-icons">menu</i></a>
	</div>
	<ul id="slide-out" class="side-nav fixed">
		<li class="logo dark-primary-color">
			<div class="userView ">
			  <div class="background ">
				<!--img src=""-->
			  </div>
			  <a href="#!user" class="tooltipped" data-position="right" data-delay="50" data-tooltip="Logo" ><img class="circle" src="<?php echo base_url();?>img/binoculars.png"></a>
			  <a href="#!name"><span class="white-text name"><?php echo $user->company;?></span></a>
			  <a href="#!email"><span class="white-text email"><?php echo $user->email;?></span></a>
			</div>
		</li>
		<li class="  <?php if($title=="Profile"){echo "default-primary-color active ";}?>">
					<a href="<?=base_url();?>Event/materialprof"><i class="material-icons active">perm_identity</i>Profile</a></li>
		<li class=" <?php if($title=="Overview"){echo "default-primary-color active ";}?>">
					<a href="<?=base_url();?>Event/overview"><i class="material-icons active">description</i>Overview</a></li>
		<li class=" <?php if($title=="History"){echo "default-primary-color active ";}?>">
					<a href="<?=base_url();?>Event/history"><i class="material-icons active">subject</i>History</a></li>
		<li class="l  <?php if($title=="Calendarview"){echo "default-primary-color active ";}?>">
					<a href="<?=base_url();?>Event/calendarview"><i class="material-icons active">today</i>Calendar</a></li>
		<li class="  <?php if($title=="Cashier"){echo "default-primary-color active ";}?>">
					<a href="<?=base_url();?>Event/cashier"><i class="material-icons active">shopping_cart</i>Cashier</a></li>
		
		<li class="divider-color "><div class="divider"></div></li>
	   <li class="  <?php if($title=="Settings"){echo "default-primary-color active ";}?>">
					<a href="<?=base_url();?>Event/settings"><i class="material-icons active">settings</i>Settings</a></li>
		<li class=" <?php if($title=="Settings"){echo "default-primary-color active ";}?>">
					<a href="<?=base_url();?>Login/logout"><i class="material-icons active">exit_to_app</i>Logout</a></li>
	  </ul>

</header>


	