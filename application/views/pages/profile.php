<hr>
<div class="row">
	<div class="user-dashboard">
		<div class="row">
			<div class="col-xs-4 col-md-3">
				<div class="panel panel-default ">
				  <div class="panel-body">
					<div class="page-header avatar-wrapper">
						<div class="avatar">
							<img alt="" src="<?php echo base_url();?>img/REGxSz.jpg">
						</div>
						<h1><?php echo $user->fname;?></h1>
						<div class="description">Barista - Coffee on the Road</div>
					</div>
					
                        <address>
							<strong><?php echo $user->company;?></strong><br>
								<p><?php echo $user->company_address;?></p>
							 <i class="glyphicon glyphicon-earphone"></i> <?php echo $user->mobile;?>
							<br />
                        
                            <i class="glyphicon glyphicon-envelope"></i> <?php echo $user->email;?>
                            <br />
                            <i class="glyphicon glyphicon-globe"></i> <a href="http://www.jquery2dotnet.com"> www.domain.com</a>
                            <br />
                            <i class="glyphicon glyphicon-gift"></i> June 02, 1988
						
						</address>
				  </div>
				</div>
			
			</div>
			<div class="col-xs-8 col-md-9 ">
				<div class="panel panel-default ">
				  <div class="panel-body">
						         	<div class="work-experience">
						          		<h3>Carts Pictures</h3>
						          		<p>Duis aute irure dolor in reprehenderit in voluptate velit esse
						          		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						          		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						          	</div>
						<div class="row">
						  <div class="col-xs-6 col-md-3">
							<div class="panel panel-default">
								<div class="panel-heading">Scooter type Barista</div>
									<div class="panel-body">
										<a href="#" class="thumbnail">
										  <img src="<?php echo base_url();?>img/REGxSz.jpg"  alt="...">
										</a>
										<div class="caption">
											<h3>Scooter Barista</h3>
											<p>Duis aute irure dolor in reprehenderit in voluptate velit esse
													cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt</p>
										</div>	
									</div>
							</div>		
						  </div>
						   <div class="col-xs-6 col-md-3">
							<div class="panel panel-default">
								<div class="panel-heading">Scooter type Barista</div>
									<div class="panel-body">
										<a href="#" class="thumbnail">
										  <img src="<?php echo base_url();?>img/REGxSz.jpg" width="100%" alt="...">
										</a>
										<div class="caption">
											<h3>Scooter Barista</h3>
											<p>Duis aute irure dolor in reprehenderit in voluptate velit esse
													cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt</p>
										</div>	
									</div>
							</div>		
						  </div>
						   <div class="col-xs-6 col-md-3">
							<div class="panel panel-default">
								<div class="panel-heading">Scooter type Barista</div>
									<div class="panel-body">
										<a href="#" class="thumbnail">
										  <img src="<?php echo base_url();?>img/REGxSz.jpg" width="100%" alt="...">
										</a>
										<div class="caption">
											<h3>Scooter Barista</h3>
											<p>Duis aute irure dolor in reprehenderit in voluptate velit esse
													cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt</p>
										</div>	
									</div>
							</div>		
						  </div>
						  <div class="col-xs-6 col-md-3">
							<div class="panel panel-default">
								<div class="panel-heading">Scooter type Barista</div>
									<div class="panel-body">
										<a href="#" class="thumbnail">
										  <img src="<?php echo base_url();?>img/REGxSz.jpg" width="100%" alt="...">
										</a>
										<div class="caption">
											<h3>Scooter Barista</h3>
											<p>Duis aute irure dolor in reprehenderit in voluptate velit esse
													cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt</p>
										</div>	
									</div>
							</div>		
						  </div>
						  
						</div>
					</div>
				</div>
				<div class="panel panel-default ">
				  <div class="panel-body">
						         	<div class="work-experience">
						          		<h3>Coffee Products</h3>
						          		<p>Duis aute irure dolor in reprehenderit in voluptate velit esse
						          		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						          		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						          	</div>
						<div class="row">
							<div class="col-xs-3 col-md-2">
								<div class="panel panel-default product-wrapper">
								
									<div class="panel-body">
										
										  <img class="img-responsive img-circle coffee-product" src="<?php echo base_url();?>img/REGxSz.jpg"  alt="...">
										
										<div class="caption" style="text-align:center;">
											<h3>Brewed Coffee</h3>
										</div>	
									</div>
							</div>	
							</div>
						</div>
					</div>	
				</div>
				<div class="panel panel-default">
					<div class="panel-body">
					          		<h1>Contact Info</h1>
					          		<div class="hr-left"></div>
					          		<div class="row" id="contact">
					          			<div class="col-md-6">
					          				<address>
											  	<strong><?php echo $user->company;?>, Inc.</strong><br>
											  	<p><?php echo $user->company_address;?></p>
											  	<abbr title="Phone">Mobile:</abbr><?php echo $user->mobile;?>
											</address>

											<address>
											  	<strong><?php echo $user->fname;?>&nbsp;<?php echo $user->lname;?> </strong><br>
											  	<a href="mailto:#"><?php echo $user->email;?></a>
											</address>
					          			</div>
					          			<div class="col-md-6">
					          				<p><?php echo $user->about_person;?></p>
					          			</div>
					          		</div>
					          		<div class="row">
					          			<div class="col-md-12">
										
					          				<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key= AIzaSyC4nA2IwFGsb2vIuL8u1RJXE81XUVd3_tE '>
											</script><div style='overflow:hidden;height:350px;width:100%;'>
											<div id='gmap_canvas' style='height:350px;width:100%;'></div>
											<style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div>
											<a href='https://embedmaps.net'>embedding google map</a> 
											<script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=1d6ae52143c4afc07d5d501dd66988fc3acb7513'></script>
											<script type='text/javascript'>
											
											
											function init_map(){ 
												var myOptions = {zoom:15,center:place,mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(14.558737,121.00286249999999)});infowindow = new google.maps.InfoWindow({content:'<strong>Shop</strong><br>3472 florida st makati city<br> makati<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
					          			</div>
					          		</div>
					</div>					
				</div>
			</div><!--right side -->

		</div>
	</div>	
	
</div>	
</div>