<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="shortcut icon" type="image/png" href="<?= base_url();?>img/coffee.png"/>
	
	<title><?php echo $title; ?></title>

    <!-- Bootstrap -->
    <link href="<?= base_url();?>css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url();?>css/dashboard.css" rel="stylesheet">
	<link href="<?= base_url();?>css/custom.css" rel="stylesheet">
	<link href="<?= base_url();?>css/bootstrap-select.min.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script src="<?= base_url();?>js/jquery-3.1.1.js"></script>
    <script src="<?= base_url();?>js/bootstrap.min.js"></script>
	<script src="<?= base_url();?>js/bootstrap-select.js"></script> 
  </head>
  <body>
	<div class="container-fluid display-table">
		 <div class="row display-table-row">
					<div class="col-md-2 col-sm-1 display-table-cell v-align box" id="navigation">
						 <?php $this->load->view('templates/nav.php'); ?>
					</div>
					<div class="col-md-10 col-sm-11 display-table-cell v-align">
						<!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
						<div class="row">
						
										<div class="col-md-7">
											<nav class="navbar-default pull-left">
												<div class="navbar-header">
													<button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu" aria-expanded="false">
														<span class="sr-only">Toggle navigation</span>
														<span class="icon-bar"></span>
														<span class="icon-bar"></span>
														<span class="icon-bar"></span>
													</button>
												</div>
											</nav>
											
										</div>
										<div class="col-md-5">
											<div class="header-rightside">
												<ul class="list-inline header-top pull-right">
													<li class="hidden-xs"><a href="#" class="add-project" data-toggle="modal" data-target="#add_project"><i class="fa fa-user" aria-hidden="true"></i><?php echo $email ;?></a></li>
													<li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
													<li>
														<a href="#" class="icon-info">
															<i class="fa fa-bell" aria-hidden="true"></i>
															<span class="label label-primary">3</span>
														</a>
													</li>
													<li class="dropdown">
														<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><img src="<?php echo base_url();?>img/profilepic.jpg" alt="user">
															<b class="caret"></b></a>
														<ul class="dropdown-menu">
															<li>
																<div class="navbar-content">
																	<span>Mr. Barista</span>
																	<p class="text-muted small">
																		<?php echo $email; ?>
																	</p>
																	<div class="divider">
																	</div>
																	<a href="<?php echo base_url();?>Login/logout" class="view btn-sm active">Log out</a>
																</div>
															</li>
														</ul>
													</li>
												</ul>
											</div>
										</div>
										
						</div>
							<!-- start row-->	
						