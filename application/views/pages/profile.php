<hr>
<div class="row">
	<div class="user-dashboard">
		<div class="row">
			<div class="col-md-12">
			<div class="panel panel-default card">
				<div class="card-body app-heading">
					<div class="timeline-badge img-circle" >
						<img class="img-circle" src="<?php echo base_url();?>img/REGxSz.jpg">
					</div>
					<div class="app-title">
					  <div class="title"><h3><?php echo $user->fname;?></h3></div>
					  <div class="description">Barista - Coffee on the Road</div>
					</div>
					
				  </div>
			</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="row">
			  <div class="panel panel-default">
				<div class="panel-body">
					
						<div class="page-header">
						  <h1><?php echo $user->company;?></h1><p><small>Subtext for header</small></p>
						</div>
						
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
								Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
								when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</td>
						</p>	 
					
					
			  </div>
			 </div>
			 <section>
				<div class="row">
					<div class="page-header">
						  <h1>Personal Info</h1>
					</div>
					<div class="col-md-3">
						
					</div>
					<div class="col-md-4">
						<dl>
							<dt class="l3">	<strong>Name :</strong></dt>
							<dd class="p3"><?php echo $user->fname;?>&nbsp;<?php echo $user->lname;?></dd>
							<dt class="l3"><strong>Company :</strong></dt>
							<dd class="p3"><?php echo $user->company;?></dd>
							<dt class="l3"><strong>Email :</strong></dt>
							<dd class="p3"><?php echo $user->email;?></dd>
							<dt class="l3"><strong>Phone :</strong></dt>
							<dd class="p3"><?php echo $user->mobile;?></dd>
						</dl>
					</div>
					<div class="col-md-4 offset1">
						<dl>
							<dt class="l3">	<strong>Name :</strong></dt>
							<dd class="p3"><?php echo $user->fname;?>&nbsp;<?php echo $user->lname;?></dd>
							<dt class="l3"><strong>Company :</strong></dt>
							<dd class="p3"><?php echo $user->company;?></dd>
							<dt class="l3"><strong>Email :</strong></dt>
							<dd class="p3"><?php echo $user->email;?></dd>
							<dt class="l3"><strong>Phone :</strong></dt>
							<dd class="p3"><?php echo $user->mobile;?></dd>
						</dl>
					</div>
					</div>
			 </section>
				<div class="panel panel-default">
					<div class="panel-body">
					          		<h1>Personal Info</h1>
					          		<div class="hr-left"></div>

					          		<div class="btn-group">
									  	<button type="button" disabled="" class="btn btn-primary">Name</button>
									  	<button type="button" disabled="" class="btn btn-default"><?php echo $user->fname;?>&nbsp;<?php echo $user->lname;?></button>
									</div>
									<div class="btn-group">
									  	<button type="button" disabled="" class="btn btn-primary">Company</button>
									  	<button type="button" disabled="" class="btn btn-default"><?php echo $user->company;?></button>
									</div>
									<div class="btn-group">
									  	<button type="button" disabled="" class="btn btn-primary">email</button>
									  	<button type="button" disabled="" class="btn btn-default"><?php echo $user->email;?></button>
									</div>
									<div class="btn-group">
									  	<button type="button" disabled="" class="btn btn-primary">Address</button>
									  	<button type="button" disabled="" class="btn btn-default"><?php echo $user->company_address;?></button>
									</div>
									<div class="btn-group">
									  	<button type="button" disabled="" class="btn btn-primary">Phone</button>
									  	<button type="button" disabled="" class="btn btn-default"><?php echo $user->mobile;?></button>
									</div>
									
					</div>				
					
				</div>
				<div class="panel panel-default">
					<div class="panel-body">
					<div class="page-header">
						  <h3>Cart</h3><p><small>Subtext for header</small></p>
					</div>
					  <div class="media"> <div class="media-left"> <a href="#"> <img alt="64x64" class="media-object" data-src="holder.js/64x64" style="width: 64px; height: 64px;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTdlNTQ3ODNlMCB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1N2U1NDc4M2UwIj48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMi41IiB5PSIzNi44Ij42NHg2NDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true"> </a> </div> 
						<div class="media-body"> <h1 class="media-heading">Media heading</h1> 
						Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. 
						</div>
					  </div>
					   <div class="media"> <div class="media-left"> <a href="#"> <img alt="64x64" class="media-object" data-src="holder.js/64x64" style="width: 64px; height: 64px;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTdlNTQ3ODNlMCB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1N2U1NDc4M2UwIj48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMi41IiB5PSIzNi44Ij42NHg2NDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true"> </a> </div> 
						<div class="media-body"> <h1 class="media-heading">Media heading</h1> 
						Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. 
						</div>
					  </div>
					</div>  
				</div>
				<div class="panel panel-default">	
					<div class="panel-body">
						          	<h1>Work Experience</h1>
						          	<div class="hr-left"></div>
						          	<div class="work-experience">
						          		<h3>Web designer</h3>
						          		<small><i class="fa fa-calendar" data-original-title="" title=""></i> 2010 - 2014</small>
						          		<p>Duis aute irure dolor in reprehenderit in voluptate velit esse
						          		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						          		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						          	</div>
						          	<hr>
						          	<div class="work-experience">
						          		<h3>Graphic Designer</h3>
						          		<small><i class="fa fa-calendar" data-original-title="" title=""></i> 2010 - 2012</small>
						          		<p>Duis aute irure dolor in reprehenderit in voluptate velit esse
						          		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						          		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						          	</div>
						          	<hr>
						          	<div class="work-experience">
						          		<h3>Web Security</h3>
						          		<small><i class="fa fa-calendar" data-original-title="" title=""></i> 2008 - 2010</small>
						          		<p>Duis aute irure dolor in reprehenderit in voluptate velit esse
						          		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						          		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						          	</div>
									<hr>
					</div>          	
				</div>
				<div class="panel panel-default">
					<div class="panel-body">
					          		<div class="row" id="blog">
					          			<div class="col-md-7 col-sm-6 col-xs-12">
					          				<div class="blog-content">
					          					<h3><a href="#">Blog Post First</a></h3>
					          					<small><i class="fa fa-calendar" data-original-title="" title=""></i> <a href="#">16 Juni 2014</a> <i class="fa fa-user" data-original-title="" title=""></i> <a href="#">Admin</a> <i class="fa fa-comments" data-original-title="" title=""></i> <a href="#">20 Comments</a></small>
					          					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					          					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					          					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					          					consequat.</p>
					          				</div>
					          			</div>
					          			<div class="col-md-5 col-sm-6 col-xs-12">
					          				<img src="img/content/thumbnail.jpg" class="img-responsive">
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
											
											
											function init_map(){ var place = panglao;
												var myOptions = {zoom:15,center:place,mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(14.558737,121.00286249999999)});infowindow = new google.maps.InfoWindow({content:'<strong>Shop</strong><br>3472 florida st makati city<br> makati<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
					          			</div>
					          		</div>
					</div>					
				</div>
				<div class="panel panel-default" style="display:none;">
					<div class="panel-body">
					          		<h1>Contact Me</h1>
					          		<div class="hr-left"></div>
					          		<p>Excepteur sint occaecat cupidatat non
					          		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					          		<form>
					          			<div class="row">
					          				<div class="col-md-6">
					          					<div class="form-group">
					          						<input class="form-control input-lg" placeholder="Name..."> 
					          					</div>
					          					<div class="form-group">
					          						<input class="form-control input-lg" placeholder="E-mail...">
					          					</div>
					          					<div class="form-group">
					          						<input class="form-control input-lg" placeholder="Subject...">
					          					</div>
					          				</div>
					          				<div class="col-md-6">
					          					<div class="form-group">
					          						<textarea class="form-control input-lg" rows="7" placeholder="Messages..."></textarea>
					          					</div>
					          				</div>
					          			</div>
					          			<div class="form-group">
					          				<button class="btn btn-lg btn-primary btn-block">SEND</button>
					          			</div>
					          		</form>
					</div>				
				</div>
				
				</div>
				
			</div>
		</div>
    </div>
</div>