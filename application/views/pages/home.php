<body style="background-image: url(<?= base_url();?>img/coffeecar.jpg);">  
  
  <div class="content">
	
   <div class= "container list-container">
		<div class="row"> 
			<div id="mainNav" class="hidden-sm-down spacer"></div>
			<div class="col-md-7 text">
				<div class="jumbotron transparent">
					<h3>Title</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
				</div>
			</div>
			<div class="col-md-5">
			
			<div class="panel with-nav-tabs panel-default">
				
                <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1default" data-toggle="tab">Am a customer</a></li>
                            <li><a href="#tab2default" data-toggle="tab">Am a Barista</a></li>
                            
                        </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1default">
							<div class="form-bottom">
			                    <form id="order-form" role="form" action="event/order" method="post" class="registration-form">
								<div class="form-group input-group-lg">
								<label  for="inputHelpBlock">Party Type</label>
									<div class="row">
										  <div class="col-lg-6">
											<div class="input-group">
											  <span class="input-group-addon">
												<input name="eventtype" type="radio" aria-label="..." value="company">
											  </span>
										  <input type="text" class="form-control" aria-label="..." disabled value="Company">
											</div><!-- /input-group -->
										  </div><!-- /.col-lg-6 -->
										  <div class="col-lg-6">
											<div class="input-group">
											  <span class="input-group-addon">
												<input name="eventtype" type="radio" aria-label="..." value="private">
											  </span>
											  <input type="text" class="form-control" aria-label="..." disabled value="Private">
											</div><!-- /input-group -->
										  </div><!-- /.col-lg-6 -->
										</div><!-- /.row -->
								</div>			
			                        <div class="form-group input-group-lg">
										<label class="sr-only" for="event">Event</label>
			                        	
										  <select class="form-control" id="event" name="event" data-placeholder="Select Event..">
											<option>Bryllup</option>
											<option>Barnedab</option>
											<option>Komfirmation</option>
											<option>Konference</option>
											<option>Reception</option>
											<option>Unfirmation</option>
											<option>Fodselsdag</option>
											<option>Messe</option>
											<option>Other</option>
											<option>Promovering</option>
										  </select>
									
			                        </div>
									<div class="form-group input-group-lg">
			                        	<label class="sr-only" for="zip">Location</label>
			                        	<input type="text" name="zip" placeholder="Zip Code..." class="form-last-name form-control" id="form-last-name">
			                        </div>
									<button  type="button" data-toggle="modal" data-target="#squarespaceModal" class="btn btn-info btn-lg">Get 3 offers!</button>
									
									<!--div style=" padding-left: 15px;padding-top: 15px; font-size: 85%; float: right; font-size:85%">
										<a href="#" onclick="$('#loginbox').hide(); $('#signupbox').show()" style="padding:15px;">
                                            Log in
                                        </a>
                                            Don't have an account! 
                                        <a href="#" onclick="$('#loginbox').hide(); $('#signupbox').show()">
                                            Sign Up Here
                                        </a>
                                        </div -->
									
									
									
									<!-- line modal -->
									<div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
									  <div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><i class="glyphicon glyphicon-remove-circle"></i><span class="sr-only">Close</span></button>
												<h3 class="modal-title" id="lineModalLabel">Personal Information</h3>
											</div>
											<div class="modal-body">
												
												<!-- content goes here -->
												
												  <div class="form-group">
												  	<label for="inputname">Name</label>
													<input type="text" name="inputname" class="form-control" id="inputname" placeholder="Name">
												  </div><div class="form-group">
												  	<label for="inputemail">Email</label>
													<input type="text" name="inputemail" class="form-control" id="inputname" placeholder="Name">
												  </div>
												  <div class="form-group">
												  	<label for="tel">Tel</label>
													<input name="tel" type="text" class="form-control" id="tel" placeholder="Tel #">
												  </div>
												  
												  <div class="form-group">
													 <label for="date-time">Date and Time of Event</label>
													 <div class="input-append date form_datetime">
															<input id="date-time" name="date-time" class="form-control" type="text" value="" placeholder="Date and time of event">
															<span class="add-on"><i class="icon-th"></i></span>
														</div>
												  </div>	
												  <div class="form-group">
													<label for="participants">Participants</label>
													<input name="participants" type="text" class="form-control" id="participants" placeholder="Estimated # of Participants">
												  </div>
												  <div class="form-group">
													<label for="address">Address</label>
													<textarea name="address" class="form-control" id="address" placeholder="Address/Postal Code"></textarea>
												  </div>
												   <div class="form-group">
													<label for="agreement">Agreement</label>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
													<div class="checkbox">
														
														<label>
														 <input name="agreement" type="checkbox"><p> Check to agree </p>
														</label>
													  </div>
												  </div>
												  <button type="submit"  class="btn btn-success">Submit</button>
												  <button type="reset" class="btn btn-default"  role="button">Clear</button>
								</form>

											</div>
											<div class="modal-footer">
												<div class="btn-group btn-group-justified" role="group" aria-label="group button">
													<div class="button-group" role="group">
														<button type="button" class="btn btn-default" data-dismiss="modal" role="button">Close</button>
														
													</div>
													
												</div>
											</div>
										</div>
									  </div>
									</div>
								   
									<!-- end modal-->
									
		                    </div>
						</div>
                        <div class="tab-pane fade" id="tab2default">
							 <form id="loginform" action='<?php echo base_url('Login/validate_credentials');?>' method='post' class="form-horizontal" role="form">
                                    
								<div style="margin-bottom: 25px" class="input-group input-group-lg">
											<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
											<input id="login-username" type="text" class="form-control" name="email" value="" placeholder="email">                                        
										</div>
									
								<div style="margin-bottom: 25px" class="input-group input-group-lg">
											<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
											<input id="login-password" type="password" class="form-control" name="password" placeholder="password">
										</div>
										

									
								<div class="input-group">
										  <div class="checkbox">
											<label>
											  <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
											</label>
										  </div>
										</div>


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      <input id="btn-login" type="submit" class="btn btn-success" value="Login">
									  
							  
									 <a class="btn btn-primary" data-toggle="collapse" data-target="#tabs" aria-expanded="false" aria-controls="tablist">Register</a>
                                    </div>
									
								</div>
								</form>	
								<?php echo $this->session->flashdata('msg'); ?>
										<div class="collapse" id="tabs">
											<div class="well">
												<div role="tabpanel">
												<form method="POST" action="<?php echo base_url();?>Register/registration" id="reg-form">												
												  <div class="form-group">
												  	<label for="company">Company</label>
													<input type="text" class="form-control" id="company" name="company" placeholder="Company Name" minlength="2" required>
												  </div>
												  <div class="form-group">
												  	<label for="cart-type">CVR</label>
													<input type="text" class="form-control" id="cart-type" name="cart-type" placeholder="Cart Type">
												  </div>
												  <div class="form-group">
													<label for="mobile">Mobile numbers</label>
													<input type="text" class="form-control" id="mobile" name="mobile" placeholder="+60 (038)XNNN-NNNN">
												  </div>
												  <div class="form-group">
													<label for="email">Email Address</label>
													<input type="email" class="form-control" id="email" name="email" placeholder="you@mailserver.domain" email required>
												  </div>
												 <div class="form-group">
													<label for="password">Password</label>
													<input type="password" class="form-control" id="password" name="password" placeholder="password" minlength="8" required>
												  </div>
												   <div class="form-group">
													<label for="password2">Confirm Password</label>
													<input type="password" class="form-control" id="password2" name="password2" placeholder="password">
												  </div>
												  <button type="submit" class="btn btn-success">Submit</button>
												  <button type="reset" class="btn">Cancel</button>
												</form>
												</div>
											</div>
										</div>	

                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%">
                                            Create an account..
                                            Its Free!                                       
                                        </div>
                                    </div>
                                </div>    
                            
						</div>
                       
                    </div>
                </div>
            </div>
				
			</div>	
			
        </div>
	</div>
 </div>
   