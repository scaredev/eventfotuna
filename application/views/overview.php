<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="shortcut icon" type="image/png" href="img/coffee.png"/>
	
	<title>Order History</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/dashboard.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">
	<link href="css/bootstrap-select.min.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script src="js/jquery-3.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-select.js"></script> 
  </head>
  <body>
	<div class="container-fluid display-table">
		 <div class="row display-table-row">
					<div class="col-md-2 col-sm-1 display-table-cell v-align box" id="navigation">
						<div class="logo">
							<a href="http://event.design4web.dk/"><img src="img/profilepic.jpg" alt="..." class="img-circle img-fluid hidden-xs hidden-sm">
							</a>
						</div>
						<div class="navi">
							<ul>
								<li class=""><a href="http://event.design4web.dk/"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>	
								<li ><a href=""><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">History</span></a></li>
								<li><a href="updateprofile.html"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Profile</span></a></li>								
								<li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Calendar</span></a></li>
								<li class="active"><a href="overview.html"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Orders</span></a></li>
								<li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Setting</span></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-10 col-sm-11 display-table-cell v-align">
						<!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
						<div class="row">
									<header>
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
													<li class="hidden-xs"><a href="#" class="add-project" data-toggle="modal" data-target="#add_project">Manual Orders</a></li>
													<li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
													<li>
														<a href="#" class="icon-info">
															<i class="fa fa-bell" aria-hidden="true"></i>
															<span class="label label-primary">3</span>
														</a>
													</li>
													<li class="dropdown">
														<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><img src="img/profilepic.jpg" alt="user">
															<b class="caret"></b></a>
														<ul class="dropdown-menu">
															<li>
																<div class="navbar-content">
																	<span>Mr. Barista</span>
																	<p class="text-muted small">
																		ca@design4web.ph
																	</p>
																	<div class="divider">
																	</div>
																	<a href="#" class="view btn-sm active">View Profile</a>
																</div>
															</li>
														</ul>
													</li>
												</ul>
											</div>
										</div>
									</header>
								</div>
						<div class="row">
							<div class="user-dashboard">
							
							<form class="form-inline pull-xm-right">
							<div class="form-group">
							   <label for="exampleInputName2"><strong>Transaction History</strong></label>
							   
								<input class="form-control" type="text" placeholder="Search">
							   </div>	
								<button class="btn btn-outline-success" type="submit">Search</button>
							
							</form>
							<hr>
						<div class="table-responsive">
								<table class="table table-hover">
								  <thead>
									<tr>
									  <th>#</th>
									  <th>Header</th>
									  <th>Header</th>
									  <th>Header</th>
									  <th>Header</th>
									</tr>
								  </thead>
								  <tbody>
									<tr class="">
									  <td><img src="img/profilepic.jpg" alt="..." class="img-circle img-fluid"></td>
									  <td>Lorem</td>
									  <td>ipsum</td>
									 <td><button class="btn btn-info" type="button">Bid<span class="badge">1 bids</span></button></td>
									  <td><a class="btn btn-default" href="#" role="button">Link</a> <button type="button" class="btn btn-success">Success</button></td>
									</tr>
									<tr class="warning">
									  <td><span class="intial-avatar" aria-hidden="true">C</span></td>
									  <td>amet</td>
									  <td>consectetur</td>
									 <td><button class="btn btn-info" type="button">Bid<span class="badge">1 bids</span></button></td>
									  <td><a class="btn btn-default" href="#" role="button">Link</a></td>
									</tr>
									<tr class="warning">
									  <td><span class="intial-avatar" aria-hidden="true">C</span></td>
									  <td>amet</td>
									  <td>consectetur</td>
									 <td><button class="btn btn-info" type="button">Bid<span class="badge">1 bids</span></button></td>
									  <td><a class="btn btn-default" href="#" role="button">Link</a></td>
									</tr>
									<tr class="active">
									  <td><span class="intial-avatar" aria-hidden="true">C</span></td>
									  <td>amet</td>
									  <td>consectetur</td>
									 <td><button class="btn btn-info" type="button">Bid<span class="badge">1 bids</span></button></td>
									  <td><a class="btn btn-default" href="#" role="button">Link</a></td>
									</tr>
									<tr class="warning">
									  <td><span class="intial-avatar" aria-hidden="true">C</span></td>
									  <td>amet</td>
									  <td>consectetur</td>
									 <td><button class="btn btn-info" type="button">Bid<span class="badge">1 bids</span></button></td>
									  <td><a class="btn btn-default" href="#" role="button">Link</a></td>
									</tr>
									<tr class="succes">
									  <td><span class="intial-avatar" aria-hidden="true">C</span></td>
									  <td>amet</td>
									  <td>consectetur</td>
									 <td><button class="btn btn-info" type="button">Bid<span class="badge">1 bids</span></button></td>
									  <td><a class="btn btn-default" href="#" role="button">Link</a></td>
									</tr>
									<tr class="danger">
									  <td><span class="intial-avatar" aria-hidden="true">C</span></td>
									  <td>amet</td>
									  <td>consectetur</td>
									 <td><button class="btn btn-info" type="button">Bid<span class="badge">1 bids</span></button></td>
									  <td><a class="btn btn-default" href="#" role="button">Link</a></td>
									</tr>
									<tr class="danger">
									  <td><span class="intial-avatar" aria-hidden="true">C</span></td>
									  <td>amet</td>
									  <td>consectetur</td>
									 <td><button class="btn btn-info" type="button">Bid<span class="badge">1 bids</span></button></td>
									  <td><a class="btn btn-default" href="#" role="button">Link</a></td>
									</tr>
									<tr class="">
									  <td><span class="intial-avatar" aria-hidden="true">C</span></td>
									  <td>amet</td>
									  <td>consectetur</td>
									 <td><button class="btn btn-info" type="button">Bid<span class="badge">1 bids</span></button></td>
									  <td><a class="btn btn-default" href="#" role="button">Link</a></td>
									</tr>
									<tr class="">
									  <td><span class="intial-avatar" aria-hidden="true">C</span></td>
									  <td>amet</td>
									  <td>consectetur</td>
									 <td><button class="btn btn-info" type="button">Bid<span class="badge">1 bids</span></button></td>
									  <td><a class="btn btn-default" href="#" role="button">Link</a></td>
									</tr>
									
								  </tbody>
								</table>
								<div class="container">
									<div class="row">
									<nav aria-label="...">
									  <ul class="pager">
										<li><a href="#">Previous</a></li>
										<li><a href="#">Next</a></li>
									  </ul>
									</nav>
									</div>
								</div>
							</div>
						</div>	

					
					</div>
					</div>
				</div>
    </div>
	<script type="text/javascript">
	$(document).ready(function(){
   $('[data-toggle="offcanvas"]').click(function(){
       $("#navigation").toggleClass("hidden-xs");
		});});

	</script>
  </body>
</html> 